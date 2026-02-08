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
    <section class="shock-section has-overlay bg-image bg-fixed" data-bg-image="{{ URL::asset('images/jpg/provinces.png') }}">
        <div class="banner vh-100 align-h-center align-v-center">
            <!-- Intro -->
            <div class="p-3 extended-intro">
                <div class="wrapper">
                    <div class="left-column">
                        <h2 class="title text-style-1 text-offset">
                            <span class="text-1 rtalng filled white">CHINA</span>

                        </h2>
                        <span class="text-2 text-style-2 fw-400 text-italic filled white">Provinces Dashboard</span>
                        <div class="description text-style-12 gray">
                            <p class="filled white text-8">How well do you know China’s provinces? <br>The China’s Provinces
                                dashboard is a resource for exploring differences in economic and social development across
                                provinces in China.</p>
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
    <section class="shock-section bg-image bg-fixed" data-bg-image="{{ URL::asset('images/jpg/provinces.png') }}">
        <div class="holder vh-75"></div>
    </section>

    <!-- Portfolio -->
    <section class="shock-section pt-5  has-overlay" style="text-align:justify;">
        <div class="container">
            <p> Date: 02/12/22<br></p>
            <h4 style="color: black; z-index:-1;" class="title black">

                By <a style="color:red;" href="/author/rahul-karan-reddy">Rahul Karan Reddy</a></h4>

            <br><br>

            <p>How well do you know China&rsquo;s provinces? The&nbsp;<strong>China&rsquo;s
                    Provinces</strong>&nbsp;dashboard is a resource for exploring differences in economic and social
                development across provinces in China. The resource visualises 76 statistical indicators of development,
                grouped into six categories: demographics, economic growth, income/consumption, trade, healthcare and
                environment. The indicators presented in this resource can be viewed for each province and sub-region of
                China. The data presented is for the year 2021 and was collected from the 2021 Statistical Yearbook
                published by the National Bureau of Statistics (NBS).</p>
            <h3 class="wp-block-heading">Navigation:</h3>
            <p>*&nbsp;<strong>Best suited for desktop viewing.</strong><br>*&nbsp;<strong>Clear the filters by selecting the
                    funnel icon on the right top corner of the filter to refresh the contents of the dashboard</strong>.</p>
            <h3 class="wp-block-heading">Categories:</h3>
            <p>The&nbsp;<strong>main tab&nbsp;</strong>at the top of the dashboard (Demographics, Regional Economy, Income
                &amp; Consumption, Trade, Municipal and Environment) permit users to navigate across categories.</p>
            <h3 class="wp-block-heading">Filters:</h3>
            <p>The&nbsp;<strong>Region filter</strong>&nbsp;below the main tab permits users to view indicators for
                sub-regions across China (Central, East, North, North-East, South and West). Selecting a sub-region will
                prompt the dashboard to show data for provinces in that sub-region.</p>
            <p>The&nbsp;<strong>Province filter</strong>&nbsp;on the right hand side of the dashboard can be selected to
                view indicators for individual provinces. Selecting a province will prompt the dashboard to show data
                relevant only to the selected province.<br><br><strong>* Remember to clear the filters (funnel icon on the
                    right top corner of the filters) to refresh the dashboard after using a particular filter.<br>* When no
                    filters are selected, the dashboard shows the national average of indicators.</strong></p>

        </div>

    </section>

    <!-- Portfolio -->
    <section id="viewdash" class="shock-section pt-5 pb-5 has-overlay">
        <div class="container">

            <iframe width="700" height="800" frameborder="0" scrolling="no"
                src="https://onedrive.live.com/embed?resid=970AD6400F21456D%214153&amp;authkey=%21AP0Uw8bLEsAbKOY&amp;em=2&amp;wdHideGridlines=True&amp;wdHideHeaders=True&amp;wdInConfigurator=True&amp;wdInConfigurator=True&amp;edesNext=false&amp;edrtees6=false&amp;resen=false"
                bis_size="{&quot;x&quot;:186,&quot;y&quot;:1146,&quot;w&quot;:750,&quot;h&quot;:800,&quot;abs_x&quot;:186,&quot;abs_y&quot;:1146}"
                bis_id="fr_f41vwzi9qeby9vdg6eqt83" bis_depth="0" bis_chainid="1"></iframe>

        </div>

    </section>

    <!-----timeline exit -->
    </main>

@endsection

</body>

</html>
