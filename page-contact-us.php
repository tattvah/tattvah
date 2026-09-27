<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href='/wp-content/themes/tattvah/build/contactUs/contactUs.css?v2'>
    <script type="module" defer src='/wp-content/themes/tattvah/build/contactUs/contactUs.bundle.js?v2'></script>

    <?php
    $homeUrl = get_home_url();
    get_header();
    ?>

<style id="sl-contact-styles">
        /* ==============================================================
           SUGANDH LOK CONTACT US DESIGN (PURE CSS - NO SQUISHED COLUMNS)
           ============================================================== */
        :root {
            --sl-maroon: #490000;
            --sl-maroon-hover: #330000;
            --sl-gold: #C89A3B;
            --sl-text-heading: #490000;
            --sl-text-body: #2c2523;
            --sl-text-sub: #666666;
            --sl-border-input: #d4c5b9;
        }

        /* Force full-width block display, breaking out of any .main--container grid restrictions */
        .sl-contact-page-wrapper {
            display: block !important;
            width: 100% !important;
            max-width: 100% !important;
            min-height: 70vh;
            background-color: #ffffff !important;
            padding: 55px 20px 90px 20px !important;
            font-family: 'Mulish', -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
            box-sizing: border-box;
        }

        .sl-contact-page-wrapper * {
            box-sizing: border-box;
        }

        .sl-contact-container {
            max-width: 900px;
            margin: 0 auto;
        }

        /* Header Title & Subtitle */
        .sl-contact-header {
            text-align: center;
            margin-bottom: 40px;
        }

        .sl-contact-title {
            font-family: 'Lora', 'Cinzel', Georgia, serif;
            font-size: 42px;
            font-weight: 500;
            color: var(--sl-text-heading);
            margin: 0 0 14px 0;
            line-height: 1.2;
            letter-spacing: 0.5px;
        }

        .sl-contact-subtitle {
            font-size: 15.5px;
            color: var(--sl-text-sub);
            margin: 0;
            font-weight: 400;
            line-height: 1.6;
        }

        /* 3-Column Highlights Row */
        .sl-contact-highlights {
            display: flex;
            justify-content: space-around;
            align-items: flex-start;
            max-width: 820px;
            margin: 0 auto 50px auto;
            padding: 0 10px;
            text-align: center;
        }

        .sl-highlight-item {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 0 12px;
        }

        .sl-highlight-title {
            font-size: 17px;
            font-weight: 600;
            color: var(--sl-text-body);
            margin-bottom: 8px;
        }

        .sl-highlight-link {
            font-size: 14.5px;
            color: var(--sl-text-body);
            text-decoration: underline;
            text-underline-offset: 3px;
            transition: color 0.2s ease;
        }

        .sl-highlight-link:hover {
            color: var(--sl-gold);
        }

        /* Form Container */
        .sl-contact-form-box {
            max-width: 760px;
            margin: 0 auto;
        }

        .sl-contact-form {
            display: flex;
            flex-direction: column;
            gap: 16px;
        }

        /* 2 Columns Row */
        .sl-form-row-2col {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 16px;
        }

        .sl-form-group {
            display: flex;
            flex-direction: column;
        }

        /* Inputs & Textarea */
        .sl-contact-input,
        .sl-contact-textarea {
            width: 100% !important;
            padding: 13px 18px !important;
            background-color: #ffffff !important;
            border: 1px solid var(--sl-border-input) !important;
            border-radius: 6px !important;
            font-size: 14.5px !important;
            font-family: 'Mulish', sans-serif !important;
            color: var(--sl-text-body) !important;
            outline: none !important;
            box-shadow: none !important;
            transition: border-color 0.2s ease, box-shadow 0.2s ease !important;
        }

        .sl-contact-input::placeholder,
        .sl-contact-textarea::placeholder {
            color: #8c857f !important;
            font-weight: 400 !important;
            opacity: 1;
        }

        .sl-contact-input:focus,
        .sl-contact-textarea:focus {
            border-color: var(--sl-maroon) !important;
            box-shadow: 0 0 0 2px rgba(73, 0, 0, 0.08) !important;
        }

        .sl-contact-textarea {
            min-height: 120px !important;
            resize: vertical !important;
        }

        /* Submit Button */
        .sl-form-btn-row {
            margin-top: 6px;
            display: flex;
            justify-content: flex-start;
        }

        .sl-contact-send-btn {
            background-color: var(--sl-maroon) !important;
            color: #ffffff !important;
            font-size: 15px !important;
            font-weight: 600 !important;
            font-family: 'Mulish', sans-serif !important;
            padding: 12px 42px !important;
            border: none !important;
            border-radius: 5px !important;
            cursor: pointer !important;
            transition: background-color 0.2s ease, transform 0.1s ease !important;
            box-shadow: 0 2px 6px rgba(73, 0, 0, 0.15) !important;
            display: inline-block !important;
            text-align: center !important;
        }

        .sl-contact-send-btn:hover {
            background-color: var(--sl-maroon-hover) !important;
        }

        .sl-contact-send-btn:active {
            transform: translateY(1px);
        }

        /* Feedback Message */
        .sl-status-msg {
            display: none;
            padding: 14px 18px;
            border-radius: 6px;
            font-size: 14px;
            margin-top: 14px;
        }

        .sl-status-msg.success {
            display: block;
            background-color: #f0fdf4;
            color: #166534;
            border: 1px solid #bbf7d0;
        }

        .sl-status-msg.error {
            display: block;
            background-color: #fef2f2;
            color: #991b1b;
            border: 1px solid #fecaca;
        }

        /* Mobile Responsive */
        @media (max-width: 680px) {
            .sl-contact-page-wrapper {
                padding: 40px 16px 60px 16px !important;
            }

            .sl-contact-title {
                font-size: 32px;
            }

            .sl-contact-subtitle {
                font-size: 14px;
            }

            .sl-contact-highlights {
                flex-direction: column;
                gap: 22px;
                margin-bottom: 36px;
            }

            .sl-form-row-2col {
                grid-template-columns: 1fr;
                gap: 16px;
            }

            .sl-contact-send-btn {
                width: 100% !important;
            }
        }
    </style>

    <main class="sl-contact-page-wrapper">
        <div class="sl-contact-container">
            <!-- Header Section -->
            <div class="sl-contact-header" data-aos="fade-up">
                <h1 class="sl-contact-title">Contact Us</h1>
                <p class="sl-contact-subtitle">Tattvah's aim is customer satisfaction, always.</p>
            </div>

            <!-- 3-Column Highlights Row -->
            <div class="sl-contact-highlights" data-aos="fade-up" data-aos-delay="100">
                <div class="sl-highlight-item">
                    <span class="sl-highlight-title">Call Us</span>
                    <a href="tel:+9108042544254" class="sl-highlight-link">+91 080 4254 4254</a>
                </div>
                <div class="sl-highlight-item">
                    <span class="sl-highlight-title">Email Us</span>
                    <a href="mailto:care@tattvah.com" class="sl-highlight-link">care@tattvah.com</a>
                </div>
                <div class="sl-highlight-item">
                    <span class="sl-highlight-title">Our Store</span>
                    <a href="/products/" class="sl-highlight-link">Gandhi Bazaar</a>
                </div>
            </div>

            <!-- Contact Form Box -->
            <div class="sl-contact-form-box" data-aos="fade-up" data-aos-delay="200">
                <form id="needform" class="sl-contact-form" method="POST">
                    <!-- Row 1: Name & Email -->
                    <div class="sl-form-row-2col">
                        <div class="sl-form-group">
                            <input type="text" id="form-fullname" name="lfullname" class="sl-contact-input" placeholder="Name" required>
                            <!-- Hidden input fields to preserve full compatibility with backend handlers -->
                            <input type="hidden" id="form-firstname" name="lfirstname" value="">
                            <input type="hidden" id="form-lastname" name="llastname" value="">
                        </div>
                        <div class="sl-form-group">
                            <input type="email" id="form-email" name="lemail" class="sl-contact-input" placeholder="Email *" required>
                        </div>
                    </div>

                    <!-- Row 2: Phone Number -->
                    <div class="sl-form-group">
                        <input type="tel" id="form-git-phonenumber" name="lphone" class="sl-contact-input" placeholder="Phone number">
                    </div>

                    <!-- Row 3: Comment -->
                    <div class="sl-form-group">
                        <textarea id="form-message" name="Description" class="sl-contact-textarea" placeholder="Comment" rows="5" required></textarea>
                    </div>

                    <!-- Row 4: Send Button -->
                    <div class="sl-form-btn-row">
                        <button type="submit" id="contact-submit-btn" class="sl-contact-send-btn">Send</button>
                    </div>

                    <div id="contact-status-msg" class="sl-status-msg"></div>
                </form>
            </div>
        </div>
    </main>

    <script>
        // Form field synchronization & submission feedback helper
        document.addEventListener('DOMContentLoaded', function () {
            const fullNameInput = document.getElementById('form-fullname');
            const firstNameInput = document.getElementById('form-firstname');
            const lastNameInput = document.getElementById('form-lastname');
            const contactForm = document.getElementById('needform');

            function syncNameFields() {
                if (!fullNameInput) return;
                const trimmed = fullNameInput.value.trim();
                const parts = trimmed.split(' ');
                if (parts.length > 1) {
                    if (firstNameInput) firstNameInput.value = parts[0];
                    if (lastNameInput) lastNameInput.value = parts.slice(1).join(' ');
                } else {
                    if (firstNameInput) firstNameInput.value = trimmed;
                    if (lastNameInput) lastNameInput.value = trimmed;
                }
            }

            if (fullNameInput) {
                fullNameInput.addEventListener('input', syncNameFields);
                fullNameInput.addEventListener('change', syncNameFields);
            }

            if (contactForm) {
                contactForm.addEventListener('submit', function () {
                    syncNameFields();
                });
            }
        });
    </script>

    <?php get_footer(); ?>
    </body>

</html>
