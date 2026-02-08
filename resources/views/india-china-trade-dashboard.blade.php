@extends('web')
@section('title', 'ORCA | Organisation for Research on China and Asia')
@section('meta_keywords', 'ORCA')
@section('meta_description', 'ORCA')

@section('content')

    <style>
        .side-widget .float-icon {
            height: auto !important;
        }

        p {
            color: #000;
        }

        ul {
            color: #000;
        }

        li {
            color: #000;
        }
    </style>

    <!-- Banner -->
    <section class="shock-section has-overlay bg-image bg-fixed"
        data-bg-image="{{ URL::asset('images/jpg/AdobeStock_44392705.jpg') }}">
        <div class="banner vh-100 align-h-center align-v-center">
            <!-- Intro -->
            <div class="p-3 extended-intro">
                <div class="wrapper">
                    <div class="left-column">
                        <h2 class="title text-style-1 text-offset">
                            <span class="text-1 rtalng filled white">India-China</span>

                        </h2>
                        <span class="text-2 text-style-2 fw-400 text-italic filled white">Trade Dashboard</span>
                        <div class="description text-style-12 gray">
                            <p class="filled white text-8">The dashboard is part of ORCA’s India-China Trade Project.</p>
                            <a href="#viewdash"> <button class="button shadow black secondary-hover button-collision"
                                    onclick="openpopup('pop1')" id="pop1btn">
                                    <span class="button-text white white-hover">Explore Dashboard</span>

                                </button></a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Overlay -->
        <div class="overlay" data-bg-color="#192a3d99"></div>
    </section>

    <style>
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

    <!-- Banner -->
    <section class="shock-section bg-image bg-fixed" data-bg-image="{{ URL::asset('images/jpg/AdobeStock_44392705.jpg') }}">
        <div class="holder vh-75"></div>
    </section>

    <!-- Portfolio -->
    <section class="shock-section pt-5 pb-2 has-overlay" style="text-align:justify;">
        <div class="container">
            <p> Date: 03/03/23<br></p>
            <h4 style="color: black; z-index:-1;" class="title black">

                By <a style="color:red;" href="/author/rahul-karan-reddy">Rahul Karan Reddy</a> and <a style="color:red;"
                    href="/author/omkar-bhole">Omkar Bhole</a></h4>
            <p>
                <a style="color:red;" target="_blank" href="/pdf/Guide-for-India-China-Trade-Dashboard.pdf">Read this
                    Guidebook</a> to better understand and utilise the Dashboard.
                <br><br>

                The India-China Trade dashboard- Annual is a comprehensive visualisation of yearly merchandise trade between
                the two economies. It captures India’s imports and exports to China between 2011-12 to 2021-22 based on the
                Harmonised System (HS Codes). The visualisation shows commodities traded in terms of value (Million US
                Dollar) at the Section, HS-2, HS-4, HS-6 and HS-8 levels. It displays the trends in India’s trade balance
                and annual import/exports vis-à-vis China at the aggregate and product level. The resource allows users to
                explore and analyse the contours and depth of India’s trade interdependence with China. The data for this
                dashboard was extracted from the Indian Ministry of Commerce and Industry’s TradeStat portal.

                <br><br>

            </p>

        </div>

    </section>

    <!-- Portfolio -->
    <section id="viewdash" class="shock-section pt-5 pb-5 has-overlay">
        <div class="container">
            <div class='tableauPlaceholder' id='viz1687116909727' style='position: relative'><noscript><a
                        href='#'><img alt='Dashboard 1 '
                            src='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;In&#47;India-ChinaTradeDashboard_final&#47;Dashboard1&#47;1_rss.png'
                            style='border: none' /></a></noscript><object class='tableauViz' style='display:none;'>
                    <param name='host_url' value='https%3A%2F%2Fpublic.tableau.com%2F' />
                    <param name='embed_code_version' value='3' />
                    <param name='site_root' value='' />
                    <param name='name' value='India-ChinaTradeDashboard_final&#47;Dashboard1' />
                    <param name='tabs' value='no' />
                    <param name='toolbar' value='yes' />
                    <param name='static_image'
                        value='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;In&#47;India-ChinaTradeDashboard_final&#47;Dashboard1&#47;1.png' />
                    <param name='animate_transition' value='yes' />
                    <param name='display_static_image' value='yes' />
                    <param name='display_spinner' value='yes' />
                    <param name='display_overlay' value='yes' />
                    <param name='display_count' value='yes' />
                    <param name='language' value='en-US' />
                </object></div>
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
                vizElement.parentNode.insertBefore(scriptElement, vizElement);
            </script>

        </div>

    </section>

    <!-----timeline exit -->
    </main>

@endsection

</body>

</html>
