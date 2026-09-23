<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Mulish:ital,wght@0,200..1000;1,200..1000&family=Raleway:wght@300;400;500&family=Roboto:wght@400;500&family=Raleway:wght@500&family=Roboto:wght@400;500&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href='/wp-content/themes/tattvah/build/searchList/searchList.css?a10'>
    <script type="module" defer src='/wp-content/themes/tattvah/build/searchList/searchList.bundle.js?a10'></script>

    <?php
    $homeUrl = get_home_url();
    get_header();
    ?>

    <main class="main--container">

        <Section class="Main container lg:max-w-[1200px] mx-auto home px-6 overflow-hidden my-10">

            <div class="search-bar">
                <div class="flex items-center justify-center p-5">
                    <div class="p-5 max-w-[900px] w-full rounded-lg shadow-[0_3px_10px_rgb(0,0,0,0.2)] bg-[#E9E9E9]">
                        <div class="flex w-full">
                            <div class="flex w-[50px] sm:w-[60px] items-center justify-center">
                                <svg width="16" height="18" viewBox="0 0 16 18" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M5.55389 1.3125C8.62126 1.3125 11.1078 3.79825 11.1078 6.86458C11.1078 8.23979 10.6037 9.50396 9.77484 10.4777L10.0055 10.7083H10.6806L14.9528 14.9792L13.6711 16.2604L9.39889 11.9896V11.3148L9.16819 11.0842C8.19412 11.9127 6.92954 12.4167 5.55389 12.4167C2.48656 12.4167 0 9.93096 0 6.86458C0 3.79825 2.48656 1.3125 5.55389 1.3125ZM5.55389 3.02083C3.41778 3.02083 1.70889 4.72917 1.70889 6.86458C1.70889 9 3.41778 10.7083 5.55389 10.7083C7.69 10.7083 9.39889 9 9.39889 6.86458C9.39889 4.72917 7.69 3.02083 5.55389 3.02083Z"
                                        fill="#2B2B2B" />
                                </svg>

                            </div>
                            <input id="searchInput" type="text" class="w-full"
                                placeholder="Type something and hit enter">
                        </div>
                    </div>
                </div>
            </div>

            <div
                class="main-search flex justify-start items-start gap-12 md:gap-24 mt-12 md:mt-24 flex-col md:flex-row pb-5">
                <div
                    class="category-filter h-full w-full md:max-w-[240px] md:min-w-[240px] rounded-lg shadow-[0_3px_10px_rgb(0,0,0,0.2)] px-5 py-4 md:py-8 mb-5 max-w-[100%]">
                    <div class="flex items-center justify-between mb-5 md:mb-9">
                        <h4 class="font-[Roboto] font-normal text-xl text-[#282828]">Category Filter</h4>
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M0.912109 13.7489V15.5929H6.44414V13.7489H0.912109ZM0.912109 2.68483V4.52884H10.1322V2.68483H0.912109ZM10.1322 17.4369V15.5929H17.5082V13.7489H10.1322V11.9049H8.28815V17.4369H10.1322ZM4.60013 6.37285V8.21686H0.912109V10.0609H4.60013V11.9049H6.44414V6.37285H4.60013ZM17.5082 10.0609V8.21686H8.28815V10.0609H17.5082ZM11.9762 6.37285H13.8202V4.52884H17.5082V2.68483H13.8202V0.84082H11.9762V6.37285Z"
                                fill="#919191" />
                        </svg>
                    </div>
                    <!-- New "Sort by" section -->
                    <div class="mb-5 md:mb-9">
                        <label for="sortBy" class="block font-[Roboto] font-medium text-base text-[#0E2A71] mb-2">Sort
                            By :</label>
                        <select id="sortBy"
                            class="w-full bg-[#F8F8F8] border border-[#D6D6D6] rounded-md py-2 px-3 text-[#282828] text-base font-[Roboto]">
                            <option value="newest">Newest</option>
                            <option value="oldest">Oldest</option>
                        </select>
                    </div>
                    <ul class="mb-4 md:mb-9 border-b-2 border-[#D6D6D6] border-solid">
                        <li class="flex items-center mb-2 md:mb-5 gap-1.5">
                            <input type="checkbox" class="category-checkbox ui-checkbox" value="Blog" id="blogFilter" />
                            <label class="flex justify-between items-center w-full text-[#0E2A71] font-medium text-base"
                                for="blogFilter">Blog<span
                                    class="bg-[#EEEEEE] text-[#28282899] text-sm font-normal rounded-sm py-0.5 px-2.5"
                                    id="blogCount">0</span></label>
                        </li>
                        <li class="flex items-center mb-2 md:mb-5 gap-1.5">
                            <input type="checkbox" class="category-checkbox ui-checkbox" value="Shrey-Sharma-Show"
                                id="ShowFilter" />
                            <label class="flex justify-between items-center w-full text-[#0E2A71] font-medium text-base"
                                for="ShowFilter">Tattvah Show<span
                                    class="bg-[#EEEEEE] text-[#28282899] text-sm font-normal rounded-sm py-0.5 px-2.5"
                                    id="ShowCount">0</span></label>
                        </li>
                        <li class="flex items-center mb-2 md:mb-5 gap-1.5">
                            <input type="checkbox" class="category-checkbox ui-checkbox" value="case-study"
                                id="CaseFilter" />
                            <label class="flex justify-between items-center w-full text-[#0E2A71] font-medium text-base"
                                for="CaseFilter">Newsletters<span
                                    class="bg-[#EEEEEE] text-[#28282899] text-sm font-normal rounded-sm py-0.5 px-2.5"
                                    id="CaseCount">0</span></label>
                        </li>
                    </ul>
                    <div class="text-center">
                        <p class="font-[Roboto] font-normal text-[#989898] text-base mb-2.5" id="resultCount">0 Results
                        </p>
                        <div class="font-[Roboto] font-normal text-[#989898] text-base mb-2.5">Found For
                            <p class="inline-block font-medium text-[#535353]" id="outputParagraph"></p>
                        </div>
                    </div>
                </div>
                <div id="resultsContainer" class="results">
                    <!-- Dynamic Results Container -->
                    <div id="dynamicResults" class="dynamic-results">
                        <!-- Example dynamic card template -->
                        <!-- <div class="card" data-type="Blog">
                        <a href="card-link">
                            <span class="badge">BLOG</span>
                            <h2 class="title">Compatible Inkjet Cartridge Which One Will You Choose</h2>
                            <p class="description">
                                Get certified as a Salesforce Administrator & lay a strong foundation towards your
                                Salesforce Journey.
                            </p>
                            <div class="meta">
                                <span class="meta-date">21 Oct 2024</span>
                            </div>
                        </a>
                    </div> -->
                    </div>
                </div>
            </div>

        </Section>

        <div class="footer-search">
            <div class="icons">

                <a href="/" aria-label="Home Page">
                    <svg width="20" height="17" viewBox="0 0 20 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M18.6723 10.0002H17.0003V16.0002C17.0003 16.4452 16.8063 17.0002 16.0003 17.0002H12.0003V11.0002H8.00035V17.0002H4.00035C3.19435 17.0002 3.00035 16.4452 3.00035 16.0002V10.0002H1.32835C0.73035 10.0002 0.85835 9.6762 1.26835 9.2522L9.29235 1.2202C9.48735 1.0182 9.74335 0.918203 10.0003 0.908203C10.2573 0.918203 10.5134 1.0172 10.7084 1.2202L18.7313 9.2512C19.1423 9.6762 19.2703 10.0002 18.6723 10.0002Z"
                            fill="#DFDFDF" />
                    </svg>
                </a>

                <a href="https://www.instagram.com/imshreysharma/" target="_blank" aria-label="Instagram Profile">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <mask id="mask0_208_894" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0"
                            width="20" height="20">
                            <path d="M20 0H0V20H20V0Z" fill="white" />
                        </mask>
                        <g mask="url(#mask0_208_894)">
                            <path
                                d="M9.9973 6.6651C8.1611 6.6651 6.6626 8.1636 6.6626 9.9998C6.6626 11.836 8.1611 13.3345 9.9973 13.3345C11.8335 13.3345 13.332 11.836 13.332 9.9998C13.332 8.1636 11.8335 6.6651 9.9973 6.6651ZM19.9989 9.9998C19.9989 8.6189 20.0114 7.2505 19.9338 5.8721C19.8563 4.27105 19.491 2.85012 18.3203 1.67935C17.147 0.506075 15.7286 0.143338 14.1276 0.065787C12.7466 -0.0117642 11.3782 0.000744095 9.9998 0.000744095C8.6189 0.000744095 7.2505 -0.0117642 5.8721 0.065787C4.27105 0.143338 2.85012 0.50858 1.67935 1.67935C0.506075 2.85262 0.143337 4.27105 0.065787 5.8721C-0.0117642 7.253 0.000744095 8.6214 0.000744095 9.9998C0.000744095 11.3782 -0.0117642 12.7491 0.065787 14.1276C0.143337 15.7286 0.50858 17.1495 1.67935 18.3203C2.85262 19.4935 4.27105 19.8563 5.8721 19.9338C7.253 20.0114 8.6214 19.9989 9.9998 19.9989C11.3807 19.9989 12.7491 20.0114 14.1276 19.9338C15.7286 19.8563 17.1495 19.491 18.3203 18.3203C19.4935 17.147 19.8563 15.7286 19.9338 14.1276C20.0139 12.7491 19.9989 11.3807 19.9989 9.9998ZM9.9973 15.1307C7.15795 15.1307 4.86644 12.8392 4.86644 9.9998C4.86644 7.16045 7.15795 4.86895 9.9973 4.86895C12.8367 4.86895 15.1282 7.16045 15.1282 9.9998C15.1282 12.8392 12.8367 15.1307 9.9973 15.1307ZM15.3383 5.8571C14.6754 5.8571 14.14 5.32175 14.14 4.6588C14.14 3.99587 14.6754 3.46052 15.3383 3.46052C16.0012 3.46052 16.5366 3.99587 16.5366 4.6588C16.5368 4.81622 16.506 4.97213 16.4458 5.1176C16.3857 5.2631 16.2974 5.39525 16.1861 5.50655C16.0748 5.61785 15.9426 5.70615 15.7971 5.7663C15.6517 5.82645 15.4957 5.8573 15.3383 5.8571Z"
                                fill="#DFDFDF" />
                        </g>
                    </svg>
                </a>

                <a href="https://www.youtube.com/@theshreysharma/featured" target="_blank" aria-label="Youtube Profile">
                    <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M19.5826 2.98675C19.4688 2.56326 19.2455 2.17707 18.9352 1.86683C18.625 1.55658 18.2386 1.33315 17.8148 1.21891C16.2544 0.799805 10 0.799805 10 0.799805C10 0.799805 3.74553 0.799805 2.18527 1.21668C1.76121 1.33055 1.37461 1.55385 1.0643 1.86416C0.75399 2.17446 0.53089 2.56085 0.41741 2.9845C-8.9407e-08 4.545 0 7.7998 0 7.7998C0 7.7998 -8.9407e-08 11.0546 0.41741 12.6129C0.64732 13.4734 1.3259 14.1511 2.18527 14.3807C3.74553 14.7998 10 14.7998 10 14.7998C10 14.7998 16.2544 14.7998 17.8148 14.3807C18.6764 14.1511 19.3527 13.4734 19.5826 12.6129C20 11.0546 20 7.7998 20 7.7998C20 7.7998 20 4.545 19.5826 2.98675ZM8.0134 10.7871V4.81255L13.1919 7.7775L8.0134 10.7871Z"
                            fill="#DFDFDF" />
                    </svg>
                </a>

                <a href="https://x.com/iamshreysharma" target="_blank" aria-label="X (Twitter) Profile">
                    <svg width="20" height="17" viewBox="0 0 20 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M20 2.7004C19.2645 3.01283 18.4641 3.23768 17.6397 3.32525C18.4956 2.82451 19.1366 2.03342 19.4424 1.1004C18.6392 1.57091 17.7593 1.90084 16.8417 2.07555C16.4583 1.67183 15.9944 1.3502 15.4791 1.13072C14.9639 0.911234 14.4083 0.798594 13.8469 0.799814C11.5756 0.799814 9.74885 2.61283 9.74885 4.8377C9.74885 5.1501 9.7873 5.46255 9.8498 5.7631C6.44875 5.58795 3.41546 3.98795 1.39887 1.53827C1.03142 2.1563 0.838875 2.85999 0.841245 3.57614C0.841245 4.9773 1.56471 6.2128 2.66795 6.93946C2.01779 6.91426 1.38287 6.73825 0.814805 6.42585V6.47555C0.814805 8.43765 2.22329 10.0637 4.10047 10.4377C3.74801 10.5279 3.38543 10.574 3.02127 10.575C2.75448 10.575 2.5021 10.5489 2.24732 10.5134C2.76649 12.1134 4.27833 13.2756 6.0786 13.3134C4.67011 14.3998 2.9059 15.0389 0.990265 15.0389C0.646555 15.0389 0.329287 15.027 0 14.9892C1.81709 16.1371 3.97308 16.7998 6.2949 16.7998C13.8324 16.7998 17.957 10.6507 17.957 5.3134C17.957 5.13825 17.957 4.9631 17.945 4.78795C18.743 4.21285 19.4424 3.5004 20 2.7004Z"
                            fill="#DFDFDF" />
                    </svg>
                </a>

                <a href="https://www.facebook.com/ShreyShrma76" target="_blank" aria-label="Facebook Profile">
                    <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M19.2 0.799805H0.8C0.3575 0.799805 0 1.1573 0 1.5998V19.9998C0 20.4423 0.3575 20.7998 0.8 20.7998H19.2C19.6425 20.7998 20 20.4423 20 19.9998V1.5998C20 1.1573 19.6425 0.799805 19.2 0.799805ZM16.89 6.6373H15.2925C14.04 6.6373 13.7975 7.2323 13.7975 8.1073V10.0348H16.7875L16.3975 13.0523H13.7975V20.7998H10.68V13.0548H8.0725V10.0348H10.68V7.8098C10.68 5.2273 12.2575 3.8198 14.5625 3.8198C15.6675 3.8198 16.615 3.9023 16.8925 3.9398V6.6373H16.89Z"
                            fill="#DFDFDF" />
                    </svg>
                </a>

                <a href="https://www.linkedin.com/in/imshreysharma/" target="_blank" aria-label="LinkedIn Profile">
                    <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <mask id="mask0_208_903" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0"
                            width="20" height="21">
                            <path d="M20 0.799805H0V20.7998H20V0.799805Z" fill="white" />
                        </mask>
                        <g mask="url(#mask0_208_903)">
                            <path
                                d="M4.33842 20.7998V7.30585H0.241704V20.7998H4.33842ZM2.29059 5.46236C3.71919 5.46236 4.60843 4.42618 4.60843 3.1313C4.58181 1.80722 3.71924 0.799805 2.3177 0.799805C0.91638 0.799805 0 1.80724 0 3.1313C0 4.42624 0.889015 5.46236 2.26385 5.46236H2.29059ZM6.60595 20.7998H10.7027V13.2641C10.7027 12.8608 10.7292 12.458 10.8375 12.1697C11.1336 11.3639 11.8077 10.5293 12.9394 10.5293C14.4218 10.5293 15.0148 11.7668 15.0148 13.5808V20.7997H19.1113V13.0624C19.1113 8.9176 17.0902 6.98905 14.3948 6.98905C12.1848 6.98905 11.2144 8.3415 10.6754 9.2626H10.7028V7.30555H6.60605C6.6598 8.57175 6.60595 20.7998 6.60595 20.7998Z"
                                fill="#DFDFDF" />
                        </g>
                    </svg>
                </a>

            </div>
        </div>

    </main>

    <?php get_footer(); ?>

    </body>

</html>