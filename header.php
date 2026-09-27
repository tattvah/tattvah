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

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-FL8K2XF8TR"></script>

<script>
    window.dataLayer = window.dataLayer || [];
    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'G-FL8K2XF8TR');
</script>
<!-- Google tag (gtag.js) -->

<style id="sl-custom-header-styles">
    /* ==============================================================
       SUGANDH LOK HEADER STYLES (PURE CSS - NO EXTERNAL DEPENDENCY)
       ============================================================== */
    :root {
        --sl-gold-primary: #C89A3B;
        --sl-gold-secondary: #B58428;
        --sl-maroon: #490000;
        --sl-maroon-dark: #330000;
        --sl-text-dark: #2A2421;
        --sl-text-muted: #666666;
        --sl-border: #ECE6DD;
        --header-height: 0px; /* Prevents unwanted double margin on main container */
    }

    .sl-header-container,
    .sl-header-container * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    .sl-header-container {
        position: sticky;
        top: 0;
        z-index: 9999;
        width: 100%;
        background-color: #ffffff;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        font-family: 'Mulish', -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
    }

    /* Top Announcement Bar 1: Primary Gold Bar */
    .sl-announcement-bar-top {
        background-color: var(--sl-gold-primary);
        color: #ffffff;
        text-align: center;
        padding: 8px 16px;
        font-size: 13px;
        font-weight: 600;
        letter-spacing: 0.5px;
        line-height: 1.4;
    }

    /* Top Announcement Bar 2: Secondary Navratri Promo Ticker */
    .sl-announcement-bar-promo {
        background-color: var(--sl-gold-secondary);
        color: #ffffff;
        text-align: center;
        padding: 7px 16px;
        font-size: 12.5px;
        font-weight: 600;
        letter-spacing: 0.5px;
        line-height: 1.4;
        border-top: 1px solid rgba(255, 255, 255, 0.15);
    }

    .sl-promo-content {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 16px;
        flex-wrap: wrap;
    }

    .sl-promo-star {
        font-size: 11px;
        color: #ffffff;
        opacity: 0.9;
    }

    /* Main Branding Header Bar */
    .sl-main-header {
        background-color: #ffffff;
        border-bottom: 1px solid var(--sl-border);
    }

    .sl-main-header-inner {
        max-width: 1380px;
        margin: 0 auto;
        padding: 12px 24px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        position: relative;
    }

    /* Left: Mobile Toggle & Search */
    .sl-header-left {
        display: flex;
        align-items: center;
        gap: 14px;
        flex: 1;
    }

    .sl-icon-btn {
        background: transparent;
        border: none;
        cursor: pointer;
        color: var(--sl-text-dark);
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 6px;
        border-radius: 50%;
        transition: color 0.2s ease;
        text-decoration: none;
        outline: none;
    }

    .sl-icon-btn:hover {
        color: var(--sl-gold-primary);
    }

    .sl-hamburger {
        display: none;
    }

    /* Center: Sugandh Lok Style Logo */
    .sl-header-center {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
        text-decoration: none;
    }

    .sl-brand-link {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-decoration: none;
    }

    .sl-lotus-icon {
        width: 38px;
        height: 26px;
        margin-bottom: 2px;
        color: var(--sl-gold-primary);
    }

    .sl-brand-title {
        font-family: 'Cinzel', 'Lora', Georgia, serif;
        font-size: 27px;
        font-weight: 700;
        letter-spacing: 5px;
        color: var(--sl-gold-primary);
        line-height: 1.1;
        display: flex;
        align-items: flex-start;
        justify-content: center;
    }

    .sl-brand-title sup {
        font-size: 11px;
        font-family: sans-serif;
        letter-spacing: 0;
        margin-left: 2px;
        font-weight: 400;
        color: var(--sl-gold-primary);
    }

    .sl-brand-tagline {
        font-size: 9px;
        font-weight: 600;
        letter-spacing: 3px;
        text-transform: uppercase;
        color: var(--sl-gold-primary);
        margin-top: 3px;
        display: flex;
        align-items: center;
        gap: 6px;
    }

    /* Right: Account & Cart */
    .sl-header-right {
        display: flex;
        align-items: center;
        justify-content: flex-end;
        gap: 16px;
        flex: 1;
    }

    .sl-cart-wrapper {
        position: relative;
    }

    .sl-cart-badge {
        position: absolute;
        top: -1px;
        right: -3px;
        background-color: var(--sl-maroon);
        color: #ffffff;
        font-size: 10px;
        font-weight: 700;
        width: 17px;
        height: 17px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        line-height: 1;
    }

    /* Category Navigation Bar */
    .sl-nav-bar {
        background-color: #ffffff;
        border-bottom: 1px solid var(--sl-border);
    }

    .sl-nav-container {
        max-width: 1400px;
        margin: 0 auto;
        padding: 0 16px;
    }

    .sl-nav-list {
        list-style: none;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 20px;
        padding: 10px 0;
        flex-wrap: wrap;
    }

    .sl-nav-item {
        position: relative;
    }

    .sl-nav-link {
        display: flex;
        align-items: center;
        gap: 4px;
        font-size: 13.5px;
        font-weight: 500;
        color: var(--sl-text-dark);
        text-decoration: none;
        white-space: nowrap;
        transition: color 0.2s ease;
        padding: 5px 2px;
    }

    .sl-nav-link:hover {
        color: var(--sl-gold-primary);
    }

    .sl-chevron {
        width: 9px;
        height: 9px;
        transition: transform 0.2s ease;
        opacity: 0.7;
    }

    .sl-nav-item:hover .sl-chevron {
        transform: rotate(180deg);
        opacity: 1;
    }

    /* Pill Badges */
    .sl-pill-gift {
        background-color: var(--sl-maroon) !important;
        color: #ffffff !important;
        padding: 4px 14px !important;
        border-radius: 20px !important;
        font-weight: 600 !important;
        font-size: 13px !important;
        transition: background-color 0.2s ease, transform 0.1s ease !important;
    }

    .sl-pill-gift:hover {
        background-color: var(--sl-maroon-dark) !important;
        color: #ffffff !important;
    }

    .sl-pill-corporate {
        border: 1px solid var(--sl-text-dark) !important;
        color: var(--sl-text-dark) !important;
        padding: 4px 14px !important;
        border-radius: 20px !important;
        font-weight: 500 !important;
        font-size: 13px !important;
        background: transparent !important;
        transition: all 0.2s ease !important;
    }

    .sl-pill-corporate:hover {
        border-color: var(--sl-gold-primary) !important;
        color: var(--sl-gold-primary) !important;
    }

    /* Dropdown Menus */
    .sl-dropdown-menu {
        position: absolute;
        top: 100%;
        left: 50%;
        transform: translateX(-50%) translateY(8px);
        background: #ffffff;
        min-width: 190px;
        border: 1px solid var(--sl-border);
        border-radius: 6px;
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.08);
        padding: 8px 0;
        opacity: 0;
        visibility: hidden;
        transition: all 0.2s ease;
        z-index: 1001;
    }

    .sl-nav-item:hover .sl-dropdown-menu {
        opacity: 1;
        visibility: visible;
        transform: translateX(-50%) translateY(0);
    }

    .sl-dropdown-link {
        display: block;
        padding: 8px 18px;
        font-size: 13px;
        color: var(--sl-text-dark);
        text-decoration: none;
        transition: background-color 0.15s ease, color 0.15s ease;
        text-align: left;
    }

    .sl-dropdown-link:hover {
        background-color: #FAF8F5;
        color: var(--sl-gold-primary);
    }

    /* Search Dropdown Panel */
    .sl-search-bar-panel {
        display: none;
        background: #ffffff;
        border-bottom: 1px solid var(--sl-border);
        padding: 16px 24px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.06);
    }

    .sl-search-bar-panel.open {
        display: block;
    }

    .sl-search-form {
        max-width: 600px;
        margin: 0 auto;
        display: flex;
        border: 1px solid #d4c5b9;
        border-radius: 6px;
        overflow: hidden;
    }

    .sl-search-input {
        flex: 1;
        padding: 12px 18px;
        border: none;
        outline: none;
        font-size: 14px;
        font-family: inherit;
    }

    .sl-search-btn {
        background-color: var(--sl-maroon);
        color: #ffffff;
        border: none;
        padding: 0 24px;
        font-size: 14px;
        font-weight: 600;
        cursor: pointer;
        transition: background-color 0.2s ease;
    }

    .sl-search-btn:hover {
        background-color: var(--sl-maroon-dark);
    }

    /* Mobile Sidebar Drawer */
    .sl-mobile-sidebar {
        position: fixed;
        top: 0;
        left: -320px;
        width: 300px;
        height: 100vh;
        background: #ffffff;
        z-index: 10000;
        box-shadow: 4px 0 20px rgba(0, 0, 0, 0.15);
        overflow-y: auto;
        padding: 24px 20px;
        transition: left 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        display: flex;
        flex-direction: column;
    }

    .sl-mobile-sidebar.open {
        left: 0;
    }

    .sl-drawer-overlay {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100vw;
        height: 100vh;
        background: rgba(0, 0, 0, 0.45);
        z-index: 9999;
    }

    .sl-drawer-overlay.open {
        display: block;
    }

    .sl-drawer-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 24px;
        padding-bottom: 12px;
        border-bottom: 1px solid var(--sl-border);
    }

    .sl-drawer-close {
        background: transparent;
        border: none;
        font-size: 26px;
        line-height: 1;
        color: var(--sl-text-dark);
        cursor: pointer;
    }

    .sl-drawer-nav {
        list-style: none;
        display: flex;
        flex-direction: column;
        gap: 12px;
    }

    .sl-drawer-link {
        font-size: 15px;
        font-weight: 600;
        color: var(--sl-text-dark);
        text-decoration: none;
        display: block;
        padding: 8px 0;
        border-bottom: 1px solid #f6f3ee;
        transition: color 0.2s ease;
    }

    .sl-drawer-link:hover {
        color: var(--sl-gold-primary);
    }

    /* Responsive Queries */
    @media (max-width: 1100px) {
        .sl-nav-list {
            gap: 14px;
        }
        .sl-nav-link {
            font-size: 12.5px;
        }
    }

    @media (max-width: 900px) {
        .sl-hamburger {
            display: flex;
        }
        .sl-nav-bar {
            display: none;
        }
        .sl-header-right .sl-account-btn {
            display: none;
        }
        .sl-brand-title {
            font-size: 21px;
            letter-spacing: 3px;
        }
        .sl-lotus-icon {
            width: 30px;
            height: 22px;
        }
        .sl-brand-tagline {
            font-size: 8px;
            letter-spacing: 2px;
        }
        .sl-announcement-bar-top {
            font-size: 12px;
            padding: 6px 12px;
        }
        .sl-announcement-bar-promo {
            font-size: 11.5px;
            padding: 5px 10px;
        }
        .sl-promo-hide-mobile {
            display: none;
        }
    }
</style>

</head>

<body class="font-openSans text-gray-800 bg-sugandhlok-bg">

    <header class="header sl-header-container">
        <!-- Top Announcement Bar 1: Primary Gold Bar -->
        <div class="sl-announcement-bar-top">
            <span>Free shipping for orders over Rs.600</span>
        </div>

        <!-- Top Announcement Bar 2: Navratri Promo Ticker -->
        <div class="sl-announcement-bar-promo">
            <div class="sl-promo-content">
                <span class="sl-promo-star">✦</span>
                <span class="sl-promo-hide-mobile">Celebrate Navratri with our New Gift Set!</span>
                <span class="sl-promo-star sl-promo-hide-mobile">✦</span>
                <span>Get 10% off on your first order use code "TATTVAH10"</span>
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
                    <button id="sl-search-toggle" class="sl-icon-btn" aria-label="Search">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="11" cy="11" r="8"></circle>
                            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                        </svg>
                    </button>
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

                <!-- Right: Profile & Cart Icon -->
                <div class="sl-header-right">
                    <a href="/about-us/" class="sl-icon-btn sl-account-btn" aria-label="About Tattvah">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                        </svg>
                    </a>
                    <a href="/products/" class="sl-icon-btn sl-cart-wrapper" aria-label="Shopping Bag">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                            <line x1="3" y1="6" x2="21" y2="6"></line>
                            <path d="M16 10a4 4 0 0 1-8 0"></path>
                        </svg>
                        <span class="sl-cart-badge">0</span>
                    </a>
                </div>
            </div>

            <!-- Search Dropdown Panel -->
            <div id="sl-search-panel" class="sl-search-bar-panel">
                <form action="/products/" method="GET" class="sl-search-form">
                    <input type="text" name="s" class="sl-search-input" placeholder="Search for pure agarbattis, dhoop, cones..." autocomplete="off">
                    <button type="submit" class="sl-search-btn">Search</button>
                </form>
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

                    <!-- 11. Gift Sets (Pill Button) -->
                    <li class="sl-nav-item">
                        <a href="/products/" class="sl-nav-link sl-pill-gift">+ Gift Sets</a>
                    </li>

                    <!-- 12. All Collections -->
                    <li class="sl-nav-item">
                        <a href="/products/" class="sl-nav-link">All Collections</a>
                    </li>

                    <!-- 13. Corporate Gifting (Outline Pill Button) -->
                    <li class="sl-nav-item">
                        <a href="/contact-us/" class="sl-nav-link sl-pill-corporate">Corporate Gifting</a>
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
            <ul class="sl-drawer-nav">
                <li><a href="/" class="sl-drawer-link">Home</a></li>
                <li><a href="/products/" class="sl-drawer-link">Agarbattis</a></li>
                <li><a href="/products/" class="sl-drawer-link">Dhoop</a></li>
                <li><a href="/products/" class="sl-drawer-link">Cones</a></li>
                <li><a href="/products/" class="sl-drawer-link">Havan Cups</a></li>
                <li><a href="/products/" class="sl-drawer-link">Shop by Fragrance</a></li>
                <li><a href="/products/" class="sl-drawer-link">Shop by Ritual</a></li>
                <li><a href="/products/" class="sl-drawer-link">Best Sellers</a></li>
                <li><a href="/products/" class="sl-drawer-link" style="color:#490000; font-weight:700;">+ Gift Sets</a></li>
                <li><a href="/about-us/" class="sl-drawer-link">About Tattvah</a></li>
                <li><a href="/blogs/" class="sl-drawer-link">Blogs</a></li>
                <li><a href="/our-team/" class="sl-drawer-link">Our Team</a></li>
                <li><a href="/contact-us/" class="sl-drawer-link">Corporate Gifting</a></li>
                <li><a href="/contact-us/" class="sl-drawer-link">Contact Us</a></li>
            </ul>
        </div>
    </header>

    <script>
        // Header Interactive Logic: Search Toggle & Mobile Drawer Support
        document.addEventListener('DOMContentLoaded', function () {
            const searchToggle = document.getElementById('sl-search-toggle');
            const searchPanel = document.getElementById('sl-search-panel');
            const hamburgerBtn = document.getElementById('toggle-btn');
            const drawerCloseBtn = document.getElementById('sl-drawer-close-btn');
            const mobileDrawer = document.getElementById('side-navbar');
            const drawerOverlay = document.getElementById('sl-drawer-backdrop');

            // Toggle Search Dropdown
            if (searchToggle && searchPanel) {
                searchToggle.addEventListener('click', function (e) {
                    e.preventDefault();
                    searchPanel.classList.toggle('open');
                    if (searchPanel.classList.contains('open')) {
                        const input = searchPanel.querySelector('input');
                        if (input) input.focus();
                    }
                });
            }

            // Mobile Drawer Open
            if (hamburgerBtn && mobileDrawer) {
                hamburgerBtn.addEventListener('click', function (e) {
                    e.preventDefault();
                    mobileDrawer.classList.add('open');
                    if (drawerOverlay) drawerOverlay.classList.add('open');
                });
            }

            // Mobile Drawer Close
            function closeDrawer() {
                if (mobileDrawer) mobileDrawer.classList.remove('open');
                if (drawerOverlay) drawerOverlay.classList.remove('open');
            }

            if (drawerCloseBtn) {
                drawerCloseBtn.addEventListener('click', closeDrawer);
            }
            if (drawerOverlay) {
                drawerOverlay.addEventListener('click', closeDrawer);
            }
        });
    </script>