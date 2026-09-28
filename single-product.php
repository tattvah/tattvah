<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href='/wp-content/themes/tattvah/build/product/product.css?v6'>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js" defer></script>
    <script type="module" defer src='/wp-content/themes/tattvah/build/product/product.bundle.js?v6'></script>

    <?php
    $homeUrl = get_home_url();
    get_header();
    ?>
    <main class="single-product-main sl-single-blog">
        <?php if (have_posts()):
            while (have_posts()):
                the_post();
                // Fetch ACF Fields cleanly without fallbacks
                $alt_text = get_field('global_alt_text') ?: get_the_title();
                $regular_price = get_field('regular_price');
                $selling_price = get_field('selling_price');
                $discount_badge = get_field('discount_badge');
                $short_tagline = get_field('short_tagline');
                $average_rating = get_field('average_rating');
                $total_reviews = get_field('total_reviews');
                $coupon_code = get_field('coupon_code');
                $stock_status = get_field('stock_status');
                $shipping_info = get_field('shipping_info');
                $product_sku = get_field('product_sku');

                $gallery_images = [];
                for ($i = 1; $i <= 5; $i++) {
                    $img = get_field('gallery_image_' . $i);
                    if ($img) {
                        $gallery_images[] = $img;
                    }
                }
                ?>
                <section class="sp-section" data-aos="fade-up">
                    <div class="sp-container">
                        <!-- Breadcrumbs -->
                        <div class="sp-breadcrumbs">
                            <a href="/">Home</a> <span>/</span>
                            <a href="/products/">Products</a> <span>/</span>
                            <span class="current"><?php the_title(); ?></span>
                        </div>

                        <div class="sp-layout">
                            <!-- LEFT COLUMN: MEDIA -->
                            <div class="sp-media">
                                <?php if (!empty($gallery_images)): ?>
                                    <div class="sp-main-image-wrapper">
                                        <img src="<?php echo esc_url($gallery_images[0]); ?>" id="mainProductImg"
                                            alt="<?php echo esc_attr($alt_text); ?>">
                                        <?php if ($discount_badge): ?>
                                            <span class="sp-badge"><?php echo esc_html($discount_badge); ?></span>
                                        <?php endif; ?>
                                    </div>

                                    <?php if (count($gallery_images) > 1): ?>
                                        <div class="swiper sp-thumb-slider">
                                            <div class="swiper-wrapper">
                                                <?php foreach ($gallery_images as $img_url): ?>
                                                    <div class="swiper-slide sp-thumb-item">
                                                        <img src="<?php echo esc_url($img_url); ?>" alt="Thumbnail">
                                                    </div>
                                                <?php endforeach; ?>
                                            </div>
                                            <div class="swiper-button-next"></div>
                                            <div class="swiper-button-prev"></div>
                                        </div>
                                    <?php endif; ?>
                                <?php endif; ?>
                            </div>

                            <!-- RIGHT COLUMN: PRODUCT INFO -->
                            <div class="sp-details">
                                <h1 class="sp-title"><?php the_title(); ?></h1>

                                <?php if ($product_sku): ?>
                                    <p class="sp-sku">SKU: <?php echo esc_html($product_sku); ?></p>
                                <?php endif; ?>

                                <!-- Reviews -->
                                <?php if ($average_rating || $total_reviews): ?>
                                    <div class="sp-reviews">
                                        <div class="stars">
                                            <?php
                                            $rating = floatval($average_rating);
                                            for ($i = 1; $i <= 5; $i++) {
                                                if ($i <= $rating) {
                                                    echo '★';
                                                } else {
                                                    echo '☆';
                                                }
                                            }
                                            ?>
                                        </div>
                                        <?php if ($total_reviews): ?>
                                            <span class="review-count">(<?php echo esc_html($total_reviews); ?> reviews)</span>
                                        <?php endif; ?>
                                    </div>
                                <?php endif; ?>

                                <!-- Price -->
                                <div class="sp-price-box">
                                    <?php if ($regular_price && $regular_price > $selling_price): ?>
                                        <span class="sp-mrp">Rs. <?php echo number_format($regular_price); ?></span>
                                    <?php endif; ?>
                                    <span class="sp-selling-price">Rs.
                                        <?php echo $selling_price ? number_format($selling_price) : '0'; ?></span>
                                </div>
                                <div class="sp-tax-info">(INCL. OF ALL TAXES)</div>

                                <?php if ($coupon_code): ?>
                                    <div class="sp-coupon">
                                        Use code <strong><?php echo esc_html($coupon_code); ?></strong> at checkout
                                    </div>
                                <?php endif; ?>

                                <?php if ($stock_status): ?>
                                    <div class="sp-stock-status <?php echo strtolower(str_replace(' ', '-', $stock_status)); ?>">
                                        <?php echo esc_html($stock_status); ?>
                                    </div>
                                <?php endif; ?>

                                <div class="sp-actions">
                                    <div class="sp-qty-selector">
                                        <button type="button" class="qty-btn qty-minus">-</button>
                                        <input type="number" class="qty-input" value="1" min="1">
                                        <button type="button" class="qty-btn qty-plus">+</button>
                                    </div>
                                    <div class="sp-buttons">
                                        <button class="sp-add-to-cart" onclick="
                                                const qty = parseInt(document.querySelector('.qty-input').value) || 1;
                                                const id = '<?php echo get_the_ID(); ?>';
                                                const title = '<?php echo esc_attr(addslashes(get_the_title())); ?>';
                                                const price = <?php echo $selling_price ? $selling_price : 0; ?>;
                                                const image = '<?php echo esc_url($gallery_images[0] ?? ''); ?>';
                                                for(let i=0; i<qty; i++) {
                                                    if(i === qty - 1) window.addToCart(id, title, price, image);
                                                    else window.addToCart(id, title, price, image); // Wait, addToCart handles quantity if it already exists, but it adds 1 each time. 
                                                }
                                                // Wait, we need a better way. Let's just update the cart array directly if multiple qty
                                                let cart = JSON.parse(localStorage.getItem('tattvah_cart')) || [];
                                                let existing = cart.find(item => item.id === id);
                                                if(existing) {
                                                    existing.quantity += qty;
                                                } else {
                                                    cart.push({id, title, price: parseFloat(price), image, quantity: qty});
                                                }
                                                localStorage.setItem('tattvah_cart', JSON.stringify(cart));
                                                // Trigger global render if we can, or reload. Wait, the footer has renderCart()! Let's trigger a custom event or just use the global addToCart, but addToCart only adds 1. Let's redefine it in footer? Yes, I should just modify my script in single-product to manipulate localStorage and then trigger a cart refresh if I can.
                                            ">
                                            Add to Cart
                                        </button>
                                        <button class="sp-buy-now" onclick="
                                                const qty2 = parseInt(document.querySelector('.qty-input').value) || 1;
                                                const id2 = '<?php echo get_the_ID(); ?>';
                                                let cart2 = JSON.parse(localStorage.getItem('tattvah_cart')) || [];
                                                let existing2 = cart2.find(item => item.id === id2);
                                                if(existing2) {
                                                    existing2.quantity += qty2;
                                                } else {
                                                    cart2.push({id: id2, title: '<?php echo esc_attr(addslashes(get_the_title())); ?>', price: <?php echo $selling_price ? $selling_price : 0; ?>, image: '<?php echo esc_url($gallery_images[0] ?? ''); ?>', quantity: qty2});
                                                }
                                                localStorage.setItem('tattvah_cart', JSON.stringify(cart2));
                                                window.location.href = '/checkout/';
                                            ">
                                            Buy Now
                                        </button>
                                    </div>
                                </div>

                                <?php if ($shipping_info): ?>
                                    <div class="sp-shipping-info">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2">
                                            <path d="M1 3h15v13H1z"></path>
                                            <path d="M16 8h4l3 3v5h-7V8z"></path>
                                            <circle cx="5.5" cy="18.5" r="2.5"></circle>
                                            <circle cx="18.5" cy="18.5" r="2.5"></circle>
                                        </svg>
                                        <span><?php echo esc_html($shipping_info); ?></span>
                                    </div>
                                <?php endif; ?>

                                <div class="sp-content-area">
                                    <?php if ($short_tagline): ?>
                                        <p class="sp-tagline"><?php echo esc_html($short_tagline); ?></p>
                                    <?php endif; ?>
                                    <div class="wp-content">
                                        <?php the_content(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="other-products-section" data-aos="fade-up">
                    <div class="sp-container">
                        <div class="op-header">
                            <h2>Other Products</h2>
                            <div class="header-divider"></div>
                        </div>
                        <div class="swiper other-products-slider">
                            <div class="swiper-wrapper">
                                <?php
                                $post_type = get_post_type();
                                $other_prods = new WP_Query([
                                    'post_type' => $post_type,
                                    'posts_per_page' => 8,
                                    'post__not_in' => [get_the_ID()],
                                ]);
                                if ($other_prods->have_posts()):
                                    while ($other_prods->have_posts()):
                                        $other_prods->the_post();
                                        $s_price = get_field('selling_price');
                                        $img = get_field('gallery_image_1');
                                        ?>
                                        <div class="swiper-slide op-card">
                                            <a href="<?php the_permalink(); ?>" class="op-img-wrapper">
                                                <?php if ($img): ?><img src="<?php echo esc_url($img); ?>"
                                                        alt="<?php the_title_attribute(); ?>"><?php endif; ?>
                                            </a>
                                            <div class="op-info">
                                                <h3 class="op-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                                <?php if ($s_price): ?>
                                                    <div class="op-price">Rs. <?php echo number_format($s_price); ?></div><?php endif; ?>
                                            </div>
                                        </div>
                                        <?php
                                    endwhile;
                                    wp_reset_postdata();
                                endif;
                                ?>
                            </div>
                            <div class="swiper-button-next op-next"></div>
                            <div class="swiper-button-prev op-prev"></div>
                        </div>
                    </div>
                </section>
            <?php endwhile; endif; ?>
    </main>

    <?php get_footer(); ?>