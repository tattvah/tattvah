
<footer class="sl-footer">
    <div class="sl-footer-inner">
        <div class="sl-footer-top">
            <!-- Brand Section -->
            <div class="sl-footer-brand">
                <a href="/" class="tattvah-home sl-footer-logo-link">
                    <img src="<?php echo get_theme_file_uri('public/assets/Logo.svg'); ?>" alt="Tattvah Logo" class="sl-footer-main-logo" style="max-height: 60px; width: auto; filter: brightness(0) invert(1);">
                </a>
                <p class="sl-footer-desc">
                    100% natural, earth-born elements for your sacred rituals. Pure, ethical, and traditional.
                </p>
            </div>

            <!-- Links Column 1 -->
            <div class="sl-footer-links">
                <h4>Quick Links</h4>
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/about-us/">About Tattvah</a></li>
                    <li><a href="/blogs/">Blogs</a></li>
                    <li><a href="/products/">Shop</a></li>
                    <li><a href="/contact-us/">Contact Us</a></li>
                </ul>
            </div>

            <!-- Links Column 2 -->
            <div class="sl-footer-links">
                <h4>Products</h4>
                <ul>
                    <li><a href="/products/">Agarbattis</a></li>
                    <li><a href="/products/">Dhoop & Cones</a></li>
                    <li><a href="/products/">Sambrani Cups</a></li>
                    <li><a href="/products/">Gift Sets</a></li>
                </ul>
            </div>

            <!-- Links Column 3 -->
            <div class="sl-footer-links">
                <h4>Policies</h4>
                <ul>
                    <li><a href="/privacy-policy/">Privacy Policy</a></li>
                    <li><a href="/refund-policy/">Refund Policy</a></li>
                    <li><a href="/shipping-policy/">Shipping Policy</a></li>
                    <li><a href="/terms-and-conditions/">Terms of Service</a></li>
                </ul>
            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="sl-footer-bottom">
            <span class="sl-copyright">
                &copy; <?php echo date('Y'); ?> Tattvah. All rights reserved.
            </span>
            <div class="sl-footer-social" style="display: flex; gap: 15px;">
                <a href="https://www.instagram.com/tattvah.officia" target="_blank" rel="noopener noreferrer"
                    aria-label="Instagram" style="color: rgba(255,255,255,0.7); transition: color 0.3s;">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                        <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                        <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                    </svg>
                </a>
                <a href="https://www.linkedin.com/company/tattvah/about/?viewAsMember=true" target="_blank"
                    rel="noopener noreferrer" aria-label="LinkedIn"
                    style="color: rgba(255,255,255,0.7); transition: color 0.3s;">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path>
                        <rect x="2" y="9" width="4" height="12"></rect>
                        <circle cx="4" cy="4" r="2"></circle>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</footer>

<!-- Cart Drawer -->
<div id="sl-cart-drawer"
    class="fixed inset-y-0 right-0 w-full md:max-w-[40rem] max-w-[90vw] bg-white shadow-2xl transform translate-x-full transition-transform duration-300 z-[9999] flex flex-col">
    <div class="flex items-center justify-between p-8 border-b border-gray-200">
        <h2 class="text-3xl font-lora text-brand-primary font-semibold">Your Cart</h2>
        <button id="sl-cart-close" class="text-gray-500 hover:text-red-600 transition-colors">
            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <line x1="18" y1="6" x2="6" y2="18"></line>
                <line x1="6" y1="6" x2="18" y2="18"></line>
            </svg>
        </button>
    </div>

    <div id="sl-cart-items" class="flex-grow p-8 overflow-y-auto space-y-8">
        <!-- Cart Items Injected Here -->
    </div>

    <div class="p-8 border-t border-gray-200 bg-gray-50">
        <div class="flex justify-between items-center mb-6 text-3xl font-bold text-gray-800">
            <span>Subtotal</span>
            <span id="sl-cart-subtotal">Rs. 0</span>
        </div>
        <p class="text-lg text-gray-500 mb-8 text-center">Taxes and shipping calculated at checkout.</p>
        <a href="/checkout/" id="sl-checkout-btn"
            class="block w-full py-6 bg-brand-primary text-white text-center uppercase tracking-widest text-2xl font-bold rounded-lg hover:bg-brand-secondary transition-colors shadow-lg hover:shadow-xl transform hover:-translate-y-1">Checkout</a>
    </div>
</div>

<div id="sl-cart-backdrop"
    class="fixed inset-0 bg-black/50 opacity-0 pointer-events-none transition-opacity duration-300 z-[9998]"></div>