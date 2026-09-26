<div class="loading-div hidden relative">
    <img src="https://tattvah.com/wp-content/uploads/2025/01/Form-Loader-Gif.gif" alt="loader">
</div>

<footer class="footer !bg-sugandhlok-maroon !text-white pt-16 pb-8 border-t border-sugandhlok-peach/30">
    <div class="footer-wrapper max-w-7xl mx-auto px-4 md:px-8">
        <div class="footer-top grid grid-cols-1 md:grid-cols-4 gap-12 mb-12">
            <!-- Brand Section -->
            <div class="footer-brand flex flex-col gap-6">
                <a href="/" class="tattvah-home">
                    <img class="logo-tattvah-footer w-48 h-auto invert brightness-0" src="https://tattvah.com/wp-content/uploads/2025/01/Signature-Logo.webp" alt="Signature Logo">
                </a>
                <p class="text-sugandhlok-peach text-sm leading-relaxed font-openSans max-w-xs">100% natural, earth-born elements for your sacred rituals. Pure, ethical, and traditional.</p>
            </div>

            <!-- Links Column 1 -->
            <div class="footer-links flex flex-col">
                <h4 class="text-sugandhlok-peach font-lora text-xl mb-6">Quick Links</h4>
                <ul class="flex flex-col gap-3">
                    <li><a href="/about-us/" class="text-white/80 hover:text-white transition-colors text-sm uppercase tracking-wider">About Tattvah</a></li>
                    <li><a href="/blogs/" class="text-white/80 hover:text-white transition-colors text-sm uppercase tracking-wider">Tattvah Journal</a></li>
                    <li><a href="/our-team/" class="text-white/80 hover:text-white transition-colors text-sm uppercase tracking-wider">Our Team</a></li>
                    <li><a href="/contact-us/" class="text-white/80 hover:text-white transition-colors text-sm uppercase tracking-wider">Contact Us</a></li>
                </ul>
            </div>

            <!-- Links Column 2 -->
            <div class="footer-links flex flex-col">
                <h4 class="text-sugandhlok-peach font-lora text-xl mb-6">Shop</h4>
                <ul class="flex flex-col gap-3">
                    <li><a href="/products/" class="text-white/80 hover:text-white transition-colors text-sm uppercase tracking-wider">Agarbattis</a></li>
                    <li><a href="/products/" class="text-white/80 hover:text-white transition-colors text-sm uppercase tracking-wider">Dhoop & Cones</a></li>
                    <li><a href="/products/" class="text-white/80 hover:text-white transition-colors text-sm uppercase tracking-wider">Sambrani Cups</a></li>
                    <li><a href="/products/" class="text-white/80 hover:text-white transition-colors text-sm uppercase tracking-wider">Gift Sets</a></li>
                </ul>
            </div>

            <!-- Links Column 3 -->
            <div class="footer-col newsletter-col flex flex-col">
                <h4 class="text-sugandhlok-peach font-lora text-xl mb-6">Newsletter</h4>
                <p class="text-white/80 text-sm mb-4">Subscribe for exclusive updates and offers.</p>
                <form class="footer-newsletter flex border border-sugandhlok-peach/30 rounded-sm overflow-hidden">
                    <input type="email" placeholder="Your email address" required class="bg-transparent text-white px-4 py-2 w-full focus:outline-none focus:ring-1 focus:ring-sugandhlok-peach placeholder-white/50 text-sm">
                    <button type="submit" class="bg-sugandhlok-peach text-sugandhlok-maroon px-4 py-2 font-bold hover:bg-white transition-colors">→</button>
                </form>
            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="footer-bottom border-t border-white/20 pt-8 flex flex-col md:flex-row justify-between items-center gap-4">
            <span class="copyright text-white/60 text-sm">
                &copy; <?php echo date('Y'); ?> Tattvah. All rights reserved.
            </span>
            <div class="legal flex items-center gap-4 text-sm text-white/60">
                <a href="/privacy-policy/" class="hover:text-white transition-colors">Privacy Policy</a>
                <span class="text-white/30">|</span>
                <a href="/refund-policy/" class="hover:text-white transition-colors">Refund Policy</a>
                <span class="text-white/30">|</span>
                <a href="/terms-and-conditions/" class="hover:text-white transition-colors">Terms of Service</a>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>