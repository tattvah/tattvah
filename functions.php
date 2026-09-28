<?php
// Disable WordPress Emojis
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

// Disable WordPress Embeds and unused link tags
remove_action('wp_head', 'wp_oembed_add_discovery_links');
remove_action('wp_head', 'wp_oembed_add_host_js');
remove_action('wp_head', 'rest_output_link_wp_head');
remove_action('wp_head', 'rel_canonical');
remove_action('wp_head', 'wp_shortlink_wp_head', 10);
remove_action('wp_head', 'rel_shortlink');

// Disable Dashicons
function remove_dashicons_styles()
{
    wp_deregister_style('dashicons');
}
add_action('wp_print_styles', 'remove_dashicons_styles', 100);

add_theme_support('title-tag');

add_theme_support('post-thumbnails', array('blog'));
add_theme_support('post-thumbnails', array('pr-news'));
add_theme_support('post-thumbnails', array('success-stories'));
add_theme_support('post-thumbnails', array('case-study'));
add_theme_support('post-thumbnails', array('career-story'));
add_theme_support('post-thumbnails', array('webinar'));
add_theme_support('post-thumbnails', array('post'));
add_theme_support('post-thumbnails', array('page'));
add_theme_support('post-thumbnails', array('career'));

add_post_type_support('blog', array(
    'excerpt'
));

// Remove Wordpress Styles
add_action(
    'wp_enqueue_scripts',
    function () {
        wp_dequeue_style('classic-theme-styles');
        wp_dequeue_style('global-styles');
        wp_dequeue_style('wp-block-library');
    },
    20
);

// Remove RSD link
remove_action('wp_head', 'rsd_link');

// Remove wordpress generator, robot meta tag
remove_action('wp_head', 'wp_generator');
remove_filter('wp_robots', 'wp_robots_max_image_preview_large');

// Block endpoints for public users only on wp-json requests
function allow_specific_rest_api_endpoints($endpoints)
{

    // 1. Do NOT block REST API for logged-in users / administrators
    if (is_user_logged_in()) {
        return $endpoints;
    }

    // Check if the request is for the REST API
    if (strpos($_SERVER['REQUEST_URI'], '/wp-json/') !== false) {
        // Allowed endpoints (Add the ones you want to keep)
        $allowed_endpoints = [
            '/wp/v2/posts',
            '/wp/v2/tags',
            '/wp/v2/blog',
            '/wp/v2/pages',
            '/wp/v2/newsletter',
            '/wp/v2/tattvah-show',
            '/yoast/v1',
            '/simple-history/v1',
        ];
        // Loop through all registered endpoints
        foreach ($endpoints as $route => $handlers) {
            $route_match = false;
            // Check if the route starts with one of the allowed endpoints
            foreach ($allowed_endpoints as $allowed) {
                if (strpos($route, $allowed) === 0) {
                    $route_match = true;
                    break;
                }
            }
            // If the route does not match any allowed endpoint, unset it
            if (!$route_match) {
                unset($endpoints[$route]);
            }
        }
    }
    return $endpoints;
}
add_filter('rest_endpoints', 'allow_specific_rest_api_endpoints');

function add_cors_http_header()
{
    header("Access-Control-Allow-Origin: *");
}
add_action('init', 'add_cors_http_header');
//View Count Section
function increase_post_views($post_id)
{
    // Fetch current view count
    $views = get_post_meta($post_id, 'view_count', true);

    // Debug: Log the current view count
    error_log("Current views: " . $views);

    // If no view count exists, start from 0
    if (!$views) {
        $views = 0;
    }

    // Increment view count
    $views++;

    // Update the view count in the database
    $updated = update_post_meta($post_id, 'view_count', $views);

    // Debug: Log if update was successful
    if ($updated) {
        error_log("Views updated to: " . $views);
    } else {
        error_log("Failed to update views for post ID: " . $post_id);
    }
}

function track_post_views()
{
    if (is_single()) {
        $post_id = get_the_ID();

        // Ensure we don't count views for logged-in administrators
        if (!current_user_can('edit_posts')) {
            increase_post_views($post_id);
        }
    }
}
// Hook into wp to ensure it runs on single post pages
// Register Post Types and Taxonomies
function tattvah_register_cpts_and_taxonomies() {
    // Product Tag Taxonomy
    if (!taxonomy_exists('product-tag')) {
        register_taxonomy('product-tag', ['product'], [
            'labels' => [
                'name' => 'Product Tags',
                'singular_name' => 'Product Tag',
                'search_items' => 'Search Product Tags',
                'all_items' => 'All Product Tags',
                'edit_item' => 'Edit Product Tag',
                'update_item' => 'Update Product Tag',
                'add_new_item' => 'Add New Product Tag',
                'new_item_name' => 'New Product Tag Name',
                'menu_name' => 'Product Tags',
            ],
            'public' => true,
            'hierarchical' => false,
            'show_ui' => true,
            'show_in_menu' => true,
            'show_admin_column' => true,
            'rewrite' => ['slug' => 'product-tag', 'with_front' => true],
        ]);
    }

    // Product CPT
    if (!post_type_exists('product')) {
        register_post_type('product', [
            'labels' => [
                'name' => 'Products',
                'singular_name' => 'Product',
                'add_new' => 'Add New',
                'add_new_item' => 'Add New Product',
                'edit_item' => 'Edit Product',
                'all_items' => 'All Products',
            ],
            'public' => true,
            'has_archive' => 'products',
            'rewrite' => ['slug' => 'product', 'with_front' => true],
            'supports' => ['title', 'editor', 'thumbnail', 'custom-fields', 'excerpt'],
            'taxonomies' => ['product-tag'],
            'menu_icon' => 'dashicons-tag',
        ]);
    }

    // Order CPT
    if (!post_type_exists('order')) {
        register_post_type('order', [
            'labels' => [
                'name' => 'Orders',
                'singular_name' => 'Order'
            ],
            'public' => false,
            'show_ui' => true,
            'show_in_menu' => true,
            'supports' => ['title', 'custom-fields'],
            'menu_icon' => 'dashicons-cart'
        ]);
    }
}
add_action('init', 'tattvah_register_cpts_and_taxonomies');

// Handle Place Order AJAX
add_action('wp_ajax_place_order', 'tattvah_handle_place_order');
add_action('wp_ajax_nopriv_place_order', 'tattvah_handle_place_order');

function tattvah_handle_place_order() {
    $name = sanitize_text_field($_POST['billing_name']);
    $email = sanitize_email($_POST['billing_email']);
    $phone = sanitize_text_field($_POST['billing_phone']);
    $address = sanitize_textarea_field($_POST['billing_address']);
    $payment_method = sanitize_text_field($_POST['payment_method'] ?? 'cod');
    $cart = isset($_POST['cart']) ? json_decode(stripslashes($_POST['cart']), true) : [];
    
    if (empty($name) || empty($phone) || empty($cart)) {
        wp_send_json_error(['message' => 'Invalid data. Please fill required fields.']);
    }

    $total = 0;
    $order_items = '';
    foreach ($cart as $item) {
        $total += (floatval($item['price']) * intval($item['quantity']));
        $order_items .= $item['title'] . ' (x' . $item['quantity'] . ') - Rs. ' . ($item['price'] * $item['quantity']) . "\n";
    }

    $post_id = wp_insert_post([
        'post_title' => 'Order by ' . $name . ' (' . current_time('mysql') . ')',
        'post_type' => 'order',
        'post_status' => 'publish'
    ]);

    if ($post_id) {
        update_post_meta($post_id, 'billing_name', $name);
        update_post_meta($post_id, 'billing_email', $email);
        update_post_meta($post_id, 'billing_phone', $phone);
        update_post_meta($post_id, 'billing_address', $address);
        
        $shipping_address = sanitize_textarea_field($_POST['shipping_address'] ?? '');
        $order_notes = sanitize_textarea_field($_POST['order_notes'] ?? '');
        
        if (!empty($shipping_address)) {
            update_post_meta($post_id, 'shipping_address', $shipping_address);
        }
        if (!empty($order_notes)) {
            update_post_meta($post_id, 'order_notes', $order_notes);
        }

        update_post_meta($post_id, 'payment_method', $payment_method);
        update_post_meta($post_id, 'order_items', $order_items);
        update_post_meta($post_id, 'order_total', $total);
        wp_send_json_success(['message' => 'Order placed successfully!', 'order_id' => $post_id]);
    } else {
        wp_send_json_error(['message' => 'Failed to create order.']);
    }
}
?>
