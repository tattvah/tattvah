<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=<?php echo get_theme_file_uri('/build/success/success.css'); ?>>
    <script type="module" defer src=<?php echo get_theme_file_uri('/build/success/success.bundle.js'); ?>></script>
    <?php get_header(); ?>

    <main class="main--container bg-sugandhlok-bg font-openSans flex items-center justify-center min-h-[70vh]">
        <section class="text-center px-4 max-w-2xl mx-auto" data-aos="zoom-in">
            <div
                class="w-20 h-20 bg-sugandhlok-peach rounded-full flex items-center justify-center mx-auto mb-8 shadow-sm">
                <svg width="40" height="40" fill="none" stroke="white" stroke-width="2" viewBox="0 0 24 24"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path d="M20 6L9 17l-5-5"></path>
                </svg>
            </div>
            <h1 class="text-4xl md:text-5xl font-lora text-sugandhlok-maroon mb-4">Thank You!</h1>
            <p class="text-gray-600 text-lg mb-8 textchange">You’ll receive the requested customer success story in your
                email.</p>
            <a href="/"
                class="inline-block mt-8 px-8 py-3 bg-sugandhlok-maroon text-white font-semibold uppercase tracking-widest text-sm hover:bg-red-900 transition-colors rounded-sm shadow-sm">Back
                to Home</a>
        </section>
    </main>

    <?php get_footer(); ?>
    </body>

</html>