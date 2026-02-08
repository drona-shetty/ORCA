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
        data-bg-image="{{ URL::asset('images/jpg/AdobeStock_69173554.jpg') }}">
        <div class="banner vh-100 align-h-center align-v-center">
            <!-- Intro -->
            <div class="p-3 extended-intro">
                <div class="wrapper">
                    <div class="left-column">
                        <h2 class="title text-style-1 text-offset">
                            <span class="text-1 rtalng filled white">CHINA'S PUBLIC</span>

                        </h2>
                        <span class="text-2 text-style-2 fw-400 text-italic filled white">DIPLOMACY DASHBOARD</span>
                        <div class="description text-style-12 gray">
                            <p class="filled white text-8">An interactive dashboard that visualises China’s diplomatic
                                outreach in Asia from 2000 to 2017.</p>
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
    <section class="shock-section bg-image bg-fixed" data-bg-image="{{ URL::asset('images/jpg/AdobeStock_69173554.jpg') }}">
        <div class="holder vh-75"></div>
    </section>

    <!-- Portfolio -->
    <section class="shock-section pt-5 pb-2 has-overlay" style="text-align:justify;">
        <div class="container">
            <p> Date: 22/02/23<br></p>
            <h4 style="color: black; z-index:-1;" class="title black">

                By <a style="color:red;" href="/author/rahul-karan-reddy">Rahul Karan Reddy</h4></a>

            <br><br>

            <h2 class="vc_custom_heading">Introduction</h2>
            <div class="wpb_text_column wpb_content_element ">
                <div class="wpb_wrapper">
                    <p>The China Public Diplomacy Dashboard is an interactive dashboard that visualises China&rsquo;s
                        diplomatic outreach in Asia from 2000 to 2017. The dashboard covers hallmark Chinese initiatives
                        like Confucius Institutes and Sister City Agreements, while also displaying traditional engagements
                        like government visits, military visits and student exchanges. Together, they constitute the
                        majority of Beijing&rsquo;s diplomatic outreach over nearly two decades.</p>
                    <p>The purpose of visualizing this data is to identify for China Watchers the geographic focus of public
                        diplomacy efforts by Beijing. Different instruments of diplomatic outreach &ndash; such as the ones
                        identified here &ndash; have been deployed in different geographies in a bid to fulfil Chinese
                        goals.&nbsp; Instruments such as Confucius Institutes, Sister City Agreements, Military and
                        Government visits and inbound-outbound student exchanges show us the image Beijing likes to project
                        in specific geographies.</p>
                </div>
            </div><br>
            <h2 class="vc_custom_heading">Scope</h2>
            <div class="wpb_text_column wpb_content_element ">
                <div class="wpb_wrapper">
                    <p>The data covers countries in Asia from 2000 to 2017 and tracks five specific indicators of public
                        diplomacy.</p>
                </div>
            </div><br>
            <h2 class="vc_custom_heading">Navigation</h2>
            <div class="wpb_text_column wpb_content_element ">
                <div class="wpb_wrapper">
                    <p>The Public Diplomacy dashboard can be navigated by selecting the country on the map, to filter the
                        two charts. The map shows the total number of Confucius institutes (color) and total number of
                        sister city agreements (circles) for countries in Asia from 2000 to 2017. You can select the
                        particular year for these indicators using the year dropdown menu.<br><br>The graphs below the map
                        show the number of inbound and outbound students on the left and the number of government and
                        military visits on the right.</p>
                    <p>To see these indicators for a particular country, select that country in the map above and the graphs
                        below will show the values for the country selected. To see the values for a group of countries,
                        hold down ctrl and click on the countries in the map you want to see the values for (ctrl + mouse
                        click/ command + mouse click).</p>
                    <p>Some countries do not have data for particular years and the graphs will be empty/blank when this is
                        the case.</p>
                </div>
            </div><br>
            <h2 class="vc_custom_heading">Definitions</h2>
            <div class="wpb_text_column wpb_content_element ">
                <div class="wpb_wrapper">
                    <p><strong>Confucius Institutes:</strong>&nbsp;Confucius Institutes are non-profit, government-run
                        institutions set up to promote Chinese language and culture. The institutions are run by the Chinese
                        International Education Foundation, in partnership with local universities with the intention to
                        promote linkages with Chinese businesses.</p>
                    <p><strong>Sister Cities:</strong>&nbsp;Sister city partnerships are agreements signed by local
                        government leaders from two countries to engage in exchange activities in multiple fields. This
                        indicator shows the total number of sister city/friendship agreements between cities and provinces
                        in China and a partner country.</p>
                    <p><strong>Government Visits:</strong>&nbsp;The number of high-level and provincial level visits by
                        government officials between China and the receiving country, per year. These visits took place in
                        China, the receiving country or a third location.</p>
                    <p><strong>Military Visits:</strong>&nbsp;The number of high-level and provincial level visits by
                        military officials between China and the receiving country per year. The visits took place in China,
                        the receiving country or a third location.</p>
                    <p><strong>Outbound Chinese Students:</strong>&nbsp;The number of Chinese students studying in the
                        country per year.</p>
                    <p><strong>Inbound Students to China:</strong>&nbsp;The number of international students from a country
                        studying in China</p>
                </div>
            </div><br>
            <h2 class="vc_custom_heading">Key Findings</h2>
            <div class="wpb_text_column wpb_content_element ">
                <div class="wpb_wrapper">
                    <p>Countries in China&rsquo;s periphery, especially Japan, South Korea and Australia have been the focus
                        of Beijing&rsquo;s public diplomacy. Japan, South Korea and Australia have the highest number of
                        Sister City Agreements with China and also have the highest number of Confucius Institutes. These
                        countries also figure prominently in terms of student exchanges with China. One of the core
                        deductions from this assessment Is that China&rsquo;s focus is on advanced industrial economies
                        &mdash;Japan, South Korea and Australia &mdash; wherein Beijing is keen on maintaining strong
                        economic clout. Also, they are increasingly and closely linked to the US&rsquo; Indo-Pacific
                        outreach, with all three being US alliance partners.</p>
                    <p>China has also engaged in public diplomacy efforts South-East Asia as well, with countries like
                        Indonesia, Thailand, Philippines and Malaysia figuring prominently in terms of Sister Cities and
                        Confucius Institutes. South-East Asia is followed by Central Asia and South Asia in terms of the
                        geographic focus of public diplomacy efforts.</p>
                    <p>South Asia has witnessed a limited, but not insignificant, amount of public diplomacy initiatives
                        from China. India had the highest number of Confucius Institutes and Sister City Agreements,
                        compared to other South Asian countries.<br><br>A detailed report on the dashboard and its finding
                        will also be available soon.</p>
                </div>
            </div>

            <br><br>

        </div>

    </section>

    <!-- Portfolio -->
    <section id="viewdash" class="shock-section pt-2 pb-5 has-overlay">
        <div class="container">
            <div class='tableauPlaceholder' id='viz1687120668456' style='position: relative'><noscript><a
                        href='#'><img alt='CHINA&#39;S PUBLIC DIPLOMACY 2000-2017 '
                            src='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Ch&#47;ChinaPublicDiplomacy_updatedmap&#47;PublicDiplomacyDashboard&#47;1_rss.png'
                            style='border: none' /></a></noscript><object class='tableauViz' style='display:none;'>
                    <param name='host_url' value='https%3A%2F%2Fpublic.tableau.com%2F' />
                    <param name='embed_code_version' value='3' />
                    <param name='site_root' value='' />
                    <param name='name' value='ChinaPublicDiplomacy_updatedmap&#47;PublicDiplomacyDashboard' />
                    <param name='tabs' value='no' />
                    <param name='toolbar' value='yes' />
                    <param name='static_image'
                        value='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Ch&#47;ChinaPublicDiplomacy_updatedmap&#47;PublicDiplomacyDashboard&#47;1.png' />
                    <param name='animate_transition' value='yes' />
                    <param name='display_static_image' value='yes' />
                    <param name='display_spinner' value='yes' />
                    <param name='display_overlay' value='yes' />
                    <param name='display_count' value='yes' />
                    <param name='language' value='en-US' />
                </object></div>
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
                vizElement.parentNode.insertBefore(scriptElement, vizElement);
            </script>

            <br><br><br>

        </div>

    </section>

    <!-----timeline exit -->
    </main>

@endsection

</body>

</html>
