<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=<?php echo get_theme_file_uri('/build/notFound/notFound.css'); ?>>
    <script type="module" defer src=<?php echo get_theme_file_uri('/build/notFound/notFound.bundle.js'); ?>></script>
    <?php get_header(); ?>

    <main class="main--container bg-sugandhlok-bg font-openSans flex items-center justify-center min-h-[70vh]">
        <section class="text-center px-4 max-w-2xl mx-auto" data-aos="zoom-in">
            <h1 class="text-8xl md:text-9xl font-lora text-sugandhlok-peach mb-4">404</h1>
            <h2 class="text-3xl md:text-4xl font-lora text-sugandhlok-maroon mb-4">Page Not Found</h2>
            <p class="text-gray-600 text-lg mb-8 textchange">We're sorry, but the page you're trying to reach has either
                been moved, renamed, or no longer exists.</p>
            <a href="/"
                class="inline-block px-8 py-3 bg-sugandhlok-maroon text-white font-semibold uppercase tracking-widest text-sm hover:bg-red-900 transition-colors rounded-sm shadow-sm">Back
                to Home</a>
        </section>
    </main>

    <?php get_footer(); ?>
    </body>

</html>