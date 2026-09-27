<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,500;0,600;1,400&family=Open+Sans:wght@300;400;500;600&display=swap"
		rel="stylesheet">
	<link rel="stylesheet" href='/wp-content/themes/tattvah/build/frontPage/frontPage.css?v6'>
	<script type="module" defer src='/wp-content/themes/tattvah/build/frontPage/frontPage.bundle.js?v6'></script>
	<!-- Swiper CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

	<?php
	$homeUrl = get_home_url();
	get_header();
	?>

	<main class="main--container tattvah-home-page bg-[#faf9f8] overflow-hidden">

		<!-- 1. HERO SECTION (SWIPER SLIDER) -->
		<section class="hero-section relative w-full overflow-hidden">
			<div class="swiper heroSwiper w-full h-[85vh] md:h-screen">
				<div class="swiper-wrapper">
					<div class="swiper-slide relative w-full h-full">
						<img src="https://magicstudio.com/blog/content/images/2023/10/props-product-photography.webp"
							alt="Tattvah Hero 1" class="hero-bg-image w-full h-full object-cover" fetchpriority="high">
						<div
							class="hero-overlay absolute inset-0 bg-black/40 flex flex-col justify-center items-center text-center px-4">
						</div>
					</div>
					<div class="swiper-slide relative w-full h-full">
						<img src="https://cdn.shopify.com/s/files/1/2303/2711/files/7_324422e0-fe83-4b3d-ae5c-641f4567b5ff.jpg?v=1617058709"
							alt="Tattvah Hero 2" class="hero-bg-image w-full h-full object-cover">
						<div
							class="hero-overlay absolute inset-0 bg-black/40 flex flex-col justify-center items-center text-center px-4">
						</div>
					</div>
					<div class="swiper-slide relative w-full h-full">
						<img src="https://cdn.shopify.com/s/files/1/2303/2711/files/How_to_Create_Scroll_Stopping_Product_Photos_for_Instagram_9.jpg?v=1622172162"
							alt="Tattvah Hero 3" class="hero-bg-image w-full h-full object-cover">
						<div
							class="hero-overlay absolute inset-0 bg-black/40 flex flex-col justify-center items-center text-center px-4">
						</div>
					</div>
				</div>
				<!-- Swiper Pagination & Navigation -->
				<div class="swiper-pagination"></div>
				<div class="swiper-button-next text-white/70 hover:text-white transition-colors"></div>
				<div class="swiper-button-prev text-white/70 hover:text-white transition-colors"></div>
			</div>
		</section>

		<!-- Swiper JS -->
		<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

		<!-- 2. BESTSELLERS -->
		<section class="bestsellers-section py-20 md:py-28 max-w-7xl mx-auto px-4 md:px-8 bg-[#faf9f8]">
			<div class="section-header text-center mb-16">
				<h2 class="section-title text-4xl md:text-5xl font-lora text-sugandhlok-maroon mb-6">Our Bestsellers
				</h2>
				<div class="w-24 h-[1px] bg-sugandhlok-maroon mx-auto opacity-50"></div>
			</div>

			<div class="products-grid grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8 md:gap-10">
				<?php
				$product_args = [
					'post_type' => 'product',
					'posts_per_page' => 8,
				];
				$bestsellers = get_posts($product_args);

				if ($bestsellers) {
					foreach ($bestsellers as $post) {
						setup_postdata($post);
						$selling_price = get_field('selling_price', $post->ID);
						$mrp = get_field('mrp', $post->ID);
						?>
						<div
							class="product-card group flex flex-col bg-white border border-gray-100 hover:shadow-xl hover:border-transparent transition-all duration-500 rounded-sm overflow-hidden">
							<a href="<?php the_permalink(); ?>"
								class="product-img-wrapper block overflow-hidden relative aspect-[4/5] bg-gray-50">
								<?php
								$product_img = get_field('gallery_image_1', $post->ID);
								if ($product_img): ?>
									<img src="<?php echo esc_url($product_img); ?>" alt="<?php the_title(); ?>"
										class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700 ease-out">
								<?php elseif (has_post_thumbnail()): ?>
									<?php the_post_thumbnail('medium_large', ['class' => 'w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700 ease-out']); ?>
								<?php else: ?>
									<img src="https://sugandhlok.com/cdn/shop/products/SugandhLok-AanganCollection-Ananda-1.jpg"
										alt="Product"
										class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700 ease-out">
								<?php endif; ?>

								<!-- Quick Add Overlay -->
								<div class="absolute inset-0 bg-black/5 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-4">
									<button
										class="add-to-cart-btn w-full py-4 bg-white/95 backdrop-blur-sm text-sugandhlok-maroon text-xs uppercase tracking-[0.2em] font-semibold hover:bg-sugandhlok-maroon hover:text-white transition-colors duration-300 shadow-lg"
										data-id="<?php echo $post->ID; ?>"
										data-title="<?php echo esc_attr(get_the_title()); ?>"
										data-price="<?php echo esc_attr($selling_price ? $selling_price : 0); ?>"
										data-image="<?php echo esc_url($product_img ? $product_img : (has_post_thumbnail() ? get_the_post_thumbnail_url($post->ID, 'medium_large') : 'https://sugandhlok.com/cdn/shop/products/SugandhLok-AanganCollection-Ananda-1.jpg')); ?>">Quick
										Add</button>
								</div>
							</a>
							<div class="product-info text-center flex-grow flex flex-col justify-between p-6">
								<div>
									<h3 class="product-title font-lora text-xl text-gray-900 mb-2">
										<a href="<?php the_permalink(); ?>"
											class="hover:text-sugandhlok-maroon transition-colors"><?php the_title(); ?></a>
									</h3>
									<div class="product-rating text-sugandhlok-peach text-xs mb-3 tracking-[0.2em]">
										<?php
										$rating = get_field('average_rating', $post->ID);
										$rating = $rating ? floatval($rating) : 5;
										$full_stars = round($rating);
										$empty_stars = 5 - $full_stars;
										echo str_repeat('★', $full_stars) . str_repeat('☆', $empty_stars);
										?>
									</div>
								</div>
								<div class="price-row mt-3">
									<?php if ($mrp && $mrp > $selling_price): ?>
										<span class="mrp text-gray-400 line-through text-sm mr-3 font-light">Rs.
											<?php echo number_format($mrp); ?></span>
									<?php endif; ?>
									<span class="selling-price font-semibold text-sugandhlok-maroon text-lg">Rs.
										<?php echo $selling_price ? number_format($selling_price) : '0'; ?></span>
								</div>
							</div>
						</div>
						<?php
					}
					wp_reset_postdata();
				}
				?>
			</div>

			<div class="view-all-wrapper text-center mt-16">
				<a href="/products/"
					class="inline-block px-12 py-4 bg-transparent border-2 border-sugandhlok-maroon text-sugandhlok-maroon font-semibold rounded-none hover:bg-sugandhlok-maroon hover:text-white transition-all duration-300 uppercase tracking-[0.2em] text-sm">View
					All Products</a>
			</div>
		</section>

		<!-- 3. HISTORY & CRAFTSMANSHIP -->
		<section class="history-section py-20 md:py-28 bg-[#3d1519]">
			<div class="max-w-4xl mx-auto px-4 text-center mb-20">
				<h2 class="history-title text-4xl md:text-5xl font-lora text-[#c9a764] mb-6">The Essence of
					Tattvah</h2>
				<div class="w-24 h-[1px] bg-[#c9a764] mx-auto opacity-50 mb-8"></div>
				<p
					class="history-desc text-white/80 leading-relaxed text-lg md:text-xl font-openSans font-light max-w-3xl mx-auto">
					Tattvah stands as a
					testament to India's rich heritage of agarbatti and dhoop
					making. Since our inception, our mission has been to provide fragrances that are rooted in tradition
					and crafted with utmost purity. With a commitment to ethical sourcing and women empowerment, every
					stick is a promise of quality and devotion.</p>
			</div>

			<div class="features-image-grid max-w-7xl mx-auto px-4 grid grid-cols-1 md:grid-cols-3 gap-12 md:gap-16">
				<div class="feature-col flex flex-col items-center text-center">
					<div class="feature-img-wrapper mb-8 w-full max-w-sm">
						<img src="https://sugandhlok.com/cdn/shop/files/Natural_2x_fb33f089-f8be-4d0b-bbeb-e24077e027d7.png"
							alt="Hand Crafted"
							class="w-full h-auto object-contain rounded-md">
					</div>
					<h3 class="feature-col-title text-xl font-lora text-[#c9a764] mb-4 tracking-wide">HAND CRAFTED</h3>
					<p class="text-white/70 text-sm leading-relaxed font-light">Every Tattvah product is lovingly
						hand-rolled using
						authentic, time-honored methods to ensure
						premium quality.</p>
				</div>

				<div class="feature-col flex flex-col items-center text-center">
					<div class="feature-img-wrapper mb-8 w-full max-w-sm">
						<img src="https://sugandhlok.com/cdn/shop/files/Kind_2x_f40da00c-d95e-48f5-be6b-5d207c33038b.png"
							alt="100% Natural"
							class="w-full h-auto object-contain rounded-md">
					</div>
					<h3 class="feature-col-title text-xl font-lora text-[#c9a764] mb-4 tracking-wide">100% NATURAL</h3>
					<p class="text-white/70 text-sm leading-relaxed font-light">Crafted from pure flora, essential oils,
						and sacred
						resins. Completely free of charcoal and toxic
						fumes.</p>
				</div>

				<div class="feature-col flex flex-col items-center text-center">
					<div class="feature-img-wrapper mb-8 w-full max-w-sm">
						<img src="https://sugandhlok.com/cdn/shop/files/Responsible_2x_c956c29a-d632-4da0-b88a-2fd15962f1ec.png"
							alt="Ethical & Eco-friendly"
							class="w-full h-auto object-contain rounded-md">
					</div>
					<h3 class="feature-col-title text-xl font-lora text-[#c9a764] mb-4 tracking-wide">ETHICAL & ECO</h3>
					<p class="text-white/70 text-sm leading-relaxed font-light">Eco-safe, biodegradable, and
						cruelty-free. We
						proudly empower rural women artisans across India.
					</p>
				</div>
			</div>
		</section>

		<!-- 4. BLOG POSTS -->
		<section class="blog-posts-section py-20 md:py-28 max-w-7xl mx-auto px-4 md:px-8 bg-white">
			<div class="section-header text-center mb-16">
				<h2 class="section-title text-4xl md:text-5xl font-lora text-sugandhlok-maroon mb-6">Journal & Articles
				</h2>
				<div class="w-24 h-[1px] bg-sugandhlok-maroon mx-auto opacity-50 mb-8"></div>
				<a href="/blogs/"
					class="text-sugandhlok-maroon uppercase tracking-widest text-xs font-semibold hover:text-sugandhlok-peach transition-colors border-b border-sugandhlok-maroon pb-1 inline-block">View
					All Journals</a>
			</div>

			<div class="blog-grid grid grid-cols-1 md:grid-cols-2 gap-12 md:gap-16">
				<?php
				$blog_args = [
					'post_type' => 'blog',
					'posts_per_page' => 2,
				];
				$blogs = get_posts($blog_args);

				if ($blogs) {
					foreach ($blogs as $post) {
						setup_postdata($post);
						$banner = get_field('banner_image') ?: 'https://sugandhlok.com/cdn/shop/files/havan-cup-lifestyle-min.png';
						?>
						<div class="blog-card group">
							<a href="<?php the_permalink(); ?>"
								class="blog-img-wrapper block relative aspect-[16/10] mb-6 overflow-hidden rounded-sm">
								<img src="<?php echo esc_url($banner); ?>" alt="<?php the_title(); ?>"
									class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-1000 ease-out">
							</a>
							<div class="blog-content text-center px-4">
								<div class="text-sugandhlok-peach text-xs uppercase tracking-[0.15em] mb-3 font-semibold">
									<?php echo get_the_date('M d, Y'); ?>
								</div>
								<h3
									class="blog-title text-2xl md:text-3xl font-lora text-gray-900 mb-6 hover:text-sugandhlok-maroon transition-colors line-clamp-2">
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</h3>
								<a href="<?php the_permalink(); ?>"
									class="inline-flex items-center text-xs uppercase tracking-widest font-semibold text-gray-900 hover:text-sugandhlok-maroon transition-colors">
									Read Article <span class="ml-2 font-normal text-lg leading-none">&rarr;</span>
								</a>
							</div>
						</div>
						<?php
					}
					wp_reset_postdata();
				}
				?>
			</div>
		</section>

	</main>

	<?php get_footer(); ?>

	</body>

</html>