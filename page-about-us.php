<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href='/wp-content/themes/tattvah/build/aboutUs/aboutUs.css?v5'>
    <script type="module" defer src='/wp-content/themes/tattvah/build/aboutUs/aboutUs.bundle.js?v5'></script>

    <?php
    $homeUrl = get_home_url();
    get_header();
    ?>

    <main class="tattvah-about-page">
        <div class="about-container">

            <!-- 1. Hero Header Section -->
            <section class="about-hero-section" data-aos="fade-up">
                <span class="hero-badge">OUR ESSENCE</span>
                <h1 class="hero-title">About TATTVAH</h1>
                <p class="hero-tagline">Rooted in Tradition. Inspired by Nature. Made for Today.</p>
                <div class="header-divider" aria-hidden="true">
                    <span class="divider-line"></span>
                    <span class="divider-icon">✦</span>
                    <span class="divider-line"></span>
                </div>
            </section>

            <!-- 2. Founding Story: From Friendship to TATTVAH -->
            <section class="about-story-section" data-aos="fade-up">
                <div class="story-grid">
                    <!-- Left Column: Philosophical Spark Card -->
                    <div class="story-quote-card">
                        <div class="quote-emblem" aria-hidden="true">
                            <svg viewBox="0 0 48 36" fill="currentColor">
                                <path
                                    d="M24 2C24 2 20 12 20 22C20 26.5 21.8 30 24 30C26.2 30 28 26.5 28 22C28 12 24 2 24 2Z"
                                    fill="#C89A3B" />
                                <path
                                    d="M22 8C22 8 15 15 15 23C15 27 17.5 29.5 20.5 30C19.5 27.5 19.5 24 20.5 20C21.2 16.5 22 13 22 8Z"
                                    fill="#C89A3B" opacity="0.9" />
                                <path
                                    d="M26 8C26 8 33 15 33 23C33 27 30.5 29.5 27.5 30C28.5 27.5 28.5 24 27.5 20C26.8 16.5 26 13 26 8Z"
                                    fill="#C89A3B" opacity="0.9" />
                                <path
                                    d="M19 14C19 14 10 20 10 26C10 29 12.5 31 16 30.5C14.5 28.5 14.5 25.5 15.5 22.5C16.5 19 18 16 19 14Z"
                                    fill="#C89A3B" opacity="0.8" />
                                <path
                                    d="M29 14C29 14 38 20 38 26C38 29 35.5 31 32 30.5C33.5 28.5 33.5 25.5 32.5 22.5C31.5 19 30 16 29 14Z"
                                    fill="#C89A3B" opacity="0.8" />
                                <path d="M14 32C18 34 30 34 34 32C31 31.2 17 31.2 14 32Z" fill="#C89A3B" />
                            </svg>
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

                    <!-- Right Column: Story Narrative Content -->
                    <div class="story-content">
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

            <!-- 3. Philosophy Section: What We Believe -->
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
                        <h3 class="card-title">Nature & Conscious Living</h3>
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
                        <h3 class="card-title">Purpose & A Meaningful Story</h3>
                        <p class="card-text">
                            From traditional essentials to natural everyday products, we focus on creating and bringing
                            together products that have a purpose and a story behind them.
                        </p>
                    </div>
                </div>
            </section>

            <!-- 4. Guiding Principles: Our Approach -->
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

                <!-- Core Mantra Box -->
                <div class="approach-mantra-box" data-aos="fade-up" data-aos-delay="300">
                    <p class="mantra-intro">TATTVAH is still at the beginning of its journey. But the thought behind it
                        is simple:</p>
                    <p class="mantra-highlight">“Go back to the essence. Choose thoughtfully. Live meaningfully.”</p>
                </div>
            </section>

            <!-- 5. Our Promise & Brand Signature Banner -->
            <section class="about-promise-banner" data-aos="fade-up">
                <span class="promise-eyebrow">OUR COMMITMENT</span>
                <h2 class="promise-title">Our Promise</h2>
                <p class="promise-text">
                    We aim to build TATTVAH with honesty, curiosity, and responsibility, one product at a time.
                </p>
                <div class="brand-closing-box">
                    <svg class="lotus-icon" viewBox="0 0 48 36" fill="currentColor" aria-hidden="true">
                        <path d="M24 2C24 2 20 12 20 22C20 26.5 21.8 30 24 30C26.2 30 28 26.5 28 22C28 12 24 2 24 2Z"
                            fill="#C89A3B" />
                        <path
                            d="M22 8C22 8 15 15 15 23C15 27 17.5 29.5 20.5 30C19.5 27.5 19.5 24 20.5 20C21.2 16.5 22 13 22 8Z"
                            fill="#C89A3B" opacity="0.9" />
                        <path
                            d="M26 8C26 8 33 15 33 23C33 27 30.5 29.5 27.5 30C28.5 27.5 28.5 24 27.5 20C26.8 16.5 26 13 26 8Z"
                            fill="#C89A3B" opacity="0.9" />
                        <path
                            d="M19 14C19 14 10 20 10 26C10 29 12.5 31 16 30.5C14.5 28.5 14.5 25.5 15.5 22.5C16.5 19 18 16 19 14Z"
                            fill="#C89A3B" opacity="0.8" />
                        <path
                            d="M29 14C29 14 38 20 38 26C38 29 35.5 31 32 30.5C33.5 28.5 33.5 25.5 32.5 22.5C31.5 19 30 16 29 14Z"
                            fill="#C89A3B" opacity="0.8" />
                        <path d="M14 32C18 34 30 34 34 32C31 31.2 17 31.2 14 32Z" fill="#C89A3B" />
                    </svg>
                    <h3 class="brand-name">TATTVAH</h3>
                    <p class="brand-tagline">Rooted in Tradition. Inspired by Nature. Made for Today.</p>
                    <div class="action-buttons">
                        <a href="/products/" class="btn-gold">Explore Products</a>
                        <a href="/contact-us/" class="btn-outline">Contact Us</a>
                    </div>
                </div>
            </section>

            <!-- 6. Frequently Asked Questions (FAQs) Accordion -->
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
                                <a href="/refund-policy/">Returns & Refund Policy</a> page for complete details.
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