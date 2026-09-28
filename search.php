<?php
/**
 * The template for displaying search results pages
 */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href='/wp-content/themes/tattvah/build/products/products.css?v6'>
    <script type="module" defer src='/wp-content/themes/tattvah/build/products/products.bundle.js?v6'></script>

    <?php
    $homeUrl = get_home_url();
    get_header();

    $search_query = get_search_query();
    ?>

    <main class="max-w-7xl mx-auto px-4 py-20 min-h-[60vh]">
        <div class="text-center mb-16" data-aos="fade-up">
            <h1 class="text-4xl md:text-5xl font-lora text-gray-900 font-semibold mb-6">Search Results</h1>
            <p class="text-xl text-gray-600">You searched for: <span
                    class="text-sugandhlok-maroon font-semibold">"<?php echo esc_html($search_query); ?>"</span></p>
            <div class="w-24 h-1 bg-sugandhlok-peach mx-auto mt-8"></div>
        </div>

        <div class="search-results-container">
            <?php if (have_posts()): ?>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
                    <?php while (have_posts()):
                        the_post();
                        $post_type = get_post_type();
                        $image_url = get_the_post_thumbnail_url(get_the_ID(), 'large');

                        if ($post_type === 'product') {
                            $image_url = get_field('gallery_image_1', get_the_ID()) ?: $image_url;
                        } elseif ($post_type === 'blog') {
                            $image_url = get_field('listing_image', get_the_ID()) ?: get_field('banner_image', get_the_ID()) ?: $image_url;
                        }

                        if (!$image_url) {
                            $image_url = 'https://tattvah.com/wp-content/uploads/2025/01/default-image.jpg'; // fallback
                        }
                        ?>
                        <article
                            class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-xl transition-shadow duration-300 flex flex-col"
                            data-aos="fade-up">
                            <a href="<?php the_permalink(); ?>"
                                class="block relative aspect-[4/3] overflow-hidden group bg-gray-50">
                                <img src="<?php echo esc_url($image_url); ?>" alt="<?php the_title_attribute(); ?>"
                                    class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                <div
                                    class="absolute top-4 left-4 bg-white/90 backdrop-blur-sm px-3 py-1 rounded text-xs font-bold text-sugandhlok-maroon uppercase tracking-widest shadow-sm">
                                    <?php
                                    if ($post_type === 'product')
                                        echo 'Product';
                                    elseif ($post_type === 'blog')
                                        echo 'Journal';
                                    else
                                        echo 'Page';
                                    ?>
                                </div>
                            </a>
                            <div class="p-8 flex flex-col flex-grow">
                                <h2 class="text-2xl font-lora font-semibold text-gray-900 mb-4 line-clamp-2">
                                    <a href="<?php the_permalink(); ?>"
                                        class="hover:text-sugandhlok-maroon transition-colors"><?php the_title(); ?></a>
                                </h2>
                                <div class="text-gray-600 mb-6 line-clamp-3 text-lg flex-grow">
                                    <?php
                                    if (has_excerpt()) {
                                        echo get_the_excerpt();
                                    } else {
                                        echo wp_trim_words(get_the_content(), 20);
                                    }
                                    ?>
                                </div>

                                <a href="<?php the_permalink(); ?>"
                                    class="inline-flex items-center text-sugandhlok-maroon font-bold text-lg hover:text-red-900 transition-colors mt-auto group">
                                    <?php echo ($post_type === 'product') ? 'View Product' : 'Read More'; ?>
                                    <svg class="w-5 h-5 ml-2 transform group-hover:translate-x-1 transition-transform"
                                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                    </svg>
                                </a>
                            </div>
                        </article>
                    <?php endwhile; ?>
                </div>

                <div class="mt-16 flex justify-center">
                    <?php
                    echo paginate_links([
                        'prev_text' => '<span class="px-4 py-2 border border-gray-300 rounded hover:bg-gray-50">&laquo; Prev</span>',
                        'next_text' => '<span class="px-4 py-2 border border-gray-300 rounded hover:bg-gray-50">Next &raquo;</span>',
                        'type' => 'list',
                        'before_page_number' => '<span class="px-4 py-2">',
                        'after_page_number' => '</span>'
                    ]);
                    ?>
                </div>

            <?php else: ?>
                <div class="text-center py-20 bg-gray-50 rounded-xl border border-gray-200">
                    <svg class="w-20 h-20 mx-auto text-gray-400 mb-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                    <h2 class="text-2xl font-semibold text-gray-900 mb-4">No results found</h2>
                    <p class="text-xl text-gray-600 max-w-2xl mx-auto">Sorry, but nothing matched your search terms. Please
                        try again with some different keywords.</p>

                    <form action="/" method="GET" class="max-w-md mx-auto mt-8 relative">
                        <input type="text" name="s" value="<?php echo esc_attr(get_search_query()); ?>"
                            class="w-full border border-gray-300 p-4 pl-6 text-lg rounded-full focus:outline-none focus:border-sugandhlok-maroon focus:ring-1 focus:ring-sugandhlok-maroon"
                            placeholder="Search again...">
                        <button type="submit"
                            class="absolute right-2 top-2 bottom-2 bg-sugandhlok-maroon text-white w-12 rounded-full flex items-center justify-center hover:bg-red-900 transition-colors">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                <polyline points="12 5 19 12 12 19"></polyline>
                            </svg>
                        </button>
                    </form>
                </div>
            <?php endif; ?>
        </div>
    </main>

    <style>
        /* Custom styling for pagination to look like Tailwind */
        .page-numbers.current {
            background-color: #490000;
            color: white;
            border-color: #490000;
            font-weight: bold;
        }

        .page-numbers {
            display: inline-block;
            padding: 0.5rem 1rem;
            border: 1px solid #e5e7eb;
            border-radius: 0.25rem;
            margin: 0 0.25rem;
            transition: all 0.3s ease;
        }

        .page-numbers:hover:not(.current) {
            background-color: #f9fafb;
        }

        ul.page-numbers {
            display: flex;
            list-style: none;
            padding: 0;
            margin: 0;
        }
    </style>

    <?php get_footer(); ?>