<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Raleway:wght@300;400;500;600;700&family=Roboto:wght@400;500;700&display=swap"
        rel="stylesheet">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <link rel="stylesheet" href='/wp-content/themes/tattvah/build/product/product.css?a10'>
    <script type="module" defer src='/wp-content/themes/tattvah/build/product/product.bundle.js?a10'></script>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js" defer></script>

    <?php
    $homeUrl = get_home_url();
    get_header();
    ?>

    <main class="main--container single-product-page" style="min-height: 60vh;">
        <?php if (have_posts()) : while (have_posts()) : the_post(); 
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
        <section class="product-section">
            <div class="max-w-[1300px] mx-auto px-5 py-8 md:py-16">
                <!-- Breadcrumbs -->
                <div class="text-[13px] text-gray-500 mb-8 font-roboto tracking-wide uppercase">
                    <a href="/" class="hover:text-black transition-colors">Home</a> <span class="mx-2">/</span> 
                    <a href="/products/" class="hover:text-black transition-colors">Products</a> <span class="mx-2">/</span> 
                    <span class="text-black font-medium"><?php the_title(); ?></span>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 xl:gap-20">
                    
                    <!-- LEFT COLUMN: MEDIA -->
                    <div class="product-media-col flex flex-col gap-4">
                        <!-- Main Display Image -->
                        <div class="main-image-box border border-gray-100 rounded-lg overflow-hidden relative bg-[#FAFAFA]">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('full', ['class' => 'w-full h-auto object-cover', 'id' => 'mainProductImg', 'alt' => $alt_text]); ?>
                            <?php else: ?>
                                <img src="/wp-content/uploads/placeholder.png" id="mainProductImg" class="w-full h-auto object-cover" alt="Placeholder">
                            <?php endif; ?>
                            
                            <?php if($discount_badge): ?>
                                <span class="absolute top-4 right-4 bg-[#E03A3A] text-white text-[13px] font-bold px-3 py-1 uppercase rounded-sm shadow-sm"><?php echo esc_html($discount_badge); ?></span>
                            <?php endif; ?>
                        </div>

                        <!-- Thumbnails Slider -->
                        <?php if(!empty($gallery_images)): ?>
                        <div class="swiper product-thumb-slider w-full h-[100px] relative mt-2">
                            <div class="swiper-wrapper">
                                <?php foreach($gallery_images as $index => $img_url): ?>
                                <div class="swiper-slide cursor-pointer border border-transparent rounded-md overflow-hidden opacity-70 hover:opacity-100 transition-all">
                                    <img src="<?php echo esc_url($img_url); ?>" alt="Gallery Image" class="w-full h-full object-cover">
                                </div>
                                <?php endforeach; ?>
                            </div>
                            <!-- Swiper Nav -->
                            <div class="swiper-button-next !text-black !w-8 !h-8 bg-white/80 rounded-full shadow hover:bg-white after:!text-sm"></div>
                            <div class="swiper-button-prev !text-black !w-8 !h-8 bg-white/80 rounded-full shadow hover:bg-white after:!text-sm"></div>
                        </div>
                        <?php endif; ?>
                    </div>

                    <!-- RIGHT COLUMN: PRODUCT INFO -->
                    <div class="product-info-col font-roboto pt-2">
                        <h1 class="text-[32px] md:text-[38px] font-bold uppercase text-[#2B2B2B] mb-3 font-raleway leading-[1.2]"><?php the_title(); ?></h1>
                        
                        <!-- Reviews -->
                        <div class="flex items-center gap-2 mb-6">
                            <div class="text-[#FBBF24] text-[18px] tracking-widest">
                                ★★★★★
                            </div>
                            <span class="text-sm text-gray-500 pt-1"><?php echo ($total_reviews) ? esc_html($total_reviews) . ' reviews' : 'No reviews yet'; ?></span>
                        </div>

                        <!-- Pricing -->
                        <div class="price-box flex items-end gap-3 mb-1">
                            <?php if($regular_price): ?>
                            <span class="text-gray-400 line-through text-[18px]">MRP Rs. <?php echo number_format($regular_price); ?></span>
                            <?php endif; ?>
                            
                            <?php if($selling_price): ?>
                            <span class="text-[28px] font-bold text-[#111]">Rs. <?php echo number_format($selling_price); ?></span>
                            <?php endif; ?>
                        </div>
                        <p class="text-[13px] text-gray-500 mb-8">(incl. of all taxes)</p>

                        <!-- Actions -->
                        <div class="action-box flex flex-col sm:flex-row gap-4 mb-10">
                            <!-- Quantity -->
                            <div class="flex items-center border border-[#E5E7EB] rounded-md overflow-hidden bg-white w-fit h-[50px]">
                                <button type="button" class="w-12 h-full text-xl text-gray-500 hover:bg-gray-50 transition-colors qty-minus">-</button>
                                <input type="number" value="1" min="1" class="w-14 h-full text-center border-none focus:ring-0 text-[16px] p-0 font-medium text-[#111] bg-transparent" readonly>
                                <button type="button" class="w-12 h-full text-xl text-gray-500 hover:bg-gray-50 transition-colors qty-plus">+</button>
                            </div>
                            
                            <!-- Buttons -->
                            <div class="flex-1 flex gap-3 h-[50px]">
                                <button class="flex-1 bg-transparent border-2 border-[#111] text-[#111] font-semibold text-[14px] tracking-wider uppercase hover:bg-gray-50 transition-colors rounded-md">Add to Cart</button>
                                <button class="flex-1 bg-[#D3A13B] text-white font-semibold text-[14px] tracking-wider uppercase hover:bg-[#c29334] transition-colors rounded-md flex items-center justify-center gap-2">Buy Now <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg></button>
                            </div>
                        </div>

                        <!-- Content & Tagline -->
                        <div class="product-content-area">
                            <?php if($short_tagline): ?>
                                <p class="text-[17px] font-medium italic text-[#111] mb-6 leading-relaxed border-t border-gray-100 pt-8"><?php echo esc_html($short_tagline); ?></p>
                            <?php endif; ?>
                            
                            <div class="wp-content text-[15px] text-[#4B5563] leading-[1.8] space-y-4">
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
