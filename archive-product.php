<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href='/wp-content/themes/tattvah/build/products/products.css?v5'>
    <script type="module" defer src='/wp-content/themes/tattvah/build/products/products.bundle.js?v5'></script>

    <?php
    $homeUrl = get_home_url();
    get_header();

    // Get taxonomies for product
    $taxonomies = get_object_taxonomies('product', 'objects');
    ?>

    <main class="products-archive-main">
        <div class="products-header" data-aos="fade-up">
            <?php if (is_tax()): ?>
                <h1 class="tax-title"><?php single_term_title(); ?></h1>
            <?php else: ?>
                <h1>Our Products</h1>
            <?php endif; ?>
            <div class="header-divider"></div>
        </div>

        <div class="products-container">
            <!-- Sidebar -->
            <aside class="products-sidebar" data-aos="fade-right">
                <div class="filter-widget" style="margin-bottom: 2rem;">
                    <h3 class="filter-title">Sort By</h3>
                    <div class="sort-form">
                        <select id="js-sort-dropdown">
                            <option value="date">Newest First</option>
                            <option value="price_low">Price: Low to High</option>
                            <option value="price_high">Price: High to Low</option>
                            <option value="title_asc">Name: A-Z</option>
                        </select>
                    </div>
                </div>

                <?php foreach ($taxonomies as $tax_slug => $tax):
                    $terms = get_terms([
                        'taxonomy' => $tax_slug,
                        'hide_empty' => false,
                    ]);
                    if (!empty($terms) && !is_wp_error($terms)):
                        ?>
                        <div class="filter-widget">
                            <h3 class="filter-title"><?php echo esc_html($tax->label); ?></h3>
                            <ul class="filter-list">
                                <?php foreach ($terms as $term): ?>
                                    <li>
                                        <label class="custom-checkbox-label">
                                            <input type="checkbox" class="js-tag-filter"
                                                value="<?php echo esc_attr($term->slug); ?>">
                                            <?php echo esc_html($term->name); ?> <span
                                                class="count">(<?php echo $term->count; ?>)</span>
                                        </label>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    <?php endif; endforeach; ?>
            </aside>

            <!-- Products Grid -->
            <div class="products-grid-wrapper">
                <?php if (have_posts()): ?>
                    <div class="products-grid">
                        <?php while (have_posts()):
                            the_post();
                            $selling_price = get_field('selling_price', get_the_ID());
                            $regular_price = get_field('regular_price', get_the_ID());
                            $gallery_img_1 = get_field('gallery_image_1', get_the_ID());

                            $price_num = $selling_price ? floatval($selling_price) : 0;
                            $post_date = get_the_date('Y-m-d H:i:s');

                            $term_slugs = [];
                            $post_type = get_post_type(get_the_ID());
                            $tax_names = get_object_taxonomies($post_type, 'names');
                            foreach ($tax_names as $tx_name) {
                                $terms = get_the_terms(get_the_ID(), $tx_name);
                                if (!empty($terms) && !is_wp_error($terms)) {
                                    foreach ($terms as $t) {
                                        $term_slugs[] = $t->slug;
                                    }
                                }
                            }
                            $tags_str = implode(',', $term_slugs);
                            ?>
                            <div class="product-card" data-aos="fade-up" data-price="<?php echo esc_attr($price_num); ?>"
                                data-title="<?php echo esc_attr(strtolower(get_the_title())); ?>"
                                data-date="<?php echo esc_attr($post_date); ?>" data-tags="<?php echo esc_attr($tags_str); ?>">
                                <a href="<?php the_permalink(); ?>" class="product-img-wrapper">
                                    <?php if ($gallery_img_1): ?>
                                        <img src="<?php echo esc_url($gallery_img_1); ?>" alt="<?php the_title_attribute(); ?>">
                                    <?php endif; ?>
                                </a>
                                <div class="product-info">
                                    <div class="product-rating">★★★★★</div>
                                    <h3 class="product-title">
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h3>
                                    <div class="price-row">
                                        <?php if ($regular_price && $regular_price > $selling_price): ?>
                                            <span class="mrp">Rs. <?php echo number_format($regular_price); ?></span>
                                        <?php endif; ?>
                                        <span class="selling-price">Rs.
                                            <?php echo $selling_price ? number_format($selling_price) : '0'; ?></span>
                                    </div>
                                    <a href="<?php the_permalink(); ?>" class="add-to-cart-btn">View Details</a>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>

                    <!-- Pagination -->
                    <div class="pagination">
                        <?php echo paginate_links([
                            'prev_text' => '&laquo;',
                            'next_text' => '&raquo;',
                        ]); ?>
                    </div>

                <?php else: ?>
                    <div class="no-products">
                        <p>No products found.</p>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </main>



    <?php get_footer(); ?>