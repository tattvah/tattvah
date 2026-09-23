<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tattvah Shows | Podcasts, Interviews & Conversations</title>
    <meta name="description" content="Explore Tattvah’s shows, podcasts, interviews, and conversations covering business, entrepreneurship, Salesforce, leadership, technology, and careers.">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500&family=Roboto:wght@400;500&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href='/wp-content/themes/tattvah/build/tattvahShows/tattvahShows.css?a10'>
    <script type="module" defer
        src='/wp-content/themes/tattvah/build/tattvahShows/tattvahShows.bundle.js?a10'></script>

    <?php
    $homeUrl = get_home_url();
    get_header();
    ?>

    <main class="main--container">

        <section class="contact-banner">
            <div class="banner-flex">
                <div class="banner-text">
                    <h1>The Tattvah Show</h1>
                    <div class="banner-image-mid">
                        <img width="415" height="390" fetchpriority="high"
                            src="https://shreysharma.com/wp-content/uploads/2025/01/shreysharmashow-hero-img.webp"
                            alt="Tattvah Show">
                    </div>
                    <p>Tune in for real talk with industry leaders. I dive deep into the questions that matter to you
                        and uncover insights to fuel your entrepreneurial journey.</p>
                </div>
                <div class="banner-image">
                    <img width="415" height="390" fetchpriority="high"
                        src="https://shreysharma.com/wp-content/uploads/2025/01/shreysharmashow-hero-img.webp"
                        alt="Tattvah Show">
                </div>
            </div>
        </section>


        <section class="news-letter-section">

            <div class="nav-tabs">
                <p class="tabs active" data-attr="Speaker">Speakers</p>
                <p class="tabs" data-attr="sessions">In house sessions</p>
                <p class="tabs" data-attr="podcast">Podcast</p>
            </div>

            <div class="mobilenav-tabs">
                <p class="mobile_tabs active" data-attr="Speaker">
                    <span class="head">Speakers</span>
                    <span>
                        <svg fill='#ffffff' height='15px' width='15px' version='1.1' id='Layer_1'
                            xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'
                            viewBox='-25.59 -25.59 562.97 562.97' xml:space='preserve' stroke='#ffffff'
                            stroke-width='21.495054'>
                            <g id='SVGRepo_bgCarrier' stroke-width='0'></g>
                            <g id='SVGRepo_tracerCarrier' stroke-linecap='round' stroke-linejoin='round'></g>
                            <g id='SVGRepo_iconCarrier'>
                                <g>
                                    <g>
                                        <path
                                            d='M508.667,125.707c-4.16-4.16-10.88-4.16-15.04,0L255.76,363.573L18,125.707c-4.267-4.053-10.987-3.947-15.04,0.213 c-3.947,4.16-3.947,10.667,0,14.827L248.293,386.08c4.16,4.16,10.88,4.16,15.04,0l245.333-245.333 C512.827,136.693,512.827,129.867,508.667,125.707z'>
                                        </path>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </span>
                </p>
                <p class="mobile_tabs" data-attr="sessions">In house sessions</p>
                <p class="mobile_tabs" data-attr="podcast">Podcast</p>
            </div>

            <div class="cards active" data-attr="Speaker">
                <?php
                $args = [
                    'post_type' => 'tattvah-show',
                    'posts_per_page' => -1,
                    'tax_query' => [
                        [
                            'taxonomy' => 'tattvah-show-tag',
                            'field' => 'slug',
                            'terms' => 'speakers',
                        ],
                    ],
                ];

                $filtered_posts = get_posts($args);

                foreach ($filtered_posts as $post) {

                    $post_title = $post->post_title;
                    $post_id = $post->ID;
                    $content = get_the_excerpt();
                    $Date_Of_Published = get_the_date('F j, Y', $post->ID);
                    $Permalinks = get_permalink($post->ID);
                    ?>

                    <div class="card-flex">
                        <img loading="lazy" width="1920" height="1080" src="<?php echo get_field('thumbnail') ?>"
                            alt="<?php echo get_field('banner_alt_text') ?>">
                        <div class="text-info">
                            <h2><?php echo get_field('episode') ?></h2>
                            <h3><?php the_title() ?></h3>
                            <p> <?php echo get_the_excerpt(); ?> </p>
                            <div class="date-and-btn">
                                <span><?php echo get_the_date(); ?></span>
                                <div class="share-watch-btn">

                                    <a href="#" data-link="<?php echo $Permalinks ?>" class="copylink">
                                        <div class="copied_text">
                                            <p class="link_copied">Link Copied to Clipboard!</p>
                                        </div>
                                        <svg width="23" height="23" viewBox="0 0 23 23" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M20.8628 15.666C19.9758 15.2041 18.9601 15.1064 18.0034 15.3915C17.9632 15.402 17.923 15.4152 17.8855 15.4284C17.8614 15.4363 17.8373 15.4443 17.8132 15.4548C17.2611 15.6501 16.7546 15.9748 16.35 16.3945C16.3419 16.4024 16.3366 16.4077 16.3285 16.4156L9.29395 12.7467L9.29931 12.7256C9.30199 12.7151 9.30467 12.7019 9.30735 12.6913C9.46814 12.0552 9.47886 11.3795 9.33147 10.7355C9.32611 10.7064 9.31807 10.68 9.31003 10.651C9.30735 10.6325 9.30199 10.614 9.29663 10.5982C9.29663 10.5929 9.29395 10.5903 9.29395 10.585L16.3259 6.91617C16.3339 6.92408 16.3393 6.92936 16.3473 6.93728C16.752 7.35696 17.2584 7.68161 17.8105 7.87693C17.8346 7.88485 17.8587 7.89277 17.8828 7.90068L18.0034 7.94028C18.3625 8.04585 18.7297 8.09864 19.0968 8.09864C19.7051 8.09864 20.3108 7.95083 20.8628 7.66313C21.7552 7.19595 22.4118 6.41731 22.7092 5.46446C22.8218 5.10286 22.8781 4.73334 22.8781 4.36381C22.8781 3.76465 22.7307 3.16814 22.4359 2.62441C21.9616 1.74547 21.1683 1.0988 20.2036 0.805823C19.2362 0.512843 18.2125 0.607863 17.3201 1.07505C15.8033 1.86688 15.0208 3.55086 15.3986 5.1926L8.36405 8.86145C8.36137 8.85617 8.35601 8.85353 8.35333 8.84825C8.05586 8.51832 7.70748 8.23326 7.31623 8.00626C6.32469 7.43086 5.16699 7.26985 4.05218 7.55491C2.93737 7.83998 2.0021 8.53151 1.4179 9.50811C0.211966 11.5247 0.895326 14.1298 2.94273 15.3176C3.61269 15.7056 4.36304 15.9062 5.12412 15.9062C5.45106 15.9062 5.78068 15.8692 6.10762 15.7927C6.16122 15.7795 6.21213 15.7689 6.25769 15.7557C6.28717 15.7478 6.31665 15.7399 6.34344 15.732C6.98661 15.5472 7.58421 15.212 8.06926 14.7633C8.08266 14.7527 8.09338 14.7395 8.10678 14.729C8.11214 14.7237 8.12018 14.7158 8.12554 14.7105L8.12822 14.7078C8.14966 14.6867 8.1711 14.6656 8.19254 14.6445C8.20326 14.6339 8.21397 14.6234 8.22737 14.6102C8.26757 14.5706 8.30777 14.5284 8.34797 14.4835C8.35065 14.4782 8.35601 14.4756 8.35869 14.4703L15.3986 18.1418C15.0208 19.7835 15.8033 21.4675 17.3201 22.2593C17.8748 22.547 18.4778 22.6948 19.0861 22.6948C19.4613 22.6948 19.8365 22.6394 20.2036 22.5286C21.171 22.2356 21.9616 21.5889 22.4359 20.71C22.9075 19.831 23.0067 18.8201 22.7092 17.8699C22.4118 16.9144 21.7552 16.1332 20.8628 15.666Z"
                                                fill="#CCCCCC" />
                                        </svg>
                                    </a>

                                    <a href="<?php echo $Permalinks ?>" class="button">
                                        <b>Watch Now </b>
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M13.7272 2.58378C10.651 -0.462321 5.68787 -0.43794 2.64177 2.63827C-0.383193 5.69312 -0.383193 10.6144 2.64177 13.6692C5.71797 16.7153 10.6811 16.691 13.7272 13.6148C16.7521 10.5599 16.7521 5.63863 13.7272 2.58378ZM8.18448 15.3353C4.20951 15.3353 0.975679 12.1015 0.975679 8.1265C0.975679 4.15149 4.20947 0.917733 8.18448 0.917733C12.1595 0.917733 15.3933 4.15153 15.3933 8.12653C15.3933 12.1015 12.1594 15.3353 8.18448 15.3353Z"
                                                fill="white" />
                                            <path
                                                d="M12.4325 7.85411V7.85446L6.06811 4.18006C5.91749 4.0931 5.72486 4.1447 5.63789 4.29536C5.61027 4.3432 5.5957 4.39743 5.5957 4.4527V11.8015C5.59577 11.9754 5.73687 12.1164 5.91081 12.1162C5.96604 12.1162 6.02031 12.1017 6.06815 12.0741L12.4325 8.39966C12.5832 8.31273 12.6348 8.12009 12.5479 7.96944C12.5202 7.92153 12.4804 7.88176 12.4325 7.85411Z"
                                                fill="white" />
                                        </svg>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>

                    <?php
                }
                ?>
            </div>

            <div class="cards" data-attr="sessions">

                <?php
                $args = [
                    'post_type' => 'tattvah-show',
                    'posts_per_page' => -1,
                    'tax_query' => [
                        [
                            'taxonomy' => 'tattvah-show-tag',
                            'field' => 'slug',
                            'terms' => 'sessions',
                        ],
                    ],
                ];

                $filtered_posts = get_posts($args);

                foreach ($filtered_posts as $post) {

                    $post_title = $post->post_title;
                    $post_id = $post->ID;
                    $content = get_the_excerpt();
                    $Date_Of_Published = get_the_date('F j, Y', $post->ID);
                    $Permalinks = get_permalink($post->ID);
                    ?>

                    <div class="card-flex">
                        <img loading="lazy" width="1920" height="1080" src="<?php echo get_field('thumbnail') ?>"
                            alt="<?php echo get_field('banner_alt_text') ?>">
                        <div class="text-info">
                            <h2><?php echo get_field('episode') ?></h2>
                            <h3><?php the_title() ?></h3>
                            <p> <?php echo get_the_excerpt(); ?> </p>
                            <div class="date-and-btn">
                                <span><?php echo get_the_date(); ?></span>
                                <div class="share-watch-btn">

                                    <a href="#" data-link="<?php echo $Permalinks ?>" class="copylink">
                                        <div class="copied_text">
                                            <p class="link_copied">Link Copied to Clipboard!</p>
                                        </div>
                                        <svg width="23" height="23" viewBox="0 0 23 23" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M20.8628 15.666C19.9758 15.2041 18.9601 15.1064 18.0034 15.3915C17.9632 15.402 17.923 15.4152 17.8855 15.4284C17.8614 15.4363 17.8373 15.4443 17.8132 15.4548C17.2611 15.6501 16.7546 15.9748 16.35 16.3945C16.3419 16.4024 16.3366 16.4077 16.3285 16.4156L9.29395 12.7467L9.29931 12.7256C9.30199 12.7151 9.30467 12.7019 9.30735 12.6913C9.46814 12.0552 9.47886 11.3795 9.33147 10.7355C9.32611 10.7064 9.31807 10.68 9.31003 10.651C9.30735 10.6325 9.30199 10.614 9.29663 10.5982C9.29663 10.5929 9.29395 10.5903 9.29395 10.585L16.3259 6.91617C16.3339 6.92408 16.3393 6.92936 16.3473 6.93728C16.752 7.35696 17.2584 7.68161 17.8105 7.87693C17.8346 7.88485 17.8587 7.89277 17.8828 7.90068L18.0034 7.94028C18.3625 8.04585 18.7297 8.09864 19.0968 8.09864C19.7051 8.09864 20.3108 7.95083 20.8628 7.66313C21.7552 7.19595 22.4118 6.41731 22.7092 5.46446C22.8218 5.10286 22.8781 4.73334 22.8781 4.36381C22.8781 3.76465 22.7307 3.16814 22.4359 2.62441C21.9616 1.74547 21.1683 1.0988 20.2036 0.805823C19.2362 0.512843 18.2125 0.607863 17.3201 1.07505C15.8033 1.86688 15.0208 3.55086 15.3986 5.1926L8.36405 8.86145C8.36137 8.85617 8.35601 8.85353 8.35333 8.84825C8.05586 8.51832 7.70748 8.23326 7.31623 8.00626C6.32469 7.43086 5.16699 7.26985 4.05218 7.55491C2.93737 7.83998 2.0021 8.53151 1.4179 9.50811C0.211966 11.5247 0.895326 14.1298 2.94273 15.3176C3.61269 15.7056 4.36304 15.9062 5.12412 15.9062C5.45106 15.9062 5.78068 15.8692 6.10762 15.7927C6.16122 15.7795 6.21213 15.7689 6.25769 15.7557C6.28717 15.7478 6.31665 15.7399 6.34344 15.732C6.98661 15.5472 7.58421 15.212 8.06926 14.7633C8.08266 14.7527 8.09338 14.7395 8.10678 14.729C8.11214 14.7237 8.12018 14.7158 8.12554 14.7105L8.12822 14.7078C8.14966 14.6867 8.1711 14.6656 8.19254 14.6445C8.20326 14.6339 8.21397 14.6234 8.22737 14.6102C8.26757 14.5706 8.30777 14.5284 8.34797 14.4835C8.35065 14.4782 8.35601 14.4756 8.35869 14.4703L15.3986 18.1418C15.0208 19.7835 15.8033 21.4675 17.3201 22.2593C17.8748 22.547 18.4778 22.6948 19.0861 22.6948C19.4613 22.6948 19.8365 22.6394 20.2036 22.5286C21.171 22.2356 21.9616 21.5889 22.4359 20.71C22.9075 19.831 23.0067 18.8201 22.7092 17.8699C22.4118 16.9144 21.7552 16.1332 20.8628 15.666Z"
                                                fill="#CCCCCC" />
                                        </svg>
                                    </a>

                                    <a href="<?php echo $Permalinks ?>" class="button">
                                        <b>Watch Now </b>
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M13.7272 2.58378C10.651 -0.462321 5.68787 -0.43794 2.64177 2.63827C-0.383193 5.69312 -0.383193 10.6144 2.64177 13.6692C5.71797 16.7153 10.6811 16.691 13.7272 13.6148C16.7521 10.5599 16.7521 5.63863 13.7272 2.58378ZM8.18448 15.3353C4.20951 15.3353 0.975679 12.1015 0.975679 8.1265C0.975679 4.15149 4.20947 0.917733 8.18448 0.917733C12.1595 0.917733 15.3933 4.15153 15.3933 8.12653C15.3933 12.1015 12.1594 15.3353 8.18448 15.3353Z"
                                                fill="white" />
                                            <path
                                                d="M12.4325 7.85411V7.85446L6.06811 4.18006C5.91749 4.0931 5.72486 4.1447 5.63789 4.29536C5.61027 4.3432 5.5957 4.39743 5.5957 4.4527V11.8015C5.59577 11.9754 5.73687 12.1164 5.91081 12.1162C5.96604 12.1162 6.02031 12.1017 6.06815 12.0741L12.4325 8.39966C12.5832 8.31273 12.6348 8.12009 12.5479 7.96944C12.5202 7.92153 12.4804 7.88176 12.4325 7.85411Z"
                                                fill="white" />
                                        </svg>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>

                    <?php
                }
                ?>
            </div>

            <div class="cards" data-attr="podcast">

                <?php
                $args = [
                    'post_type' => 'tattvah-show',
                    'posts_per_page' => -1,
                    'tax_query' => [
                        [
                            'taxonomy' => 'tattvah-show-tag',
                            'field' => 'slug',
                            'terms' => 'podcast',
                        ],
                    ],
                ];

                $filtered_posts = get_posts($args);

                foreach ($filtered_posts as $post) {

                    $post_title = $post->post_title;
                    $post_id = $post->ID;
                    $content = get_the_excerpt();
                    $Date_Of_Published = get_the_date('F j, Y', $post->ID);
                    $Permalinks = get_permalink($post->ID);
                    ?>

                    <div class="card-flex">
                        <img loading="lazy" width="1920" height="1080" src="<?php echo get_field('thumbnail') ?>"
                            alt="<?php echo get_field('banner_alt_text') ?>">
                        <div class="text-info">
                            <h2><?php echo get_field('episode') ?></h2>
                            <h3><?php the_title() ?></h3>
                            <p> <?php echo get_the_excerpt(); ?> </p>
                            <div class="date-and-btn">
                                <span><?php echo get_the_date(); ?></span>
                                <div class="share-watch-btn">

                                    <a href="#" data-link="<?php echo $Permalinks ?>" class="copylink">
                                        <div class="copied_text">
                                            <p class="link_copied">Link Copied to Clipboard!</p>
                                        </div>
                                        <svg width="23" height="23" viewBox="0 0 23 23" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M20.8628 15.666C19.9758 15.2041 18.9601 15.1064 18.0034 15.3915C17.9632 15.402 17.923 15.4152 17.8855 15.4284C17.8614 15.4363 17.8373 15.4443 17.8132 15.4548C17.2611 15.6501 16.7546 15.9748 16.35 16.3945C16.3419 16.4024 16.3366 16.4077 16.3285 16.4156L9.29395 12.7467L9.29931 12.7256C9.30199 12.7151 9.30467 12.7019 9.30735 12.6913C9.46814 12.0552 9.47886 11.3795 9.33147 10.7355C9.32611 10.7064 9.31807 10.68 9.31003 10.651C9.30735 10.6325 9.30199 10.614 9.29663 10.5982C9.29663 10.5929 9.29395 10.5903 9.29395 10.585L16.3259 6.91617C16.3339 6.92408 16.3393 6.92936 16.3473 6.93728C16.752 7.35696 17.2584 7.68161 17.8105 7.87693C17.8346 7.88485 17.8587 7.89277 17.8828 7.90068L18.0034 7.94028C18.3625 8.04585 18.7297 8.09864 19.0968 8.09864C19.7051 8.09864 20.3108 7.95083 20.8628 7.66313C21.7552 7.19595 22.4118 6.41731 22.7092 5.46446C22.8218 5.10286 22.8781 4.73334 22.8781 4.36381C22.8781 3.76465 22.7307 3.16814 22.4359 2.62441C21.9616 1.74547 21.1683 1.0988 20.2036 0.805823C19.2362 0.512843 18.2125 0.607863 17.3201 1.07505C15.8033 1.86688 15.0208 3.55086 15.3986 5.1926L8.36405 8.86145C8.36137 8.85617 8.35601 8.85353 8.35333 8.84825C8.05586 8.51832 7.70748 8.23326 7.31623 8.00626C6.32469 7.43086 5.16699 7.26985 4.05218 7.55491C2.93737 7.83998 2.0021 8.53151 1.4179 9.50811C0.211966 11.5247 0.895326 14.1298 2.94273 15.3176C3.61269 15.7056 4.36304 15.9062 5.12412 15.9062C5.45106 15.9062 5.78068 15.8692 6.10762 15.7927C6.16122 15.7795 6.21213 15.7689 6.25769 15.7557C6.28717 15.7478 6.31665 15.7399 6.34344 15.732C6.98661 15.5472 7.58421 15.212 8.06926 14.7633C8.08266 14.7527 8.09338 14.7395 8.10678 14.729C8.11214 14.7237 8.12018 14.7158 8.12554 14.7105L8.12822 14.7078C8.14966 14.6867 8.1711 14.6656 8.19254 14.6445C8.20326 14.6339 8.21397 14.6234 8.22737 14.6102C8.26757 14.5706 8.30777 14.5284 8.34797 14.4835C8.35065 14.4782 8.35601 14.4756 8.35869 14.4703L15.3986 18.1418C15.0208 19.7835 15.8033 21.4675 17.3201 22.2593C17.8748 22.547 18.4778 22.6948 19.0861 22.6948C19.4613 22.6948 19.8365 22.6394 20.2036 22.5286C21.171 22.2356 21.9616 21.5889 22.4359 20.71C22.9075 19.831 23.0067 18.8201 22.7092 17.8699C22.4118 16.9144 21.7552 16.1332 20.8628 15.666Z"
                                                fill="#CCCCCC" />
                                        </svg>
                                    </a>

                                    <a href="<?php echo $Permalinks ?>" class="button">
                                        <b>Watch Now </b>
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M13.7272 2.58378C10.651 -0.462321 5.68787 -0.43794 2.64177 2.63827C-0.383193 5.69312 -0.383193 10.6144 2.64177 13.6692C5.71797 16.7153 10.6811 16.691 13.7272 13.6148C16.7521 10.5599 16.7521 5.63863 13.7272 2.58378ZM8.18448 15.3353C4.20951 15.3353 0.975679 12.1015 0.975679 8.1265C0.975679 4.15149 4.20947 0.917733 8.18448 0.917733C12.1595 0.917733 15.3933 4.15153 15.3933 8.12653C15.3933 12.1015 12.1594 15.3353 8.18448 15.3353Z"
                                                fill="white" />
                                            <path
                                                d="M12.4325 7.85411V7.85446L6.06811 4.18006C5.91749 4.0931 5.72486 4.1447 5.63789 4.29536C5.61027 4.3432 5.5957 4.39743 5.5957 4.4527V11.8015C5.59577 11.9754 5.73687 12.1164 5.91081 12.1162C5.96604 12.1162 6.02031 12.1017 6.06815 12.0741L12.4325 8.39966C12.5832 8.31273 12.6348 8.12009 12.5479 7.96944C12.5202 7.92153 12.4804 7.88176 12.4325 7.85411Z"
                                                fill="white" />
                                        </svg>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>

                    <?php
                }
                ?>
            </div>

        </section>

    </main>

    <?php get_footer(); ?>

    </body>

</html>