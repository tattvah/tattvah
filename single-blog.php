<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href='<?php echo get_theme_file_uri(\"build/blog/blog.css\"); ?>'>
    <script type="module" defer src='<?php echo get_theme_file_uri(\"build/blog/blog.bundle.js\"); ?>'></script>

    <?php
    $homeUrl = get_home_url();
    get_header();
    ?>

    <main class="main--container bg-sugandhlok-bg font-openSans text-gray-800 pt-8 md:pt-16 pb-24">

        <article
            class="max-w-4xl mx-auto px-4 md:px-8 bg-white shadow-sm rounded-md overflow-hidden border border-gray-100">
            <!-- Hero Header -->
            <header class="p-8 md:p-12 border-b border-gray-100">
                <div class="flex items-center gap-4 text-xs text-gray-500 uppercase tracking-widest mb-6 font-semibold">
                    <span class="text-sugandhlok-peach">Journal</span>
                    <span>•</span>
                    <span><?php echo get_the_date(); ?></span>
                    <?php if (get_field("read_time")): ?>
                        <span>•</span>
                        <span class="flex items-center gap-1">
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="6" cy="6" r="5"></circle>
                                <polyline points="6 3 6 6 8 8"></polyline>
                            </svg>
                            <?php echo get_field("read_time"); ?>
                        </span>
                    <?php endif; ?>
                </div>

                <h1 class="text-3xl md:text-5xl font-lora text-gray-900 leading-tight mb-8"><?php the_title(); ?></h1>

                <div class="flex flex-col md:flex-row md:items-center justify-between gap-6">
                    <div class="flex items-center gap-4">
                        <img src="https://tattvah.com/wp-content/uploads/2025/01/author-img.webp" alt="Tattvah"
                            class="w-12 h-12 rounded-full object-cover border-2 border-sugandhlok-peach">
                        <div>
                            <p class="font-lora text-lg text-gray-900">By Tattvah</p>
                            <p class="text-xs text-gray-500">Master Craftsmen</p>
                        </div>
                    </div>

                    <div class="flex items-center gap-4">
                        <!-- Share button -->
                        <button data-link="<?php echo get_permalink(); ?>" id="copylink"
                            class="copylink flex items-center gap-2 text-sugandhlok-maroon hover:text-sugandhlok-peach transition-colors text-sm font-semibold uppercase tracking-wider group relative">
                            <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path d="M4 12v8a2 2 0 002 2h12a2 2 0 002-2v-8M16 6l-4-4-4 4M12 2v13"></path>
                            </svg>
                            Share
                            <div
                                class="copied_text absolute -top-8 left-1/2 -translate-x-1/2 bg-gray-900 text-white text-xs py-1 px-2 rounded opacity-0 transition-opacity">
                                Copied!
                            </div>
                        </button>
                    </div>
                </div>
            </header>

            <!-- Audio Player -->
            <?php if (get_field('audio')): ?>
                <div class="bg-gray-50 p-6 border-b border-gray-100 flex items-center gap-6">
                    <div class="flex-1">
                        <p class="text-xs font-semibold text-gray-500 uppercase tracking-widest mb-3">Listen to the Article
                        </p>
                        <div
                            class="h-2 bg-gray-200 rounded-full w-full overflow-hidden relative cursor-pointer progress-bar-container">
                            <div class="progress-bar-fill absolute top-0 left-0 h-full bg-sugandhlok-peach w-0"></div>
                        </div>
                    </div>
                    <div class="flex items-center gap-3">
                        <button
                            class="play-pause-btn w-10 h-10 rounded-full bg-sugandhlok-maroon text-white flex items-center justify-center hover:bg-red-900 transition-colors shadow-sm"
                            aria-label="Play-Pause">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M8 5v14l11-7z" />
                            </svg>
                        </button>
                        <button
                            class="control-btn mute-btn w-10 h-10 rounded-full bg-white border border-gray-200 text-gray-600 flex items-center justify-center hover:bg-gray-50 transition-colors"
                            aria-label="Mute">
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
            <div class="w-full h-[40vh] md:h-[60vh] bg-gray-100 overflow-hidden relative">
                <?php $img = get_field('banner_image') ?: 'https://sugandhlok.com/cdn/shop/files/havan-cup-lifestyle-min.png'; ?>
                <img fetchpriority="high" src="<?php echo esc_url($img); ?>"
                    alt="<?php echo esc_attr(get_field('banner_alt_text') ?: get_the_title()); ?>"
                    class="w-full h-full object-cover">
            </div>

            <!-- Content -->
            <div
                class="p-8 md:p-12 prose prose-lg prose-headings:font-lora prose-headings:text-sugandhlok-maroon prose-a:text-sugandhlok-peach max-w-none text-gray-600 leading-relaxed font-openSans">
                <?php the_content(); ?>
            </div>
        </article>

        <!-- Newsletter -->
        <section
            class="max-w-4xl mx-auto mt-16 bg-sugandhlok-maroon text-white p-12 text-center rounded-md shadow-sm border border-sugandhlok-peach/30"
            data-aos="fade-up">
            <h2 class="text-3xl font-lora mb-4 text-sugandhlok-peach">Join Our Journey</h2>
            <p class="mb-8 font-light text-white/80 max-w-lg mx-auto">Subscribe to our newsletter for exclusive updates,
                spiritual insights, and special offers.</p>
            <form
                class="flex flex-col sm:flex-row gap-0 max-w-md mx-auto border border-sugandhlok-peach/30 rounded-sm overflow-hidden"
                id="cta-subscribe-form">
                <input type="email" name="lemail" id="form-email" placeholder="Your Email Address" required
                    class="flex-1 bg-transparent px-4 py-3 text-white focus:outline-none placeholder-white/50 border-none">
                <button type="submit"
                    class="bg-sugandhlok-peach text-sugandhlok-maroon font-bold px-6 py-3 hover:bg-white transition-colors">SUBSCRIBE</button>
            </form>
        </section>

    </main>

    <?php get_footer(); ?>
    <?php echo get_field('schema_code'); ?>
    </body>

</html>