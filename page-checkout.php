<?php
/**
 * Template Name: Checkout Page
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,500;0,600;1,400&family=Open+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/wp-content/themes/tattvah/build/frontPage/frontPage.css?v6">
    <?php get_header(); ?>
<div class="checkout-page-container max-w-7xl mx-auto px-4 py-16 grid grid-cols-1 md:grid-cols-2 gap-12">
    <!-- Left Column: Billing Details -->
    <div class="checkout-billing">
        <h2 class="text-3xl font-lora text-sugandhlok-maroon font-semibold mb-8">Billing Details</h2>
        <form id="checkout-form" class="space-y-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm text-gray-600 mb-2">First Name *</label>
                    <input type="text" name="billing_first_name" required class="w-full border border-gray-300 p-3 rounded focus:outline-none focus:border-sugandhlok-maroon">
                </div>
                <div>
                    <label class="block text-sm text-gray-600 mb-2">Last Name *</label>
                    <input type="text" name="billing_last_name" required class="w-full border border-gray-300 p-3 rounded focus:outline-none focus:border-sugandhlok-maroon">
                </div>
            </div>
            
            <div>
                <label class="block text-sm text-gray-600 mb-2">Email Address *</label>
                <input type="email" name="billing_email" required class="w-full border border-gray-300 p-3 rounded focus:outline-none focus:border-sugandhlok-maroon">
            </div>

            <div>
                <label class="block text-sm text-gray-600 mb-2">Phone Number *</label>
                <input type="tel" name="billing_phone" required class="w-full border border-gray-300 p-3 rounded focus:outline-none focus:border-sugandhlok-maroon">
            </div>

            <div>
                <label class="block text-sm text-gray-600 mb-2">Street Address *</label>
                <textarea name="billing_address" required rows="3" class="w-full border border-gray-300 p-3 rounded focus:outline-none focus:border-sugandhlok-maroon"></textarea>
            </div>
            
            <div class="grid grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm text-gray-600 mb-2">Town / City *</label>
                    <input type="text" name="billing_city" required class="w-full border border-gray-300 p-3 rounded focus:outline-none focus:border-sugandhlok-maroon">
                </div>
                <div>
                    <label class="block text-sm text-gray-600 mb-2">PIN Code *</label>
                    <input type="text" name="billing_postcode" required class="w-full border border-gray-300 p-3 rounded focus:outline-none focus:border-sugandhlok-maroon">
                </div>
            </div>
        </form>
    </div>

    <!-- Right Column: Order Summary -->
    <div class="checkout-summary bg-[#faf9f8] p-8 rounded-lg shadow-sm border border-gray-200 self-start">
        <h2 class="text-2xl font-lora text-gray-900 font-semibold mb-6">Your Order</h2>
        
        <div id="checkout-cart-items" class="space-y-4 mb-6">
            <!-- Items injected by JS -->
        </div>

        <div class="border-t border-gray-200 pt-4 space-y-3 mb-6">
            <div class="flex justify-between text-gray-600">
                <span>Subtotal</span>
                <span id="checkout-subtotal">Rs. 0</span>
            </div>
            <div class="flex justify-between text-gray-600">
                <span>Shipping</span>
                <span>Free</span>
            </div>
            <div class="flex justify-between text-xl font-bold text-sugandhlok-maroon mt-4 pt-4 border-t border-gray-200">
                <span>Total</span>
                <span id="checkout-total">Rs. 0</span>
            </div>
        </div>

        <div class="payment-methods mb-8 space-y-3">
            <label class="flex items-center gap-3 cursor-pointer">
                <input type="radio" name="payment_method" value="cod" checked class="accent-sugandhlok-maroon w-4 h-4">
                <span class="text-gray-700 font-medium">Cash on Delivery</span>
            </label>
            <div class="text-sm text-gray-500 pl-7">Pay with cash upon delivery.</div>
        </div>

        <button id="place-order-btn" class="w-full py-4 bg-sugandhlok-maroon text-white text-center uppercase tracking-widest font-semibold hover:bg-red-900 transition-colors">
            Place Order
        </button>
        <div id="checkout-message" class="mt-4 text-center text-sm font-semibold hidden"></div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const cart = JSON.parse(localStorage.getItem('tattvah_cart')) || [];
    const itemsContainer = document.getElementById('checkout-cart-items');
    const subtotalEl = document.getElementById('checkout-subtotal');
    const totalEl = document.getElementById('checkout-total');
    const placeOrderBtn = document.getElementById('place-order-btn');
    const checkoutForm = document.getElementById('checkout-form');
    const msgEl = document.getElementById('checkout-message');

    if(cart.length === 0) {
        itemsContainer.innerHTML = '<p class="text-gray-500">Your cart is empty.</p>';
        placeOrderBtn.disabled = true;
        placeOrderBtn.classList.add('opacity-50', 'cursor-not-allowed');
        return;
    }

    let total = 0;
    cart.forEach(item => {
        total += item.price * item.quantity;
        itemsContainer.innerHTML += `
            <div class="flex justify-between items-center text-sm">
                <div class="flex items-center gap-3">
                    <img src="${item.image}" class="w-12 h-12 object-cover rounded border border-gray-200">
                    <span class="text-gray-800">${item.title} <strong class="text-gray-500">× ${item.quantity}</strong></span>
                </div>
                <span class="font-semibold text-gray-900">Rs. ${(item.price * item.quantity).toLocaleString()}</span>
            </div>
        `;
    });

    subtotalEl.innerText = 'Rs. ' + total.toLocaleString();
    totalEl.innerText = 'Rs. ' + total.toLocaleString();

    placeOrderBtn.addEventListener('click', async (e) => {
        e.preventDefault();
        
        if(!checkoutForm.checkValidity()) {
            checkoutForm.reportValidity();
            return;
        }

        placeOrderBtn.innerText = 'Processing...';
        placeOrderBtn.disabled = true;

        const formData = new FormData(checkoutForm);
        const name = formData.get('billing_first_name') + ' ' + formData.get('billing_last_name');
        
        const data = new URLSearchParams();
        data.append('action', 'place_order');
        data.append('billing_name', name);
        data.append('billing_email', formData.get('billing_email'));
        data.append('billing_phone', formData.get('billing_phone'));
        data.append('billing_address', formData.get('billing_address') + ', ' + formData.get('billing_city') + ' - ' + formData.get('billing_postcode'));
        data.append('cart', JSON.stringify(cart));

        try {
            const res = await fetch('/wp-admin/admin-ajax.php', {
                method: 'POST',
                body: data
            });
            const result = await res.json();
            
            if(result.success) {
                localStorage.removeItem('tattvah_cart');
                itemsContainer.innerHTML = '';
                subtotalEl.innerText = 'Rs. 0';
                totalEl.innerText = 'Rs. 0';
                msgEl.innerText = 'Order Placed Successfully! Your Order ID is: #' + result.data.order_id;
                msgEl.className = 'mt-4 text-center text-sm font-semibold text-green-600 block';
                placeOrderBtn.innerText = 'Order Placed';
            } else {
                msgEl.innerText = result.data.message || 'Error placing order.';
                msgEl.className = 'mt-4 text-center text-sm font-semibold text-red-600 block';
                placeOrderBtn.innerText = 'Place Order';
                placeOrderBtn.disabled = false;
            }
        } catch(err) {
            msgEl.innerText = 'Network error. Please try again.';
            msgEl.className = 'mt-4 text-center text-sm font-semibold text-red-600 block';
            placeOrderBtn.innerText = 'Place Order';
            placeOrderBtn.disabled = false;
        }
    });
});
</script>

<?php get_footer(); ?>
