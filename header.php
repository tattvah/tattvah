<link rel="apple-touch-icon" sizes="180x180" href=<?php echo get_theme_file_uri('favicons/apple-touch-icon.png'); ?>>
<link rel="icon" type="image/png" sizes="32x32" href=<?php echo get_theme_file_uri('favicons/favicon-32x32.png'); ?>>
<link rel="icon" type="image/png" sizes="16x16" href=<?php echo get_theme_file_uri('favicons/favicon-16x16.png'); ?>>
<link rel="manifest" href=<?php echo get_theme_file_uri('favicons/site.webmanifest'); ?>>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
    href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Mulish:ital,wght@0,200..1000;1,200..1000&family=Raleway:wght@300;400;500&family=Roboto:wght@400;500&family=Raleway:wght@500&family=Roboto:wght@400;500&display=swap"
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

</head>

<body class="font-openSans text-gray-800 bg-sugandhlok-bg">

    <header class="header bg-white sticky top-0 z-50 shadow-sm border-b border-gray-200">
        <!-- Announcement Bar -->
        <div class="announcement-bar bg-sugandhlok-maroon text-white text-center py-2 text-sm md:text-base font-openSans uppercase tracking-wider font-semibold">
            <div class="announce-text flex justify-center items-center gap-2">
                <span class="star">✦</span>
                <span>Get 10% off on your first order use code "TATTVAH10"</span>
                <span class="star hidden md:inline">✦</span>
                <span class="hidden md:inline">Celebrate Navratri with our New Gift Set!</span>
            </div>
        </div>

        <!-- Main Navbar -->
        <div class="header-wrapper max-w-7xl mx-auto px-4 py-4 md:px-8 flex items-center justify-between" data-aos="fade-down" data-aos-duration="1000">
            
            <div class="header-left flex items-center gap-4">
                <!-- Hamburger -->
                <button id="toggle-btn" aria-label="Toggle Button" class="md:hidden text-sugandhlok-maroon focus:outline-none">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M3 12H21M3 6H21M3 18H21" />
                    </svg>
                </button>
                <a href="#" class="header-icon text-sugandhlok-maroon hover:text-sugandhlok-peach transition-colors" aria-label="Search">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <path d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z" />
                    </svg>
                </a>
            </div>

            <div class="header-center">
                <a href="/" class="tattvah-home block" aria-label="tattvah">
                    <!-- Replace logo styling to match Sugandh Lok centered focus -->
                    <img class="logo-tattvah mx-auto h-16 w-auto object-contain" src="https://tattvah.com/wp-content/uploads/2025/01/Signature-Logo.webp" alt="Signature Logo">
                </a>
            </div>

            <div class="header-right flex items-center gap-4">
                <a href="#" class="header-icon text-sugandhlok-maroon hover:text-sugandhlok-peach transition-colors hidden md:block" aria-label="Account">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <path d="M20 21V19C20 17.8954 19.1046 17 18 17H6C4.89543 17 4 17.8954 4 19V21M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z" />
                    </svg>
                </a>
                <a href="#" class="header-icon text-sugandhlok-maroon hover:text-sugandhlok-peach transition-colors relative" aria-label="Cart">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <path d="M16 11V7C16 4.79086 14.2091 3 12 3C9.79086 3 8 4.79086 8 7V11M5 9H19L20 21H4L5 9Z" />
                    </svg>
                    <!-- Example badge -->
                    <span class="absolute -top-1 -right-2 bg-sugandhlok-peach text-white text-[10px] font-bold px-1.5 py-0.5 rounded-full">0</span>
                </a>
            </div>
        </div>

        <!-- Desktop Navigation Bar -->
        <div class="header-bottom-row hidden md:block border-t border-gray-100 bg-white">
            <nav class="max-w-7xl mx-auto flex justify-center gap-8 py-3">
                <a href="/products/" class="nav-item text-sm uppercase tracking-wider text-gray-700 hover:text-sugandhlok-maroon font-semibold transition-colors">Agarbattis</a>
                <a href="/products/" class="nav-item text-sm uppercase tracking-wider text-gray-700 hover:text-sugandhlok-maroon font-semibold transition-colors">Dhoop</a>
                <a href="/products/" class="nav-item text-sm uppercase tracking-wider text-gray-700 hover:text-sugandhlok-maroon font-semibold transition-colors">Cones</a>
                <a href="/products/" class="nav-item text-sm uppercase tracking-wider text-gray-700 hover:text-sugandhlok-maroon font-semibold transition-colors">Havan Cups</a>
                <a href="/products/" class="nav-item text-sm uppercase tracking-wider text-gray-700 hover:text-sugandhlok-maroon font-semibold transition-colors">Best Sellers</a>
                <a href="/blogs/" class="nav-item text-sm uppercase tracking-wider text-gray-700 hover:text-sugandhlok-maroon font-semibold transition-colors">Blogs</a>
            </nav>
        </div>

        <!-- Side Bar (Mobile) -->
        <div id="side-navbar" class="hidden absolute top-full left-0 w-full bg-white shadow-md z-40 border-t border-gray-200">
            <ul class="flex flex-col py-4 px-6 space-y-4">
                <li><a href="/" class="nav-item block text-gray-700 font-semibold uppercase tracking-wider text-sm hover:text-sugandhlok-maroon">Home</a></li>
                <li><a href="/about-us/" class="nav-item block text-gray-700 font-semibold uppercase tracking-wider text-sm hover:text-sugandhlok-maroon">About Tattvah</a></li>
                <li><a href="/products/" class="nav-item block text-gray-700 font-semibold uppercase tracking-wider text-sm hover:text-sugandhlok-maroon">Shop Products</a></li>
                <li><a href="/blogs/" class="nav-item block text-gray-700 font-semibold uppercase tracking-wider text-sm hover:text-sugandhlok-maroon">Blogs</a></li>
                <li><a href="/our-team/" class="nav-item block text-gray-700 font-semibold uppercase tracking-wider text-sm hover:text-sugandhlok-maroon">Our Team</a></li>
                <li><a href="/contact-us/" class="nav-item block text-gray-700 font-semibold uppercase tracking-wider text-sm hover:text-sugandhlok-maroon">Contact</a></li>
            </ul>
        </div>
    </header>