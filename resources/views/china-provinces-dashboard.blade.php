@extends('web')

@section('title', 'China Provinces Dashboard | Economic & Social Development Data of Chinese Provinces | ORCA')

@section('meta_keywords', 'China provinces dashboard, China provincial data, China economic development, China
    demographics, China trade data, China statistical yearbook, ORCA China dashboard')

@section('meta_description', 'Explore ORCA’s China Provinces Dashboard visualising economic, demographic, trade,
    healthcare, environmental, and regional development indicators across Chinese provinces.')

@section('meta')
    <!-- Canonical -->
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Open Graph -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="China Provinces Dashboard | ORCA">
    <meta property="og:description"
        content="Explore economic, demographic, healthcare, environmental, and trade indicators across Chinese provinces through ORCA’s interactive dashboard.">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('images/jpg/provinces.png') }}">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="China Provinces Dashboard | ORCA">
    <meta name="twitter:description"
        content="Interactive dashboard visualising development indicators across China’s provinces.">
    <meta name="twitter:image" content="{{ asset('images/jpg/provinces.png') }}">

    <!-- Structured Data -->
    <script type="application/ld+json">
        {
            "@context":"https://schema.org",
            "@type":"Article",
            "headline":"China Provinces Dashboard",
            "description":"Interactive dashboard visualising economic and social development indicators across Chinese provinces.",
            "image":"{{ asset('images/jpg/provinces.png') }}",
            "datePublished":"2022-12-02",
            "author":{
                "@type":"Person",
                "name":"Rahul Karan Reddy"
            },
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
        data-bg-image="{{ asset('images/jpg/provinces.png') }}"
        aria-label="China Provinces Dashboard Banner">

        <div class="banner vh-100 align-h-center align-v-center">

            <div class="p-3 extended-intro">
                <div class="wrapper">
                    <div class="left-column">

                        <h1 class="title text-style-1 text-offset">
                            <span class="text-1 rtalng filled white">
                                CHINA
                            </span>
                        </h1>

                        <span class="text-2 text-style-2 fw-400 text-italic filled white">
                            Provinces Dashboard
                        </span>

                        <div class="description text-style-12 gray">

                            <p class="filled white text-8">
                                How well do you know China’s provinces?
                                <br>
                                The China’s Provinces dashboard is a resource for exploring differences in economic and
                                social development across provinces in China.
                            </p>

                            <a href="#viewdash"
                                aria-label="Explore China Provinces Dashboard">

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
        data-bg-image="{{ asset('images/jpg/provinces.png') }}"
        aria-label="China Provinces Background Banner">

        <div class="holder vh-75"></div>

    </section>

    <!-- Introduction -->
    <section class="shock-section pt-5 has-overlay" style="text-align:justify;">
        <div class="container">

            <time datetime="2022-12-02">
                Date: 02/12/22
            </time>

            <h2 style="color: black; z-index:-1;" class="title black">

                By

                <a style="color:red;"
                    href="/author/rahul-karan-reddy"
                    aria-label="View author Rahul Karan Reddy">
                    Rahul Karan Reddy
                </a>

            </h2>

            <br><br>

            <p>
                How well do you know China’s provinces?
                The <strong>China’s Provinces</strong> dashboard is a resource for exploring differences in economic and
                social development across provinces in China.

                The resource visualises 76 statistical indicators of development, grouped into six categories:
                demographics, economic growth, income/consumption, trade, healthcare and environment.
            </p>

            <p>
                The indicators presented in this resource can be viewed for each province and sub-region of China.
                The data presented is for the year 2021 and was collected from the 2021 Statistical Yearbook published by
                the National Bureau of Statistics (NBS).
            </p>

            <h2 class="wp-block-heading">
                Navigation
            </h2>

            <p>
                <strong>Best suited for desktop viewing.</strong>
                <br>
                <strong>
                    Clear the filters by selecting the funnel icon on the right top corner of the filter to refresh the
                    contents of the dashboard.
                </strong>
            </p>

            <h2 class="wp-block-heading">
                Categories
            </h2>

            <p>
                The <strong>main tab</strong> at the top of the dashboard
                (Demographics, Regional Economy, Income & Consumption, Trade, Municipal and Environment)
                permits users to navigate across categories.
            </p>

            <h2 class="wp-block-heading">
                Filters
            </h2>

            <p>
                The <strong>Region filter</strong> below the main tab permits users to view indicators for sub-regions
                across China (Central, East, North, North-East, South and West).

                Selecting a sub-region will prompt the dashboard to show data for provinces in that sub-region.
            </p>

            <p>
                The <strong>Province filter</strong> on the right hand side of the dashboard can be selected to
                view indicators for individual provinces.

                Selecting a province will prompt the dashboard to show data relevant only to the selected province.
            </p>

            <p>
                <strong>
                    Remember to clear the filters (funnel icon on the right top corner of the filters)
                    to refresh the dashboard after using a particular filter.
                </strong>

                <br><br>

                <strong>
                    When no filters are selected, the dashboard shows the national average of indicators.
                </strong>
            </p>

        </div>

    </section>

    <!-- Dashboard -->
    <section id="viewdash"
        class="shock-section pt-5 pb-5 has-overlay"
        aria-labelledby="china-province-dashboard">

        <div class="container">

            <h2 id="china-province-dashboard">
                China Provinces Dashboard
            </h2>

            <iframe width="700"
                height="800"
                frameborder="0"
                scrolling="no"
                loading="lazy"
                title="China Provinces Dashboard"
                aria-label="Interactive China Provinces Dashboard"
                src="https://onedrive.live.com/embed?resid=970AD6400F21456D%214153&amp;authkey=%21AP0Uw8bLEsAbKOY&amp;em=2&amp;wdHideGridlines=True&amp;wdHideHeaders=True&amp;wdInConfigurator=True&amp;wdInConfigurator=True&amp;edesNext=false&amp;edrtees6=false&amp;resen=false">
            </iframe>

        </div>

    </section>

@endsection
