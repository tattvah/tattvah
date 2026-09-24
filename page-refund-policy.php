<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500&family=Roboto:wght@400;500&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href='/wp-content/themes/tattvah/build/refundPolicy/refundPolicy.css?a10'>
    <script type="module" defer src='/wp-content/themes/tattvah/build/refundPolicy/refundPolicy.bundle.js?a10'></script>

    <?php
    $homeUrl = get_home_url();
    get_header();
    ?>

    <main class="main--container" style="min-height: 60vh;">
        <section class="section">
            <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 4rem 1rem;">
                <h1 style="font-size: 2.5rem; font-weight: 500; margin-bottom: 2rem;"><?php the_title(); ?></h1>
                <div class="content" style="font-family: 'Roboto', sans-serif; line-height: 1.6;">
                    <?php if (have_posts()) : while (have_posts()) : the_post();
                        the_content();
                    endwhile; endif; ?>
                </div>
            </div>
        </section>
    </main>

    <?php get_footer(); ?>
</body>
</html>
