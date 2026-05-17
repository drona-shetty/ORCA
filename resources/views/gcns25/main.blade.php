<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <!-- SEO -->
    <title>@yield('title', 'GCNS 2025 | ORCA Global Conference on New Sinology')</title>
    <meta name="description" content="@yield('meta_description', 'GCNS 2025 by ORCA brings together global scholars and policymakers to discuss China and Asia.')">
    <meta name="keywords" content="@yield('meta_keywords', 'GCNS 2025, ORCA conference, China studies, Sinology, Asia research')">
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Mobile -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Open Graph -->
    <meta property="og:title" content="GCNS 2025 | ORCA">
    <meta property="og:description" content="Global Conference on New Sinology by ORCA.">
    <meta property="og:image" content="{{ asset('gcns25/images/gcns-ww.svg') }}">
    <meta property="og:type" content="website">

    <!-- Fonts (optimized single request) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&family=Roboto:wght@300;400;500;700&family=Inter:wght@300;400;600;700&family=Bebas+Neue&display=swap"
        rel="stylesheet">

    <!-- CSS -->
    <link rel="preload" href="{{ asset('gcns25/css/webflow.css') }}" as="style">
    <link rel="stylesheet" href="{{ asset('gcns25/css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('gcns25/css/webflow.css') }}">
    <link rel="stylesheet" href="{{ asset('gcns25/css/parths-dandy-site-f0e9a3.webflow.css') }}">
    <link rel="stylesheet" href="{{ asset('gcns25/css/custom.css') }}">

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/favicon/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon/favicon-32x32.png') }}">
    <meta name="theme-color" content="#ffffff">

    <!-- Schema -->
    <script type="application/ld+json">
    {!! json_encode([
        "@context" => "https://schema.org",
        "@type" => "Event",
        "name" => "Global Conference on New Sinology 2025",
        "alternateName" => "GCNS 2025",
        "eventStatus" => "https://schema.org/EventScheduled",
        "eventAttendanceMode" => "https://schema.org/OfflineEventAttendanceMode",
        "startDate" => "2025-09-10",
        "endDate" => "2025-09-12",
        "description" => "Global Conference on New Sinology 2025 organized by ORCA.",
        "image" => [
            asset('images/gcns2025-banner.jpg')
        ],
        "location" => [
            "@type" => "Place",
            "name" => "ORCA Conference Venue",
            "address" => [
                "@type" => "PostalAddress",
                "addressLocality" => "New Delhi",
                "addressRegion" => "Delhi",
                "addressCountry" => "IN"
            ]
        ],
        "organizer" => [
            "@type" => "Organization",
            "name" => "ORCA",
            "url" => url('/')
        ]
    ], JSON_UNESCAPED_SLASHES
        | JSON_UNESCAPED_UNICODE
        | JSON_PRETTY_PRINT
        | JSON_INVALID_UTF8_SUBSTITUTE) !!}
    </script>

    <!-- Webflow init (kept but minimal) -->
    <script>
        document.documentElement.classList.add("w-mod-js");
    </script>

    <style>
        img {
            max-width: 100%;
            height: auto;
        }

        iframe {
            border: 0;
        }
    </style>
</head>

<body class="body-2">

    <!-- NAVBAR (UNCHANGED STRUCTURE) -->
    <header>
        <div class="rdf-section-1">
            <div class="rdf-container-1">
                <div class="div-block-3">
                    <div class="rdf-wrap-1">
                        <div class="rdf-wrap-2">
                            <a href="{{ url('pages/gcns2025') }}#speakers" class="rdf-link-4">Speakers</a>
                            <a href="{{ url('pages/gcns2025') }}#schedule" class="rdf-link-4">Schedule</a>
                            <div data-hover="true" data-delay="0" class="rdf-drop-down-1 w-dropdown">
                                <div class="rdf-toggle-1 w-dropdown-toggle">
                                    <div class="rdf-text-drop-1">Publications</div>
                                </div>
                                <nav class="rdf-list-1 w-dropdown-list">
                                    <div class="rdf-wrap-drop-1">
                                        <div class="rdf-grid-drop-1">
                                            <div id="w-node-_763f9bed-c1b6-f5cf-b1fb-817f4c5e1874-e42662e0"
                                                class="rdf-wrap-drop-2">
                                                <a href="https://orcasia.org/allfiles/GCNS_2023_Report.pdf"
                                                    class="rdf-link-block-2 w-inline-block">
                                                    <h2 class="rdf-heading-1">GCNS 2023 Conference Report</h2>
                                                </a>
                                            </div>
                                            <div id="w-node-_763f9bed-c1b6-f5cf-b1fb-817f4c5e187a-e42662e0"
                                                class="rdf-wrap-drop-2">
                                                <a href="https://orcasia.org/allfiles/ORCA's_GCNS_2024_Report.pdf"
                                                    class="rdf-link-block-2 w-inline-block">
                                                    <h2 class="rdf-heading-1">GCNS 2024 Conference Report</h2>
                                                </a>
                                            </div>
                                            <div id="w-node-_763f9bed-c1b6-f5cf-b1fb-817f4c5e187a-e42662e0"
                                                class="rdf-wrap-drop-2">
                                                <a href="https://orcasia.org/allfiles/ORCA%27s%20GCNS_2025%20Conference%20Report.pdf"
                                                    class="rdf-link-block-2 w-inline-block">
                                                    <h2 class="rdf-heading-1">GCNS 2025 Conference Report</h2>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </nav>
                            </div>
                        </div>
                        <div class="rdf-wrap-4">
                            <a href="{{ url('/') }}" class="rdf-link-block-1 w-inline-block"><img
                                    src="{{ URL::asset('gcns25/images/orca-white_1.svg') }}" loading="lazy"
                                    alt="" class="rdf-pic-1"></a>
                            <div class="rdf-decor-1"></div>
                            <a href="{{ url('pages/gcns2025') }}" class="rdf-link-block-1 w-inline-block"><img
                                    src="{{ URL::asset('gcns25/images/gcns-ww.svg') }}" loading="lazy" alt=""
                                    class="rdf-pic-1"></a>
                        </div>
                        <div class="rdf-wrap-2">
                            <a href="{{ url('pages/gcns2025') }}#media" class="rdf-link-4">Media</a>
                            <div data-hover="true" data-delay="0" class="rdf-drop-down-1 w-dropdown">
                                <div class="rdf-toggle-1 w-dropdown-toggle">
                                    <div class="rdf-text-drop-1">All Editions</div>
                                </div>
                                <nav class="rdf-list-1right w-dropdown-list">
                                    <div class="rdf-wrap-drop-1">
                                        <div class="rdf-grid-drop-1">
                                            <div id="w-node-_91a7b06-0629-d32d-de4e-b55634969ebe-e42662e0"
                                                class="rdf-wrap-drop-2">
                                                <a href="{{ url('pages/gcns2025') }}"
                                                    class="rdf-link-block-2 w-inline-block">
                                                    <h2 class="rdf-heading-1">GCNS 2025</h2>
                                                </a>
                                            </div>
                                            <div id="w-node-_691a7b06-0629-d32d-de4e-b55634969ebe-e42662e"
                                                class="rdf-wrap-drop-2">
                                                <a href="{{ url('pages/gcns2024') }}"
                                                    class="rdf-link-block-2 w-inline-block">
                                                    <h2 class="rdf-heading-1">GCNS 2024</h2>
                                                </a>
                                            </div>
                                            <div id="w-node-_691a7b06-0629-d32d-de4e-b55634969ec4-e42662e0"
                                                class="rdf-wrap-drop-2">
                                                <a href="{{ url('pages/gcns2023') }}"
                                                    class="rdf-link-block-2 w-inline-block">
                                                    <h2 class="rdf-heading-1">GCNS 2023</h2>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </nav>
                            </div>
                            <a href="{{ url('pages/gcns2025') }}#convenors" class="rdf-link-4">Convenors</a>
                        </div>
                        <div class="rdf-wrap-6"><img
                                src="{{ URL::asset('gcns25/images/menu-alt-02-svgrepo-com.svg') }}" loading="lazy"
                                data-w-id="6845a481-8305-fc30-b25c-b0bbe4266354" alt="" class="rdf-icon-1">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="fra-section-menu-1">
            <div class="rdf-section-1">
                <div class="rdf-container-1">
                    <div class="rdf-wrap-1">
                        <div class="rdf-wrap-4">
                            <a href="#" class="rdf-link-block-1 w-inline-block"><img
                                    src="{{ URL::asset('gcns25/images/orca-white_1.svg') }}" loading="lazy"
                                    alt="" class="rdf-pic-1"></a>
                            <div class="rdf-decor-1"></div>
                            <a href="#" class="rdf-link-block-1 w-inline-block"><img
                                    src="{{ URL::asset('gcns25/images/gcns-ww.svg') }}" loading="lazy"
                                    alt="" class="rdf-pic-1"></a>
                        </div>

                        <div class="rdf-wrap-6"><img
                                src="{{ URL::asset('gcns25/images/close-circle-svgrepo-com.svg') }}" loading="lazy"
                                data-w-id="5ca2f998-ccb5-c155-a708-74bfe8b86459" alt="" class="rdf-icon-1"
                                onclick="document.querySelector('.fra-section-menu-1').style.display = 'none';"></div>
                    </div>
                </div>
            </div>
            <div class="fra-wrap-1">
                <div class="fra-grid-1">
                    <div id="w-node-_0df85482-465a-8633-f991-b354f9736be3-f9736bb6" class="fra-wrap-2">
                        <a href="{{ url('pages/gcns2025') }}#speakers" class="fra-link-1">Speakers-</a>
                    </div>
                    <div id="w-node-_0df85482-465a-8633-f991-b354f9736be3-f9736bb8" class="fra-wrap-2">
                        <a href="{{ url('pages/gcns2025') }}#schedule" class="fra-link-1">Schedule</a>
                    </div>
                    <div id="w-node-_0df85482-465a-8633-f991-b354f9736bb7-f9736bb6" class="fra-wrap-3">
                        <div data-hover="false" data-delay="0" class="fra-drop-down-1 w-dropdown">
                            <div class="fra-toggle-1 w-dropdown-toggle" id="w-dropdown-toggle-4"
                                aria-controls="w-dropdown-list-4" aria-haspopup="menu" aria-expanded="false"
                                role="button" tabindex="0">
                                <div class="fra-text-1">Publications</div>
                            </div>
                            <nav class="fra-list-1 w-dropdown-list" id="w-dropdown-list-4"
                                aria-labelledby="w-dropdown-toggle-4">
                                <div class="fra-wrap-drop-1">
                                    <div class="fra-grid-2">
                                        <div id="w-node-_0df85482-465a-8633-f991-b354f9736bbf-f9736bb6"
                                            class="fra-wrap-drop-2">
                                            <a href="https://orcasia.org/allfiles/GCNS_2023_Report.pdf"
                                                class="fra-link-block-1 w-inline-block" tabindex="0">
                                                <h2 class="fra-heading-1">GCNS 2023 Conference Report</h2>
                                            </a>
                                        </div>
                                        <div id="w-node-_0df85482-465a-8633-f991-b354f9736bc5-f9736bb6"
                                            class="fra-wrap-drop-2">
                                            <a href="https://orcasia.org/allfiles/ORCA's_GCNS_2024_Report.pdf"
                                                class="fra-link-block-1 w-inline-block" tabindex="0">
                                                <h2 class="fra-heading-1">GCNS 2024 Conference Report</h2>
                                            </a>
                                        </div>
                                        <div id="w-node-_0df85482-465a-8633-f991-b354f9736bbf-f9736bb6"
                                            class="fra-wrap-drop-2">
                                            <a href="https://orcasia.org/allfiles/ORCA%27s%20GCNS_2025%20Conference%20Report.pdf"
                                                class="fra-link-block-1 w-inline-block" tabindex="0">
                                                <h2 class="fra-heading-1">GCNS 2025 Conference Report</h2>
                                            </a>
                                        </div>

                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                    <div id="w-node-_0df85482-465a-8633-f991-b354f9736c12-f9736bb6" class="fra-wrap-2">
                        <a href="{{ url('pages/gcns2025') }}#media" class="fra-link-1">Media</a>
                    </div>
                    <div id="w-node-_0df85482-465a-8633-f991-b354f9736be6-f9736bb6" class="fra-wrap-3">
                        <div data-hover="false" data-delay="0" class="fra-drop-down-1 w-dropdown">
                            <div class="fra-toggle-1 w-dropdown-toggle" id="w-dropdown-toggle-5"
                                aria-controls="w-dropdown-list-5" aria-haspopup="menu" aria-expanded="false"
                                role="button" tabindex="0">
                                <div class="fra-text-1">All Editions</div>
                            </div>
                            <nav class="fra-list-1 w-dropdown-list" id="w-dropdown-list-5"
                                aria-labelledby="w-dropdown-toggle-5">
                                <div class="fra-wrap-drop-1">
                                    <div class="fra-grid-2">
                                        <div id="w-node-_df85482-465a-8633-f991-b354f9736bee-f9736bb6"
                                            class="fra-wrap-drop-2">
                                            <a href="{{ url('pages/gcns2025') }}"
                                                class="fra-link-block-1 w-inline-block" tabindex="0">
                                                <h2 class="fra-heading-1">GCNS 2025</h2>
                                            </a>
                                        </div>
                                        <div id="w-node-_0df8548-465a-8633-f991-b354f9736bee-f9736bb6"
                                            class="fra-wrap-drop-2">
                                            <a href="{{ url('pages/gcns2024') }}"
                                                class="fra-link-block-1 w-inline-block" tabindex="0">
                                                <h2 class="fra-heading-1">GCNS 2024</h2>
                                            </a>
                                        </div>
                                        <div id="w-node-_0df85482-465a-8633-f991-b354f9736bf4-f9736bb6"
                                            class="fra-wrap-drop-2">
                                            <a href="{{ url('pages/gcns2023') }}"
                                                class="fra-link-block-1 w-inline-block" tabindex="0">
                                                <h2 class="fra-heading-1">GCNS 2023</h2>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                    <div id="w-node-_0df85482-465a-8633-f991-b354f9736c15-f9736bb6" class="fra-wrap-2">
                        <a href="{{ url('pages/gcns2025') }}#convenors" class="fra-link-1">Convenors</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <!-- FOOTER -->
    <footer class="orca-footer">
        <div class="container-large-2">
            <div class="footer_wrap v2">
                <div class="footer_top v2">
                    <div id="w-node-cd4c017e-7d72-91de-9cda-4abfd4c0366f-53d1b8f2" class="footer_para-wrap v2 none">
                        <div class="rdf-wrap-4">
                            <a href="{{ url('/') }}" class="rdf-link-block-1 w-inline-block"><img
                                    src="{{ URL::asset('gcns25/images/orca-white_1.svg') }}" loading="lazy"
                                    alt="" class="rdf-pic-1" style="width: 10em;"></a>
                            <div class="rdf-decor-1"></div>
                            <a href="{{ url('pages/gcns2025') }}" class="rdf-link-block-1 w-inline-block"><img
                                    src="{{ URL::asset('gcns25/images/gcns-ww.svg') }}" loading="lazy"
                                    alt="" class="rdf-pic-1" style="width: 10em;"></a>
                        </div>
                    </div>
                    <div class="footer_links-wrap hide-tablet v2">
                        <div class="footer_title v2">Downloads</div>
                        <div class="footer_links alt">
                            <a href="https://orcasia.org/allfiles/GCNS_2023_Report.pdf" class="footer_link v2">GCNS
                                2023 Conference Report</a>
                            <a href="https://orcasia.org/allfiles/ORCA's_GCNS_2024_Report.pdf"
                                class="footer_link v2">GCNS 2024 Conference Report</a>
                            <a href="https://orcasia.org/allfiles/ORCA%27s%20GCNS_2025%20Conference%20Report.pdf"
                                class="footer_link v2">GCNS 2025 Conference Report</a>
                        </div>
                    </div>
                    <div class="footer_links-wrap hide-tablet v2">
                        <div class="footer_title v2">
                            <a href="{{ url('pages/contact') }}" style="text-decoration: none;">Contact ORCA</a>
                        </div>
                    </div>
                    <div class="footer_links-wrap hide-tablet v2">
                        <div class="footer_title v2">Policies</div>
                        <div class="footer_links alt">
                            <a href="#" class="footer_link v2">Web Policies</a>
                            <a href="#" class="footer_link v2">Privacy Policy</a>
                        </div>
                    </div>
                </div>
                <div class="footer_bottom v2">
                    <div class="footer_copyrights-txt v2">Copyright © 2025, ORCA. All rights reserved | Designed by <a
                            href="https://kwad.in/" class="kwad">Kwad</a>
                    </div>
                    <div class="footer_icons">
                        <a href="https://www.linkedin.com/company/orca-s-global-conference-on-new-sinology/"
                            class="footer_icon-wrap w-inline-block"><img loading="lazy"
                                src="{{ URL::asset('gcns25/images/Vector3.svg') }}" alt=""></a>
                        <a href="https://x.com/GCNS_ORCA" class="footer_icon-wrap w-inline-block"><img loading="lazy"
                                src="{{ URL::asset('gcns25/images/x.svg') }}" alt=""></a>
                        <a href="https://www.instagram.com/orca_researchchina?igsh=c2x5cXNnM3V3MGNm"
                            class="footer_icon-wrap w-inline-block"><img loading="lazy" width="25"
                                src="{{ URL::asset('gcns25/images/insta.svg') }}" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- SCRIPTS (DEFERRED) -->
    <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.js" defer></script>
    <script src="{{ asset('gcns25/js/webflow.js') }}" defer></script>

    <!-- Swiper -->
    <link rel="preconnect" href="https://cdn.jsdelivr.net">
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js" defer></script>

    <script>
        document.addEventListener("DOMContentLoaded", () => {

            // Swiper init
            document.querySelectorAll(".team-slider_component").forEach(component => {
                const el = component.querySelector(".swiper");
                if (!el) return;

                new Swiper(el, {
                    slidesPerView: "auto",
                    speed: 300,
                    keyboard: {
                        enabled: true
                    },
                    navigation: {
                        nextEl: component.querySelector(".is-next"),
                        prevEl: component.querySelector(".is-prev")
                    },
                    pagination: {
                        el: component.querySelector(".team-slider_bullet_wrap"),
                        clickable: true
                    }
                });
            });

            // Tabs (Vanilla JS)
            document.querySelectorAll(".tabs_link").forEach(tab => {
                tab.addEventListener("click", () => {
                    document.querySelectorAll(".tabs_link, .tabs_content").forEach(el => el
                        .classList.remove("active"));
                    tab.classList.add("active");
                    tab.nextElementSibling?.classList.add("active");
                });
            });

            // Load More (optimized)
            const btn = document.getElementById('load-more');
            if (btn) {
                btn.addEventListener('click', async () => {
                    let page = parseInt(btn.dataset.page);
                    btn.disabled = true;

                    const res = await fetch(`/gcns/load-more-media?page=${page}`);
                    const html = await res.text();

                    if (html.trim()) {
                        document.getElementById('media-grid').insertAdjacentHTML('beforeend', html);
                        btn.dataset.page = page + 1;
                        btn.disabled = false;
                    } else {
                        btn.style.display = 'none';
                    }
                });
            }
        });
    </script>

</body>

</html>
