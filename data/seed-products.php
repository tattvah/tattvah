<?php
/**
 * Tattvah Products Automated Seeder
 * 
 * Usage:
 * Open this file in your browser:
 * http://your-local-site.local/wp-content/themes/tattvah/data/seed-products.php
 * 
 * Or run via WP-CLI / Terminal:
 * php seed-products.php
 */

// Locate wp-load.php
$wp_load_path = dirname(__FILE__) . '/../../../../wp-load.php';
if (!file_exists($wp_load_path)) {
    die("Error: wp-load.php not found at $wp_load_path");
}
require_once $wp_load_path;

// Make sure product CPT and product-tag taxonomy exist
if (!taxonomy_exists('product-tag')) {
    register_taxonomy('product-tag', ['product'], [
        'labels' => ['name' => 'Product Tags', 'singular_name' => 'Product Tag'],
        'public' => true,
        'hierarchical' => false,
        'rewrite' => ['slug' => 'product-tag', 'with_front' => true],
    ]);
}

if (!post_type_exists('product')) {
    register_post_type('product', [
        'labels' => ['name' => 'Products', 'singular_name' => 'Product'],
        'public' => true,
        'has_archive' => 'products',
        'rewrite' => ['slug' => 'product', 'with_front' => true],
        'supports' => ['title', 'editor', 'thumbnail', 'custom-fields', 'excerpt'],
        'taxonomies' => ['product-tag'],
    ]);
}

$json_file = dirname(__FILE__) . '/products.json';
if (!file_exists($json_file)) {
    die("Error: products.json not found in " . dirname(__FILE__));
}

$products = json_decode(file_get_contents($json_file), true);
if (!is_array($products)) {
    die("Error: Invalid JSON format in products.json");
}

$results = [];

foreach ($products as $p) {
    $title = $p['title'];
    $slug = sanitize_title($p['slug'] ?? $title);
    $content = $p['content'] ?? '';
    $tags = $p['tags'] ?? [];
    $acf = $p['acf'] ?? [];

    // Check if post already exists by title
    $existing = get_page_by_title($title, OBJECT, 'product');
    $post_id = $existing ? $existing->ID : 0;

    if ($post_id) {
        wp_update_post([
            'ID' => $post_id,
            'post_title' => $title,
            'post_name' => $slug,
            'post_content' => $content,
            'post_status' => 'publish',
        ]);
        $status = "Updated (ID: $post_id)";
    } else {
        $post_id = wp_insert_post([
            'post_title' => $title,
            'post_name' => $slug,
            'post_content' => $content,
            'post_type' => 'product',
            'post_status' => 'publish',
        ]);
        $status = "Created (ID: $post_id)";
    }

    if ($post_id && !is_wp_error($post_id)) {
        // Set tags
        if (!empty($tags)) {
            wp_set_object_terms($post_id, $tags, 'product-tag');
        }

        // Set ACF and meta fields
        foreach ($acf as $key => $val) {
            if ($val !== null && $val !== '') {
                update_post_meta($post_id, $key, $val);
            }
        }

        $results[] = [
            'title' => $title,
            'status' => $status,
            'price' => $acf['selling_price'] ?? 'N/A'
        ];
    }
}

// Display report
if (php_sapi_name() === 'cli') {
    echo "=================================================\n";
    echo "  Tattvah Products Seed Completed Successfully! \n";
    echo "=================================================\n";
    foreach ($results as $r) {
        echo "- " . $r['title'] . " => " . $r['status'] . "\n";
    }
    echo "Total: " . count($results) . " products processed.\n";
} else {
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Tattvah Products Seeder</title>
        <style>
            body { font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif; background: #fbf7f4; padding: 40px; color: #333; }
            .container { max-width: 800px; margin: 0 auto; background: #fff; border-radius: 12px; padding: 30px; box-shadow: 0 4px 20px rgba(0,0,0,0.08); }
            h1 { color: #490000; font-family: 'Lora', Georgia, serif; margin-top: 0; }
            .success-banner { background: #e8f5e9; color: #2e7d32; padding: 15px; border-radius: 8px; font-weight: 600; margin-bottom: 20px; }
            table { width: 100%; border-collapse: collapse; margin-top: 20px; }
            th, td { padding: 12px 15px; text-align: left; border-bottom: 1px solid #eee; }
            th { background: #fdf8f4; color: #490000; font-weight: 600; }
            .badge { display: inline-block; padding: 4px 8px; border-radius: 4px; font-size: 12px; font-weight: 600; background: #e0f2fe; color: #0369a1; }
            .btn { display: inline-block; margin-top: 25px; padding: 12px 24px; background: #490000; color: #fff; text-decoration: none; border-radius: 6px; font-weight: 600; }
            .btn:hover { background: #C89A3B; }
        </style>
    </head>
    <body>
        <div class="container">
            <h1>🌿 Tattvah Product Catalog Seeder</h1>
            <div class="success-banner">
                ✓ Successfully synced <?php echo count($results); ?> products into your WordPress database!
            </div>
            <table>
                <thead>
                    <tr>
                        <th>Product Title</th>
                        <th>Price (Rs.)</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($results as $r): ?>
                        <tr>
                            <td><strong><?php echo esc_html($r['title']); ?></strong></td>
                            <td>Rs. <?php echo esc_html($r['price']); ?></td>
                            <td><span class="badge"><?php echo esc_html($r['status']); ?></span></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <a href="/products/" class="btn">View Products Catalog &rarr;</a>
        </div>
    </body>
    </html>
    <?php
}
