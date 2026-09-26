<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500&family=Roboto:wght@400;500&display=swap"
		rel="stylesheet">
	<link rel="stylesheet" href='<?php echo get_theme_file_uri(\"build/frontPage/frontPage.css\"); ?>'>
	<script type="module" defer src='<?php echo get_theme_file_uri(\"build/frontPage/frontPage.bundle.js\"); ?>'></script>
	<!-- Swiper CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

	<?php
	$homeUrl = get_home_url();
	get_header();
	?>

	<main class="main--container tattvah-home-page bg-sugandhlok-bg">

		<!-- 1. HERO SECTION (SWIPER SLIDER) -->
		<section class="hero-section relative">
			<div class="swiper heroSwiper h-[80vh] md:h-[90vh]">
				<div class="swiper-wrapper">
					<div class="swiper-slide relative">
						<img src="https://sugandhlok.com/cdn/shop/files/Home_Page_Images-01.png" alt="Tattvah Hero 1"
							class="hero-bg-image w-full h-full object-cover" fetchpriority="high">
						<div
							class="hero-overlay absolute inset-0 bg-black/40 flex flex-col justify-center items-center text-center px-4">
							<h1 data-aos="fade-up" class="text-4xl md:text-6xl font-lora text-white mb-4 shadow-sm">
								Sacred Rituals</h1>
							<p data-aos="fade-up" data-aos-delay="200"
								class="text-lg md:text-2xl text-white font-openSans max-w-2xl">100% natural, earth-born
								elements.</p>
							<a href="/products/"
								class="mt-8 px-8 py-3 bg-sugandhlok-maroon text-white font-semibold rounded-sm hover:bg-red-900 transition-colors uppercase tracking-widest text-sm"
								data-aos="fade-up" data-aos-delay="400">Shop Now</a>
						</div>
					</div>
					<div class="swiper-slide relative">
						<img src="https://sugandhlok.com/cdn/shop/files/Home_Page_Images-02.png" alt="Tattvah Hero 2"
							class="hero-bg-image w-full h-full object-cover">
						<div
							class="hero-overlay absolute inset-0 bg-black/40 flex flex-col justify-center items-center text-center px-4">
							<h1 data-aos="fade-up" class="text-4xl md:text-6xl font-lora text-white mb-4 shadow-sm">Pure
								Devotion</h1>
							<p data-aos="fade-up" data-aos-delay="200"
								class="text-lg md:text-2xl text-white font-openSans max-w-2xl">Crafted with traditional
								Ayurvedic methods.</p>
							<a href="/products/"
								class="mt-8 px-8 py-3 bg-sugandhlok-maroon text-white font-semibold rounded-sm hover:bg-red-900 transition-colors uppercase tracking-widest text-sm"
								data-aos="fade-up" data-aos-delay="400">Discover</a>
						</div>
					</div>
					<div class="swiper-slide relative">
						<img src="https://sugandhlok.com/cdn/shop/files/Home_Page_Images-03.png" alt="Tattvah Hero 3"
							class="hero-bg-image w-full h-full object-cover">
						<div
							class="hero-overlay absolute inset-0 bg-black/40 flex flex-col justify-center items-center text-center px-4">
							<h1 data-aos="fade-up" class="text-4xl md:text-6xl font-lora text-white mb-4 shadow-sm">
								Ethical Craftsmanship</h1>
							<p data-aos="fade-up" data-aos-delay="200"
								class="text-lg md:text-2xl text-white font-openSans max-w-2xl">Empowering women artisans
								across India.</p>
							<a href="/about-us/"
								class="mt-8 px-8 py-3 bg-sugandhlok-maroon text-white font-semibold rounded-sm hover:bg-red-900 transition-colors uppercase tracking-widest text-sm"
								data-aos="fade-up" data-aos-delay="400">Our Story</a>
						</div>
					</div>
				</div>
				<!-- Swiper Pagination & Navigation -->
				<div class="swiper-pagination"></div>
				<div class="swiper-button-next text-white"></div>
				<div class="swiper-button-prev text-white"></div>
			</div>
		</section>

		<!-- Swiper JS -->
		<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
		<script>
			document.addEventListener("DOMContentLoaded", function () {
				var swiper = new Swiper(".heroSwiper", {
					spaceBetween: 0,
					effect: "fade",
					loop: true,
					autoplay: {
						delay: 4000,
						disableOnInteraction: false,
					},
					navigation: {
						nextEl: ".swiper-button-next",
						prevEl: ".swiper-button-prev",
					},
					pagination: {
						el: ".swiper-pagination",
						clickable: true,
					},
				});
			});
		</script>

		<!-- 2. BESTSELLERS -->
		<section class="bestsellers-section py-16 md:py-24 max-w-7xl mx-auto px-4 md:px-8">
			<div class="section-header text-center mb-12">
				<h2 class="section-title text-3xl md:text-5xl font-lora text-sugandhlok-maroon mb-4">Our Bestsellers
				</h2>
				<div class="w-16 h-1 bg-sugandhlok-peach mx-auto"></div>
			</div>

			<div class="products-grid grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8">
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
						$qty = get_field('quantity', $post->ID) ?: '100g';
						?>
						<div class="product-card group" data-aos="fade-up">
							<a href="<?php the_permalink(); ?>"
								class="product-img-wrapper block overflow-hidden rounded-md relative mb-4">
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
						<?php
					}
					wp_reset_postdata();
				}
				?>
			</div>

			<div class="view-all-wrapper text-center mt-12">
				<a href="/products/"
					class="btn-primary inline-block px-8 py-3 bg-sugandhlok-maroon text-white font-semibold rounded-sm hover:bg-red-900 transition-colors uppercase tracking-widest text-sm">View
					All Products</a>
			</div>
		</section>

		<!-- 4. IMAGE BLOCKS -->
		<section class="image-blocks-section py-16 bg-white">
			<div class="max-w-7xl mx-auto px-4 md:px-8">
				<div class="image-blocks-grid grid grid-cols-1 md:grid-cols-3 gap-6">
					<div class="img-block relative overflow-hidden rounded-md group" data-aos="zoom-in">
						<img src="https://sugandhlok.com/cdn/shop/collections/Meditation_and_Calm.png" alt="Beauty"
							class="w-full h-[400px] object-cover transform group-hover:scale-105 transition-transform duration-700">
						<div class="overlay-box absolute inset-0 bg-black/30 flex items-center justify-center">
							<h3 class="text-white text-3xl font-lora text-center drop-shadow-md">Inspired by<br>Beauty
							</h3>
						</div>
					</div>
					<div class="img-block relative overflow-hidden rounded-md group" data-aos="zoom-in"
						data-aos-delay="100">
						<img src="https://sugandhlok.com/cdn/shop/collections/Festive_Rituals.png" alt="Fragrance"
							class="w-full h-[400px] object-cover transform group-hover:scale-105 transition-transform duration-700">
						<div class="overlay-box absolute inset-0 bg-black/30 flex items-center justify-center">
							<h3 class="text-white text-3xl font-lora text-center drop-shadow-md">For
								divine,<br>natural<br>Fragrances</h3>
						</div>
					</div>
					<div class="img-block relative overflow-hidden rounded-md group" data-aos="zoom-in"
						data-aos-delay="200">
						<img src="https://sugandhlok.com/cdn/shop/collections/Havan_Homa.png" alt="Workshop"
							class="w-full h-[400px] object-cover transform group-hover:scale-105 transition-transform duration-700">
						<div class="overlay-box absolute inset-0 bg-black/30 flex items-center justify-center">
							<h3 class="text-white text-3xl font-lora text-center drop-shadow-md">Directly<br>from
								our<br>Workshop</h3>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- 5. HISTORY & CRAFTSMANSHIP -->
		<section class="history-section py-20 bg-[#f9fafb]">
			<div class="max-w-4xl mx-auto px-4 text-center mb-16">
				<h2 class="history-title text-3xl md:text-5xl font-lora text-sugandhlok-maroon mb-6">A HISTORY OF PURITY
					& ETHICAL CRAFTSMANSHIP</h2>
				<p class="history-desc text-gray-600 leading-relaxed text-lg font-openSans">Tattvah stands as a
					testament to India's rich heritage of agarbatti and dhoop
					making. Since our inception, our mission has been to provide fragrances that are rooted in tradition
					and crafted with utmost purity. With a commitment to ethical sourcing and women empowerment, every
					stick is a promise of quality and devotion.</p>
			</div>

			<div class="features-image-grid max-w-7xl mx-auto px-4 grid grid-cols-1 md:grid-cols-3 gap-12 mb-16">
				<div class="feature-col text-center" data-aos="fade-up">
					<div
						class="feature-img-wrapper mb-6 overflow-hidden rounded-full w-48 h-48 mx-auto border-4 border-sugandhlok-peach p-1">
						<img src="https://sugandhlok.com/cdn/shop/files/Natural_2x_fb33f089-f8be-4d0b-bbeb-e24077e027d7.png"
							alt="Hand Crafted" class="w-full h-full object-cover rounded-full">
					</div>
					<h3 class="feature-col-title text-xl font-lora text-gray-900 mb-3">HAND CRAFTED</h3>
					<p class="text-gray-600 text-sm leading-relaxed">Every Tattvah product is lovingly hand-rolled using
						authentic, time-honored methods to ensure
						premium quality.</p>
				</div>

				<div class="feature-col text-center" data-aos="fade-up" data-aos-delay="100">
					<div
						class="feature-img-wrapper mb-6 overflow-hidden rounded-full w-48 h-48 mx-auto border-4 border-sugandhlok-peach p-1">
						<img src="https://sugandhlok.com/cdn/shop/files/Kind_2x_f40da00c-d95e-48f5-be6b-5d207c33038b.png"
							alt="100% Natural" class="w-full h-full object-cover rounded-full">
					</div>
					<h3 class="feature-col-title text-xl font-lora text-gray-900 mb-3">100% NATURAL</h3>
					<p class="text-gray-600 text-sm leading-relaxed">Crafted from pure flora, essential oils, and sacred
						resins. Completely free of charcoal and toxic
						fumes.</p>
				</div>

				<div class="feature-col text-center" data-aos="fade-up" data-aos-delay="200">
					<div
						class="feature-img-wrapper mb-6 overflow-hidden rounded-full w-48 h-48 mx-auto border-4 border-sugandhlok-peach p-1">
						<img src="https://sugandhlok.com/cdn/shop/files/Responsible_2x_c956c29a-d632-4da0-b88a-2fd15962f1ec.png"
							alt="Ethical & Eco-friendly" class="w-full h-full object-cover rounded-full">
					</div>
					<h3 class="feature-col-title text-xl font-lora text-gray-900 mb-3">ETHICAL & ECO</h3>
					<p class="text-gray-600 text-sm leading-relaxed">Eco-safe, biodegradable, and cruelty-free. We
						proudly empower rural women artisans across India.
					</p>
				</div>
			</div>
		</section>

		<!-- 6. BLOG POSTS -->
		<section class="blog-posts-section py-20 max-w-7xl mx-auto px-4 md:px-8 bg-white">
			<div class="section-header text-left mb-10 flex justify-between items-end border-b border-gray-200 pb-4">
				<h2 class="section-title text-3xl md:text-5xl font-lora text-sugandhlok-maroon">Journal & Articles</h2>
				<a href="/blogs/"
					class="text-sugandhlok-maroon uppercase tracking-widest text-sm font-semibold hover:text-sugandhlok-peach transition-colors">View
					All</a>
			</div>

			<div class="blog-grid grid grid-cols-1 md:grid-cols-2 gap-8">
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
						<div class="blog-card group rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-shadow"
							data-aos="fade-up">
							<a href="<?php the_permalink(); ?>" class="blog-img-wrapper block relative h-[350px]">
								<img src="<?php echo esc_url($banner); ?>" alt="<?php the_title(); ?>"
									class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700">
								<div
									class="blog-overlay absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent flex flex-col justify-end p-8">
									<h3 class="blog-title text-2xl font-lora text-white mb-2"><?php the_title(); ?></h3>
									<span
										class="read-more text-sugandhlok-peach uppercase tracking-widest text-sm font-semibold flex items-center gap-2">Read
										article <span aria-hidden="true">&rarr;</span></span>
								</div>
							</a>
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