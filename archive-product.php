<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href='/wp-content/themes/tattvah/build/products/products.css?v2'>
    <script type="module" defer src='/wp-content/themes/tattvah/build/products/products.bundle.js?v2'></script>

    <?php
    $homeUrl = get_home_url();
    get_header();
    ?>

    <main class="pt-[140px] md:pt-[160px] w-full bg-sugandhlok-bg" style="min-height: 60vh;">
        <section class="bestsellers-section py-16 md:py-24 max-w-7xl mx-auto px-4 md:px-8">
            <div class="section-header text-center mb-12">
                <h1 class="section-title text-3xl md:text-5xl font-lora text-sugandhlok-maroon mb-4">Our Products</h1>
                <div class="w-16 h-1 bg-sugandhlok-peach mx-auto"></div>
            </div>

            <div class="products-grid grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8">
                <?php if (have_posts()):
                    while (have_posts()):
                        the_post();
                        $selling_price = get_field('selling_price', get_the_ID());
                        $mrp = get_field('mrp', get_the_ID());
                        $qty = get_field('quantity', get_the_ID()) ?: '100g';
                        ?>
                        <div class="product-card group" data-aos="fade-up">
                            <a href="<?php the_permalink(); ?>"
                                class="product-img-wrapper block overflow-hidden rounded-md relative mb-4 bg-white">
                                <?php if (has_post_thumbnail()): ?>
                                    <?php the_post_thumbnail('medium_large', ['class' => 'w-full h-80 object-cover transform group-hover:scale-105 transition-transform duration-500']); ?>
                                <?php else: ?>
                                    <img src="https://sugandhlok.com/cdn/shop/products/SugandhLok-AanganCollection-Ananda-1.jpg"
                                        alt="Product"
                                        class="w-full h-80 object-cover transform group-hover:scale-105 transition-transform duration-500">
                                <?php endif; ?>
                            </a>
                            <div class="product-info text-center">
                                <div class="product-rating text-sugandhlok-peach text-sm mb-2">
                                    ★★★★★
                                </div>
                                <h3 class="product-title font-lora text-lg text-gray-900 mb-1">
                                    <a href="<?php the_permalink(); ?>"
                                        class="hover:text-sugandhlok-maroon transition-colors"><?php the_title(); ?></a>
                                </h3>
                                <p class="product-qty text-gray-500 text-sm mb-3"><?php echo esc_html($qty); ?></p>
                                <div class="price-row mb-4">
                                    <?php if ($mrp && $mrp > $selling_price): ?>
                                        <span class="mrp text-gray-400 line-through text-sm mr-2">Rs.
                                            <?php echo number_format($mrp); ?></span>
                                    <?php endif; ?>
                                    <span class="selling-price font-semibold text-gray-900 text-lg">Rs.
                                        <?php echo $selling_price ? number_format($selling_price) : '0'; ?></span>
                                </div>
                                <button
                                    class="add-to-cart-btn w-full py-3 border border-sugandhlok-maroon text-sugandhlok-maroon font-semibold rounded-sm hover:bg-sugandhlok-maroon hover:text-white transition-colors uppercase tracking-widest text-xs">Add
                                    to cart</button>
                            </div>
                        </div>
                    <?php endwhile; else: ?>
                    <p class="text-center w-full font-openSans text-gray-500 col-span-full">No products found.</p>
                <?php endif; ?>
            </div>
        </section>
    </main>

    <?php get_footer(); ?>
    </body>

</html>