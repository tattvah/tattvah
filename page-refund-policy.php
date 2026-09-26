<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href='/wp-content/themes/tattvah/build/refundPolicy/refundPolicy.css?v2'>
    <script type="module" defer src='/wp-content/themes/tattvah/build/refundPolicy/refundPolicy.bundle.js?v2'></script>
    <?php
    $homeUrl = get_home_url();
    get_header();
    ?>

    <main class="main--container bg-sugandhlok-bg font-openSans text-gray-800" style="min-height: 60vh;">
        <!-- Page Header -->
        <section class="pt-16 md:pt-24 pb-12 max-w-7xl mx-auto px-4 md:px-8 text-center" data-aos="fade-up">
            <h1 class="text-4xl md:text-5xl font-lora text-sugandhlok-maroon mb-4"><?php the_title(); ?></h1>
            <div class="w-16 h-1 bg-sugandhlok-peach mx-auto mb-6"></div>
        </section>

        <!-- Content -->
        <section class="pb-24 max-w-4xl mx-auto px-4 md:px-8">
            <div
                class="bg-white p-8 md:p-12 rounded-md shadow-sm border border-gray-100 prose prose-lg prose-headings:font-lora prose-headings:text-sugandhlok-maroon prose-a:text-sugandhlok-peach max-w-none text-gray-600 leading-relaxed font-openSans">
                <?php if (have_posts()):
                    while (have_posts()):
                        the_post();
                        the_content();
                    endwhile;
                endif; ?>
            </div>
        </section>
    </main>

    <?php get_footer(); ?>
    </body>

</html>
