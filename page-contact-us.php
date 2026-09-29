<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href='/wp-content/themes/tattvah/build/contactUs/contactUs.css?v6'>
    <script type="module" defer src='/wp-content/themes/tattvah/build/contactUs/contactUs.bundle.js?v6'></script>

    <?php
    $homeUrl = get_home_url();
    get_header();
    ?>

    <main class="tattvah-contact-page sl-contact-page-wrapper">
        <div class="tattvah-contact-container sl-contact-container">

            <!-- Hero Header Section -->
            <div class="contact-hero-header sl-contact-header" data-aos="fade-up">
                <span class="contact-badge">GET IN TOUCH</span>
                <h1 class="contact-title sl-contact-title">We'd Love to Hear From You</h1>
                <div class="contact-intro-text">
                    <p class="intro-lead">Have a question about a product, your order, or TATTVAH? <strong>We're here to
                            help.</strong></p>
                    <p class="intro-sub sl-contact-subtitle">Whether you're looking for more information about our
                        products, need assistance with an order, or simply want to share your experience, feel free to
                        reach out.</p>
                </div>
                <div class="header-divider" aria-hidden="true">
                    <span class="divider-line"></span>
                    <span class="divider-icon">✦</span>
                    <span class="divider-line"></span>
                </div>
            </div>

            <!-- 2-Column Content Grid: Left Channels, Right Form -->
            <div class="contact-main-grid">

                <!-- Left Column: Information Cards & Brand Note -->
                <div class="contact-info-col" data-aos="fade-up" data-aos-delay="100">

                    <!-- Card 1: Customer Support -->
                    <div class="info-card customer-support-card">
                        <div class="card-header">
                            <div class="card-icon-wrap" aria-hidden="true">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path
                                        d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                                    </path>
                                </svg>
                            </div>
                            <div class="card-title-group">
                                <span class="card-eyebrow">Assistance & Inquiries</span>
                                <h2 class="card-title">Customer Support</h2>
                            </div>
                        </div>

                        <div class="card-body">
                            <!-- Email -->
                            <div class="contact-detail-row">
                                <div class="detail-icon" aria-hidden="true">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path
                                            d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                                        </path>
                                        <polyline points="22,6 12,13 2,6"></polyline>
                                    </svg>
                                </div>
                                <div class="detail-content">
                                    <span class="detail-label">Email</span>
                                    <a href="mailto:tattvahd@gmail.com"
                                        class="detail-value link-highlight">tattvahd@gmail.com</a>
                                </div>
                            </div>

                            <!-- Phone / WhatsApp -->
                            <div class="contact-detail-row">
                                <div class="detail-icon" aria-hidden="true">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path
                                            d="M15.05 5A5 5 0 0 1 19 8.95M15.05 1A9 9 0 0 1 23 8.94m-1 7.98v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="detail-content">
                                    <span class="detail-label">Phone / WhatsApp</span>
                                    <div class="phone-links-group">
                                        <a href="tel:8287691093" class="detail-value link-highlight">8287691093</a>
                                        <a href="https://wa.me/918287691093?text=Hello%20Tattvah%20Team%2C%20I%20have%20an%20enquiry"
                                            target="_blank" rel="noopener noreferrer" class="whatsapp-badge">
                                            <svg viewBox="0 0 24 24">
                                                <path
                                                    d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.711 2.598 2.664-.698c.991.56 1.787.873 2.8.874h.005c3.181 0 5.767-2.586 5.768-5.766 0-1.54-.599-2.988-1.688-4.077-1.09-1.088-2.538-1.684-4.089-1.684zm6.852 5.765c-.001 3.774-3.072 6.845-6.848 6.845-.002 0-.003 0-.005 0-1.151 0-2.28-.31-3.268-.897l-3.642.955.972-3.548c-.643-1.033-.982-2.227-.98-3.355.001-3.774 3.072-6.845 6.849-6.845 1.83 0 3.55.713 4.843 2.007 1.294 1.294 2.008 3.014 2.008 4.846z" />
                                            </svg>
                                            Chat on WhatsApp
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <!-- Business Hours -->
                            <div class="contact-detail-row">
                                <div class="detail-icon" aria-hidden="true">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <polyline points="12 6 12 12 16 14"></polyline>
                                    </svg>
                                </div>
                                <div class="detail-content">
                                    <span class="detail-label">Business Hours</span>
                                    <span class="detail-value">Monday – Saturday, [10:00 AM – 9:00 PM IST]</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2: For Business & Partnerships -->
                    <div class="info-card business-card">
                        <div class="card-header">
                            <div class="card-icon-wrap" aria-hidden="true">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="8.5" cy="7.5" r="4"></circle>
                                    <line x1="20" y1="8" x2="20" y2="14"></line>
                                    <line x1="23" y1="11" x2="17" y2="11"></line>
                                </svg>
                            </div>
                            <div class="card-title-group">
                                <span class="card-eyebrow">Collaborate With Us</span>
                                <h2 class="card-title">For Business & Partnerships</h2>
                            </div>
                        </div>

                        <div class="card-body">
                            <p class="business-prompt">Interested in working with TATTVAH?</p>
                            <p class="business-desc">For wholesale, retail, distribution, collaborations, or other
                                business enquiries:</p>

                            <div class="contact-detail-row">
                                <div class="detail-icon" aria-hidden="true">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path
                                            d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                                        </path>
                                        <polyline points="22,6 12,13 2,6"></polyline>
                                    </svg>
                                </div>
                                <div class="detail-content">
                                    <span class="detail-label">Email</span>
                                    <a href="mailto:tattvahd@gmail.com?subject=Business%20%26%20Partnership%20Enquiry%20-%20Tattvah"
                                        class="detail-value link-highlight">tattvahd@gmail.com</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 3: Brand Manifesto Sign-off -->
                    <div class="info-card brand-manifesto-card">
                        <div class="manifesto-decor" aria-hidden="true">
                            <img src="<?php echo get_theme_file_uri('public/assets/Logo.svg'); ?>" alt="Tattvah Logo" style="max-height: 80px; width: auto; margin: 0 auto;">
                        </div>
                        <p class="manifesto-lead">We look forward to hearing from you.</p>
                        <p class="manifesto-tagline">Rooted in Tradition. Inspired by Nature. Made for Today.</p>
                    </div>

                </div>

                <!-- Right Column: The Contact Form -->
                <div class="contact-form-col" data-aos="fade-up" data-aos-delay="200">
                    <div class="form-card-container sl-contact-form-box">
                        <div class="form-header">
                            <h2 class="form-title">Send a Message</h2>
                            <p class="form-subtitle">Have a question or request? Fill in your details below and we'll
                                reply promptly.</p>
                        </div>

                        <form id="needform" class="contact-form sl-contact-form" method="POST">
                            <!-- Full Name -->
                            <div class="form-group sl-form-group">
                                <label for="form-fullname" class="form-label">Name <span
                                        class="required">*</span></label>
                                <input type="text" id="form-fullname" name="Name" class="form-input sl-contact-input"
                                    placeholder="Your Name" required>
                            </div>

                            <!-- 2-Column: Email & Phone -->
                            <div class="form-row-2col sl-form-row-2col">
                                <div class="form-group sl-form-group">
                                    <label for="form-email" class="form-label">Email <span
                                            class="required">*</span></label>
                                    <input type="email" id="form-email" name="Email" class="form-input sl-contact-input"
                                        placeholder="Your Email Address" required>
                                </div>
                                <div class="form-group sl-form-group">
                                    <label for="form-git-phonenumber" class="form-label">Phone Number</label>
                                    <input type="tel" id="form-git-phonenumber" name="Phone"
                                        class="form-input sl-contact-input" placeholder="Your Phone Number">
                                </div>
                            </div>

                            <!-- Comment / Message -->
                            <div class="form-group sl-form-group">
                                <label for="form-message" class="form-label">Comment / Message <span
                                        class="required">*</span></label>
                                <textarea id="form-message" name="Message" class="form-textarea sl-contact-textarea"
                                    placeholder="Write your message, question, or order details here..." rows="5"
                                    required></textarea>
                            </div>

                            <!-- Send Button -->
                            <div class="form-submit-row sl-form-btn-row">
                                <button type="submit" id="contact-submit-btn"
                                    class="tattvah-submit-btn sl-contact-send-btn">
                                    <span>Send Message</span>
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                        <line x1="22" y1="2" x2="11" y2="13"></line>
                                        <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
                                    </svg>
                                </button>
                            </div>

                            <div id="contact-status-msg" class="contact-status-msg sl-status-msg"></div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </main>

    <?php get_footer(); ?>

    </body>

</html>