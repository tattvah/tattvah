<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500;600;700&family=Lora:ital,wght@0,400;0,500;0,600;1,400;1,500&family=Mulish:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href='/wp-content/themes/tattvah/build/aboutUs/aboutUs.css?v6'>
    <script type="module" defer src='/wp-content/themes/tattvah/build/aboutUs/aboutUs.bundle.js?v6'></script>

    <?php
    $homeUrl = get_home_url();
    get_header();
    ?>

    <main class="tattvah-about-page">
        <!-- ==============================================================
             1. HERO SECTION: OUR ESSENCE & AUTHENTIC RITUAL
             ============================================================== -->
        <section class="about-hero" data-aos="fade-up">
            <div class="about-hero__inner">
                <div class="about-hero__header">
                    <span class="hero-badge">OUR ESSENCE</span>
                    <h1 class="hero-title">About TATTVAH</h1>
                    <p class="hero-tagline">Rooted in Tradition. Inspired by Nature. Made for Today.</p>
                    <div class="header-divider" aria-hidden="true">
                        <span class="divider-line"></span>
                        <span class="divider-icon">✦</span>
                        <span class="divider-line"></span>
                    </div>
                </div>

                <!-- Editorial Cinematic Image Frame -->
                <div class="about-hero__frame-container" data-aos="fade-up" data-aos-delay="150">
                    <div class="about-hero__frame">
                        <img src="<?php echo get_theme_file_uri('public/assets/about/about-hero-ritual.jpg'); ?>"
                            alt="Sacred Indian morning incense rituals with brass burner and fresh marigolds"
                            class="about-hero__image" fetchpriority="high">
                        <div class="about-hero__caption-card">
                            <span class="caption-icon">✦</span>
                            <div class="caption-text">
                                <strong>Sacred Temple Botanicals</strong>
                                <span>100% Charcoal-Free &bull; Pure Devotion</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="about-container">
            <!-- ==============================================================
                 2. FOUNDING STORY: FROM FRIENDSHIP TO TATTVAH (CLIENT CONTENT)
                 ============================================================== -->
            <section class="about-story-section" data-aos="fade-up">
                <div class="story-grid">
                    <!-- Left Column: Documentary Craft Visual & Client Spark Question -->
                    <div class="story-quote-card" data-aos="fade-right">
                        <div class="craft-img-frame">
                            <img src="<?php echo get_theme_file_uri('public/assets/about/about-craft-hands.jpg'); ?>"
                                alt="Indian craftswoman hand-rolling botanical incense in traditional workshop"
                                class="craft-img">
                            <span class="craft-badge">Hand-Rolled in Small Batches</span>
                        </div>
                        <p class="quote-question">“Why are we moving so far away from the natural and traditional ways
                            that have been part of our lives for generations?”</p>
                        <span class="quote-note">The question that sparked our journey</span>
                        <div class="milestone-tags">
                            <span class="tag">Founded in 2023</span>
                            <span class="tag">Two Friends, One Vision</span>
                            <span class="tag">Indian Traditional Roots</span>
                        </div>
                    </div>

                    <!-- Right Column: Story Narrative Content (100% Client Content) -->
                    <div class="story-content" data-aos="fade-left">
                        <span class="section-eyebrow">OUR BEGINNING</span>
                        <h2 class="section-title">From Friendship to TATTVAH</h2>
                        <p class="story-paragraph story-highlight">
                            TATTVAH started with two friends and a shared curiosity about something simple: why are we
                            moving so far away from the natural and traditional ways that have been part of our lives
                            for generations?
                        </p>
                        <p class="story-paragraph">
                            Our journey began in 2023, through conversations, ideas, and a growing interest in India's
                            traditional products and natural materials.
                        </p>
                        <p class="story-paragraph">
                            We discovered that many of the simplest things around us carry a deeper connection to our
                            homes, our rituals, our culture, and nature.
                        </p>
                        <p class="story-paragraph story-highlight">
                            That thought became the beginning of TATTVAH.
                        </p>
                    </div>
                </div>
            </section>

            <!-- ==============================================================
                 3. PHILOSOPHY SECTION: WHAT WE BELIEVE (100% CLIENT CONTENT)
                 ============================================================== -->
            <section class="about-philosophy-section" data-aos="fade-up">
                <div class="philosophy-banner">
                    <span class="section-eyebrow">OUR PHILOSOPHY</span>
                    <h2 class="section-title">What We Believe</h2>
                    <p class="central-belief">
                        “At TATTVAH, we believe that tradition doesn't have to stay in the past. <strong>It can become a
                            meaningful part of modern life.</strong>”
                    </p>
                </div>

                <div class="philosophy-cards-grid">
                    <!-- Philosophy Card 1 -->
                    <div class="philosophy-card" data-aos="fade-up" data-aos-delay="100">
                        <div class="card-icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
                            </svg>
                        </div>
                        <h3 class="card-title">Nature &amp; Conscious Living</h3>
                        <p class="card-text">
                            We explore products inspired by nature, Indian traditions, simplicity, and conscious living,
                            and present them in a way that feels relevant to today's homes.
                        </p>
                    </div>

                    <!-- Philosophy Card 2 -->
                    <div class="philosophy-card" data-aos="fade-up" data-aos-delay="200">
                        <div class="card-icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path
                                    d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="card-title">Purpose &amp; A Meaningful Story</h3>
                        <p class="card-text">
                            From traditional essentials to natural everyday products, we focus on creating and bringing
                            together products that have a purpose and a story behind them.
                        </p>
                    </div>
                </div>
            </section>

            <!-- ==============================================================
                 4. GUIDING PRINCIPLES: OUR APPROACH (100% CLIENT CONTENT)
                 ============================================================== -->
            <section class="about-approach-section" data-aos="fade-up">
                <div class="section-header-center">
                    <span class="section-eyebrow">GUIDING PRINCIPLES</span>
                    <h2 class="section-title">Our Approach</h2>
                    <p class="section-sub">We believe in conscious choices and respectful craftsmanship:</p>
                </div>

                <div class="pillars-grid">
                    <!-- Pillar 1 -->
                    <div class="pillar-card" data-aos="fade-up" data-aos-delay="50">
                        <span class="pillar-num">01</span>
                        <h3 class="pillar-title">Respecting traditional knowledge</h3>
                        <p class="pillar-desc">Honoring centuries-old Indian ritual practices, heritage recipes, and
                            time-tested wisdom.</p>
                    </div>

                    <!-- Pillar 2 -->
                    <div class="pillar-card" data-aos="fade-up" data-aos-delay="100">
                        <span class="pillar-num">02</span>
                        <h3 class="pillar-title">Choosing natural materials where possible</h3>
                        <p class="pillar-desc">Prioritizing natural ingredients, botanical extracts, and authentic
                            elements for everyday wellness.</p>
                    </div>

                    <!-- Pillar 3 -->
                    <div class="pillar-card" data-aos="fade-up" data-aos-delay="150">
                        <span class="pillar-num">03</span>
                        <h3 class="pillar-title">Keeping things simple and meaningful</h3>
                        <p class="pillar-desc">Stripping away clutter to focus on pure purpose, serenity, and honest
                            value for your home.</p>
                    </div>

                    <!-- Pillar 4 -->
                    <div class="pillar-card" data-aos="fade-up" data-aos-delay="200">
                        <span class="pillar-num">04</span>
                        <h3 class="pillar-title">Paying attention to quality and details</h3>
                        <p class="pillar-desc">Ensuring meticulous care in every blend, sensory profile, burn time, and
                            packaging finish.</p>
                    </div>

                    <!-- Pillar 5 -->
                    <div class="pillar-card" data-aos="fade-up" data-aos-delay="250">
                        <span class="pillar-num">05</span>
                        <h3 class="pillar-title">Creating products that fit naturally into modern lifestyles</h3>
                        <p class="pillar-desc">Designing seamless, aesthetically elevated essentials tailored for
                            contemporary living.</p>
                    </div>
                </div>

                <!-- Core Mantra Box (100% Client Content) -->
                <div class="approach-mantra-box" data-aos="fade-up" data-aos-delay="300">
                    <p class="mantra-intro">TATTVAH is still at the beginning of its journey. But the thought behind it
                        is simple:</p>
                    <p class="mantra-highlight">“Go back to the essence. Choose thoughtfully. Live meaningfully.”</p>
                </div>
            </section>

            <!-- ==============================================================
                 5. THE FIVE ELEMENTS OF TATTVAH: INTERACTIVE SACRED SANCTUARY
                 ============================================================== -->
            <section class="about-elements-section" data-aos="fade-up">
                <div class="section-center-head">
                    <span class="section-eyebrow">ANCIENT WISDOM</span>
                    <h2 class="section-title">The Five Elements of Tattvah</h2>
                    <p class="section-subtitle">
                        In Sanskrit philosophy, <em>Tattva</em> (तत्व) signifies the primordial building blocks of
                        reality. Explore how each sacred element guides our botanical craft:
                    </p>
                    <div class="ornamental-divider">
                        <span class="divider-leaf">❧</span>
                    </div>
                </div>

                <!-- Interactive Element Selector Pills -->
                <div class="element-tabs-nav" role="tablist">
                    <button class="element-tab-btn active" data-element="prithvi" role="tab" aria-selected="true">
                        <span class="tab-glyph">पृथ्वी</span>
                        <span class="tab-label">Prithvi &bull; Earth</span>
                    </button>
                    <button class="element-tab-btn" data-element="jal" role="tab" aria-selected="false">
                        <span class="tab-glyph">जल</span>
                        <span class="tab-label">Jal &bull; Water</span>
                    </button>
                    <button class="element-tab-btn" data-element="agni" role="tab" aria-selected="false">
                        <span class="tab-glyph">अग्नि</span>
                        <span class="tab-label">Agni &bull; Fire</span>
                    </button>
                    <button class="element-tab-btn" data-element="vayu" role="tab" aria-selected="false">
                        <span class="tab-glyph">वायु</span>
                        <span class="tab-label">Vayu &bull; Air</span>
                    </button>
                    <button class="element-tab-btn" data-element="akasha" role="tab" aria-selected="false">
                        <span class="tab-glyph">आकाश</span>
                        <span class="tab-label">Akasha &bull; Space</span>
                    </button>
                </div>

                <!-- Interactive Element Showcase Stage -->
                <div class="element-showcase-stage">
                    <!-- Panel 1: Prithvi -->
                    <div class="element-panel active" id="panel-prithvi">
                        <div class="panel-badge-col">
                            <div class="element-seal">
                                <span class="seal-sanskrit">पृथ्वी</span>
                                <span class="seal-sub">Prithvi</span>
                            </div>
                            <span class="panel-highlight-pill">Charcoal-Free Earth Base</span>
                        </div>
                        <div class="panel-content-col">
                            <span class="panel-kicker">THE FIRST ELEMENT &bull; EARTH</span>
                            <h3 class="panel-title">Sacred Cow Dung, Natural Clay &amp; Botanical Herbs</h3>
                            <p class="panel-lead">
                                Earth is the foundation of all matter, grounding our existence in physical purity. At
                                Tattvah, we honor the earth element by refusing toxic industrial black coal powder and
                                chemical binding sawdust.
                            </p>
                            <div class="panel-features-grid">
                                <div class="feature-item">
                                    <strong>Indigenous Desi Cow Dung</strong>
                                    <p>Naturally sun-dried cow dung sourced with care, revered in Vedic havan for
                                        centuries for its purifying qualities.</p>
                                </div>
                                <div class="feature-item">
                                    <strong>Sacred Herbal Bark &amp; Roots</strong>
                                    <p>Pure powdered wood, natural joss tree bark, and botanical resins form our clean
                                        organic dough.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Panel 2: Jal -->
                    <div class="element-panel" id="panel-jal">
                        <div class="panel-badge-col">
                            <div class="element-seal">
                                <span class="seal-sanskrit">जल</span>
                                <span class="seal-sub">Jal</span>
                            </div>
                            <span class="panel-highlight-pill">Pure Floral Hydrosols</span>
                        </div>
                        <div class="panel-content-col">
                            <span class="panel-kicker">THE SECOND ELEMENT &bull; WATER</span>
                            <h3 class="panel-title">Steam-Distilled Temple Floral Waters &amp; Essences</h3>
                            <p class="panel-lead">
                                Water is the principle of fluidity, life, and emotional calm. We knead our botanical
                                incense paste not with harsh chemical solvents, but with natural floral waters.
                            </p>
                            <div class="panel-features-grid">
                                <div class="feature-item">
                                    <strong>Damask Rose &amp; Jasmine Waters</strong>
                                    <p>Hydro-distilled pure rose water that lends a subtle, delicate sweetness to the
                                        natural fragrance dough.</p>
                                </div>
                                <div class="feature-item">
                                    <strong>Zero Petrochemical Solvents</strong>
                                    <p>Completely free of DEP (Diethyl Phthalate) and industrial alcohol compounds
                                        commonly used in mass factories.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Panel 3: Agni -->
                    <div class="element-panel" id="panel-agni">
                        <div class="panel-badge-col">
                            <div class="element-seal">
                                <span class="seal-sanskrit">अग्नि</span>
                                <span class="seal-sub">Agni</span>
                            </div>
                            <span class="panel-highlight-pill">Zero Black Soot</span>
                        </div>
                        <div class="panel-content-col">
                            <span class="panel-kicker">THE THIRD ELEMENT &bull; FIRE</span>
                            <h3 class="panel-title">Gentle, Soot-Free Auspicious Smoulder</h3>
                            <p class="panel-lead">
                                Fire transforms the physical into the ethereal. When you light a Tattvah dhoop cone or
                                stick, the clean botanical blend smoulders gently, without dark chemical smoke.
                            </p>
                            <div class="panel-features-grid">
                                <div class="feature-item">
                                    <strong>Silky White Sacred Ash</strong>
                                    <p>Burns completely to fine, pure white ash — the hallmark of pure, charcoal-free
                                        botanical ingredients.</p>
                                </div>
                                <div class="feature-item">
                                    <strong>Gentle Temperature Curve</strong>
                                    <p>Smoulders at an optimal, steady pace without scorching the delicate natural
                                        aromatic oils.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Panel 4: Vayu -->
                    <div class="element-panel" id="panel-vayu">
                        <div class="panel-badge-col">
                            <div class="element-seal">
                                <span class="seal-sanskrit">वायु</span>
                                <span class="seal-sub">Vayu</span>
                            </div>
                            <span class="panel-highlight-pill">Air Purifying Resins</span>
                        </div>
                        <div class="panel-content-col">
                            <span class="panel-kicker">THE FOURTH ELEMENT &bull; AIR</span>
                            <h3 class="panel-title">Therapeutic Living Aroma &amp; Sacred Smoke</h3>
                            <p class="panel-lead">
                                Air carries the fragrance of devotion through your sanctuary. Infused with authentic
                                Loban (Benzoin), Guggul, Sandalwood, and Camphor, releasing an aroma that clears
                                stagnant energy.
                            </p>
                            <div class="panel-features-grid">
                                <div class="feature-item">
                                    <strong>Natural Air Purifier</strong>
                                    <p>Ancient Ayurvedic resins contain natural antibacterial properties that help
                                        refresh indoor living spaces.</p>
                                </div>
                                <div class="feature-item">
                                    <strong>Respiratory-Safe Aroma</strong>
                                    <p>Clean, breathable, and soothing for homes with elders, meditation practitioners,
                                        and beloved pets.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Panel 5: Akasha -->
                    <div class="element-panel" id="panel-akasha">
                        <div class="panel-badge-col">
                            <div class="element-seal">
                                <span class="seal-sanskrit">आकाश</span>
                                <span class="seal-sub">Akasha</span>
                            </div>
                            <span class="panel-highlight-pill">Mindful Living</span>
                        </div>
                        <div class="panel-content-col">
                            <span class="panel-kicker">THE FIFTH ELEMENT &bull; SPACE</span>
                            <h3 class="panel-title">Sanctuary of Inner Stillness &amp; Presence</h3>
                            <p class="panel-lead">
                                Space is the silent canvas in which life unfolds. The ultimate purpose of Tattvah is to
                                help you carve out a sacred sanctuary of peace within the busyness of contemporary life.
                            </p>
                            <div class="panel-features-grid">
                                <div class="feature-item">
                                    <strong>Ritual of Stillness</strong>
                                    <p>An intentional morning and evening pause that centers the mind and invites serene
                                        reflection.</p>
                                </div>
                                <div class="feature-item">
                                    <strong>Sacred Home Ambiance</strong>
                                    <p>Elevating ordinary rooms into spaces of grace, mindfulness, and divine
                                        tranquility.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- ==============================================================
                 6. THE ARTISANAL JOURNEY: TEMPLE TO SANCTUARY
                 ============================================================== -->
            <section class="about-journey-section" data-aos="fade-up">
                <div class="journey-grid">
                    <!-- Left: Narrative Steps -->
                    <div class="journey-content">
                        <span class="section-eyebrow">OUR CRAFT</span>
                        <h2 class="section-title">The Artisanal Journey</h2>
                        <p class="journey-intro">
                            Every single stick and dhoop cone undergoes a slow, dignified craft journey that honors
                            nature at every milestone:
                        </p>

                        <div class="journey-steps">
                            <div class="journey-step" data-aos="fade-up" data-aos-delay="100">
                                <div class="step-badge">1</div>
                                <div class="step-info">
                                    <h4>Reclaiming Sacred Temple Blooms</h4>
                                    <p>Discarded floral offerings from local shrines — marigolds, roses, and champa —
                                        are respectfully gathered before they pollute sacred rivers, giving sacred
                                        flowers a divine second life.</p>
                                </div>
                            </div>

                            <div class="journey-step" data-aos="fade-up" data-aos-delay="150">
                                <div class="step-badge">2</div>
                                <div class="step-info">
                                    <h4>Solar Drying &amp; Botanical Churning</h4>
                                    <p>Sun-dried under open skies, the petals are gently ground and blended with pure
                                        crushed herbs, natural wood bark, and organic Ayurvedic gums without any
                                        chemical binders.</p>
                                </div>
                            </div>

                            <div class="journey-step" data-aos="fade-up" data-aos-delay="200">
                                <div class="step-badge">3</div>
                                <div class="step-info">
                                    <h4>Hand-Rolled by Rural Artisans</h4>
                                    <p>Lovingly hand-rolled one by one by self-help groups of rural women craftspeople,
                                        upholding an age-old artisanal trade while securing dignified livelihoods for
                                        their families.</p>
                                </div>
                            </div>

                            <div class="journey-step" data-aos="fade-up" data-aos-delay="250">
                                <div class="step-badge">4</div>
                                <div class="step-info">
                                    <h4>Sacred Resin &amp; Essential Oil Bath</h4>
                                    <p>Finished cones and sticks are naturally aged and infused with pure plant resins
                                        (Loban, Guggal, Benzoin) and pure essential oils for a soothing, non-toxic
                                        aromatic profile.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right: Raw Materials Flatlay Visual -->
                    <div class="journey-visual" data-aos="fade-left">
                        <div class="journey-image-wrapper">
                            <img src="<?php echo get_theme_file_uri('public/assets/about/about-botanical-elements.jpg'); ?>"
                                alt="Pure Ayurvedic ingredients: Sandalwood, Loban resin, Damask rose petals and brass diya"
                                class="journey-img">
                            <div class="journey-overlay-badge">
                                <strong>100% Purity Verified</strong>
                                <span>Zero synthetic phthalates or coal</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- ==============================================================
                 7. OUR PROMISE & BRAND SIGNATURE (100% CLIENT CONTENT)
                 ============================================================== -->
            <section class="about-promise-banner" data-aos="fade-up">
                <span class="promise-eyebrow">OUR COMMITMENT</span>
                <h2 class="promise-title">Our Promise</h2>
                <p class="promise-text">
                    We aim to build TATTVAH with honesty, curiosity, and responsibility, one product at a time.
                </p>
                <div class="brand-closing-box">
                    <img src="<?php echo get_theme_file_uri('public/assets/Logo.svg'); ?>" alt="Tattvah Logo"
                        style="max-height: 80px; width: auto; margin: 0 auto 15px; filter: brightness(0) invert(1);">
                    <p class="brand-tagline">Rooted in Tradition. Inspired by Nature. Made for Today.</p>
                    <div class="action-buttons">
                        <a href="/products/" class="btn-gold">Explore Products</a>
                        <a href="/contact-us/" class="btn-outline">Contact Us</a>
                    </div>
                </div>
            </section>

            <!-- ==============================================================
                 8. FREQUENTLY ASKED QUESTIONS (100% CLIENT CONTENT - ALL 11)
                 ============================================================== -->
            <section class="about-faq-section" data-aos="fade-up">
                <header class="faq-header">
                    <span class="faq-badge">HAVE QUESTIONS?</span>
                    <h2 class="faq-title">Frequently Asked Questions</h2>
                    <p class="faq-subtitle">Clear answers to common questions about TATTVAH, our products, and orders.
                    </p>
                </header>

                <div class="faq-accordion-list">
                    <!-- FAQ 1 -->
                    <details class="faq-item" open>
                        <summary class="faq-question">
                            <span>What is TATTVAH?</span>
                            <svg class="chevron-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </summary>
                        <div class="faq-answer">
                            <p>TATTVAH is a brand inspired by nature, Indian traditions, and thoughtful living. We bring
                                together products that connect traditional practices with modern lifestyles.</p>
                        </div>
                    </details>

                    <!-- FAQ 2 -->
                    <details class="faq-item">
                        <summary class="faq-question">
                            <span>What kind of products does TATTVAH offer?</span>
                            <svg class="chevron-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </summary>
                        <div class="faq-answer">
                            <p>Our current collection includes products inspired by traditional Indian practices and
                                natural living. You can explore our latest products through the <a
                                    href="/products/">Shop section</a> of our website.</p>
                        </div>
                    </details>

                    <!-- FAQ 3 -->
                    <details class="faq-item">
                        <summary class="faq-question">
                            <span>Are TATTVAH products natural?</span>
                            <svg class="chevron-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </summary>
                        <div class="faq-answer">
                            <p>We aim to use natural materials and ingredients where appropriate. The exact composition
                                and material information may vary by product, so we recommend checking the individual
                                product description and packaging before use.</p>
                        </div>
                    </details>

                    <!-- FAQ 4 -->
                    <details class="faq-item">
                        <summary class="faq-question">
                            <span>Where are TATTVAH products made?</span>
                            <svg class="chevron-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </summary>
                        <div class="faq-answer">
                            <p>Our products may be sourced or manufactured through selected partners and suppliers.
                                Product-specific information will be provided wherever applicable.</p>
                        </div>
                    </details>

                    <!-- FAQ 5 -->
                    <details class="faq-item">
                        <summary class="faq-question">
                            <span>How can I place an order?</span>
                            <svg class="chevron-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </summary>
                        <div class="faq-answer">
                            <p>Simply browse our products, add your chosen items to the cart, and proceed to checkout.
                            </p>
                        </div>
                    </details>

                    <!-- FAQ 6 -->
                    <details class="faq-item">
                        <summary class="faq-question">
                            <span>How can I track my order?</span>
                            <svg class="chevron-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </summary>
                        <div class="faq-answer">
                            <p>Once your order has been shipped, you will receive the available tracking details through
                                your registered contact information. You can also visit our <a
                                    href="/track-order/">Track Order</a> page for updates.</p>
                        </div>
                    </details>

                    <!-- FAQ 7 -->
                    <details class="faq-item">
                        <summary class="faq-question">
                            <span>How long does delivery take?</span>
                            <svg class="chevron-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </summary>
                        <div class="faq-answer">
                            <p>Delivery times depend on your location, product availability, and the shipping partner.
                                The estimated delivery timeline will be communicated during or after your order.</p>
                        </div>
                    </details>

                    <!-- FAQ 8 -->
                    <details class="faq-item">
                        <summary class="faq-question">
                            <span>Can I cancel my order?</span>
                            <svg class="chevron-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </summary>
                        <div class="faq-answer">
                            <p>Orders may be cancelled subject to our cancellation policy and the stage of order
                                processing. Please contact us as soon as possible if you need to cancel an order.</p>
                        </div>
                    </details>

                    <!-- FAQ 9 -->
                    <details class="faq-item">
                        <summary class="faq-question">
                            <span>Do you accept returns?</span>
                            <svg class="chevron-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </summary>
                        <div class="faq-answer">
                            <p>Returns are accepted only in situations covered by our Returns Policy. Please check our
                                <a href="/refund-policy/">Returns &amp; Refund Policy</a> page for complete details.
                            </p>
                        </div>
                    </details>

                    <!-- FAQ 10 -->
                    <details class="faq-item">
                        <summary class="faq-question">
                            <span>What if I receive a damaged or incorrect product?</span>
                            <svg class="chevron-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </summary>
                        <div class="faq-answer">
                            <p>Please contact us as soon as possible after delivery and share your order details along
                                with clear photographs of the product and packaging. We will review the issue and assist
                                you according to our policy.</p>
                        </div>
                    </details>

                    <!-- FAQ 11 -->
                    <details class="faq-item">
                        <summary class="faq-question">
                            <span>How can I contact TATTVAH?</span>
                            <svg class="chevron-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </summary>
                        <div class="faq-answer">
                            <p>You can reach us through our <a href="/contact-us/">Contact Us page</a> or email us
                                directly at <a href="mailto:tattvahd@gmail.com">tattvahd@gmail.com</a>.</p>
                        </div>
                    </details>
                </div>

                <div class="faq-help-footer">
                    <p>Have additional queries? We are here to help — visit our <a href="/contact-us/">Contact Us
                            page</a> or reach out at <a href="mailto:tattvahd@gmail.com">tattvahd@gmail.com</a>.</p>
                </div>
            </section>
        </div>
    </main>

    <?php get_footer(); ?>
    </body>

</html>