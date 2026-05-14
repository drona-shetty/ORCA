@extends('web')

@section('title', 'India-China Trade Dashboard | India-China Merchandise Trade Analysis | ORCA')

@section('meta_keywords', 'India China trade dashboard, India China trade data, India China imports exports, HS code
    trade analysis, India China trade balance, ORCA trade dashboard')

@section('meta_description', 'Explore ORCA’s India-China Trade Dashboard analysing merchandise trade, imports, exports,
    trade balance, and HS code trends between India and China from 2011-12 to 2021-22.')

@section('meta')
    <!-- Canonical -->
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Open Graph -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="India-China Trade Dashboard | ORCA">
    <meta property="og:description"
        content="Interactive dashboard analysing India-China merchandise trade, imports, exports, trade balance, and HS code trends.">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('images/jpg/AdobeStock_44392705.jpg') }}">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="India-China Trade Dashboard | ORCA">
    <meta name="twitter:description"
        content="Visualise India-China merchandise trade trends, imports, exports, and HS code analysis through ORCA’s dashboard.">
    <meta name="twitter:image" content="{{ asset('images/jpg/AdobeStock_44392705.jpg') }}">

    <!-- Structured Data -->
    <script type="application/ld+json">
        {
            "@context":"https://schema.org",
            "@type":"Article",
            "headline":"India-China Trade Dashboard",
            "description":"Interactive dashboard analysing India-China merchandise trade between 2011-12 and 2021-22.",
            "image":"{{ asset('images/jpg/AdobeStock_44392705.jpg') }}",
            "datePublished":"2023-03-03",
            "author":[
                {
                    "@type":"Person",
                    "name":"Rahul Karan Reddy"
                },
                {
                    "@type":"Person",
                    "name":"Omkar Bhole"
                }
            ],
            "publisher":{
                "@type":"Organization",
                "name":"ORCA",
                "logo":{
                    "@type":"ImageObject",
                    "url":"{{ asset('images/logo.png') }}"
                }
            }
        }
    </script>
@endsection

@section('content')

    <style>
        .side-widget .float-icon {
            height: auto !important;
        }

        p,
        ul,
        li {
            color: #000;
        }

        .banner {
            position: relative;
            z-index: 1;
        }

        .title {
            position: relative;
            z-index: 2;
        }

        .text-1.outline.white {
            color: white;
            text-align: right !important;
        }

        .text-2 {
            color: white;
        }

        .rtalng {
            text-align: right !important;
        }

        .text-8 {
            color: white;
        }
    </style>

    <!-- Hero Banner -->
    <section class="shock-section has-overlay bg-image bg-fixed"
        data-bg-image="{{ asset('images/jpg/AdobeStock_44392705.jpg') }}"
        aria-label="India-China Trade Dashboard Banner">

        <div class="banner vh-100 align-h-center align-v-center">

            <div class="p-3 extended-intro">
                <div class="wrapper">
                    <div class="left-column">

                        <h1 class="title text-style-1 text-offset">
                            <span class="text-1 rtalng filled white">
                                India-China
                            </span>
                        </h1>

                        <span class="text-2 text-style-2 fw-400 text-italic filled white">
                            Trade Dashboard
                        </span>

                        <div class="description text-style-12 gray">

                            <p class="filled white text-8">
                                The dashboard is part of ORCA’s India-China Trade Project.
                            </p>

                            <a href="#viewdash"
                                aria-label="Explore India-China Trade Dashboard">

                                <button class="button shadow black secondary-hover button-collision"
                                    onclick="openpopup('pop1')"
                                    id="pop1btn">

                                    <span class="button-text white white-hover">
                                        Explore Dashboard
                                    </span>

                                </button>

                            </a>

                        </div>

                    </div>
                </div>
            </div>

        </div>

        <div class="overlay" data-bg-color="#192a3d99"></div>

    </section>

    <!-- Secondary Banner -->
    <section class="shock-section bg-image bg-fixed"
        data-bg-image="{{ asset('images/jpg/AdobeStock_44392705.jpg') }}"
        aria-label="India-China Trade Background Banner">

        <div class="holder vh-75"></div>

    </section>

    <!-- Introduction -->
    <section class="shock-section pt-5 pb-2 has-overlay" style="text-align:justify;">
        <div class="container">

            <time datetime="2023-03-03">
                Date: 03/03/23
            </time>

            <h2 style="color: black; z-index:-1;" class="title black">

                By

                <a style="color:red;"
                    href="/author/rahul-karan-reddy"
                    aria-label="View author Rahul Karan Reddy">
                    Rahul Karan Reddy
                </a>

                and

                <a style="color:red;"
                    href="/author/omkar-bhole"
                    aria-label="View author Omkar Bhole">
                    Omkar Bhole
                </a>

            </h2>

            <br><br>

            <p>

                <a style="color:red;"
                    target="_blank"
                    rel="noopener noreferrer"
                    href="/pdf/Guide-for-India-China-Trade-Dashboard.pdf"
                    aria-label="Read Guidebook for India-China Trade Dashboard">

                    Read this Guidebook

                </a>

                to better understand and utilise the dashboard.

            </p>

            <p>
                The India-China Trade Dashboard – Annual is a comprehensive visualisation of yearly merchandise trade
                between the two economies.

                It captures India’s imports and exports to China between 2011-12 and 2021-22 based on the Harmonised
                System (HS Codes).
            </p>

            <p>
                The visualisation shows commodities traded in terms of value (Million US Dollar) at the Section, HS-2,
                HS-4, HS-6 and HS-8 levels.
            </p>

            <p>
                It displays trends in India’s trade balance and annual imports and exports vis-à-vis China at both the
                aggregate and product level.
            </p>

            <p>
                The resource allows users to explore and analyse the contours and depth of India’s trade interdependence
                with China.
            </p>

            <p>
                The data for this dashboard was extracted from the Indian Ministry of Commerce and Industry’s TradeStat
                portal.
            </p>

            <br><br>

        </div>

    </section>

    <!-- Dashboard -->
    <section id="viewdash"
        class="shock-section pt-5 pb-5 has-overlay"
        aria-labelledby="india-china-trade-dashboard">

        <div class="container">

            <h2 id="india-china-trade-dashboard">
                India-China Trade Dashboard
            </h2>

            <div class='tableauPlaceholder'
                id='viz1687116909727'
                style='position: relative'>

                <noscript>

                    <a href='#'>

                        <img alt='India-China Trade Dashboard'
                            src='https://public.tableau.com/static/images/In/India-ChinaTradeDashboard_final/Dashboard1/1_rss.png'
                            style='border: none'
                            loading="lazy"
                            decoding="async" />

                    </a>

                </noscript>

                <object class='tableauViz' style='display:none;'>

                    <param name='host_url' value='https%3A%2F%2Fpublic.tableau.com%2F' />
                    <param name='embed_code_version' value='3' />
                    <param name='site_root' value='' />
                    <param name='name' value='India-ChinaTradeDashboard_final/Dashboard1' />
                    <param name='tabs' value='no' />
                    <param name='toolbar' value='yes' />

                    <param name='static_image'
                        value='https://public.tableau.com/static/images/In/India-ChinaTradeDashboard_final/Dashboard1/1.png' />

                    <param name='animate_transition' value='yes' />
                    <param name='display_static_image' value='yes' />
                    <param name='display_spinner' value='yes' />
                    <param name='display_overlay' value='yes' />
                    <param name='display_count' value='yes' />
                    <param name='language' value='en-US' />

                </object>

            </div>

            <script type='text/javascript'>
                var divElement = document.getElementById('viz1687116909727');
                var vizElement = divElement.getElementsByTagName('object')[0];

                if (divElement.offsetWidth > 800) {

                    vizElement.style.width = '100%';
                    vizElement.style.height = '827px';

                } else if (divElement.offsetWidth > 500) {

                    vizElement.style.width = '1000px';
                    vizElement.style.height = '827px';

                } else {

                    vizElement.style.width = '100%';
                    vizElement.style.height = '2577px';

                }

                var scriptElement = document.createElement('script');
                scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';
                scriptElement.defer = true;

                vizElement.parentNode.insertBefore(scriptElement, vizElement);
            </script>

        </div>

    </section>

@endsection
