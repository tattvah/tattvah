<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href='/wp-content/themes/tattvah/build/product/product.css?v2'>
    <script type="module" defer src='/wp-content/themes/tattvah/build/product/product.bundle.js?v2'></script>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js" defer></script>

    <?php
    $homeUrl = get_home_url();
    get_header();
    ?>

    <main class="pt-[140px] md:pt-[160px] w-full single-product-page bg-sugandhlok-bg font-openSans"
        style="min-height: 60vh;">
        <?php if (have_posts()):
            while (have_posts()):
                the_post();
                // Fetch ACF Fields
                $alt_text = get_field('global_alt_text') ?: get_the_title();
                $regular_price = get_field('regular_price');
                $selling_price = get_field('selling_price');
                $discount_badge = get_field('discount_badge');
                $short_tagline = get_field('short_tagline');
                $average_rating = get_field('average_rating');
                $total_reviews = get_field('total_reviews');

                // Collect Gallery Images from Text Fields
                $gallery_images = [];
                for ($i = 1; $i <= 5; $i++) {
                    $img = get_field('gallery_image_' . $i);
                    if ($img) {
                        $gallery_images[] = $img;
                    }
                }
                ?>
                <section class="product-section py-8 md:py-16">
                    <div class="max-w-[1300px] mx-auto px-5">
                        <!-- Breadcrumbs -->
                        <div class="text-[13px] text-gray-500 mb-8 font-openSans tracking-wide uppercase">
                            <a href="/" class="hover:text-sugandhlok-maroon transition-colors">Home</a> <span
                                class="mx-2">/</span>
                            <a href="/products/" class="hover:text-sugandhlok-maroon transition-colors">Products</a> <span
                                class="mx-2">/</span>
                            <span class="text-sugandhlok-maroon font-semibold"><?php the_title(); ?></span>
                        </div>

                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 xl:gap-20">

                            <!-- LEFT COLUMN: MEDIA -->
                            <div class="product-media-col flex flex-col gap-4">
                                <!-- Main Display Image -->
                                <div
                                    class="main-image-box border border-gray-100 rounded-md overflow-hidden relative bg-white shadow-sm">
                                    <?php if (has_post_thumbnail()): ?>
                                        <?php the_post_thumbnail('full', ['class' => 'w-full h-auto object-cover', 'id' => 'mainProductImg', 'alt' => $alt_text]); ?>
                                    <?php else: ?>
                                        <img src="https://sugandhlok.com/cdn/shop/products/SugandhLok-AanganCollection-Ananda-1.jpg"
                                            id="mainProductImg" class="w-full h-auto object-cover" alt="Placeholder">
                                    <?php endif; ?>

                                    <?php if ($discount_badge): ?>
                                        <span
                                            class="absolute top-4 left-4 bg-sugandhlok-maroon text-white text-[12px] font-bold px-3 py-1 tracking-widest uppercase rounded-sm shadow-sm"><?php echo esc_html($discount_badge); ?></span>
                                    <?php endif; ?>
                                </div>

                                <!-- Thumbnails Slider -->
                                <?php if (!empty($gallery_images)): ?>
                                    <div class="swiper product-thumb-slider w-full h-[100px] relative mt-2">
                                        <div class="swiper-wrapper">
                                            <?php foreach ($gallery_images as $index => $img_url): ?>
                                                <div
                                                    class="swiper-slide cursor-pointer border border-transparent rounded-md overflow-hidden opacity-70 hover:opacity-100 transition-all bg-white shadow-sm">
                                                    <img src="<?php echo esc_url($img_url); ?>" alt="Gallery Image"
                                                        class="w-full h-full object-cover">
                                                </div>
                                            <?php endforeach; ?>
                                        </div>
                                        <!-- Swiper Nav -->
                                        <div
                                            class="swiper-button-next !text-sugandhlok-maroon !w-8 !h-8 bg-white rounded-full shadow-md hover:bg-gray-50 after:!text-sm">
                                        </div>
                                        <div
                                            class="swiper-button-prev !text-sugandhlok-maroon !w-8 !h-8 bg-white rounded-full shadow-md hover:bg-gray-50 after:!text-sm">
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>

                            <!-- RIGHT COLUMN: PRODUCT INFO -->
                            <div class="product-info-col pt-2 bg-white p-8 md:p-10 rounded-md shadow-sm border border-gray-100">
                                <h1 class="text-[32px] md:text-[38px] text-gray-900 mb-3 font-lora leading-[1.2]">
                                    <?php the_title(); ?></h1>

                                <!-- Reviews -->
                                <div class="flex items-center gap-2 mb-6">
                                    <div class="text-sugandhlok-peach text-[18px] tracking-widest">
                                        ★★★★★
                                    </div>
                                    <span
                                        class="text-sm text-gray-500 font-openSans"><?php echo ($total_reviews) ? esc_html($total_reviews) . ' reviews' : 'No reviews yet'; ?></span>
                                </div>

                                <!-- Pricing -->
                                <div class="price-box flex items-end gap-3 mb-1">
                                    <?php if ($regular_price): ?>
                                        <span class="text-gray-400 line-through text-[18px] font-openSans">Rs.
                                            <?php echo number_format($regular_price); ?></span>
                                    <?php endif; ?>

                                    <?php if ($selling_price): ?>
                                        <span class="text-[28px] font-bold text-gray-900 font-openSans">Rs.
                                            <?php echo number_format($selling_price); ?></span>
                                    <?php endif; ?>
                                </div>
                                <p class="text-[13px] text-gray-500 mb-8 font-openSans uppercase tracking-wider">(incl. of all
                                    taxes)</p>

                                <!-- Actions -->
                                <div class="action-box flex flex-col sm:flex-row gap-4 mb-10">
                                    <!-- Quantity -->
                                    <div
                                        class="flex items-center border border-gray-300 rounded-sm overflow-hidden bg-white w-fit h-[50px]">
                                        <button type="button"
                                            class="w-12 h-full text-xl text-gray-500 hover:bg-gray-50 transition-colors qty-minus">-</button>
                                        <input type="number" value="1" min="1"
                                            class="w-14 h-full text-center border-none focus:ring-0 text-[16px] p-0 font-semibold text-gray-900 bg-transparent"
                                            readonly>
                                        <button type="button"
                                            class="w-12 h-full text-xl text-gray-500 hover:bg-gray-50 transition-colors qty-plus">+</button>
                                    </div>

                                    <!-- Buttons -->
                                    <div class="flex-1 flex gap-3 h-[50px]">
                                        <button
                                            class="flex-1 bg-transparent border border-sugandhlok-maroon text-sugandhlok-maroon font-semibold text-[13px] tracking-widest uppercase hover:bg-sugandhlok-maroon hover:text-white transition-colors rounded-sm">Add
                                            to Cart</button>
                                        <button
                                            class="flex-1 bg-sugandhlok-maroon text-white font-semibold text-[13px] tracking-widest uppercase hover:bg-red-900 transition-colors rounded-sm flex items-center justify-center gap-2">Buy
                                            Now</button>
                                    </div>
                                </div>

                                <!-- Content & Tagline -->
                                <div class="product-content-area">
                                    <?php if ($short_tagline): ?>
                                        <p
                                            class="text-[17px] font-lora italic text-sugandhlok-maroon mb-6 leading-relaxed border-t border-gray-100 pt-8">
                                            <?php echo esc_html($short_tagline); ?></p>
                                    <?php endif; ?>

                                    <div class="wp-content text-[15px] text-gray-600 leading-[1.8] space-y-4 font-openSans">
                                        <?php the_content(); ?>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>
            <?php endwhile; endif; ?>
    </main>

    <?php get_footer(); ?>
    </body>

</html>
