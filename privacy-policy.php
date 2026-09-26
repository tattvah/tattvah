<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href='<?php echo get_theme_file_uri(\"build/privacyPolicy/privacyPolicy.css\"); ?>'>
    <script type="module" defer src='<?php echo get_theme_file_uri(\"build/privacyPolicy/privacyPolicy.bundle.js\"); ?>'></script>
    <?php
    $homeUrl = get_home_url();
    get_header();
    ?>

    <main class="main--container bg-sugandhlok-bg font-openSans text-gray-800" style="min-height: 60vh;">
        <!-- Page Header -->
        <section class="pt-16 md:pt-24 pb-12 max-w-7xl mx-auto px-4 md:px-8 text-center" data-aos="fade-up">
            <h1 class="text-4xl md:text-5xl font-lora text-sugandhlok-maroon mb-4">Privacy Policy</h1>
            <div class="w-16 h-1 bg-sugandhlok-peach mx-auto mb-6"></div>
        </section>

        <!-- Content -->
        <section class="pb-24 max-w-4xl mx-auto px-4 md:px-8">
            <div
                class="bg-white p-8 md:p-12 rounded-md shadow-sm border border-gray-100 prose prose-lg prose-headings:font-lora prose-headings:text-sugandhlok-maroon prose-a:text-sugandhlok-peach max-w-none text-gray-600 leading-relaxed font-openSans">
                <p>
                    At Tattvah, we are committed to ensuring your personal information is protected at all times, and
                    this privacy policy outlines what data Tattvah collects, uses, and processes about you. It also
                    explains your data rights and how you can contact us if you have any queries. We hold the right to
                    alter
                    this privacy policy statement at our discretion and encourage you to check this page from time to
                    time
                    to be aware of any changes.
                </p>

                <h2>To Whom Does This Policy Apply?</h2>
                <p>
                    This privacy policy statement applies to all the individuals who interact with our website,
                    subscribe to
                    any of our services or products, request information or use the chat support.
                </p>

                <h2>How Do We Collect Data?</h2>
                <ul>
                    <li>
                        <strong>When you register to use our website:</strong>
                        This will include your name, email address, and phone number. We may ask you to provide
                        additional information about your business and preferences when you fill out online forms,
                        use the chat support or download newsletters or other publications.
                    </li>
                    <li>
                        <strong>Cookies:</strong>
                        Cookies are small files placed on your device when you first visit our website. It helps to
                        analyze web traffic and track you across the internet. This data is collected based on
                        “implied consent,” i.e. we assume that you agree to our terms of usage of the information
                        unless you are explicitly opt-out. You can do so by changing your browser settings not to
                        accept cookies, browsing in private mode.
                    </li>
                    <li>
                        <strong>Google Analytics:</strong>
                        It collects data related to the device/browser, IP address and your activities on the
                        website to measure and report statistics about your interactions on the web. It is used to
                        enhance the user experience and track data related to digital marketing. Know more about
                        their privacy policy.
                    </li>
                    <li>
                        <strong>Zoho:</strong>
                        We use Zoho to anonymously track usage of our website, including your cursor hovers, clicks,
                        scroll depth and more. We may also record some sessions to anonymously track your behavior
                        on our website to improve the user experience. The mails we send are monitored to find out
                        the traffic they bring, the click rates, whether the mail is opened by the recipient to
                        improve engagement. You may read their privacy policy to find out more.
                    </li>
                    <li>
                        <strong>External and Third-party links:</strong>
                        We have linked third party websites/pages on our website to provide more information and
                        clarity to the user. When you click on any of the links to visit the third-party website,
                        they collect/use data as per their privacy policies. We encourage you to go through their
                        privacy policies.
                    </li>
                    <li>
                        <strong>Social Plugins:</strong>
                        We have linked social media platforms on our website for more engagement and visibility of
                        our content. When you click on any of the links to visit the platforms, they collect/use
                        data as per their privacy policies. You can check them out: Facebook, Twitter, Instagram,
                        LinkedIn, YouTube, and GitHub.
                    </li>
                </ul>

                <h2>Why Do We Collect Data?</h2>
                <p>
                    The data we collect can be personally identifiable or anonymous. We collect this data for:
                </p>
                <ul>
                    <li>Offer personalized service</li>
                    <li>Create a secure platform</li>
                    <li>Improve performance and user experience</li>
                    <li>Statistical Analysis</li>
                    <li>Marketing Purposes</li>
                    <li>Internal Research</li>
                    <li>Fraud Detection</li>
                </ul>

                <h2>How Do We Secure Your Data?</h2>
                <p>
                    The protection of your data is important to us; hence we maintain appropriate technical and
                    organizational measures to protect your data against any unauthorized or unlawful processing,
                    accidental
                    loss, alteration, disclosure, or accidental/unlawful destruction/damage. In case we discover a data
                    breach, we will immediately inform the concerned authorities and affected users.
                </p>

                <h2>What Are Your Rights?</h2>
                <p>
                    You have the right to access your data, as well as request rectification/ removal of your data.
                    Furthermore, you have the right to object to the processing of your data. You can opt-out from the
                    mailing list by unsubscribing.
                </p>
                <p>
                    You can contact <a href="mailto:namaste@tattvah.com">namaste@tattvah.com</a> to request your
                    personal information, or in case you have any
                    questions regarding our privacy policy.
                </p>
            </div>
        </section>
    </main>

    <?php get_footer(); ?>
    </body>

</html>