<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href='/wp-content/themes/tattvah/build/blog/blog.css?v6'>
    <script type="module" defer src='/wp-content/themes/tattvah/build/blog/blog.bundle.js?v6'></script>

    <?php
    $homeUrl = get_home_url();
    get_header();
    ?>

    <main class="sl-single-blog">
        <article class="sl-blog-article">
            <!-- Hero Header -->
            <header class="sl-blog-header">
                <div class="sl-blog-meta">
                    <span class="sl-meta-cat">Journal</span>
                    <span class="sl-meta-dot">•</span>
                    <span><?php echo get_the_date(); ?></span>
                    <?php if (get_field("read_time")): ?>
                        <span class="sl-meta-dot">•</span>
                        <span class="sl-meta-read">
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="6" cy="6" r="5"></circle>
                                <polyline points="6 3 6 6 8 8"></polyline>
                            </svg>
                            <?php echo get_field("read_time"); ?> Read
                        </span>
                    <?php endif; ?>
                </div>

                <h1 class="sl-blog-title"><?php the_title(); ?></h1>

                <div class="sl-blog-author-share">
                    <div class="sl-share-wrapper">
                        <button data-link="<?php echo get_permalink(); ?>" id="copylink" class="sl-share-btn copylink">
                            <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path d="M4 12v8a2 2 0 002 2h12a2 2 0 002-2v-8M16 6l-4-4-4 4M12 2v13"></path>
                            </svg>
                            Share
                            <div class="copied_text">Copied!</div>
                        </button>
                    </div>
                </div>
            </header>

            <!-- Audio Player -->
            <?php if (get_field('audio')): ?>
                <div class="sl-audio-player">
                    <div class="sl-audio-progress-wrap">
                        <p class="sl-audio-label">Listen to the Article</p>
                        <div class="sl-audio-progress-container progress-bar-container">
                            <div class="sl-audio-progress-fill progress-bar-fill"></div>
                        </div>
                    </div>
                    <div class="sl-audio-controls">
                        <button class="play-pause-btn" aria-label="Play-Pause">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M8 5v14l11-7z" />
                            </svg>
                        </button>
                        <button class="control-btn mute-btn" aria-label="Mute">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2">
                                <path d="M11 5L6 9H2v6h4l5 4V5z" />
                                <path d="M19.07 4.93a10 10 0 010 14.14M15.54 8.46a5 5 0 010 7.07" />
                            </svg>
                        </button>
                    </div>
                    <audio id="audio" src="<?php echo get_field('audio'); ?>"></audio>
                </div>
            <?php endif; ?>

            <!-- Featured Image -->
            <div class="sl-blog-banner">
                <?php $img = get_field('banner_image') ?: 'https://sugandhlok.com/cdn/shop/files/havan-cup-lifestyle-min.png'; ?>
                <img fetchpriority="high" src="<?php echo esc_url($img); ?>"
                    alt="<?php echo esc_attr(get_field('banner_alt_text') ?: get_the_title()); ?>">
            </div>

            <!-- Content -->
            <div class="sl-blog-content">
                <?php the_content(); ?>
            </div>
        </article>


    </main>

    <?php get_footer(); ?>
    <?php echo get_field('schema_code'); ?>
    </body>

</html>