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

<body>

    <header class="header">
        <!-- Announcement Bar -->
        <div class="announcement-bar">
            <div class="announce-text">
                <span class="star">✦</span>
                <span>Get 10% off on your first order use code "TATTVAH10"</span>
                <span class="star hidden-mobile">✦</span>
                <span class="hidden-mobile">Celebrate Navratri with our New Gift Set!</span>
            </div>
        </div>

        <!-- Main Navbar Desktop -->
        <div class="header-wrapper desktop-header" data-aos="fade-down" data-aos-duration="2000">
            <div class="header-top-row">
                <div class="header-left">
                    <a href="#" class="header-icon" aria-label="Search">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="1.5">
                            <path
                                d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z" />
                        </svg>
                    </a>
                </div>
                <div class="header-center">
                    <a href="/" class="tattvah-home" aria-label="tattvah">
                        <img class="logo-tattvah"
                            src="https://tattvah.com/wp-content/uploads/2025/01/Signature-Logo.webp" width="200"
                            height="94" alt="Signature Logo">
                    </a>
                </div>
                <div class="header-right">
                    <a href="#" class="header-icon" aria-label="Account">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="1.5">
                            <path
                                d="M20 21V19C20 17.8954 19.1046 17 18 17H6C4.89543 17 4 17.8954 4 19V21M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z" />
                        </svg>
                    </a>
                    <a href="#" class="header-icon" aria-label="Cart">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="1.5">
                            <path
                                d="M16 11V7C16 4.79086 14.2091 3 12 3C9.79086 3 8 4.79086 8 7V11M5 9H19L20 21H4L5 9Z" />
                        </svg>
                    </a>
                </div>
            </div>

            <div class="header-bottom-row nav-container">
                <nav>
                    <a href="/products/" class="nav-item">Agarbattis</a>
                    <a href="/products/" class="nav-item">Dhoop</a>
                    <a href="/products/" class="nav-item">Cones</a>
                    <a href="/products/" class="nav-item">Havan Cups</a>
                    <a href="/products/" class="nav-item">Best Sellers</a>
                    <a href="/blogs/" class="nav-item">Blogs</a>
                </nav>
            </div>
        </div>

        <!-- Side Bar Toggle Button (Mobile) -->
        <div class="mobile-toggle-bar" data-aos="fade-down" data-aos-duration="2000">
            <a href="/" class="tattvah-home" aria-label="tattvah">
                <img class="logo-tattvah" src="https://tattvah.com/wp-content/uploads/2025/01/Signature-Logo.webp"
                    width="132" height="62" alt="Signature Logo">
            </a>

            <div class="mobile-icons">
                <a href="#" class="header-icon"><svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="1.5">
                        <path
                            d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z" />
                    </svg></a>
                <a href="#" class="header-icon"><svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="1.5">
                        <path d="M16 11V7C16 4.79086 14.2091 3 12 3C9.79086 3 8 4.79086 8 7V11M5 9H19L20 21H4L5 9Z" />
                    </svg></a>
                <button id="toggle-btn" aria-label="Toggle Button">
                    <span id="toggle-icon"><svg width="30" height="30" viewBox="0 0 83 94" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M76.3203 32.8999H32.6797V34.8098H76.3203V32.8999Z" fill="#2B2B2B" />
                            <path d="M76.3203 54.8159H32.6797V56.7258H76.3203V54.8159Z" fill="#2B2B2B" />
                            <path d="M76.3203 77.8159H32.6797V79.7258H76.3203V77.8159Z" fill="#2B2B2B" />
                        </svg></span>
                </button>
            </div>
        </div>

        <!-- Side Bar (Mobile) -->
        <div id="side-navbar">
            <a href="/" class="tattvah-home side-bar-logo" aria-label="tattvah">
                <img class="logo-tattvah" src="https://tattvah.com/wp-content/uploads/2025/01/Signature-Logo.webp"
                    width="132" height="62" alt="Signature Logo">
            </a>
            <ul>
                <li><a href="/" class="nav-item">Home</a></li>
                <li><a href="/about-us/" class="nav-item">About Tattvah</a></li>
                <li><a href="/products/" class="nav-item">Shop Products</a></li>
                <li><a href="/blogs/" class="nav-item">Blogs</a></li>
                <li><a href="/our-team/" class="nav-item">Our Team</a></li>
                <li><a href="/contact-us/" class="nav-item">Contact</a></li>
            </ul>
        </div>


    </header>