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
        data-bg-image="{{ URL::asset('images/jpg/AdobeStock_356141499.jpg') }}">
        <div class="banner vh-100 align-h-center align-v-center">
            <!-- Intro -->
            <div class="p-3 extended-intro">
                <div class="wrapper">
                    <div class="left-column">
                        <h2 class="title text-style-1 text-offset">
                            <span class="text-1 rtalng filled white">CHINA</span>

                        </h2>
                        <span class="text-2 text-style-2 fw-400 text-italic filled white">Census Dashboard</span>
                        <div class="description text-style-12 gray">
                            <p class="filled white text-8">A Comparative Visualisation of China’s Censuses in 2000, 2010 and
                                2020</p>
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
    <section class="shock-section bg-image bg-fixed"
        data-bg-image="{{ URL::asset('images/jpg/AdobeStock_356141499.jpg') }}">
        <div class="holder vh-75"></div>
    </section>

    <!-- Portfolio -->
    <section class="shock-section pt-5 pb-2 has-overlay" style="text-align:justify;">
        <div class="container">
            <p> Date: 22/02/23<br></p>
            <h4 style="color: black; z-index:-1;" class="title black">

                By <a style="color:red;" href="/author/rahul-karan-reddy">Rahul Karan Reddy</a> and <a style="color:red;"
                    href="/author/omkar-bhole">Omkar Bhole</a></h4>

            <br><br>

            <p>
                The China Census dashboard illustrates several dimensions of China’s demographic structure at the provincial
                level. The dashboard summarises data for the last three censuses conducted in 2000, 2010 and 2020. It helps
                analysts understand broad national and provincial trends in China’s demographics and thereby, identify
                important provinces and factors responsible for driving national demographic trends. The dashboard covers
                growth in total population, age and gender composition, levels of educational attainment, ethnic composition
                and level of urbanization across 31 provinces over the last 30 years.

                <br><br>

            <p>
                Read the full report<a style="color:red;" href="/pdf/Analysing-Chinas-Census-Report-.pdf"> here</a>.
            </p>

        </div>

    </section>

    <!-- Portfolio -->
    <section id="viewdash" class="shock-section pt-5 pb-5 has-overlay" style="text-align:justify;">
        <div class="container">
            <div class='tableauPlaceholder' id='viz1687119757414' style='position: relative'><noscript><a
                        href='#'><img alt='CHINA CENSUS 2000-2020 '
                            src='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;ch&#47;china_census_interactive&#47;Dashboard1&#47;1_rss.png'
                            style='border: none' /></a></noscript><object class='tableauViz' style='display:none;'>
                    <param name='host_url' value='https%3A%2F%2Fpublic.tableau.com%2F' />
                    <param name='embed_code_version' value='3' />
                    <param name='site_root' value='' />
                    <param name='name' value='china_census_interactive&#47;Dashboard1' />
                    <param name='tabs' value='no' />
                    <param name='toolbar' value='yes' />
                    <param name='static_image'
                        value='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;ch&#47;china_census_interactive&#47;Dashboard1&#47;1.png' />
                    <param name='animate_transition' value='yes' />
                    <param name='display_static_image' value='yes' />
                    <param name='display_spinner' value='yes' />
                    <param name='display_overlay' value='yes' />
                    <param name='display_count' value='yes' />
                    <param name='language' value='en-US' />
                </object></div>
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
                vizElement.parentNode.insertBefore(scriptElement, vizElement);
            </script>

            <br><br><br>

            <h4 class="has-text-align-left wp-block-heading">Summary Findings</h4>
            <ul>
                <li>For the 7th census conducted in 2020, 1st November 2020 was decided as a reference point. It was carried
                    out by over 7 million officers operating through 6,79,000 census agencies opened across all
                    administrative divisions.</li>
                <li>As per the 2020 census, Guangdong and Shandong remain the most populous provinces, continuing the trend
                    of the 2010 census. China&rsquo;s eastern provinces accounted for almost 40% of its total population,
                    followed by western provinces (27.12%) and central provinces (25.83%).</li>
                <li>The sex ratio (number of males per 100 females) in Jilin and Liaoning is below 100, whereas other
                    provinces have registered a sex ratio closer to the national average of 104.99, with only 3 provinces
                    having sex ratio above 110.</li>
                <li>Coastal provinces such as Shanghai, Guangdong and Zhejiang have a larger share of working age population
                    due to more economic opportunities. Similarly, Northeastern provinces of Heilongjiang, Jilin and
                    Liaoning also have a dominant working age population, indicating these provinces still hold some
                    economic value in terms of employment.</li>
                <li>Throughout all three censuses, Tibet has had the lowest literacy rate amongst all provinces. It also has
                    the lowest urbanization rate as only 35% of its population lives in urban areas, which has doubled in
                    the last 20 years (18 % in 2000). Other provinces such as Yunnan, Guizhou, Gansu and Henan also have
                    only half of its population living in urban areas, which is well below the national average of 63%.</li>
            </ul>

        </div>

    </section>

    <!-----timeline exit -->
    </main>

@endsection

</body>

</html>
