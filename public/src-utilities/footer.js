// Deployed.....

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
        if (!cartDrawer || !cartBackdrop) return;
        if(show) {
            cartDrawer.classList.remove('translate-x-full');
            cartBackdrop.classList.remove('opacity-0', 'pointer-events-none');
        } else {
            cartDrawer.classList.add('translate-x-full');
            cartBackdrop.classList.add('opacity-0', 'pointer-events-none');
        }
    };

    if (cartTriggers.length) {
        cartTriggers.forEach(btn => btn.addEventListener('click', (e) => {
            e.preventDefault();
            toggleCart(true);
        }));
    }
    
    if (cartClose) cartClose.addEventListener('click', () => toggleCart(false));
    if (cartBackdrop) cartBackdrop.addEventListener('click', () => toggleCart(false));

    window.addToCart = (id, title, price, image, qty = 1) => {
        const existing = cart.find(i => i.id === id);
        if(existing) {
            existing.quantity += qty;
        } else {
            cart.push({id, title, price: parseFloat(price), image, quantity: qty});
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
        if(!cartItemsContainer) return;
        cartItemsContainer.innerHTML = '';
        let total = 0;
        let count = 0;

        if(cart.length === 0) {
            cartItemsContainer.innerHTML = '<div class="text-center text-xl text-gray-500 mt-10">Your cart is empty.</div>';
            const chkBtn = document.getElementById('sl-checkout-btn');
            if(chkBtn) chkBtn.classList.add('opacity-50', 'pointer-events-none');
        } else {
            const chkBtn = document.getElementById('sl-checkout-btn');
            if(chkBtn) chkBtn.classList.remove('opacity-50', 'pointer-events-none');
            cart.forEach(item => {
                total += item.price * item.quantity;
                count += item.quantity;
                cartItemsContainer.innerHTML += `
                    <div class="flex gap-5 items-center border-b border-gray-100 pb-5">
                        <img src="${item.image}" alt="${item.title}" class="w-24 h-24 object-cover rounded shadow-sm">
                        <div class="flex-grow">
                            <h4 class="text-2xl font-semibold text-gray-800">${item.title}</h4>
                            <div class="text-sugandhlok-maroon text-xl font-bold mt-2">Rs. ${item.price}</div>
                            <div class="flex items-center gap-4 mt-4">
                                <button onclick="updateCartQty('${item.id}', -1)" class="w-12 h-12 flex items-center justify-center bg-gray-100 rounded text-gray-600 hover:bg-gray-200 text-2xl">-</button>
                                <span class="text-xl font-medium">${item.quantity}</span>
                                <button onclick="updateCartQty('${item.id}', 1)" class="w-12 h-12 flex items-center justify-center bg-gray-100 rounded text-gray-600 hover:bg-gray-200 text-2xl">+</button>
                            </div>
                        </div>
                        <button onclick="updateCartQty('${item.id}', -999)" class="text-gray-400 hover:text-red-500 ml-2" title="Remove">
                            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
                        </button>
                    </div>
                `;
            });
        }
        if(cartSubtotal) cartSubtotal.innerText = 'Rs. ' + total.toLocaleString();
        if(cartBadge) cartBadge.innerText = count;
    };

    // Global listener for dynamic "Add to Cart" buttons
    document.body.addEventListener('click', (e) => {
        const btn = e.target.closest('.add-to-cart-btn');
        if(btn) {
            e.preventDefault();
            const id = btn.dataset.id;
            const title = btn.dataset.title;
            const price = btn.dataset.price;
            const image = btn.dataset.image;
            if(id && title && price && image) {
                window.addToCart(id, title, price, image);
            }
        }
    });

    renderCart(); // Initial render
});