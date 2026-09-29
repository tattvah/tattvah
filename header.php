<link rel="icon" type="image/png" href="<?php echo get_theme_file_uri('public/assets/FavIcon.png'); ?>">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
    href="https://fonts.googleapis.com/css2?family=Cinzel:wght@500;600;700&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Lora:ital,wght@0,400..700;1,400..700&family=Mulish:ital,wght@0,200..1000;1,200..1000&family=Raleway:wght@300;400;500&family=Roboto:wght@400;500&display=swap"
    rel="stylesheet">

<?php
// SEO: Hardcoded Meta Tags Per Page
$meta_title = 'Tattvah - Ancient Essence. Naturally Reimagined.';
$meta_desc = 'Discover the story behind every Tattvah product. We believe that rituals are sacred, and the elements we use should be pure.';

if (is_front_page()) {
    $meta_title = 'Home | Tattvah - Premium Natural Products';
    $meta_desc = 'Welcome to Tattvah. 100% natural, earth-born elements for your rituals.';
} elseif (is_page('about-us')) {
    $meta_title = 'About Tattvah | Our Story';
    $meta_desc = 'Discover the story behind Tattvah. From nature to your ritual, empowering artisans.';
} elseif (is_page('products')) {
    $meta_title = 'Shop Products | Tattvah';
    $meta_desc = 'Shop our premium collection of Dhoop, Incense, Sambrani, and Diyas.';
} elseif (is_singular('product')) {
    $meta_title = get_the_title() . ' | Tattvah';
    $meta_desc = 'Buy ' . get_the_title() . ' online. 100% natural ingredients crafted with tradition.';
} elseif (is_page('blogs')) {
    $meta_title = 'Tattvah Journal | Blogs';
    $meta_desc = 'Read about Rituals, Fragrance, Natural Living, and Culture in the Tattvah Journal.';
} elseif (is_singular('blog')) {
    $meta_title = get_the_title() . ' | Tattvah Journal';
    $meta_desc = get_the_excerpt() ? strip_tags(get_the_excerpt()) : 'Read this article on the Tattvah Journal.';
} elseif (is_page('contact-us')) {
    $meta_title = 'Contact Us | Tattvah';
    $meta_desc = 'Get in touch with Tattvah. We would love to hear from you.';
}
?>
<title><?php echo esc_html($meta_title); ?></title>
<meta name="description" content="<?php echo esc_attr($meta_desc); ?>">

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