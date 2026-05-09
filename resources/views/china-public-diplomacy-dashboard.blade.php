@extends('web')

@section('title', 'China Public Diplomacy Dashboard | China’s Diplomatic Outreach in Asia | ORCA')

@section('meta_keywords', 'China public diplomacy, China diplomacy dashboard, Confucius Institutes, China Asia
    relations, China diplomatic outreach, sister city agreements, ORCA China dashboard')

@section('meta_description', 'Explore ORCA’s China Public Diplomacy Dashboard visualising China’s diplomatic outreach
    across Asia from 2000 to 2017 through Confucius Institutes, sister cities, military visits, government visits, and
    student exchanges.')

@section('meta')
    <!-- Canonical -->
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Open Graph -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="China Public Diplomacy Dashboard | ORCA">
    <meta property="og:description"
        content="Interactive dashboard visualising China’s diplomatic outreach across Asia from 2000 to 2017.">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('images/jpg/AdobeStock_69173554.jpg') }}">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="China Public Diplomacy Dashboard | ORCA">
    <meta name="twitter:description"
        content="Visualising China’s public diplomacy efforts across Asia including Confucius Institutes, sister cities, and diplomatic exchanges.">
    <meta name="twitter:image" content="{{ asset('images/jpg/AdobeStock_69173554.jpg') }}">

    <!-- Structured Data -->
    <script type="application/ld+json">
        {
            "@context":"https://schema.org",
            "@type":"Article",
            "headline":"China Public Diplomacy Dashboard",
            "description":"Interactive dashboard visualising China’s diplomatic outreach across Asia from 2000 to 2017.",
            "image":"{{ asset('images/jpg/AdobeStock_69173554.jpg') }}",
            "datePublished":"2023-02-22",
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
        data-bg-image="{{ asset('images/jpg/AdobeStock_69173554.jpg') }}"
        aria-label="China Public Diplomacy Dashboard Banner">

        <div class="banner vh-100 align-h-center align-v-center">

            <div class="p-3 extended-intro">
                <div class="wrapper">
                    <div class="left-column">

                        <h1 class="title text-style-1 text-offset">
                            <span class="text-1 rtalng filled white">
                                CHINA'S PUBLIC
                            </span>
                        </h1>

                        <span class="text-2 text-style-2 fw-400 text-italic filled white">
                            DIPLOMACY DASHBOARD
                        </span>

                        <div class="description text-style-12 gray">

                            <p class="filled white text-8">
                                An interactive dashboard that visualises China’s diplomatic outreach in Asia from 2000 to
                                2017.
                            </p>

                            <a href="#viewdash"
                                aria-label="Explore China Public Diplomacy Dashboard">

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
        data-bg-image="{{ asset('images/jpg/AdobeStock_69173554.jpg') }}"
        aria-label="China Public Diplomacy Background Banner">

        <div class="holder vh-75"></div>

    </section>

    <!-- Introduction -->
    <section class="shock-section pt-5 pb-2 has-overlay" style="text-align:justify;">
        <div class="container">

            <time datetime="2023-02-22">
                Date: 22/02/23
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

            <h2 class="vc_custom_heading">
                Introduction
            </h2>

            <p>
                The China Public Diplomacy Dashboard is an interactive dashboard that visualises China’s diplomatic
                outreach in Asia from 2000 to 2017.

                The dashboard covers hallmark Chinese initiatives like Confucius Institutes and Sister City Agreements,
                while also displaying traditional engagements like government visits, military visits and student
                exchanges.
            </p>

            <p>
                Together, they constitute the majority of Beijing’s diplomatic outreach over nearly two decades.
            </p>

            <p>
                The purpose of visualizing this data is to identify for China Watchers the geographic focus of public
                diplomacy efforts by Beijing.

                Different instruments of diplomatic outreach such as Confucius Institutes, Sister City Agreements,
                Military and Government visits and inbound-outbound student exchanges show the image Beijing likes to
                project in specific geographies.
            </p>

            <h2 class="vc_custom_heading">
                Scope
            </h2>

            <p>
                The data covers countries in Asia from 2000 to 2017 and tracks five specific indicators of public
                diplomacy.
            </p>

            <h2 class="vc_custom_heading">
                Navigation
            </h2>

            <p>
                The Public Diplomacy dashboard can be navigated by selecting the country on the map to filter the two
                charts.

                The map shows the total number of Confucius Institutes (color) and total number of sister city agreements
                (circles) for countries in Asia from 2000 to 2017.
            </p>

            <p>
                You can select the particular year for these indicators using the year dropdown menu.
            </p>

            <p>
                The graphs below the map show the number of inbound and outbound students on the left and the number of
                government and military visits on the right.
            </p>

            <p>
                To see these indicators for a particular country, select that country on the map above and the graphs below
                will show the values for the selected country.
            </p>

            <p>
                To see the values for a group of countries, hold down ctrl and click on the countries in the map you want
                to analyse (ctrl + mouse click / command + mouse click).
            </p>

            <p>
                Some countries do not have data for particular years and the graphs will be empty or blank when this is the
                case.
            </p>

            <h2 class="vc_custom_heading">
                Definitions
            </h2>

            <p>
                <strong>Confucius Institutes:</strong>
                Confucius Institutes are non-profit, government-run institutions set up to promote Chinese language and
                culture.
            </p>

            <p>
                The institutions are run by the Chinese International Education Foundation in partnership with local
                universities to promote linkages with Chinese businesses.
            </p>

            <p>
                <strong>Sister Cities:</strong>
                Sister city partnerships are agreements signed by local government leaders from two countries to engage in
                exchange activities in multiple fields.
            </p>

            <p>
                This indicator shows the total number of sister city or friendship agreements between cities and provinces
                in China and a partner country.
            </p>

            <p>
                <strong>Government Visits:</strong>
                The number of high-level and provincial-level visits by government officials between China and the receiving
                country per year.
            </p>

            <p>
                <strong>Military Visits:</strong>
                The number of high-level and provincial-level visits by military officials between China and the receiving
                country per year.
            </p>

            <p>
                <strong>Outbound Chinese Students:</strong>
                The number of Chinese students studying in the country per year.
            </p>

            <p>
                <strong>Inbound Students to China:</strong>
                The number of international students from a country studying in China.
            </p>

            <h2 class="vc_custom_heading">
                Key Findings
            </h2>

            <p>
                Countries in China’s periphery, especially Japan, South Korea and Australia, have been the focus of
                Beijing’s public diplomacy.
            </p>

            <p>
                Japan, South Korea and Australia have the highest number of Sister City Agreements with China and also have
                the highest number of Confucius Institutes.
            </p>

            <p>
                These countries also figure prominently in terms of student exchanges with China.
            </p>

            <p>
                One of the core deductions from this assessment is that China’s focus is on advanced industrial economies
                wherein Beijing is keen on maintaining strong economic clout.
            </p>

            <p>
                China has also engaged in public diplomacy efforts in South-East Asia with countries like Indonesia,
                Thailand, Philippines and Malaysia figuring prominently in terms of Sister Cities and Confucius Institutes.
            </p>

            <p>
                South-East Asia is followed by Central Asia and South Asia in terms of geographic focus.
            </p>

            <p>
                South Asia has witnessed a limited, but significant, amount of public diplomacy initiatives from China.

                India had the highest number of Confucius Institutes and Sister City Agreements compared to other South
                Asian countries.
            </p>

            <p>
                A detailed report on the dashboard and its findings will also be available soon.
            </p>

            <br><br>

        </div>

    </section>

    <!-- Dashboard -->
    <section id="viewdash"
        class="shock-section pt-2 pb-5 has-overlay"
        aria-labelledby="china-public-diplomacy-dashboard">

        <div class="container">

            <h2 id="china-public-diplomacy-dashboard">
                China Public Diplomacy Dashboard
            </h2>

            <div class='tableauPlaceholder'
                id='viz1687120668456'
                style='position: relative'>

                <noscript>
                    <a href='#'>
                        <img alt='China Public Diplomacy Dashboard'
                            src='https://public.tableau.com/static/images/Ch/ChinaPublicDiplomacy_updatedmap/PublicDiplomacyDashboard/1_rss.png'
                            style='border: none'
                            loading="lazy"
                            decoding="async" />
                    </a>
                </noscript>

                <object class='tableauViz' style='display:none;'>

                    <param name='host_url' value='https%3A%2F%2Fpublic.tableau.com%2F' />
                    <param name='embed_code_version' value='3' />
                    <param name='site_root' value='' />
                    <param name='name' value='ChinaPublicDiplomacy_updatedmap/PublicDiplomacyDashboard' />
                    <param name='tabs' value='no' />
                    <param name='toolbar' value='yes' />

                    <param name='static_image'
                        value='https://public.tableau.com/static/images/Ch/ChinaPublicDiplomacy_updatedmap/PublicDiplomacyDashboard/1.png' />

                    <param name='animate_transition' value='yes' />
                    <param name='display_static_image' value='yes' />
                    <param name='display_spinner' value='yes' />
                    <param name='display_overlay' value='yes' />
                    <param name='display_count' value='yes' />
                    <param name='language' value='en-US' />

                </object>

            </div>

            <script type='text/javascript'>
                var divElement = document.getElementById('viz1687120668456');
                var vizElement = divElement.getElementsByTagName('object')[0];

                if (divElement.offsetWidth > 800) {
                    vizElement.style.width = '100%';
                    vizElement.style.height = (divElement.offsetWidth * 0.75) + 'px';
                } else if (divElement.offsetWidth > 500) {
                    vizElement.style.width = '1000px';
                    vizElement.style.height = '827px';
                } else {
                    vizElement.style.width = '100%';
                    vizElement.style.height = '1377px';
                }

                var scriptElement = document.createElement('script');
                scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';
                scriptElement.defer = true;

                vizElement.parentNode.insertBefore(scriptElement, vizElement);
            </script>

            <br><br><br>

        </div>

    </section>

@endsection
