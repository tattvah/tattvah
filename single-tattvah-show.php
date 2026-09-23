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

    <link rel="stylesheet" href='/wp-content/themes/tattvah/build/tattvahShow/tattvahShow.css?a10'>
    <script type="module" defer
        src='/wp-content/themes/tattvah/build/tattvahShow/tattvahShow.bundle.js?a10'></script>

    <?php
    $homeUrl = get_home_url();
    get_header();
    ?>

    <main class="main--container">

        <?php $youtube_url = get_field('youtube_video_url'); ?>

        <div class="iframe">
            <div class="yt-link-store"><?php echo $youtube_url; ?></div>

            <iframe loading="lazy" src="<?php echo $youtube_url; ?>" title="YouTube video player" class="youtube-frame"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen>
            </iframe>
        </div>

        <section class="hero-section">

            <div class="heading-content">
                <div class="episode-date">
                    <p class="episode-number"><?php echo get_field('episode') ?></p>
                    <p><?php echo get_the_date(); ?></p>
                </div>
                <h1 class="episode-title">
                    <?php the_title(); ?>
                </h1>
                <div class="blog-info-container">
                    <div class="blog-detail-author-date">
                        <div class="author-icon">
                            <img src="https://shreysharma.com/wp-content/uploads/2025/01/author-img.webp" width="45"
                                height="46" alt="Tattvah" loading="lazy">
                        </div>
                        <div class="date-view-container">
                            <p class="author-name">Tattvah</p>
                        </div>
                    </div>
                    <div class="share-post">

                        <a data-link="<?php echo get_permalink(); ?>" id="copylink" class="copylink">
                            <div class="copied_text">
                                <p class="link_copied">Copied</p>
                            </div>
                            Share this post
                        </a>

                    </div>
                </div>

            </div>

        </section>

        <section class="main-blog">
            <div class="blog-details">
                <?php the_content(); ?>
            </div>
        </section>

    </main>

    <?php get_footer(); ?>

    </body>

</html>