import './../../src-utilities/header';
import './../../src-utilities/footer';

document.addEventListener('DOMContentLoaded', () => {
    const cart = JSON.parse(localStorage.getItem('tattvah_cart')) || [];
    const itemsContainer = document.getElementById('checkout-cart-items');
    const subtotalEl = document.getElementById('checkout-subtotal');
    const totalEl = document.getElementById('checkout-total');
    const placeOrderBtn = document.getElementById('place-order-btn');
    const checkoutForm = document.getElementById('checkout-form');
    const msgEl = document.getElementById('checkout-message');

    if(!itemsContainer) return;

    if(cart.length === 0) {
        itemsContainer.innerHTML = '<p class="text-gray-500 text-lg">Your cart is empty.</p>';
        if (placeOrderBtn) {
            placeOrderBtn.disabled = true;
            placeOrderBtn.classList.add('opacity-50', 'cursor-not-allowed');
        }
        return;
    }

    let total = 0;
    cart.forEach(item => {
        total += item.price * item.quantity;
        itemsContainer.innerHTML += `
            <div class="flex justify-between items-center text-2xl border-b border-gray-100 pb-6">
                <div class="flex items-center gap-6">
                    <img src="${item.image}" class="w-24 h-24 object-cover rounded-md shadow-sm border border-gray-200">
                    <div>
                        <span class="text-gray-800 font-semibold block text-2xl mb-1">${item.title}</span>
                        <span class="text-gray-500 text-xl">Qty: ${item.quantity}</span>
                    </div>
                </div>
                <span class="font-bold text-gray-900 text-2xl">Rs. ${(item.price * item.quantity).toLocaleString()}</span>
            </div>
        `;
    });

    if (subtotalEl) subtotalEl.innerText = 'Rs. ' + total.toLocaleString();
    if (totalEl) totalEl.innerText = 'Rs. ' + total.toLocaleString();

    const shipDifferentCheckbox = document.getElementById('ship_to_different');
    const shippingFields = document.getElementById('shipping_fields');

    if (shipDifferentCheckbox && shippingFields) {
        shipDifferentCheckbox.addEventListener('change', (e) => {
            if (e.target.checked) {
                shippingFields.classList.remove('hidden');
                shippingFields.querySelectorAll('input, textarea').forEach(el => el.required = true);
            } else {
                shippingFields.classList.add('hidden');
                shippingFields.querySelectorAll('input, textarea').forEach(el => el.required = false);
            }
        });
    }

    if (placeOrderBtn) {
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
            
            const paymentMethodInput = document.querySelector('input[name="payment_method"]:checked');
            const paymentMethod = paymentMethodInput ? paymentMethodInput.value : 'cod';
            
            const data = new URLSearchParams();
            data.append('action', 'place_order');
            data.append('billing_name', name);
            data.append('billing_email', formData.get('billing_email'));
            data.append('billing_phone', formData.get('billing_phone'));
            data.append('billing_address', formData.get('billing_address') + ', ' + formData.get('billing_city') + ' - ' + formData.get('billing_postcode'));
            
            let shippingAddress = '';
            if (formData.get('ship_to_different') === 'on') {
                shippingAddress = formData.get('shipping_first_name') + ' ' + formData.get('shipping_last_name') + '\n' +
                                  formData.get('shipping_address') + ', ' + formData.get('shipping_city') + ' - ' + formData.get('shipping_postcode');
            }
            data.append('shipping_address', shippingAddress);
            data.append('order_notes', formData.get('order_notes'));
            
            data.append('payment_method', paymentMethod);
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
                    msgEl.className = 'mt-6 text-center text-lg font-semibold text-green-700 block p-4 bg-green-50 border border-green-200 rounded';
                    placeOrderBtn.innerText = 'Order Placed';
                } else {
                    msgEl.innerText = result.data.message || 'Error placing order.';
                    msgEl.className = 'mt-6 text-center text-lg font-semibold text-red-600 block p-4 bg-red-50 border border-red-200 rounded';
                    placeOrderBtn.innerText = 'Place Order';
                    placeOrderBtn.disabled = false;
                }
            } catch(err) {
                msgEl.innerText = 'Network error. Please try again.';
                msgEl.className = 'mt-6 text-center text-lg font-semibold text-red-600 block p-4 bg-red-50 border border-red-200 rounded';
                placeOrderBtn.innerText = 'Place Order';
                placeOrderBtn.disabled = false;
            }
        });
    }
});
