<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,500;0,600;1,400&family=Open+Sans:wght@300;400;500;600&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="/wp-content/themes/tattvah/build/frontPage/frontPage.css?v6">
    <script type="module" defer src="/wp-content/themes/tattvah/build/checkout/checkout.bundle.js?v6"></script>
    <?php get_header(); ?>
    <div class="checkout-page-container max-w-7xl mx-auto px-4 py-20 grid grid-cols-1 lg:grid-cols-2 gap-16">
        <!-- Left Column: Billing & Shipping Details -->
        <div class="checkout-billing">

            <h2 class="text-3xl font-lora text-sugandhlok-maroon font-semibold mb-8 border-b pb-4">Billing Details</h2>
            <form id="checkout-form" class="space-y-8">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div>
                        <label class="block text-xl font-semibold text-gray-700 mb-2">First Name *</label>
                        <input type="text" name="billing_first_name" required
                            class="w-full border border-solid border-gray-300 bg-white p-4 text-xl rounded-md focus:outline-none focus:border-sugandhlok-maroon focus:ring-1 focus:ring-sugandhlok-maroon">
                    </div>
                    <div>
                        <label class="block text-xl font-semibold text-gray-700 mb-2">Last Name *</label>
                        <input type="text" name="billing_last_name" required
                            class="w-full border border-solid border-gray-300 bg-white p-4 text-xl rounded-md focus:outline-none focus:border-sugandhlok-maroon focus:ring-1 focus:ring-sugandhlok-maroon">
                    </div>
                </div>

                <div>
                    <label class="block text-xl font-semibold text-gray-700 mb-2">Email Address *</label>
                    <input type="email" name="billing_email" required
                        class="w-full border border-solid border-gray-300 bg-white p-4 text-xl rounded-md focus:outline-none focus:border-sugandhlok-maroon focus:ring-1 focus:ring-sugandhlok-maroon">
                </div>

                <div>
                    <label class="block text-xl font-semibold text-gray-700 mb-2">Phone Number *</label>
                    <input type="tel" name="billing_phone" required
                        class="w-full border border-solid border-gray-300 bg-white p-4 text-xl rounded-md focus:outline-none focus:border-sugandhlok-maroon focus:ring-1 focus:ring-sugandhlok-maroon">
                </div>

                <div>
                    <label class="block text-xl font-semibold text-gray-700 mb-2">Street Address *</label>
                    <textarea name="billing_address" required rows="3"
                        class="w-full border border-solid border-gray-300 bg-white p-4 text-xl rounded-md focus:outline-none focus:border-sugandhlok-maroon focus:ring-1 focus:ring-sugandhlok-maroon"></textarea>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div>
                        <label class="block text-xl font-semibold text-gray-700 mb-2">Town / City *</label>
                        <input type="text" name="billing_city" required
                            class="w-full border border-solid border-gray-300 bg-white p-4 text-xl rounded-md focus:outline-none focus:border-sugandhlok-maroon focus:ring-1 focus:ring-sugandhlok-maroon">
                    </div>
                    <div>
                        <label class="block text-xl font-semibold text-gray-700 mb-2">PIN Code *</label>
                        <input type="text" name="billing_postcode" required
                            class="w-full border border-solid border-gray-300 bg-white p-4 text-xl rounded-md focus:outline-none focus:border-sugandhlok-maroon focus:ring-1 focus:ring-sugandhlok-maroon">
                    </div>
                </div>

                <h2 class="text-3xl font-lora text-sugandhlok-maroon font-semibold mb-8 mt-12 border-b pb-4">Shipping
                    Details</h2>
                <label class="flex items-center gap-3 mb-6 cursor-pointer">
                    <input type="checkbox" id="ship_to_different" name="ship_to_different"
                        class="w-5 h-5 accent-sugandhlok-maroon">
                    <span class="text-lg font-semibold text-gray-700">Ship to a different address?</span>
                </label>

                <div id="shipping_fields" class="space-y-8 hidden">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div>
                            <label class="block text-xl font-semibold text-gray-700 mb-2">First Name</label>
                            <input type="text" name="shipping_first_name"
                                class="w-full border border-solid border-gray-300 bg-white p-4 text-xl rounded-md focus:outline-none focus:border-sugandhlok-maroon focus:ring-1 focus:ring-sugandhlok-maroon">
                        </div>
                        <div>
                            <label class="block text-xl font-semibold text-gray-700 mb-2">Last Name</label>
                            <input type="text" name="shipping_last_name"
                                class="w-full border border-solid border-gray-300 bg-white p-4 text-xl rounded-md focus:outline-none focus:border-sugandhlok-maroon focus:ring-1 focus:ring-sugandhlok-maroon">
                        </div>
                    </div>
                    <div>
                        <label class="block text-xl font-semibold text-gray-700 mb-2">Street Address</label>
                        <textarea name="shipping_address" rows="3"
                            class="w-full border border-solid border-gray-300 bg-white p-4 text-xl rounded-md focus:outline-none focus:border-sugandhlok-maroon focus:ring-1 focus:ring-sugandhlok-maroon"></textarea>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div>
                            <label class="block text-xl font-semibold text-gray-700 mb-2">Town / City</label>
                            <input type="text" name="shipping_city"
                                class="w-full border border-solid border-gray-300 bg-white p-4 text-xl rounded-md focus:outline-none focus:border-sugandhlok-maroon focus:ring-1 focus:ring-sugandhlok-maroon">
                        </div>
                        <div>
                            <label class="block text-xl font-semibold text-gray-700 mb-2">PIN Code</label>
                            <input type="text" name="shipping_postcode"
                                class="w-full border border-solid border-gray-300 bg-white p-4 text-xl rounded-md focus:outline-none focus:border-sugandhlok-maroon focus:ring-1 focus:ring-sugandhlok-maroon">
                        </div>
                    </div>
                </div>

                <div>
                    <label class="block text-xl font-semibold text-gray-700 mb-2 mt-8">Order Notes (optional)</label>
                    <textarea name="order_notes" rows="4"
                        placeholder="Notes about your order, e.g. special notes for delivery."
                        class="w-full border border-solid border-gray-300 bg-white p-4 text-xl rounded-md focus:outline-none focus:border-sugandhlok-maroon focus:ring-1 focus:ring-sugandhlok-maroon"></textarea>
                </div>
            </form>
        </div>

        <!-- Right Column: Order Summary -->
        <div class="checkout-summary bg-[#faf9f8] p-10 rounded-xl shadow-sm border border-gray-200 self-start">
            <h2 class="text-3xl font-lora text-gray-900 font-semibold mb-8">Your Order</h2>

            <div id="checkout-cart-items" class="space-y-6 mb-8">
                <!-- Items injected by JS -->
            </div>

            <div class="border-t border-gray-200 pt-6 space-y-6 mb-8 text-xl">
                <div class="flex justify-between text-gray-700">
                    <span>Subtotal</span>
                    <span id="checkout-subtotal" class="font-semibold">Rs. 0</span>
                </div>
                <div class="flex justify-between text-gray-700">
                    <span>Shipping</span>
                    <span class="font-semibold text-green-700">Free</span>
                </div>
                <div
                    class="flex justify-between text-3xl font-bold text-sugandhlok-maroon mt-6 pt-6 border-t border-gray-200">
                    <span>Total</span>
                    <span id="checkout-total">Rs. 0</span>
                </div>
            </div>

            <div class="payment-methods mb-10 space-y-6">
                <h3 class="text-3xl font-lora font-semibold text-gray-800 mb-6">Payment Method</h3>

                <label
                    class="flex flex-col gap-2 cursor-pointer border border-gray-300 p-5 rounded-md hover:border-sugandhlok-maroon transition-colors bg-white">
                    <div class="flex items-center gap-4">
                        <input type="radio" name="payment_method" value="upi" class="accent-sugandhlok-maroon w-6 h-6">
                        <span class="text-gray-800 font-semibold text-xl">UPI (GPay, PhonePe, Paytm)</span>
                    </div>
                    <div class="text-lg text-gray-500 pl-10">Pay securely via any UPI app.</div>
                </label>

                <label
                    class="flex flex-col gap-2 cursor-pointer border border-gray-300 p-5 rounded-md hover:border-sugandhlok-maroon transition-colors bg-white">
                    <div class="flex items-center gap-4">
                        <input type="radio" name="payment_method" value="online"
                            class="accent-sugandhlok-maroon w-6 h-6">
                        <span class="text-gray-800 font-semibold text-xl">Credit / Debit Card / NetBanking</span>
                    </div>
                    <div class="text-lg text-gray-500 pl-10">Secure online payment gateway.</div>
                </label>

                <label
                    class="flex flex-col gap-2 cursor-pointer border border-gray-300 p-5 rounded-md hover:border-sugandhlok-maroon transition-colors bg-white">
                    <div class="flex items-center gap-4">
                        <input type="radio" name="payment_method" value="cod" checked
                            class="accent-sugandhlok-maroon w-6 h-6">
                        <span class="text-gray-800 font-semibold text-xl">Cash on Delivery</span>
                    </div>
                    <div class="text-lg text-gray-500 pl-10">Pay with cash when your order is delivered.</div>
                </label>
            </div>

            <button id="place-order-btn"
                class="w-full py-5 rounded bg-sugandhlok-maroon text-white text-center uppercase tracking-widest font-bold text-xl hover:bg-red-900 transition-colors shadow-lg hover:shadow-xl">
                Place Order
            </button>
            <div id="checkout-message" class="mt-6 text-center text-lg font-semibold hidden"></div>
        </div>
    </div>

    <?php get_footer(); ?>

    </body>

</html>