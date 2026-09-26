<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href='/wp-content/themes/tattvah/build/aboutUs/aboutUs.css?v2'>
	<script type="module" defer src='/wp-content/themes/tattvah/build/aboutUs/aboutUs.bundle.js?v2'></script>

	<?php
	$homeUrl = get_home_url();
	get_header();
	?>

	<main class="pt-[140px] md:pt-[160px] w-full bg-sugandhlok-bg font-openSans text-gray-800">

		<!-- Hero Section -->
		<section class="relative w-full h-[60vh] min-h-[400px] flex items-center justify-center overflow-hidden">
			<img src="https://sugandhlok.com/cdn/shop/files/Home_Page_Images-03.png" alt="About Tattvah"
				class="absolute inset-0 w-full h-full object-cover">
			<div class="absolute inset-0 bg-black/50"></div>
			<div class="relative z-10 text-center px-4 max-w-3xl mx-auto" data-aos="fade-up">
				<h1 class="text-4xl md:text-6xl font-lora text-white mb-4 uppercase tracking-widest">Our Story</h1>
				<div class="w-16 h-1 bg-sugandhlok-peach mx-auto mb-6"></div>
				<p class="text-lg md:text-xl text-white font-openSans font-light">Rooted in tradition, crafted with
					utmost purity.</p>
			</div>
		</section>

		<!-- Brand Story -->
		<section class="py-16 md:py-24 max-w-7xl mx-auto px-4 md:px-8">
			<div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
				<div data-aos="fade-right">
					<img src="https://sugandhlok.com/cdn/shop/files/bulgarian-rose-3.jpg" alt="Our Heritage"
						class="w-full h-auto rounded-md shadow-sm">
				</div>
				<div data-aos="fade-left">
					<h2 class="text-3xl md:text-4xl font-lora text-sugandhlok-maroon mb-6 leading-tight">A Legacy of
						Pure Devotion & Craftsmanship</h2>
					<p class="mb-4 leading-relaxed text-gray-600">
						Tattvah stands as a testament to India's rich heritage of agarbatti and dhoop making. Since our
						inception, our mission has been to provide fragrances that are rooted in tradition and crafted
						with utmost purity.
					</p>
					<p class="mb-6 leading-relaxed text-gray-600">
						We believe in the power of nature. Every stick is lovingly hand-rolled using authentic,
						time-honored methods. We source only the finest pure flora, essential oils, and sacred resins to
						ensure a premium, long-lasting aroma that elevates your sacred spaces.
					</p>
					<a href="/products/"
						class="inline-block px-8 py-3 border border-sugandhlok-maroon text-sugandhlok-maroon font-semibold uppercase tracking-widest text-sm hover:bg-sugandhlok-maroon hover:text-white transition-colors rounded-sm">Explore
						Our Collection</a>
				</div>
			</div>
		</section>

		<!-- Mission / Values -->
		<section class="py-16 bg-white">
			<div class="max-w-7xl mx-auto px-4 md:px-8">
				<div class="text-center mb-16" data-aos="fade-up">
					<h2 class="text-3xl md:text-4xl font-lora text-sugandhlok-maroon mb-4">Our Core Values</h2>
					<div class="w-16 h-1 bg-sugandhlok-peach mx-auto"></div>
				</div>

				<div class="grid grid-cols-1 md:grid-cols-3 gap-12 text-center">
					<div data-aos="fade-up" data-aos-delay="0">
						<div class="w-32 h-32 mx-auto rounded-full border-2 border-sugandhlok-peach p-2 mb-6">
							<img src="https://sugandhlok.com/cdn/shop/files/Natural_2x_fb33f089-f8be-4d0b-bbeb-e24077e027d7.png"
								alt="100% Natural" class="w-full h-full object-cover rounded-full">
						</div>
						<h3 class="font-lora text-xl text-gray-900 mb-3">100% Natural</h3>
						<p class="text-gray-600 text-sm leading-relaxed">Sourced directly from nature, our ingredients
							are completely free from synthetic chemicals, charcoal, and toxic fumes.</p>
					</div>

					<div data-aos="fade-up" data-aos-delay="100">
						<div class="w-32 h-32 mx-auto rounded-full border-2 border-sugandhlok-peach p-2 mb-6">
							<img src="https://sugandhlok.com/cdn/shop/files/Kind_2x_f40da00c-d95e-48f5-be6b-5d207c33038b.png"
								alt="Hand Crafted" class="w-full h-full object-cover rounded-full">
						</div>
						<h3 class="font-lora text-xl text-gray-900 mb-3">Hand Crafted</h3>
						<p class="text-gray-600 text-sm leading-relaxed">Each product is meticulously hand-rolled by
							skilled artisans preserving generations of traditional Indian craftsmanship.</p>
					</div>

					<div data-aos="fade-up" data-aos-delay="200">
						<div class="w-32 h-32 mx-auto rounded-full border-2 border-sugandhlok-peach p-2 mb-6">
							<img src="https://sugandhlok.com/cdn/shop/files/Responsible_2x_c956c29a-d632-4da0-b88a-2fd15962f1ec.png"
								alt="Ethical & Eco-friendly" class="w-full h-full object-cover rounded-full">
						</div>
						<h3 class="font-lora text-xl text-gray-900 mb-3">Ethical & Eco-friendly</h3>
						<p class="text-gray-600 text-sm leading-relaxed">We are deeply committed to sustainability and
							women empowerment, providing livelihoods to rural women across India.</p>
					</div>
				</div>
			</div>
		</section>

		<!-- Newsletter -->
		<section class="py-20 bg-sugandhlok-maroon text-white text-center">
			<div class="max-w-2xl mx-auto px-4" data-aos="zoom-in">
				<h2 class="text-3xl font-lora mb-4 text-sugandhlok-peach">Join Our Journey</h2>
				<p class="mb-8 font-light text-white/80">Subscribe to our newsletter for exclusive updates, spiritual
					insights, and special offers.</p>
				<form
					class="flex flex-col sm:flex-row gap-0 max-w-md mx-auto border border-sugandhlok-peach/30 rounded-sm overflow-hidden">
					<input type="email" placeholder="Your Email Address" required
						class="flex-1 bg-transparent px-4 py-3 text-white focus:outline-none placeholder-white/50 border-none">
					<button type="submit"
						class="bg-sugandhlok-peach text-sugandhlok-maroon font-bold px-6 py-3 hover:bg-white transition-colors">SUBSCRIBE</button>
				</form>
			</div>
		</section>

	</main>

	<?php get_footer(); ?>
	</body>

</html>
