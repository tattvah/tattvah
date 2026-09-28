<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=Cinzel:wght@500;600;700&family=Lora:ital,wght@0,400;0,500;0,600;1,400&family=Mulish:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400&display=swap"
		rel="stylesheet">

	<link rel="stylesheet" href='/wp-content/themes/tattvah/build/frontpage/frontpage.css?v6'>
	<script type="module" defer src='/wp-content/themes/tattvah/build/frontpage/frontpage.bundle.js?v6'></script>

	<?php
	$homeUrl = get_home_url();
	get_header();
	?>

	<main class="tattvah-home-page">

		<!-- ==============================================================
			 1. HERO SECTION: EDITORIAL SPLIT LUXURY HERO (NO SLIDER)
			 ============================================================== -->
		<section class="fp-hero">
			<div class="fp-hero__container">
				<!-- Left Column: Manifesto & Conversion Gateway -->
				<div class="fp-hero__content">
					<div class="fp-badge">
						<span class="fp-badge__icon">✦</span>
						100% Pure &amp; Charcoal-Free Botanicals
					</div>
					<h1 class="fp-hero__title">
						Sacred Rituals.<br>
						<span class="fp-hero__title-accent">Naturally Reimagined.</span>
					</h1>
					<p class="fp-hero__lead">
						Handcrafted from sacred temple flowers, pure natural resins, and therapeutic botanical oils.
						Zero charcoal, zero toxic fumes — born to sanctify your living spaces with pure devotion.
					</p>

					<div class="fp-hero__actions">
						<a href="#bestsellers" class="fp-btn fp-btn--primary">
							<span>Shop Bestsellers</span>
							<svg class="fp-btn__arrow" width="18" height="18" viewBox="0 0 24 24" fill="none"
								stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
								<line x1="5" y1="12" x2="19" y2="12"></line>
								<polyline points="12 5 19 12 12 19"></polyline>
							</svg>
						</a>
						<a href="/about-us/" class="fp-btn fp-btn--outline">
							<span>Our Sacred Story</span>
						</a>
					</div>

					<div class="fp-hero__pillars">
						<div class="fp-pillar-item">
							<div class="fp-pillar-icon">🌿</div>
							<div class="fp-pillar-text">
								<strong>100% Flora</strong>
								<span>Temple flowers &amp; herbs</span>
							</div>
						</div>
						<div class="fp-pillar-item">
							<div class="fp-pillar-icon">✨</div>
							<div class="fp-pillar-text">
								<strong>0% Charcoal</strong>
								<span>Clean, soot-free burn</span>
							</div>
						</div>
						<div class="fp-pillar-item">
							<div class="fp-pillar-icon">👐</div>
							<div class="fp-pillar-text">
								<strong>Artisanal</strong>
								<span>Hand-rolled by women</span>
							</div>
						</div>
					</div>
				</div>

				<!-- Right Column: Framed Editorial Visual Showcase -->
				<div class="fp-hero__visual">
					<!-- Floating Glassmorphic Badges -->
					<div class="fp-hero__float fp-hero__float--top">
						<span class="fp-float-icon">✦</span>
						<div class="fp-float-text">
							<strong>Sacred Temple Blooms</strong>
							<span>100% Ethically Reclaimed</span>
						</div>
					</div>

					<div class="fp-hero__float fp-hero__float--bottom">
						<div class="fp-float-stars">★★★★★</div>
						<div class="fp-float-text">
							<strong>4.9 / 5 Rating</strong>
							<span>Loved by 10,000+ homes</span>
						</div>
					</div>

					<div class="fp-hero__frame">
						<img src="https://m.media-amazon.com/images/I/61V5ueewtaL.jpg"
							alt="Pure Handcrafted Dhoop Cones and Sacred Rituals" class="fp-hero__main-img"
							fetchpriority="high">
						<div class="fp-slide-overlay">
							<p class="fp-slide-caption">
								<span>Sacred Fragrance &bull; Handcrafted</span>
								Pure Botanical Dhoop Cones &amp; Agarbatti
							</p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- ==============================================================
			 2. TRUST & PURITY BAR ("THE TATTVAH STANDARD")
			 ============================================================== -->
		<section class="fp-trust">
			<div class="fp-trust__container">
				<div class="fp-trust__item">
					<div class="fp-trust__icon-box">
						<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"
							stroke-linecap="round" stroke-linejoin="round">
							<path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
						</svg>
					</div>
					<div class="fp-trust__details">
						<h4>100% Charcoal-Free</h4>
						<p>Pure soothing aroma with zero black smoke, toxic soot, or headache-inducing fumes.</p>
					</div>
				</div>

				<div class="fp-trust__item">
					<div class="fp-trust__icon-box">
						<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"
							stroke-linecap="round" stroke-linejoin="round">
							<path d="M12 2C6.5 2 2 6.5 2 12c0 6 5 10 10 10s10-4 10-10c0-5.5-4.5-10-10-10z"></path>
							<path d="M12 6v6l4 2"></path>
						</svg>
					</div>
					<div class="fp-trust__details">
						<h4>Sacred Temple Blooms</h4>
						<p>Ethically gathered temple flowers granted an auspicious and divine second life.</p>
					</div>
				</div>

				<div class="fp-trust__item">
					<div class="fp-trust__icon-box">
						<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"
							stroke-linecap="round" stroke-linejoin="round">
							<path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
							<circle cx="9" cy="7" r="4"></circle>
							<path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
							<path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
						</svg>
					</div>
					<div class="fp-trust__details">
						<h4>Handcrafted by Artisans</h4>
						<p>Lovingly hand-rolled by empowered rural women craftspeople across India.</p>
					</div>
				</div>

				<div class="fp-trust__item">
					<div class="fp-trust__icon-box">
						<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"
							stroke-linecap="round" stroke-linejoin="round">
							<path d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z"></path>
						</svg>
					</div>
					<div class="fp-trust__details">
						<h4>Pure Therapeutic Oils</h4>
						<p>Infused with rare Ayurvedic gums, pure essential oils, and sacred botanical resins.</p>
					</div>
				</div>
			</div>
		</section>

		<!-- ==============================================================
			 3. CURATED COLLECTIONS ("SHOP BY RITUAL")
			 ============================================================== -->
		<section class="fp-collections">
			<div class="fp-collections__container">
				<div class="fp-section-header">
					<div class="fp-badge">
						<span class="fp-badge__icon">✦</span>
						Sacred Essentials
					</div>
					<h2 class="fp-section-title">Curated Collections</h2>
					<p class="fp-section-subtitle">Explore handcrafted fragrances thoughtfully created for daily
						prayers, meditation, and mindful living.</p>
					<div class="fp-divider">
						<span class="fp-divider__line"></span>
						<span class="fp-divider__icon">✦</span>
						<span class="fp-divider__line"></span>
					</div>
				</div>

				<div class="fp-collections__grid">
					<!-- Category 1: Agarbattis -->
					<div class="fp-category-card">
						<img src="https://phool.co/cdn/shop/articles/denis-oliveira-_12PwFpWZZ0-unsplash_2048x.jpg?v=1682486317"
							alt="Hand-Rolled Agarbattis" class="fp-category-card__bg">
						<div class="fp-category-card__overlay">
							<h3 class="fp-category-card__title">Sacred Agarbattis</h3>
							<p class="fp-category-card__desc">Long-burning flora incense sticks for daily prayers and
								serene living.</p>
							<a href="/products/" class="fp-category-card__link">
								Explore Collection <span class="arrow">&rarr;</span>
							</a>
						</div>
					</div>

					<!-- Category 2: Dhoop & Cones -->
					<div class="fp-category-card">
						<img src="https://m.media-amazon.com/images/I/61V5ueewtaL.jpg" alt="Botanical Dhoop Batti"
							class="fp-category-card__bg">
						<div class="fp-category-card__overlay">
							<h3 class="fp-category-card__title">Botanical Dhoop</h3>
							<p class="fp-category-card__desc">Dense, sacred herbal dhoop infused with pure loban,
								guggul, and sacred herbs.</p>
							<a href="/products/" class="fp-category-card__link">
								Explore Collection <span class="arrow">&rarr;</span>
							</a>
						</div>
					</div>

					<!-- Category 3: Sambrani & Cups -->
					<div class="fp-category-card">
						<img src="https://sugandhlok.com/cdn/shop/files/havan-cup-lifestyle-min.png"
							alt="Sambrani & Havan Cups" class="fp-category-card__bg">
						<div class="fp-category-card__overlay">
							<h3 class="fp-category-card__title">Sambrani Cups</h3>
							<p class="fp-category-card__desc">Traditional charcoal-free cups releasing pure purifying
								resin smoke.</p>
							<a href="/products/" class="fp-category-card__link">
								Explore Collection <span class="arrow">&rarr;</span>
							</a>
						</div>
					</div>

					<!-- Category 4: Festive Gift Sets -->
					<div class="fp-category-card">
						<img src="https://sugandhlok.com/cdn/shop/products/SugandhLok-AanganCollection-Ananda-1.jpg"
							alt="Artisanal Gift Sets" class="fp-category-card__bg">
						<div class="fp-category-card__overlay">
							<h3 class="fp-category-card__title">Artisan Gift Sets</h3>
							<p class="fp-category-card__desc">Consciously curated luxury boxes for festive occasions and
								warm gifting.</p>
							<a href="/products/" class="fp-category-card__link">
								Explore Collection <span class="arrow">&rarr;</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- ==============================================================
			 4. OUR BESTSELLERS SECTION
			 ============================================================== -->
		<section id="bestsellers" class="fp-bestsellers">
			<div class="fp-bestsellers__container">
				<div class="fp-section-header">
					<div class="fp-badge">
						<span class="fp-badge__icon">✦</span>
						Most Revered Rituals
					</div>
					<h2 class="fp-section-title">Our Bestsellers</h2>
					<p class="fp-section-subtitle">Crafted in small batches with unbroken tradition, pure devotion, and
						botanical integrity.</p>
					<div class="fp-divider">
						<span class="fp-divider__line"></span>
						<span class="fp-divider__icon">✦</span>
						<span class="fp-divider__line"></span>
					</div>
				</div>

				<div class="fp-products-grid">
					<?php
					$product_args = [
						'post_type' => 'product',
						'posts_per_page' => 8,
					];
					$bestsellers = get_posts($product_args);
					$rendered_count = 0;

					if ($bestsellers) {
						foreach ($bestsellers as $post) {
							setup_postdata($post);
							$rendered_count++;
							$selling_price = get_field('selling_price', $post->ID);
							$mrp = get_field('regular_price', $post->ID) ?: get_field('mrp', $post->ID);
							$product_img = get_field('gallery_image_1', $post->ID);
							if (is_array($product_img) && isset($product_img['url'])) {
								$product_img = $product_img['url'];
							} elseif (is_numeric($product_img)) {
								$product_img = wp_get_attachment_image_url($product_img, 'large');
							}
							if (!$product_img && has_post_thumbnail($post->ID)) {
								$product_img = get_the_post_thumbnail_url($post->ID, 'large');
							}
							// Fallback image removed per request
							$rating = get_field('average_rating', $post->ID) ?: 5;
							$full_stars = round(floatval($rating));
							$empty_stars = 5 - $full_stars;
							?>
							<div class="fp-product-card product-card">
								<a href="<?php the_permalink(); ?>" class="fp-product-card__media">
									<img src="<?php echo esc_url($product_img); ?>" alt="<?php the_title(); ?>"
										class="fp-product-card__img" loading="lazy">
									<span class="fp-product-card__badge">100% Flora</span>

									<!-- Quick Add Overlay (Triggers global cart drawer) -->
									<div class="fp-product-card__quick-add">
										<button class="add-to-cart-btn" data-id="<?php echo $post->ID; ?>"
											data-title="<?php echo esc_attr(get_the_title()); ?>"
											data-price="<?php echo esc_attr($selling_price ? $selling_price : 0); ?>"
											data-image="<?php echo esc_url($product_img); ?>">
											Quick Add &bull; Rs.
											<?php echo $selling_price ? number_format($selling_price) : '0'; ?>
										</button>
									</div>
								</a>

								<div class="fp-product-card__info">
									<div>
										<div class="fp-product-card__rating">
											<?php echo str_repeat('★', $full_stars) . str_repeat('☆', $empty_stars); ?>
										</div>
										<h3 class="fp-product-card__title">
											<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
										</h3>
									</div>

									<div class="fp-product-card__price-row">
										<?php if ($mrp && $mrp > $selling_price): ?>
											<span class="mrp">Rs. <?php echo number_format($mrp); ?></span>
										<?php endif; ?>
										<span class="selling-price">Rs.
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

				<div class="fp-bestsellers__action">
					<a href="/products/" class="fp-btn fp-btn--primary">
						<span>View All Products</span>
						<svg class="fp-btn__arrow" width="18" height="18" viewBox="0 0 24 24" fill="none"
							stroke="currentColor" stroke-width="2">
							<line x1="5" y1="12" x2="19" y2="12"></line>
							<polyline points="12 5 19 12 12 19"></polyline>
						</svg>
					</a>
				</div>
			</div>
		</section>

		<!-- ==============================================================
			 5. THE TATTVAH DIFFERENCE (CONSCIOUS CHOICE VS CONVENTIONAL)
			 ============================================================== -->
		<section class="fp-difference">
			<div class="fp-difference__container">
				<div class="fp-section-header">
					<div class="fp-badge">
						<span class="fp-badge__icon">✦</span>
						Conscious Devotion
					</div>
					<h2 class="fp-section-title">The Tattvah Difference</h2>
					<p class="fp-section-subtitle">Experience the contrast between mass-manufactured chemical incense
						and pure botanical craft.</p>
					<div class="fp-divider">
						<span class="fp-divider__line"></span>
						<span class="fp-divider__icon">✦</span>
						<span class="fp-divider__line"></span>
					</div>
				</div>

				<div class="fp-difference__grid">
					<!-- Card 1: Conventional Incense -->
					<div class="fp-diff-card fp-diff-card--conventional">
						<span class="fp-diff-card__badge">Conventional Incense</span>
						<h3 class="fp-diff-card__title">Mass Chemical Sticks</h3>
						<ul class="fp-diff-card__list">
							<li class="fp-diff-item">
								<div class="fp-diff-icon">&times;</div>
								<div class="fp-diff-text">
									<strong>Toxic Charcoal &amp; Sawdust Base</strong>
									<p>Uses industrial black coal powder and harsh binding chemicals that create heavy
										soot.</p>
								</div>
							</li>
							<li class="fp-diff-item">
								<div class="fp-diff-icon">&times;</div>
								<div class="fp-diff-text">
									<strong>Synthetic Chemical Fragrance Oils</strong>
									<p>Dipped in petroleum-derived scents, synthetic fixatives, and artificial
										aromachemicals.</p>
								</div>
							</li>
							<li class="fp-diff-item">
								<div class="fp-diff-icon">&times;</div>
								<div class="fp-diff-text">
									<strong>Causes Coughing &amp; Dark Residue</strong>
									<p>Heavy smoke clogs indoor room air and irritates respiratory health in children
										and elders.</p>
								</div>
							</li>
							<li class="fp-diff-item">
								<div class="fp-diff-icon">&times;</div>
								<div class="fp-diff-text">
									<strong>Soulless Machine Production</strong>
									<p>Extruded rapidly by automated factory machines with no cultural or spiritual
										devotion.</p>
								</div>
							</li>
						</ul>
					</div>

					<!-- Card 2: Tattvah Divine Agarbatti -->
					<div class="fp-diff-card fp-diff-card--tattvah">
						<span class="fp-diff-card__badge">Tattvah Sacred Flora</span>
						<h3 class="fp-diff-card__title">Pure Earth-Born Incense</h3>
						<ul class="fp-diff-card__list">
							<li class="fp-diff-item">
								<div class="fp-diff-icon">&#10003;</div>
								<div class="fp-diff-text">
									<strong>100% Charcoal-Free Temple Flower Base</strong>
									<p>Crafted exclusively from dried sacred temple flowers, tree gums, and rare Indian
										resins.</p>
								</div>
							</li>
							<li class="fp-diff-item">
								<div class="fp-diff-icon">&#10003;</div>
								<div class="fp-diff-text">
									<strong>Therapeutic Essential Oils &amp; Resins</strong>
									<p>Enriched with authentic Ayurvedic botanical extracts, pure loban, guggul, and
										sacred herbs.</p>
								</div>
							</li>
							<li class="fp-diff-item">
								<div class="fp-diff-icon">&#10003;</div>
								<div class="fp-diff-text">
									<strong>Clean, Soot-Free &amp; Pure Air</strong>
									<p>Releases gentle, calming therapeutic aroma safe for indoor living, babies, and
										beloved pets.</p>
								</div>
							</li>
							<li class="fp-diff-item">
								<div class="fp-diff-icon">&#10003;</div>
								<div class="fp-diff-text">
									<strong>Hand-Rolled by Rural Women Artisans</strong>
									<p>Each stick is infused with conscious care, providing fair dignified livelihood to
										rural craftswomen.</p>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</section>

		<!-- ==============================================================
			 6. THE ESSENCE OF TATTVAH (SACRED HERITAGE & PILLARS)
			 ============================================================== -->
		<section class="fp-essence">
			<div class="fp-essence__container">
				<div class="fp-section-header fp-section-header--light">
					<div class="fp-badge">
						<span class="fp-badge__icon">✦</span>
						Our Sacred Roots
					</div>
					<h2 class="fp-section-title">The Essence of Tattvah</h2>
					<div class="fp-divider">
						<span class="fp-divider__line"></span>
						<span class="fp-divider__icon">✦</span>
						<span class="fp-divider__line"></span>
					</div>
				</div>

				<div class="fp-essence__quote-box">
					<blockquote class="fp-essence__quote">
						“At Tattvah, we believe rituals are sacred, and the elements we use should be pure. When you
						light an agarbatti, you invite divine stillness into your home.”
					</blockquote>
					<p class="fp-essence__story">
						Tattvah stands as a testament to India's rich heritage of agarbatti and dhoop making. Since our
						inception, our mission has been to provide fragrances that are rooted in tradition and crafted
						with utmost purity. With a commitment to ethical sourcing and women empowerment, every stick is
						a promise of quality and devotion.
					</p>
				</div>

				<div class="fp-essence__grid">
					<!-- Pillar 1 -->
					<div class="fp-essence-card feature-col">
						<div class="fp-essence-emblem">
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"
								stroke-linecap="round" stroke-linejoin="round">
								<path d="M18 11V6a2 2 0 0 0-2-2v0a2 2 0 0 0-2 2v0"></path>
								<path d="M14 10V4a2 2 0 0 0-2-2v0a2 2 0 0 0-2 2v2"></path>
								<path d="M10 10.5V6a2 2 0 0 0-2-2v0a2 2 0 0 0-2 2v8"></path>
								<path
									d="M18 8a2 2 0 1 1 4 0v6a8 8 0 0 1-8 8h-2c-2.8 0-4.5-.86-5.99-2.34l-3.6-3.6a2 2 0 0 1 2.83-2.82L7 15">
								</path>
							</svg>
						</div>
						<h3 class="fp-essence-card__title">HAND CRAFTED</h3>
						<p class="fp-essence-card__desc">Every Tattvah product is lovingly hand-rolled using authentic,
							time-honored methods to ensure premium quality.</p>
					</div>

					<!-- Pillar 2 -->
					<div class="fp-essence-card feature-col">
						<div class="fp-essence-emblem">
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"
								stroke-linecap="round" stroke-linejoin="round">
								<path d="M12 2a10 10 0 0 1 10 10c0 5.52-4.48 10-10 10S2 17.52 2 12A10 10 0 0 1 12 2z">
								</path>
								<path d="M12 6c-3.31 0-6 2.69-6 6 0 2.22 1.21 4.15 3 5.19"></path>
								<path d="M12 6v6l4 2"></path>
								<circle cx="12" cy="12" r="2" fill="currentColor"></circle>
							</svg>
						</div>
						<h3 class="fp-essence-card__title">100% NATURAL</h3>
						<p class="fp-essence-card__desc">Crafted from pure flora, essential oils, and sacred resins.
							Completely free of charcoal and toxic fumes.</p>
					</div>

					<!-- Pillar 3 -->
					<div class="fp-essence-card feature-col">
						<div class="fp-essence-emblem">
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"
								stroke-linecap="round" stroke-linejoin="round">
								<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
								<path d="M9 12l2 2 4-4"></path>
							</svg>
						</div>
						<h3 class="fp-essence-card__title">ETHICAL &amp; ECO</h3>
						<p class="fp-essence-card__desc">Eco-safe, biodegradable, and cruelty-free. We proudly empower
							rural women artisans across India.</p>
					</div>
				</div>
			</div>
		</section>

		<!-- ==============================================================
			 7. SENSORY RITUALS (HOW SACRED FRAGRANCE ELEVATES LIVING)
			 ============================================================== -->
		<section class="fp-rituals">
			<div class="fp-rituals__container">
				<div class="fp-section-header">
					<div class="fp-badge">
						<span class="fp-badge__icon">✦</span>
						Daily Rhythms
					</div>
					<h2 class="fp-section-title">The Art of Sacred Living</h2>
					<p class="fp-section-subtitle">Three timeless ways our pure botanical aromas elevate your daily
						well-being.</p>
					<div class="fp-divider">
						<span class="fp-divider__line"></span>
						<span class="fp-divider__icon">✦</span>
						<span class="fp-divider__line"></span>
					</div>
				</div>

				<div class="fp-rituals__grid">
					<!-- Ritual 1 -->
					<div class="fp-ritual-card">
						<div class="fp-ritual-card__media">
							<img src="https://images.unsplash.com/photo-1602192509154-0b900ee1f851?auto=format&fit=crop&w=800&q=80"
								alt="Dawn Devotion &amp; Puja" class="fp-ritual-card__img" loading="lazy">
						</div>
						<div class="fp-ritual-card__content">
							<div class="fp-ritual-icon">🌅</div>
							<h3>Dawn Devotion &amp; Puja</h3>
							<p>Begin your morning by lighting natural champa and sandalwood incense. Awaken conscious
								intention, align your chakra energies, and invite serene calm into your sacred altar.
							</p>
						</div>
					</div>

					<!-- Ritual 2 -->
					<div class="fp-ritual-card">
						<div class="fp-ritual-card__media">
							<img src="https://sugandhlok.com/cdn/shop/files/havan-cup-lifestyle-min.png"
								alt="Space Purification" class="fp-ritual-card__img" loading="lazy">
						</div>
						<div class="fp-ritual-card__content">
							<div class="fp-ritual-icon">✨</div>
							<h3>Space Purification</h3>
							<p>Dispel stagnant domestic energies with our charcoal-free Loban and Sambrani havan cups.
								Ancient Vedic resins purify room air, creating an uplifting sanctuary of spiritual
								peace.
							</p>
						</div>
					</div>

					<!-- Ritual 3 -->
					<div class="fp-ritual-card">
						<div class="fp-ritual-card__media">
							<img src="https://images.unsplash.com/photo-1506126613408-eca07ce68773?auto=format&fit=crop&w=800&q=80"
								alt="Dusk Serenity &amp; Sleep" class="fp-ritual-card__img" loading="lazy">
						</div>
						<div class="fp-ritual-card__content">
							<div class="fp-ritual-icon">🌙</div>
							<h3>Dusk Serenity &amp; Sleep</h3>
							<p>Quiet the mind after a demanding day. Ethereal botanical smoke releases gentle terpenes
								that
								dissolve anxiety, calm the nervous system, and prepare the soul for restorative sleep.
							</p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- ==============================================================
			 8. JOURNAL & ARTICLES SECTION
			 ============================================================== -->
		<section class="fp-journal">
			<div class="fp-journal__container">
				<div class="fp-section-header">
					<div class="fp-badge">
						<span class="fp-badge__icon">✦</span>
						Ayurvedic Wisdom &amp; Stories
					</div>
					<h2 class="fp-section-title">From The Tattvah Journal</h2>
					<p class="fp-section-subtitle">Explore stories of Indian botanical traditions, sacred rituals, and
						mindful living.</p>
					<div class="fp-divider">
						<span class="fp-divider__line"></span>
						<span class="fp-divider__icon">✦</span>
						<span class="fp-divider__line"></span>
					</div>
				</div>

				<div class="fp-journal__grid">
					<?php
					$blog_args = [
						'post_type' => 'blog',
						'posts_per_page' => 2,
					];
					$blogs = get_posts($blog_args);
					$blog_count = 0;

					if ($blogs) {
						foreach ($blogs as $post) {
							setup_postdata($post);
							$blog_count++;
							$banner = get_field('listing_image', $post->ID) ?: get_field('banner_image', $post->ID);
							if (is_array($banner) && isset($banner['url'])) {
								$banner = $banner['url'];
							} elseif (is_numeric($banner)) {
								$banner = wp_get_attachment_image_url($banner, 'large');
							}
							// Fallback image removed per request
							$read_time = get_field('read_time', $post->ID) ?: '4 min read';
							?>
							<article class="fp-blog-card blog-card">
								<a href="<?php the_permalink(); ?>" class="fp-blog-card__media">
									<img src="<?php echo esc_url($banner); ?>" alt="<?php the_title(); ?>"
										class="fp-blog-card__img" loading="lazy">
								</a>
								<div class="fp-blog-card__content">
									<div class="fp-blog-card__meta">
										<span><?php echo get_the_date('M d, Y'); ?></span>
										<span class="meta-dot">&bull;</span>
										<span><?php echo esc_html($read_time); ?></span>
									</div>
									<h3 class="fp-blog-card__title">
										<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
									</h3>
									<div class="fp-blog-card__excerpt">
										<p><?php echo wp_trim_words(get_the_excerpt(), 22, '...'); ?></p>
									</div>
									<a href="<?php the_permalink(); ?>" class="fp-blog-card__link">
										<span>Read Full Article</span>
										<span class="arrow">&rarr;</span>
									</a>
								</div>
							</article>
							<?php
						}
						wp_reset_postdata();
					}

					// Fallbacks removed per request
					?>
				</div>

				<div class="fp-journal__action">
					<a href="/blogs/" class="fp-btn fp-btn--outline">
						<span>Explore All Journals</span>
						<svg class="fp-btn__arrow" width="18" height="18" viewBox="0 0 24 24" fill="none"
							stroke="currentColor" stroke-width="2">
							<line x1="5" y1="12" x2="19" y2="12"></line>
							<polyline points="12 5 19 12 12 19"></polyline>
						</svg>
					</a>
				</div>
			</div>
		</section>

		<!-- ==============================================================
			 9. SANCTUARY COMMUNITY / NEWSLETTER
			 ============================================================== -->
		<section class="fp-newsletter">
			<div class="fp-newsletter__banner">
				<div class="fp-badge">
					<span class="fp-badge__icon">✦</span>
					The Tattvah Circle
				</div>
				<h2 class="fp-newsletter__title">Step Into A Sanctuary of Purity</h2>
				<p class="fp-newsletter__subtitle">
					Join our conscious living circle. Enjoy 10% off your first ritual order, early access to festive
					collections, and Ayurvedic wellness insights.
				</p>

				<form class="fp-newsletter__form"
					onsubmit="event.preventDefault(); alert('Thank you for joining the Tattvah Sanctuary circle!');">
					<input type="email" required placeholder="Enter your email address..." class="fp-newsletter__input"
						aria-label="Email address for newsletter">
					<button type="submit" class="fp-newsletter__btn">Join Sanctuary</button>
				</form>
				<p class="fp-newsletter__disclaimer">Pure devotion, zero spam. Unsubscribe at any time.</p>
			</div>
		</section>

	</main>

	<?php get_footer(); ?>

	</body>

</html>