@extends('web')

@section('title', 'China Census Dashboard | Comparative Visualisation of China Census Data 2000–2020 | ORCA')

@section('meta_keywords', 'China Census Dashboard, China population data, China demographics, China census 2020, China
    census 2010, China census 2000, ORCA China research')

@section('meta_description', 'Explore ORCA’s China Census Dashboard comparing demographic, educational, ethnic, gender,
    and urbanization trends across Chinese provinces using census data from 2000, 2010, and 2020.')

@section('meta')
    <!-- Canonical -->
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Open Graph -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="China Census Dashboard | ORCA">
    <meta property="og:description"
        content="A comparative visualisation of China’s census data from 2000, 2010, and 2020 covering demographics, urbanization, literacy, and provincial trends.">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('images/jpg/AdobeStock_356141499.jpg') }}">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="China Census Dashboard | ORCA">
    <meta name="twitter:description"
        content="Explore China’s demographic and provincial census trends through ORCA’s interactive dashboard.">
    <meta name="twitter:image" content="{{ asset('images/jpg/AdobeStock_356141499.jpg') }}">

    <!-- Structured Data -->
    <script type="application/ld+json">
        {
            "@context":"https://schema.org",
            "@type":"Article",
            "headline":"China Census Dashboard",
            "description":"A comparative visualisation of China’s census data from 2000, 2010, and 2020.",
            "image":"{{ asset('images/jpg/AdobeStock_356141499.jpg') }}",
            "datePublished":"2023-02-22",
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
        data-bg-image="{{ asset('images/jpg/AdobeStock_356141499.jpg') }}"
        aria-label="China Census Dashboard Banner">

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
                            Census Dashboard
                        </span>

                        <div class="description text-style-12 gray">

                            <p class="filled white text-8">
                                A Comparative Visualisation of China’s Censuses in 2000, 2010 and 2020
                            </p>

                            <a href="#viewdash"
                                aria-label="Explore China Census Dashboard">

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
        data-bg-image="{{ asset('images/jpg/AdobeStock_356141499.jpg') }}"
        aria-label="China Census Background Banner">

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

                and

                <a style="color:red;"
                    href="/author/omkar-bhole"
                    aria-label="View author Omkar Bhole">
                    Omkar Bhole
                </a>

            </h2>

            <br><br>

            <p>
                The China Census dashboard illustrates several dimensions of China’s demographic structure at the provincial
                level. The dashboard summarises data for the last three censuses conducted in 2000, 2010 and 2020. It helps
                analysts understand broad national and provincial trends in China’s demographics and thereby identify
                important provinces and factors responsible for driving national demographic trends.

                The dashboard covers growth in total population, age and gender composition, levels of educational
                attainment, ethnic composition and level of urbanization across 31 provinces over the last 30 years.
            </p>

            <br>

            <p>
                Read the full report
                <a style="color:red;"
                    href="/pdf/Analysing-Chinas-Census-Report-.pdf"
                    target="_blank"
                    rel="noopener noreferrer"
                    aria-label="Read the full China Census Report PDF">
                    here
                </a>.
            </p>

        </div>
    </section>

    <!-- Dashboard -->
    <section id="viewdash"
        class="shock-section pt-5 pb-5 has-overlay"
        style="text-align:justify;"
        aria-labelledby="china-dashboard">

        <div class="container">

            <h2 id="china-dashboard">
                China Census Dashboard
            </h2>

            <div class='tableauPlaceholder'
                id='viz1687119757414'
                style='position: relative'>

                <noscript>
                    <a href='#'>
                        <img alt='China Census Dashboard'
                            src='https://public.tableau.com/static/images/ch/china_census_interactive/Dashboard1/1_rss.png'
                            style='border: none'
                            loading="lazy"
                            decoding="async" />
                    </a>
                </noscript>

                <object class='tableauViz' style='display:none;'>

                    <param name='host_url' value='https%3A%2F%2Fpublic.tableau.com%2F' />
                    <param name='embed_code_version' value='3' />
                    <param name='site_root' value='' />
                    <param name='name' value='china_census_interactive/Dashboard1' />
                    <param name='tabs' value='no' />
                    <param name='toolbar' value='yes' />

                    <param name='static_image'
                        value='https://public.tableau.com/static/images/ch/china_census_interactive/Dashboard1/1.png' />

                    <param name='animate_transition' value='yes' />
                    <param name='display_static_image' value='yes' />
                    <param name='display_spinner' value='yes' />
                    <param name='display_overlay' value='yes' />
                    <param name='display_count' value='yes' />
                    <param name='language' value='en-US' />

                </object>

            </div>

            <script type='text/javascript'>
                var divElement = document.getElementById('viz1687119757414');
                var vizElement = divElement.getElementsByTagName('object')[0];

                if (divElement.offsetWidth > 800) {
                    vizElement.style.width = '1000px';
                    vizElement.style.height = '827px';
                } else if (divElement.offsetWidth > 500) {
                    vizElement.style.width = '1000px';
                    vizElement.style.height = '827px';
                } else {
                    vizElement.style.width = '100%';
                    vizElement.style.height = '2377px';
                }

                var scriptElement = document.createElement('script');
                scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';
                scriptElement.defer = true;

                vizElement.parentNode.insertBefore(scriptElement, vizElement);
            </script>

            <br><br><br>

            <h2 class="has-text-align-left wp-block-heading">
                Summary Findings
            </h2>

            <ul>

                <li>
                    For the 7th census conducted in 2020, 1st November 2020 was decided as a reference point. It was carried
                    out by over 7 million officers operating through 6,79,000 census agencies opened across all
                    administrative divisions.
                </li>

                <li>
                    As per the 2020 census, Guangdong and Shandong remain the most populous provinces, continuing the trend
                    of the 2010 census. China’s eastern provinces accounted for almost 40% of its total population,
                    followed by western provinces (27.12%) and central provinces (25.83%).
                </li>

                <li>
                    The sex ratio (number of males per 100 females) in Jilin and Liaoning is below 100, whereas other
                    provinces have registered a sex ratio closer to the national average of 104.99, with only 3 provinces
                    having sex ratio above 110.
                </li>

                <li>
                    Coastal provinces such as Shanghai, Guangdong and Zhejiang have a larger share of working age population
                    due to more economic opportunities. Similarly, Northeastern provinces of Heilongjiang, Jilin and
                    Liaoning also have a dominant working age population, indicating these provinces still hold some
                    economic value in terms of employment.
                </li>

                <li>
                    Throughout all three censuses, Tibet has had the lowest literacy rate amongst all provinces. It also has
                    the lowest urbanization rate as only 35% of its population lives in urban areas, which has doubled in
                    the last 20 years (18% in 2000).

                    Other provinces such as Yunnan, Guizhou, Gansu and Henan also have only half of their population living
                    in urban areas, which is well below the national average of 63%.
                </li>

            </ul>

        </div>

    </section>

@endsection
