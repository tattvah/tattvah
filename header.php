<link rel="apple-touch-icon" sizes="180x180" href=<?php echo get_theme_file_uri('favicons/apple-touch-icon.png'); ?>>
<link rel="icon" type="image/png" sizes="32x32" href=<?php echo get_theme_file_uri('favicons/favicon-32x32.png'); ?>>
<link rel="icon" type="image/png" sizes="16x16" href=<?php echo get_theme_file_uri('favicons/favicon-16x16.png'); ?>>
<link rel="manifest" href=<?php echo get_theme_file_uri('favicons/site.webmanifest'); ?>>

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

<script>
    function loadJS(FILE_URL, defer = true) {
        let scriptEle = document.createElement("script");
        scriptEle.setAttribute("src", FILE_URL);
        scriptEle.setAttribute("type", "text/javascript");
        scriptEle.setAttribute("defer", defer);
        document.head.appendChild(scriptEle);
        scriptEle.addEventListener("error", (ev) => {
            console.log("Error on loading file", ev);
        });
    }
</script>


</head>

<body class="font-openSans text-gray-800 bg-sugandhlok-bg">

    <header class="header sl-header-container">
        <!-- Unified Top Announcement Bar -->
        <div id="sl-top-bar" class="sl-announcement-bar-unified">
            <div class="sl-promo-content">
                <span>Free shipping for orders over Rs.600</span>
                <span class="sl-promo-star sl-promo-hide-mobile">✦</span>
                <span class="sl-promo-hide-mobile">Celebrate Navratri with our New Gift Set!</span>
                <span class="sl-promo-star sl-promo-hide-mobile">✦</span>
                <span class="sl-promo-hide-mobile">Get 10% off on your first order with code "TATTVAH10"</span>
            </div>
        </div>

        <!-- Main Branding Navbar -->
        <div class="sl-main-header header-wrapper">
            <div class="sl-main-header-inner">
                <!-- Left: Hamburger Toggle & Search Icon -->
                <div class="sl-header-left">
                    <button id="toggle-btn" class="sl-icon-btn sl-hamburger" aria-label="Open Navigation Menu">
                        <span id="toggle-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M3 12H21M3 6H21M3 18H21" />
                            </svg>
                        </span>
                    </button>
                    <div class="sl-search-inline-wrapper">
                        <button id="sl-search-toggle" class="sl-icon-btn" aria-label="Search">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="11" cy="11" r="8"></circle>
                                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                            </svg>
                        </button>
                        <form action="/products/" method="GET" class="sl-search-inline-form" id="sl-search-panel">
                            <input type="text" name="s" class="sl-search-inline-input" placeholder="Search..." autocomplete="off">
                            <button type="submit" class="sl-search-inline-btn" aria-label="Submit Search">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
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
                        <!-- Divine Golden Lotus Emblem -->
                        <svg class="sl-lotus-icon" viewBox="0 0 48 36" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M24 2C24 2 20 12 20 22C20 26.5 21.8 30 24 30C26.2 30 28 26.5 28 22C28 12 24 2 24 2Z" fill="#C89A3B"/>
                            <path d="M22 8C22 8 15 15 15 23C15 27 17.5 29.5 20.5 30C19.5 27.5 19.5 24 20.5 20C21.2 16.5 22 13 22 8Z" fill="#C89A3B" opacity="0.9"/>
                            <path d="M26 8C26 8 33 15 33 23C33 27 30.5 29.5 27.5 30C28.5 27.5 28.5 24 27.5 20C26.8 16.5 26 13 26 8Z" fill="#C89A3B" opacity="0.9"/>
                            <path d="M19 14C19 14 10 20 10 26C10 29 12.5 31 16 30.5C14.5 28.5 14.5 25.5 15.5 22.5C16.5 19 18 16 19 14Z" fill="#C89A3B" opacity="0.8"/>
                            <path d="M29 14C29 14 38 20 38 26C38 29 35.5 31 32 30.5C33.5 28.5 33.5 25.5 32.5 22.5C31.5 19 30 16 29 14Z" fill="#C89A3B" opacity="0.8"/>
                            <path d="M14 32C18 34 30 34 34 32C31 31.2 17 31.2 14 32Z" fill="#C89A3B"/>
                        </svg>
                        <span class="sl-brand-title">TATTVAH<sup>&reg;</sup></span>
                        <span class="sl-brand-tagline">NATURALLY DIVINE + AGARBATTIS</span>
                    </a>
                </div>

                <!-- Right: Cart Icon -->
                <div class="sl-header-right">
                    <a href="/products/" class="sl-icon-btn sl-cart-wrapper" aria-label="Shopping Bag">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
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
                    <!-- 1. Agarbattis with Dropdown -->
                    <li class="sl-nav-item">
                        <a href="/products/" class="sl-nav-link">
                            Agarbattis
                            <svg class="sl-chevron" viewBox="0 0 10 6" fill="none" stroke="currentColor" stroke-width="1.5">
                                <path d="M1 1L5 5L9 1"/>
                            </svg>
                        </a>
                        <div class="sl-dropdown-menu">
                            <a href="/products/" class="sl-dropdown-link">All Agarbattis</a>
                            <a href="/products/" class="sl-dropdown-link">Flora Batti</a>
                            <a href="/products/" class="sl-dropdown-link">Masala Agarbatti</a>
                            <a href="/products/" class="sl-dropdown-link">Dry Agarbatti</a>
                        </div>
                    </li>

                    <!-- 2. Dhoop with Dropdown -->
                    <li class="sl-nav-item">
                        <a href="/products/" class="sl-nav-link">
                            Dhoop
                            <svg class="sl-chevron" viewBox="0 0 10 6" fill="none" stroke="currentColor" stroke-width="1.5">
                                <path d="M1 1L5 5L9 1"/>
                            </svg>
                        </a>
                        <div class="sl-dropdown-menu">
                            <a href="/products/" class="sl-dropdown-link">All Dhoop</a>
                            <a href="/products/" class="sl-dropdown-link">Dhoop Sticks</a>
                            <a href="/products/" class="sl-dropdown-link">Wet Dhoop</a>
                            <a href="/products/" class="sl-dropdown-link">Cow Dung Dhoop</a>
                        </div>
                    </li>

                    <!-- 3. Cones -->
                    <li class="sl-nav-item">
                        <a href="/products/" class="sl-nav-link">Cones</a>
                    </li>

                    <!-- 4. Havan Cups -->
                    <li class="sl-nav-item">
                        <a href="/products/" class="sl-nav-link">Havan Cups</a>
                    </li>

                    <!-- 5. Shop by Fragrance with Dropdown -->
                    <li class="sl-nav-item">
                        <a href="/products/" class="sl-nav-link">
                            Shop by Fragrance
                            <svg class="sl-chevron" viewBox="0 0 10 6" fill="none" stroke="currentColor" stroke-width="1.5">
                                <path d="M1 1L5 5L9 1"/>
                            </svg>
                        </a>
                        <div class="sl-dropdown-menu">
                            <a href="/products/" class="sl-dropdown-link">Sandalwood (Chandan)</a>
                            <a href="/products/" class="sl-dropdown-link">Rose (Gulab)</a>
                            <a href="/products/" class="sl-dropdown-link">Jasmine (Mogra)</a>
                            <a href="/products/" class="sl-dropdown-link">Lavender</a>
                            <a href="/products/" class="sl-dropdown-link">Loban & Sambrani</a>
                            <a href="/products/" class="sl-dropdown-link">Oudh & Kasturi</a>
                        </div>
                    </li>

                    <!-- 6. Shop by Ritual with Dropdown -->
                    <li class="sl-nav-item">
                        <a href="/products/" class="sl-nav-link">
                            Shop by Ritual
                            <svg class="sl-chevron" viewBox="0 0 10 6" fill="none" stroke="currentColor" stroke-width="1.5">
                                <path d="M1 1L5 5L9 1"/>
                            </svg>
                        </a>
                        <div class="sl-dropdown-menu">
                            <a href="/products/" class="sl-dropdown-link">Daily Pooja</a>
                            <a href="/products/" class="sl-dropdown-link">Meditation & Yoga</a>
                            <a href="/products/" class="sl-dropdown-link">Festive Celebrations</a>
                            <a href="/products/" class="sl-dropdown-link">Home Purification</a>
                        </div>
                    </li>

                    <!-- 7. Combo -->
                    <li class="sl-nav-item">
                        <a href="/products/" class="sl-nav-link">Combo</a>
                    </li>

                    <!-- 8. Holders -->
                    <li class="sl-nav-item">
                        <a href="/products/" class="sl-nav-link">Holders</a>
                    </li>

                    <!-- 9. Best Sellers -->
                    <li class="sl-nav-item">
                        <a href="/products/" class="sl-nav-link">Best Sellers</a>
                    </li>

                    <!-- 10. New Arrivals -->
                    <li class="sl-nav-item">
                        <a href="/products/" class="sl-nav-link">New Arrivals</a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Mobile Drawer Backdrop Overlay -->
        <div id="sl-drawer-backdrop" class="sl-drawer-overlay"></div>

        <!-- Mobile Sidebar Drawer -->
        <div id="side-navbar" class="sl-mobile-sidebar">
            <div class="sl-drawer-header">
                <span style="font-family:'Cinzel', serif; font-weight:700; color:#C89A3B; font-size:18px;">TATTVAH</span>
                <button id="sl-drawer-close-btn" class="sl-drawer-close" aria-label="Close Menu">&times;</button>
            </div>
            
            <div class="sl-drawer-search">
                <form action="/products/" method="GET" class="sl-drawer-search-form">
                    <input type="text" name="s" class="sl-drawer-search-input" placeholder="Search for products..." autocomplete="off">
                    <button type="submit" class="sl-drawer-search-btn" aria-label="Submit Search">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="11" cy="11" r="8"></circle>
                            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                        </svg>
                    </button>
                </form>
            </div>
            <ul class="sl-drawer-nav">
                <li><a href="/" class="sl-drawer-link">Home</a></li>
                <li><a href="/products/" class="sl-drawer-link">Agarbattis</a></li>
                <li><a href="/products/" class="sl-drawer-link">Dhoop</a></li>
                <li><a href="/products/" class="sl-drawer-link">Cones</a></li>
                <li><a href="/products/" class="sl-drawer-link">Havan Cups</a></li>
                <li><a href="/products/" class="sl-drawer-link">Shop by Fragrance</a></li>
                <li><a href="/products/" class="sl-drawer-link">Shop by Ritual</a></li>
                <li><a href="/products/" class="sl-drawer-link">Best Sellers</a></li>
                <li><a href="/about-us/" class="sl-drawer-link">About Tattvah</a></li>
                <li><a href="/blogs/" class="sl-drawer-link">Blogs</a></li>
                <li><a href="/our-team/" class="sl-drawer-link">Our Team</a></li>
                <li><a href="/contact-us/" class="sl-drawer-link">Contact Us</a></li>
            </ul>
        </div>
    </header>

