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
    <link rel="stylesheet" href='/wp-content/themes/tattvah/build/newsletters/newsletters.css?a10'>
    <script type="module" defer
        src='/wp-content/themes/tattvah/build/newsletters/newsletters.bundle.js?a10'></script>
    <?php
    $homeUrl = get_home_url();
    get_header();
    ?>

    <main class="main--container">
        <section class="blog-header-section">
            <div class="blog-img-text-container">
                <img src="https://shreysharma.com/wp-content/uploads/2025/01/Rectangle-35.png" alt="">
                <div class="text-container">
                    <p>I make it Simple,</p>
                    <p> I make it Valuable,and</p>
                    <p> I do it for the Long term.</p>
                </div>
            </div>
        </section>
        <section class="blogs">
            <div class="resource-list">
                <?php
                while (have_posts()) {
                    the_post();
                    $Permalinks = get_permalink($post->ID);
                    ?>
                    <div class="resource">
                        <div class="date">
                            <p> <?php echo get_the_date(); ?>
                            </p>

                        </div>
                        <div class="resource-img">
                            <img src="<?php echo get_field("banner_image"); ?>" alt="">
                        </div>
                        <h5 class="resource-heading">
                            <?php the_title() ?>
                        </h5>
                        <div class="resource-content">
                            <p>
                                <?php echo get_the_excerpt(); ?>
                            </p>
                        </div>
                        <div class="resource-btn">
                            <a href="<?php echo $Permalinks ?>" class="anim-button"><b>Read</b>
                                <div></div>
                            </a>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </section>
    </main>
    <?php get_footer(); ?>
    </body>

</html>