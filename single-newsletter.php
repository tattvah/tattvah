<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href='/wp-content/themes/tattvah/build/newsletter/newsletter.css?a10'>
    <script type="module" defer src='/wp-content/themes/tattvah/build/newsletter/newsletter.bundle.js?a10'></script>

    <?php
    $homeUrl = get_home_url();
    get_header();
    ?>

</head>

<body>

    <main class="main--container">

        <section class="hero-section">
            <div class="heading-content">
                <h4>

                    <?php the_title(); ?>
                </h4>
                <div class="blog-info-container">
                    <div class="blog-detail-author-date">
                        <div class="author-icon">
                            <img src="https://shreysharma.com/wp-content/uploads/2025/01/author-img.webp" alt="">
                        </div>
                        <div class="date-view-container">
                            <p class="author-name">Tattvah</p>
                            <span class="date">
                                <?php echo get_the_date(); ?>
                            </span>

                        </div>
                    </div>
                    <div class="share-post">

                        <a data-link="<?php echo get_permalink(); ?>" id="copylink" class="copylink"
                            aria-label="copy link">
                            <div class="copied_text">
                                <p class="link_copied">Copied</p>
                            </div>
                            Share this post
                        </a>

                    </div>
                </div>

            </div>
            <div class="banner-image">
                <picture>
                    <source media="(max-width:500px)"
                        srcset="https://shreysharma.com/wp-content/uploads/2025/01/Frame-21.png">
                    <source media="(max-width:1050px)"
                        srcset="https://shreysharma.com/wp-content/uploads/2025/01/Frame-21.png">
                    <img width="679" height="456" src="https://shreysharma.com/wp-content/uploads/2025/01/Frame-21.png"
                        alt="<?php echo get_field('banner_alt_text'); ?>">
                </picture>
            </div>
        </section>

        <section class="main-blog">

            <div class="blog-details">
                <?php the_content(); ?>
            </div>

        </section>

        <section class="newsletter-subscribe">
            <p class="form-top-heading">SIGN UP FOR NEWSLETTER</p>
            <h2>Let my journey save a mile for you!</h2>
            <p>Entrepreneurship doesn't come with a manual; the lessons I picked up along my way might help.</p>
            <form class="subscribe-form" id="cta-subscribe-form">
                <div class="subscribe-btn">
                    <div class="field-box">
                        <input type="email" name="lemail" id="form-email" placeholder="Enter your Email Address">
                    </div>
                    <button type="submit" class="button"><b>SUBSCRIBE</b></button>
                </div>
            </form>
        </section>

    </main>

    <?php get_footer(); ?>

    <?php echo get_field('schema_code'); ?>

</body>


</html>