<link rel="icon" type="image/png" href="<?php echo get_theme_file_uri('public/assets/FavIcon.png'); ?>">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
    href="https://fonts.googleapis.com/css2?family=Cinzel:wght@500;600;700&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Lora:ital,wght@0,400..700;1,400..700&family=Mulish:ital,wght@0,200..1000;1,200..1000&family=Raleway:wght@300;400;500&family=Roboto:wght@400;500&display=swap"
    rel="stylesheet">

<?php
// ==============================================================
// SEO: DYNAMIC META TITLES, DESCRIPTIONS & OPEN GRAPH TAGS
// ==============================================================
$site_name   = 'Tattvah';
$default_img = get_theme_file_uri('public/assets/about/about-hero-ritual.jpg');

$meta_title    = 'Tattvah — 100% Natural, Charcoal-Free Incense & Sacred Essentials';
$meta_desc     = 'Sacred rituals, naturally reimagined. Handcrafted from temple flowers, pure natural resins & Ayurvedic herbs. 100% charcoal-free, zero toxic soot.';
$og_image      = $default_img;
$og_type       = 'website';
$canonical_url = home_url(add_query_arg([], $GLOBALS['wp']->request ?? ''));

if (empty($canonical_url) || is_front_page()) {
    $canonical_url = home_url('/');
}

// 1. Home / Front Page
if (is_front_page()) {
    $meta_title    = 'Tattvah — 100% Charcoal-Free Sacred Incense & Dhoop';
    $meta_desc     = 'Sacred rituals, naturally reimagined. Handcrafted from temple flowers, pure natural resins & Ayurvedic herbs. 100% charcoal-free, zero toxic soot for daily prayer.';
    $canonical_url = home_url('/');
}

// 2. About Us Page
elseif (is_page('about-us') || is_page('about')) {
    $meta_title    = 'About Tattvah — Our Story, Founders & Sacred Roots';
    $meta_desc     = 'Rooted in Tradition. Inspired by Nature. Made for Today. Discover how two friends began Tattvah in 2023 to bring sacred botanical purity back to modern Indian rituals.';
    $og_image      = get_theme_file_uri('public/assets/about/about-hero-ritual.jpg');
    $canonical_url = home_url('/about-us/');
}

// 3. Shop / All Products Archive
elseif (is_post_type_archive('product') || is_page('products') || is_page('shop')) {
    $meta_title    = 'Shop Sacred Incense, Dhoop & Sambrani Cups | Tattvah';
    $meta_desc     = 'Explore our collection of 100% natural, charcoal-free dhoop cones, flora agarbatti, cow dung diyas & sambrani cups. Handcrafted for daily rituals and peaceful living.';
    $canonical_url = home_url('/products/');
}

// 4. Product Taxonomy / Tag Archive
elseif (is_tax('product-tag')) {
    $current_term = get_queried_object();
    $term_name    = $current_term ? $current_term->name : single_term_title('', false);
    $meta_title   = esc_html($term_name) . ' Collection | Tattvah Handcrafted Incense';
    $meta_desc    = 'Shop pure, handcrafted ' . esc_attr(strtolower($term_name)) . ' by Tattvah. 100% charcoal-free, made from sacred temple flowers, pure resins, and therapeutic botanical oils.';
    if ($current_term && !is_wp_error(get_term_link($current_term))) {
        $canonical_url = get_term_link($current_term);
    }
}

// 5. Single Product Page
elseif (is_singular('product')) {
    $prod_id       = get_the_ID();
    $prod_title    = get_the_title($prod_id);
    $short_tagline = function_exists('get_field') ? get_field('short_tagline', $prod_id) : '';
    $gallery_img_1 = function_exists('get_field') ? get_field('gallery_image_1', $prod_id) : '';

    $meta_title = 'Buy ' . $prod_title . ' Online | Tattvah';

    if ($short_tagline) {
        $meta_desc = $prod_title . ' — ' . esc_attr($short_tagline) . '. Buy online at Tattvah. 100% natural, charcoal-free, pure botanical ingredients with zero soot.';
    } else {
        $meta_desc = 'Buy ' . $prod_title . ' online at Tattvah. Handcrafted from sacred temple flowers and pure natural resins. 100% charcoal-free for serene daily rituals.';
    }

    if ($gallery_img_1) {
        $og_image = is_array($gallery_img_1) ? ($gallery_img_1['url'] ?? $default_img) : $gallery_img_1;
    } elseif (has_post_thumbnail($prod_id)) {
        $og_image = get_the_post_thumbnail_url($prod_id, 'large');
    }

    $og_type       = 'product';
    $canonical_url = get_permalink($prod_id);
}

// 6. Blogs / Journal Archive
elseif (is_post_type_archive('blog') || is_page('blogs') || is_page('blog') || (is_home() && !is_front_page())) {
    $meta_title    = 'The Tattvah Journal — Rituals, Nature & Mindful Living';
    $meta_desc     = 'Read inspiring stories, ancient Vedic wisdom, and guides on sacred rituals, natural fragrance, and conscious living in the Tattvah Journal.';
    $canonical_url = home_url('/blogs/');
}

// 7. Single Blog Article
elseif (is_singular('blog') || (is_single() && !is_singular('product'))) {
    $post_id    = get_the_ID();
    $post_title = get_the_title($post_id);
    $excerpt    = get_the_excerpt($post_id);

    $meta_title = $post_title . ' | Tattvah Journal';

    if ($excerpt) {
        $clean_excerpt = wp_strip_all_tags($excerpt);
        $meta_desc     = (mb_strlen($clean_excerpt) > 155) ? mb_substr($clean_excerpt, 0, 152) . '...' : $clean_excerpt;
    } else {
        $meta_desc = 'Read "' . $post_title . '" on the Tattvah Journal. Exploring traditional Indian rituals, sacred botanicals, and mindful modern living.';
    }

    if (has_post_thumbnail($post_id)) {
        $og_image = get_the_post_thumbnail_url($post_id, 'large');
    }

    $og_type       = 'article';
    $canonical_url = get_permalink($post_id);
}

// 8. Contact Us Page
elseif (is_page('contact-us') || is_page('contact')) {
    $meta_title    = 'Contact Us — We’d Love to Hear From You | Tattvah';
    $meta_desc     = 'Have questions about our botanical creations, bulk orders, or custom gifting? Reach out to the Tattvah team at tattvahd@gmail.com. We are here to assist you.';
    $canonical_url = home_url('/contact-us/');
}

// 9. Our Team Page
elseif (is_page('our-team') || is_page('team')) {
    $meta_title    = 'Our Team & Rural Artisans | Tattvah';
    $meta_desc     = 'Meet the passionate team, founders, and rural Indian craftswomen who hand-roll Tattvah’s charcoal-free botanical incense with love and cultural devotion.';
    $canonical_url = home_url('/our-team/');
}

// 10. Track Order Page
elseif (is_page('track-order') || is_page('order-tracking')) {
    $meta_title    = 'Track Your Order | Tattvah Live Shipment Status';
    $meta_desc     = 'Track your Tattvah shipment in real-time. Enter your order details to check live packaging, dispatch, and delivery updates across India.';
    $canonical_url = home_url('/track-order/');
}

// 11. Checkout Page
elseif (is_page('checkout')) {
    $meta_title    = 'Secure Checkout | Tattvah Sacred Essentials';
    $meta_desc     = 'Complete your order securely at Tattvah. Enjoy fast pan-India delivery of 100% natural, charcoal-free dhoop, agarbatti, and sacred havan cups.';
    $canonical_url = home_url('/checkout/');
}

// 12. Order Success / Thank You Page
elseif (is_page('success') || is_page('thank-you') || is_page('order-success')) {
    $meta_title    = 'Order Confirmed | Thank You for Choosing Tattvah';
    $meta_desc     = 'Thank you for your order with Tattvah. Your sacred essentials are being handcrafted and prepared with reverence for delivery to your doorstep.';
    $canonical_url = home_url('/thank-you/');
}

// 13. Shipping Policy Page
elseif (is_page('shipping-policy') || is_page('shipping')) {
    $meta_title    = 'Shipping & Delivery Policy | Tattvah';
    $meta_desc     = 'Learn about Tattvah’s order processing timelines, pan-India domestic shipping partners, dispatch schedules, and delivery estimates.';
    $canonical_url = home_url('/shipping-policy/');
}

// 14. Refund & Cancellation Policy Page
elseif (is_page('refund-policy') || is_page('cancellation-policy') || is_page('returns')) {
    $meta_title    = 'Refund, Exchange & Cancellation Policy | Tattvah';
    $meta_desc     = 'Read our transparent return, replacement, and refund policies. At Tattvah, we ensure your sacred essentials reach you in pristine condition.';
    $canonical_url = home_url('/refund-policy/');
}

// 15. Privacy Policy Page
elseif (is_page('privacy-policy') || is_privacy_policy()) {
    $meta_title    = 'Privacy Policy | Tattvah Data Protection';
    $meta_desc     = 'Understand how Tattvah collects, protects, and respects your personal information and privacy when you browse and purchase from our store.';
    $canonical_url = home_url('/privacy-policy/');
}

// 16. Terms and Conditions Page
elseif (is_page('terms-and-conditions') || is_page('terms')) {
    $meta_title    = 'Terms and Conditions | Tattvah Official Terms';
    $meta_desc     = 'Review the terms of service, intellectual property guidelines, and user conditions governing your use of the Tattvah website and products.';
    $canonical_url = home_url('/terms-and-conditions/');
}

// 17. Search Results Page
elseif (is_search()) {
    $search_query = get_search_query();
    $meta_title   = 'Search Results for “' . esc_html($search_query) . '” | Tattvah';
    $meta_desc    = 'Explore Tattvah products, fragrances, and journal articles matching “' . esc_attr($search_query) . '”. Pure, charcoal-free botanical creations.';
}

// 18. 404 Not Found Page
elseif (is_404()) {
    $meta_title = 'Page Not Found (404) | Tattvah';
    $meta_desc  = 'We could not find the page you were looking for. Discover Tattvah’s handcrafted collection of pure dhoop, agarbatti, and sacred havan essentials.';
}

// 19. Generic / Custom Fallback Page
elseif (is_page()) {
    $page_title = get_the_title();
    $meta_title = $page_title . ' | Tattvah';
    $excerpt    = get_the_excerpt();
    if ($excerpt) {
        $clean_excerpt = wp_strip_all_tags($excerpt);
        $meta_desc     = (mb_strlen($clean_excerpt) > 155) ? mb_substr($clean_excerpt, 0, 152) . '...' : $clean_excerpt;
    } else {
        $meta_desc = 'Discover ' . $page_title . ' at Tattvah. Rooted in Tradition. Inspired by Nature. Made for Today.';
    }
    $canonical_url = get_permalink();
}
?>
<title><?php echo esc_html($meta_title); ?></title>
<meta name="description" content="<?php echo esc_attr($meta_desc); ?>">
<link rel="canonical" href="<?php echo esc_url($canonical_url); ?>">

<!-- Open Graph / Facebook -->
<meta property="og:locale" content="en_US">
<meta property="og:type" content="<?php echo esc_attr($og_type); ?>">
<meta property="og:title" content="<?php echo esc_attr($meta_title); ?>">
<meta property="og:description" content="<?php echo esc_attr($meta_desc); ?>">
<meta property="og:url" content="<?php echo esc_url($canonical_url); ?>">
<meta property="og:site_name" content="<?php echo esc_attr($site_name); ?>">
<meta property="og:image" content="<?php echo esc_url($og_image); ?>">

<!-- Twitter Card -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?php echo esc_attr($meta_title); ?>">
<meta name="twitter:description" content="<?php echo esc_attr($meta_desc); ?>">
<meta name="twitter:image" content="<?php echo esc_url($og_image); ?>">

<?php wp_head(); ?>

<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>

</head>

<body class="font-openSans text-gray-800 bg-tattvah-bg">

    <header class="header sl-header-container">
        <!-- Unified Top Announcement Bar -->
        <div id="sl-top-bar" class="sl-announcement-bar-unified">
            <div class="sl-promo-content">
                <span>Pure and natural by design.</span>
                <span class="sl-promo-star sl-promo-hide-mobile">✦</span>
                <span class="sl-promo-hide-mobile">Driven by conscious choices.</span>
                <span class="sl-promo-star sl-promo-hide-mobile">✦</span>
                <span class="sl-promo-hide-mobile">Deeply rooted in tradition.</span>
            </div>
        </div>

        <!-- Main Branding Navbar -->
        <div class="sl-main-header header-wrapper">
            <div class="sl-main-header-inner">
                <!-- Left: Hamburger Toggle & Search Icon -->
                <div class="sl-header-left">
                    <button id="toggle-btn" class="sl-icon-btn sl-hamburger" aria-label="Open Navigation Menu">
                        <span id="toggle-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2">
                                <path d="M3 12H21M3 6H21M3 18H21" />
                            </svg>
                        </span>
                    </button>
                    <div class="sl-search-inline-wrapper">
                        <button id="sl-search-toggle" class="sl-icon-btn" aria-label="Search">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="11" cy="11" r="8"></circle>
                                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                            </svg>
                        </button>
                        <form action="/products/" method="GET" class="sl-search-inline-form" id="sl-search-panel">
                            <input type="text" name="s" class="sl-search-inline-input" placeholder="Search products..."
                                autocomplete="off">
                            <button type="submit" class="sl-search-inline-btn" aria-label="Submit Search">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                    <polyline points="12 5 19 12 12 19"></polyline>
                                </svg>
                            </button>
                        </form>
                    </div>
                </div>

                <!-- Center: Sugandh Lok Styled Divine Brand Logo -->
                <div class="sl-header-center">
                    <a href="/" class="sl-brand-link tattvah-home" aria-label="Tattvah Home">
                        <img src="<?php echo get_theme_file_uri('public/assets/Logo.svg'); ?>" alt="Tattvah" class="sl-main-logo" style="max-height: 50px; width: auto;">
                    </a>
                </div>

                <!-- Right: Cart Icon -->
                <div class="sl-header-right">
                    <a href="/products/" class="sl-icon-btn sl-cart-wrapper" aria-label="Shopping Bag">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                            <line x1="3" y1="6" x2="21" y2="6"></line>
                            <path d="M16 10a4 4 0 0 1-8 0"></path>
                        </svg>
                        <span class="sl-cart-badge">0</span>
                    </a>
                </div>
            </div>

        </div>

        <!-- Primary Category Navigation Bar (Desktop) -->
        <nav class="sl-nav-bar">
            <div class="sl-nav-container">
                <ul class="sl-nav-list">
                    <li class="sl-nav-item"><a href="/" class="sl-nav-link">Home</a></li>
                    <li class="sl-nav-item"><a href="/about-us/" class="sl-nav-link">About Us</a></li>
                    <li class="sl-nav-item"><a href="/blogs/" class="sl-nav-link">Blogs</a></li>

                    <li class="sl-nav-item">
                        <a href="/products/" class="sl-nav-link">
                            Shop
                            <svg class="sl-chevron" viewBox="0 0 10 6" fill="none" stroke="currentColor"
                                stroke-width="1.5">
                                <path d="M1 1L5 5L9 1" />
                            </svg>
                        </a>
                        <div class="sl-dropdown-menu">
                            <?php
                            $post_types = ['product', 'products'];
                            $tax_objects = [];
                            foreach ($post_types as $pt) {
                                $taxs = get_object_taxonomies($pt, 'objects');
                                if (!empty($taxs)) {
                                    $tax_objects = $taxs;
                                    break;
                                }
                            }
                            $target_tax = '';
                            foreach ($tax_objects as $slug => $tax) {
                                if (stripos($tax->label, 'tag') !== false || $slug === 'product_tag' || $slug === 'product-tag') {
                                    $target_tax = $slug;
                                    break;
                                }
                            }

                            if ($target_tax) {
                                $header_tags = get_terms([
                                    'taxonomy' => $target_tax,
                                    'hide_empty' => false,
                                ]);
                                if (!empty($header_tags) && !is_wp_error($header_tags)) {
                                    foreach ($header_tags as $htag) {
                                        echo '<a href="/products/?filter_tag=' . esc_attr($htag->slug) . '" class="sl-dropdown-link">' . esc_html($htag->name) . '</a>';
                                    }
                                }
                            }
                            ?>
                        </div>
                    </li>

                    <li class="sl-nav-item"><a href="/contact-us/" class="sl-nav-link">Contact Us</a></li>
                    <li class="sl-nav-item"><a href="/shipping-policy/" class="sl-nav-link">Shipping Policy</a></li>
                </ul>
            </div>
        </nav>

        <!-- Mobile Drawer Backdrop Overlay -->
        <div id="sl-drawer-backdrop" class="sl-drawer-overlay"></div>

        <!-- Mobile Sidebar Drawer -->
        <div id="side-navbar" class="sl-mobile-sidebar">
            <div class="sl-drawer-header">
                <span class="tattvah-logo-text">TATTVAH</span>
                <button id="sl-drawer-close-btn" class="sl-drawer-close" aria-label="Close Menu">&times;</button>
            </div>

            <div class="sl-drawer-search">
                <form action="/products/" method="GET" class="sl-drawer-search-form">
                    <input type="text" name="s" class="sl-drawer-search-input" placeholder="Search products..."
                        autocomplete="off">
                    <button type="submit" class="sl-drawer-search-btn" aria-label="Submit Search">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="11" cy="11" r="8"></circle>
                            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                        </svg>
                    </button>
                </form>
            </div>
            <ul class="sl-drawer-nav">
                <li><a href="/" class="sl-drawer-link">Home</a></li>
                <li><a href="/about-us/" class="sl-drawer-link">About Us</a></li>
                <li><a href="/blogs/" class="sl-drawer-link">Blogs</a></li>
                <li><a href="/products/" class="sl-drawer-link">Shop</a></li>
                <?php
                if (isset($header_tags) && !empty($header_tags) && !is_wp_error($header_tags)) {
                    foreach ($header_tags as $htag) {
                        echo '<li><a href="/products/?filter_tag=' . esc_attr($htag->slug) . '" class="sl-drawer-sublink">- ' . esc_html($htag->name) . '</a></li>';
                    }
                }
                ?>
                <li><a href="/contact-us/" class="sl-drawer-link">Contact Us</a></li>
                <li><a href="/shipping-policy/" class="sl-drawer-link">Shipping Policy</a></li>
            </ul>
        </div>
    </header>