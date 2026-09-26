<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href='<?php echo get_theme_file_uri(\"build/contactUs/contactUs.css\"); ?>'>
    <script type="module" defer src='<?php echo get_theme_file_uri(\"build/contactUs/contactUs.bundle.js\"); ?>'></script>

    <?php
    $homeUrl = get_home_url();
    get_header();
    ?>

    <main class="main--container bg-sugandhlok-bg font-openSans text-gray-800" style="min-height: 60vh;">

        <!-- Page Header -->
        <section class="py-16 md:py-24 max-w-7xl mx-auto px-4 md:px-8 text-center" data-aos="fade-up">
            <h1 class="text-4xl md:text-5xl font-lora text-sugandhlok-maroon mb-4">Contact Us</h1>
            <div class="w-16 h-1 bg-sugandhlok-peach mx-auto mb-6"></div>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">We would love to hear from you. Reach out to us for any
                inquiries about our natural agarbattis, corporate gifting, or just to say hello.</p>
        </section>

        <!-- Contact Section -->
        <section class="pb-24 max-w-7xl mx-auto px-4 md:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">

                <!-- Contact Details -->
                <div class="contact-info bg-white p-8 md:p-12 rounded-md shadow-sm border border-gray-100"
                    data-aos="fade-right">
                    <h2 class="text-2xl font-lora text-gray-900 mb-8">Get In Touch</h2>

                    <div class="flex items-start gap-4 mb-8">
                        <div
                            class="w-10 h-10 rounded-full bg-sugandhlok-bg flex items-center justify-center text-sugandhlok-maroon flex-shrink-0">
                            <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                </path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-lora text-lg text-gray-900 mb-1">Our Store</h3>
                            <p class="text-gray-600 text-sm leading-relaxed">123 Heritage Marg,<br>Industrial Area,
                                Jaipur<br>Rajasthan 302001, India</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4 mb-8">
                        <div
                            class="w-10 h-10 rounded-full bg-sugandhlok-bg flex items-center justify-center text-sugandhlok-maroon flex-shrink-0">
                            <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                </path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-lora text-lg text-gray-900 mb-1">Email Us</h3>
                            <a href="mailto:namaste@tattvah.com"
                                class="text-gray-600 text-sm hover:text-sugandhlok-maroon transition-colors">namaste@tattvah.com</a>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div
                            class="w-10 h-10 rounded-full bg-sugandhlok-bg flex items-center justify-center text-sugandhlok-maroon flex-shrink-0">
                            <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                                </path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-lora text-lg text-gray-900 mb-1">Call Us</h3>
                            <p class="text-gray-600 text-sm">+91 98765 43210</p>
                            <p class="text-gray-400 text-xs mt-1">Mon-Sat, 9AM-6PM IST</p>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="contact-form-wrapper" data-aos="fade-left">
                    <form id="needform"
                        class="bg-white p-8 md:p-12 rounded-md shadow-sm border border-gray-100 flex flex-col gap-6">
                        <h2 class="text-2xl font-lora text-gray-900 mb-2">Send a Message</h2>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="form-group flex flex-col gap-2">
                                <label for="form-firstname"
                                    class="text-xs font-semibold text-gray-700 tracking-wider uppercase">First Name
                                    <span class="text-red-500">*</span></label>
                                <input type="text" id="form-firstname" name="lfirstname" required
                                    class="w-full border border-gray-300 rounded-sm px-4 py-3 text-sm focus:outline-none focus:ring-1 focus:ring-sugandhlok-peach focus:border-sugandhlok-peach transition-colors">
                            </div>
                            <div class="form-group flex flex-col gap-2">
                                <label for="form-lastname"
                                    class="text-xs font-semibold text-gray-700 tracking-wider uppercase">Last
                                    Name</label>
                                <input type="text" id="form-lastname" name="llastname"
                                    class="w-full border border-gray-300 rounded-sm px-4 py-3 text-sm focus:outline-none focus:ring-1 focus:ring-sugandhlok-peach focus:border-sugandhlok-peach transition-colors">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="form-group flex flex-col gap-2">
                                <label for="form-email"
                                    class="text-xs font-semibold text-gray-700 tracking-wider uppercase">Email <span
                                        class="text-red-500">*</span></label>
                                <input type="email" id="form-email" name="lemail" required
                                    class="w-full border border-gray-300 rounded-sm px-4 py-3 text-sm focus:outline-none focus:ring-1 focus:ring-sugandhlok-peach focus:border-sugandhlok-peach transition-colors">
                            </div>
                            <div class="form-group flex flex-col gap-2">
                                <label for="form-git-phonenumber"
                                    class="text-xs font-semibold text-gray-700 tracking-wider uppercase">Phone <span
                                        class="text-red-500">*</span></label>
                                <input type="tel" id="form-git-phonenumber" name="lphone" required
                                    class="w-full border border-gray-300 rounded-sm px-4 py-3 text-sm focus:outline-none focus:ring-1 focus:ring-sugandhlok-peach focus:border-sugandhlok-peach transition-colors">
                            </div>
                        </div>

                        <div class="form-group flex flex-col gap-2">
                            <label for="course"
                                class="text-xs font-semibold text-gray-700 tracking-wider uppercase">Subject <span
                                    class="text-red-500">*</span></label>
                            <select name="preffered-subject" id="course" required
                                class="w-full border border-gray-300 rounded-sm px-4 py-3 text-sm focus:outline-none focus:ring-1 focus:ring-sugandhlok-peach focus:border-sugandhlok-peach transition-colors bg-white">
                                <option value="" disabled selected>Select Preferred Subject of Contact</option>
                                <option value="General Inquiry">General Inquiry</option>
                                <option value="Order Tracking">Order Tracking</option>
                                <option value="Corporate Gifting">Corporate Gifting</option>
                                <option value="Partnership">Partnership</option>
                            </select>
                        </div>

                        <div class="form-group flex flex-col gap-2">
                            <label for="form-message"
                                class="text-xs font-semibold text-gray-700 tracking-wider uppercase">Message <span
                                    class="text-red-500">*</span></label>
                            <textarea id="form-message" name="Description" rows="4" required
                                class="w-full border border-gray-300 rounded-sm px-4 py-3 text-sm focus:outline-none focus:ring-1 focus:ring-sugandhlok-peach focus:border-sugandhlok-peach transition-colors resize-y"></textarea>
                        </div>

                        <div class="submit-btn-container mt-4">
                            <button type="submit"
                                class="w-full bg-sugandhlok-maroon text-white font-semibold py-4 rounded-sm hover:bg-red-900 transition-colors uppercase tracking-widest text-sm shadow-sm">Send
                                Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>

    </main>

    <?php get_footer(); ?>
    </body>

</html>