<div class="loading-div hidden relative">
    <img src="https://tattvah.com/wp-content/uploads/2025/01/Form-Loader-Gif.gif" alt="loader">
</div>

<footer class="sl-footer">
    <div class="sl-footer-inner">
        <div class="sl-footer-top">
            <!-- Brand Section -->
            <div class="sl-footer-brand">
                <a href="/" class="tattvah-home sl-footer-logo-link">
                    <!-- Text Logo to Match Header -->
                    <div class="sl-footer-brand-title">TATTVAH<sup>&reg;</sup></div>
                    <div class="sl-footer-brand-tagline">NATURALLY DIVINE + AGARBATTIS</div>
                </a>
                <p class="sl-footer-desc">
                    100% natural, earth-born elements for your sacred rituals. Pure, ethical, and traditional.
                </p>
            </div>

            <!-- Links Column 1 -->
            <div class="sl-footer-links">
                <h4>Quick Links</h4>
                <ul>
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
                <a href="https://www.instagram.com/tattvah.officia" target="_blank" rel="noopener noreferrer" aria-label="Instagram" style="color: rgba(255,255,255,0.7); transition: color 0.3s;">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                        <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                        <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                    </svg>
                </a>
                <a href="https://www.linkedin.com/company/tattvah/about/?viewAsMember=true" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn" style="color: rgba(255,255,255,0.7); transition: color 0.3s;">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
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
<div id="sl-cart-drawer" class="fixed inset-y-0 right-0 w-full max-w-sm bg-white shadow-2xl transform translate-x-full transition-transform duration-300 z-[9999] flex flex-col">
    <div class="flex items-center justify-between p-4 border-b border-gray-200">
        <h2 class="text-xl font-lora text-sugandhlok-maroon font-semibold">Your Cart</h2>
        <button id="sl-cart-close" class="text-gray-500 hover:text-red-600 transition-colors">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
        </button>
    </div>
    
    <div id="sl-cart-items" class="flex-grow p-4 overflow-y-auto space-y-4">
        <!-- Cart Items Injected Here -->
    </div>
    
    <div class="p-4 border-t border-gray-200 bg-gray-50">
        <div class="flex justify-between items-center mb-4 text-lg font-bold text-gray-800">
            <span>Subtotal</span>
            <span id="sl-cart-subtotal">Rs. 0</span>
        </div>
        <p class="text-xs text-gray-500 mb-4 text-center">Taxes and shipping calculated at checkout.</p>
        <a href="/checkout/" id="sl-checkout-btn" class="block w-full py-3 bg-sugandhlok-maroon text-white text-center uppercase tracking-widest font-semibold hover:bg-red-900 transition-colors">Checkout</a>
    </div>
</div>
<div id="sl-cart-backdrop" class="fixed inset-0 bg-black/50 opacity-0 pointer-events-none transition-opacity duration-300 z-[9998]"></div>

<!-- Cart Logic -->
<script>
document.addEventListener('DOMContentLoaded', () => {
    const cartDrawer = document.getElementById('sl-cart-drawer');
    const cartBackdrop = document.getElementById('sl-cart-backdrop');
    const cartClose = document.getElementById('sl-cart-close');
    const cartTriggers = document.querySelectorAll('.sl-cart-wrapper, [href="/cart"]');
    const cartItemsContainer = document.getElementById('sl-cart-items');
    const cartSubtotal = document.getElementById('sl-cart-subtotal');
    const cartBadge = document.querySelector('.sl-cart-badge');

    let cart = JSON.parse(localStorage.getItem('tattvah_cart')) || [];

    const saveCart = () => {
        localStorage.setItem('tattvah_cart', JSON.stringify(cart));
        renderCart();
    };

    const toggleCart = (show = true) => {
        if(show) {
            cartDrawer.classList.remove('translate-x-full');
            cartBackdrop.classList.remove('opacity-0', 'pointer-events-none');
        } else {
            cartDrawer.classList.add('translate-x-full');
            cartBackdrop.classList.add('opacity-0', 'pointer-events-none');
        }
    };

    cartTriggers.forEach(btn => btn.addEventListener('click', (e) => {
        e.preventDefault();
        toggleCart(true);
    }));
    cartClose.addEventListener('click', () => toggleCart(false));
    cartBackdrop.addEventListener('click', () => toggleCart(false));

    window.addToCart = (id, title, price, image) => {
        const existing = cart.find(i => i.id === id);
        if(existing) {
            existing.quantity += 1;
        } else {
            cart.push({id, title, price: parseFloat(price), image, quantity: 1});
        }
        saveCart();
        toggleCart(true);
    };

    window.updateCartQty = (id, change) => {
        const item = cart.find(i => i.id === id);
        if(item) {
            item.quantity += change;
            if(item.quantity <= 0) {
                cart = cart.filter(i => i.id !== id);
            }
            saveCart();
        }
    };

    const renderCart = () => {
        cartItemsContainer.innerHTML = '';
        let total = 0;
        let count = 0;

        if(cart.length === 0) {
            cartItemsContainer.innerHTML = '<div class="text-center text-gray-500 mt-10">Your cart is empty.</div>';
            document.getElementById('sl-checkout-btn').classList.add('opacity-50', 'pointer-events-none');
        } else {
            document.getElementById('sl-checkout-btn').classList.remove('opacity-50', 'pointer-events-none');
            cart.forEach(item => {
                total += item.price * item.quantity;
                count += item.quantity;
                cartItemsContainer.innerHTML += `
                    <div class="flex gap-4 items-center border-b border-gray-100 pb-4">
                        <img src="${item.image}" alt="${item.title}" class="w-16 h-16 object-cover rounded">
                        <div class="flex-grow">
                            <h4 class="text-sm font-semibold text-gray-800">${item.title}</h4>
                            <div class="text-sugandhlok-maroon text-sm font-bold">Rs. ${item.price}</div>
                            <div class="flex items-center gap-3 mt-2">
                                <button onclick="updateCartQty('${item.id}', -1)" class="w-6 h-6 flex items-center justify-center bg-gray-100 rounded text-gray-600 hover:bg-gray-200">-</button>
                                <span class="text-sm">${item.quantity}</span>
                                <button onclick="updateCartQty('${item.id}', 1)" class="w-6 h-6 flex items-center justify-center bg-gray-100 rounded text-gray-600 hover:bg-gray-200">+</button>
                            </div>
                        </div>
                        <button onclick="updateCartQty('${item.id}', -999)" class="text-gray-400 hover:text-red-500">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
                        </button>
                    </div>
                `;
            });
        }
        cartSubtotal.innerText = 'Rs. ' + total.toLocaleString();
        if(cartBadge) cartBadge.innerText = count;
    };

    // Global listener for dynamic "Add to Cart" buttons
    document.body.addEventListener('click', (e) => {
        const btn = e.target.closest('.add-to-cart-btn');
        if(btn) {
            e.preventDefault();
            const id = btn.getAttribute('data-id');
            const title = btn.getAttribute('data-title');
            const price = btn.getAttribute('data-price');
            const image = btn.getAttribute('data-image');
            addToCart(id, title, price, image);
        }
    });

    renderCart(); // Initial render
});
</script>