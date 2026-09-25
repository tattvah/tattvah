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
	<link rel="stylesheet" href='/wp-content/themes/tattvah/build/frontPage/frontPage.css?a10'>
	<script type="module" defer src='/wp-content/themes/tattvah/build/frontPage/frontPage.bundle.js?a10'></script>
	<!-- Swiper CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

	<?php
	$homeUrl = get_home_url();
	get_header();
	?>

	<main class="main--container tattvah-home-page">

		<!-- 1. HERO SECTION (SWIPER SLIDER) -->
		<section class="hero-section">
			<div class="swiper heroSwiper">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<img src="https://images.pexels.com/photos/8028573/pexels-photo-8028573.jpeg?auto=compress&cs=tinysrgb&w=1920"
							alt="Tattvah Hero 1" class="hero-bg-image" fetchpriority="high">
						<div class="hero-overlay">
							<h1 data-aos="fade-up">Sacred Rituals</h1>
							<p data-aos="fade-up" data-aos-delay="200">100% natural, earth-born elements.</p>
						</div>
					</div>
					<div class="swiper-slide">
						<img src="https://images.pexels.com/photos/4046718/pexels-photo-4046718.jpeg?auto=compress&cs=tinysrgb&w=1920"
							alt="Tattvah Hero 2" class="hero-bg-image">
						<div class="hero-overlay">
							<h1 data-aos="fade-up">Pure Devotion</h1>
							<p data-aos="fade-up" data-aos-delay="200">Crafted with traditional Ayurvedic methods.</p>
						</div>
					</div>
					<div class="swiper-slide">
						<img src="https://images.pexels.com/photos/3860810/pexels-photo-3860810.jpeg?auto=compress&cs=tinysrgb&w=1920"
							alt="Tattvah Hero 3" class="hero-bg-image">
						<div class="hero-overlay">
							<h1 data-aos="fade-up">Ethical Craftsmanship</h1>
							<p data-aos="fade-up" data-aos-delay="200">Empowering women artisans across India.</p>
						</div>
					</div>
				</div>
				<!-- Swiper Pagination & Navigation -->
				<div class="swiper-pagination"></div>
				<div class="swiper-button-next"></div>
				<div class="swiper-button-prev"></div>
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
		<section class="bestsellers-section">
			<div class="section-header">
				<h2 class="section-title">Our Bestsellers</h2>
			</div>

			<div class="products-grid">
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
						<div class="product-card" data-aos="fade-up">
							<a href="<?php the_permalink(); ?>" class="product-img-wrapper">
								<?php if (has_post_thumbnail()): ?>
									<?php the_post_thumbnail('medium_large'); ?>
								<?php else: ?>
									<img src="https://images.pexels.com/photos/161477/pexels-photo-161477.jpeg?auto=compress&cs=tinysrgb&w=600"
										alt="Product">
								<?php endif; ?>
							</a>
							<div class="product-info">
								<div class="product-rating">
									★★★★★
								</div>
								<h3 class="product-title">
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</h3>
								<p class="product-qty"><?php echo esc_html($qty); ?></p>
								<div class="price-row">
									<?php if ($mrp && $mrp > $selling_price): ?>
										<span class="mrp">Rs. <?php echo number_format($mrp); ?></span>
									<?php endif; ?>
									<span class="selling-price">Rs.
										<?php echo $selling_price ? number_format($selling_price) : '0'; ?></span>
								</div>
								<button class="add-to-cart-btn">Add to cart</button>
							</div>
						</div>
						<?php
					}
					wp_reset_postdata();
				}
				?>
			</div>

			<div class="view-all-wrapper">
				<a href="/products/" class="btn-primary">View All</a>
			</div>
		</section>

		<!-- 4. IMAGE BLOCKS -->
		<section class="image-blocks-section">
			<div class="image-blocks-grid">
				<div class="img-block" data-aos="zoom-in">
					<img src="https://images.pexels.com/photos/6724357/pexels-photo-6724357.jpeg?auto=compress&cs=tinysrgb&w=800"
						alt="Beauty">
					<div class="overlay-box">
						<h3>Inspired by<br>Beauty</h3>
					</div>
				</div>
				<div class="img-block" data-aos="zoom-in" data-aos-delay="100">
					<img src="https://images.pexels.com/photos/3806756/pexels-photo-3806756.jpeg?auto=compress&cs=tinysrgb&w=800"
						alt="Fragrance">
					<div class="overlay-box">
						<h3>For divine,<br>natural<br>Fragrances</h3>
					</div>
				</div>
				<div class="img-block" data-aos="zoom-in" data-aos-delay="200">
					<img src="https://images.pexels.com/photos/6157448/pexels-photo-6157448.jpeg?auto=compress&cs=tinysrgb&w=800"
						alt="Workshop">
					<div class="overlay-box">
						<h3>Directly<br>from our<br>Workshop</h3>
					</div>
				</div>
			</div>
		</section>

		<!-- 5. HISTORY & CRAFTSMANSHIP -->
		<section class="history-section">
			<div class="history-banner text-center">
				<h2 class="history-title">A HISTORY OF PURITY & ETHICAL CRAFTSMANSHIP</h2>
				<p class="history-desc">Tattvah stands as a testament to India's rich heritage of agarbatti and dhoop
					making. Since our inception, our mission has been to provide fragrances that are rooted in tradition
					and crafted with utmost purity. With a commitment to ethical sourcing and women empowerment, every
					stick is a promise of quality and devotion.</p>
			</div>

			<div class="features-image-grid">
				<div class="feature-col" data-aos="fade-up">
					<div class="feature-img-wrapper">
						<img src="https://images.pexels.com/photos/6724357/pexels-photo-6724357.jpeg?auto=compress&cs=tinysrgb&w=600"
							alt="Hand Crafted">
					</div>
					<h3 class="feature-col-title">HAND CRAFTED</h3>
					<p>Every Tattvah product is lovingly hand-rolled using authentic, time-honored methods to ensure
						premium quality.</p>
				</div>

				<div class="feature-col" data-aos="fade-up" data-aos-delay="100">
					<div class="feature-img-wrapper">
						<img src="https://images.pexels.com/photos/4004122/pexels-photo-4004122.jpeg?auto=compress&cs=tinysrgb&w=600"
							alt="100% Natural">
					</div>
					<h3 class="feature-col-title">100% NATURAL</h3>
					<p>Crafted from pure flora, essential oils, and sacred resins. Completely free of charcoal and toxic
						fumes.</p>
				</div>

				<div class="feature-col" data-aos="fade-up" data-aos-delay="200">
					<div class="feature-img-wrapper">
						<img src="https://images.pexels.com/photos/7656334/pexels-photo-7656334.jpeg?auto=compress&cs=tinysrgb&w=600"
							alt="Ethical & Eco-friendly">
					</div>
					<h3 class="feature-col-title">ETHICAL & ECO</h3>
					<p>Eco-safe, biodegradable, and cruelty-free. We proudly empower rural women artisans across India.
					</p>
				</div>
			</div>

			<div class="accordion-container">
				<details class="accordion-item">
					<summary>How are our products made?</summary>
					<p>We use traditional Ayurvedic methods...</p>
				</details>
				<details class="accordion-item">
					<summary>Are Tattvah products safe for daily use?</summary>
					<p>Yes, they are 100% charcoal-free...</p>
				</details>
				<details class="accordion-item">
					<summary>What makes Tattvah different from other brands?</summary>
					<p>Our commitment to purity...</p>
				</details>
			</div>
		</section>

		<!-- 6. BLOG POSTS -->
		<section class="blog-posts-section">
			<div class="section-header text-left">
				<h2 class="section-title">Blog posts</h2>
			</div>

			<div class="blog-grid">
				<?php
				$blog_args = [
					'post_type' => 'blog',
					'posts_per_page' => 2,
				];
				$blogs = get_posts($blog_args);

				if ($blogs) {
					foreach ($blogs as $post) {
						setup_postdata($post);
						$banner = get_field('banner_image') ?: 'https://images.pexels.com/photos/3806756/pexels-photo-3806756.jpeg?auto=compress&cs=tinysrgb&w=800';
						?>
						<div class="blog-card" data-aos="fade-up">
							<a href="<?php the_permalink(); ?>" class="blog-img-wrapper">
								<img src="<?php echo esc_url($banner); ?>" alt="<?php the_title(); ?>">
								<div class="blog-overlay">
									<h3 class="blog-title"><?php the_title(); ?></h3>
									<span class="read-more">Read more</span>
								</div>
							</a>
						</div>
						<?php
					}
					wp_reset_postdata();
				}
				?>
			</div>
			<div class="view-all-wrapper">
				<a href="/blogs/" class="btn-primary">View All</a>
			</div>
		</section>

	</main>

	<?php get_footer(); ?>

	</body>

</html>