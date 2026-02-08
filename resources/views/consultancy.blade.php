@extends('web')
@section('title', 'ORCA | Organisation for Research on China and Asia')
@section('meta_keywords', 'ORCA')
@section('meta_description', 'ORCA')

@section('content')
    <html data-wf-page="681dc5f70da0efaf0b353c7e" data-wf-site="681dc5f70da0efaf0b353c0b">

    <head>
        <meta charset="utf-8">

        <link href="css/normalize.css" rel="stylesheet" type="text/css">
        <link href="css/webflow.css" rel="stylesheet" type="text/css">
        <link href="css/nneworcaconsultancy.webflow.css" rel="stylesheet" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
        <script type="text/javascript">
            WebFont.load({
                google: {
                    families: ["Inter:regular,600"]
                }
            });
        </script>
        <script type="text/javascript">
            ! function(o, c) {
                var n = c.documentElement,
                    t = " w-mod-";
                n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n
                    .className += t + "touch")
            }(window, document);
        </script>

        <link rel="stylesheet" href="{{ URL::asset('css/consult/normalize.css') }}" />
        <link rel="stylesheet" href="{{ URL::asset('css/consult/webflow.css') }}" />
        <link rel="stylesheet" href="{{ URL::asset('css/consult/nneworcaconsultancy.webflow.css') }}" />
    </head>

    <body>
        <style>
            .page-wrapper {
                background: #000;
            }

            html {
                scroll-behavior: smooth;
            }

            .paragraph {
                text-align: justify;
            }
        </style>
        <div class="page-wrapper">
            <section class="section hero">
                <div class="container">
                    <div class="w-layout-grid cta-header-component">
                        <div data-w-id="09afa9a7-4fe7-017b-e0fd-51eff2bdb75e"
                            style="-webkit-transform:translate3d(null, 80px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(null, 80px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(null, 80px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(null, 80px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0"
                            class="hero-header-component">
                            <div class="hero-text-wrapper">
                                <h1 class="hero-heading">ORCA Consultancy</h1>
                                <h1 class="paragraph mt-20">Organisation for Research on China and Asia (ORCA)
                                    provides expert-led advisory and research services tailored to help our clients
                                    navigate the complexities of China’s political and economic landscape. We offer a
                                    wide range of services, including market research, risk analysis, strategic
                                    planning, policy analysis, and business interactions to enhance decision-making of
                                    businesses, policymakers and individuals. Our team of analysts and researchers
                                    offer actionable insights and strategic guidance in a variety of ways to support
                                    your objectives.</h1>
                            </div>
                            <div class="button-row">
                                <a href="https://orcasia.org/pages/contact" target="_blank"
                                    class="conbutton w-inline-block">
                                    <div>Contact Us</div>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section">
                <div class="container">
                    <div class="features-layout">
                        <h4 data-splitting="data-effect2" data-w-id="89a7e4e9-81ea-0010-04b2-20c489fa7232" style="opacity:0"
                            class="heading" id="services">Services</h4>
                        <div class="w-layout-grid features-component-layout">
                            <div id="w-node-_48e0588f-eb28-8322-b615-e0340ea0b117-0b353c7e"
                                data-w-id="48e0588f-eb28-8322-b615-e0340ea0b117" style="opacity:0"
                                class="layout-wrapper w-inline-block">
                                <div class="featured-icon-wrapper"><img src="{{ URL::asset('images/consult/ra.jpeg') }}"
                                        loading="lazy" alt="" class="conticons"></div>
                                <h4><strong>Risk &amp; Scenario Analysis</strong><br></h4>
                                <div class="paragraph">China&#x27;s domestic and external environment is constantly
                                    evolving, and understanding the implications is critical for businesses and
                                    policymakers. We provide rigorous risk assessments and scenario planning to help
                                    organizations anticipate and respond to potential challenges and opportunities. By
                                    evaluating policy developments, geopolitical risks, economic uncertainties,
                                    regulatory shifts, and strategic constraints, we offer actionable insights and
                                    recommendations to minimize exposure to risks and maximize opportunities.</div>
                            </div>
                            <div id="w-node-b721016d-2c7f-239c-032b-6aa6d72c83fe-0b353c7e"
                                data-w-id="b721016d-2c7f-239c-032b-6aa6d72c83fe" style="opacity:0"
                                class="layout-wrapper w-inline-block">
                                <div class="featured-icon-wrapper"><img src="{{ URL::asset('images/consult/sa.jpeg') }}"
                                        loading="lazy" alt="" class="conticons"></div>
                                <h4><strong>Strategic Advisory</strong><br></h4>
                                <div class="paragraph">We assist policymakers, businesses, and individuals in
                                    developing comprehensive strategic campaigns tailored to their specific needs. Our
                                    expertise in China&#x27;s political, economic, security, and cultural landscape
                                    enables us to provide risk mitigation strategies, stakeholder engagement plans,
                                    and competitive positioning insights. Whether you are expanding operations,
                                    navigating regulatory changes, or assessing geopolitical risks, we offer strategic
                                    guidance to enhance resilience and long-term success.</div>
                            </div>
                            <div id="w-node-cbadfc4f-7bdf-8820-11a5-3762072aee79-0b353c7e"
                                data-w-id="cbadfc4f-7bdf-8820-11a5-3762072aee79" style="opacity:0"
                                class="layout-wrapper vertical w-inline-block">
                                <div class="featured-icon-wrapper"><img
                                        src="{{ URL::asset('images/consult/IntelligenceandMonitoring.jpg') }}"
                                        loading="lazy" alt="" class="conticons"></div>
                                <h4><strong>Intelligence &amp; Monitoring</strong></h4>
                                <div class="paragraph">Staying informed is key to making timely, strategic decisions
                                    in a rapidly evolving environment. We provide continuous and rigorous monitoring
                                    services on Chinese government policies, regulatory developments, economic policy,
                                    regional security dynamics, and social media conversations concerning a variety of
                                    sectors, stakeholders and priorities. Our daily newsletter, <a
                                        href="https://orcasia.org/category/cicm" target="_blank"><strong>Conversation
                                            in Chinese Media (CiCM)</strong></a> delivers insights on foreign policy
                                    developments, social media discussions, and reportage of India in Chinese media,
                                    to keep our clients ahead of emerging trends and risks.</div>
                            </div>
                            <div id="w-node-dea359c5-0eb2-c3ba-835f-2bcca71a211c-0b353c7e"
                                data-w-id="dea359c5-0eb2-c3ba-835f-2bcca71a211c" style="opacity:0"
                                class="layout-wrapper horizontal w-inline-block">
                                <div>
                                    <div class="featured-icon-wrapper"><img src="{{ URL::asset('images/consult/ma.jpeg') }}"
                                            loading="lazy" alt="" class="conticons"></div>
                                    <h4><strong>Market Research &amp; Reports</strong></h4>
                                    <div class="paragraph">Our in-depth research services offer customized analysis of
                                        Chinese business segments, focusing on a wide range of topics, including
                                        macroeconomic strategies, trade relations, domestic policy environment and
                                        political trends. We cover supply chains, regulatory environments, policy
                                        support and geoeconomic linkages to offer comprehensive insights and analysis.
                                    </div>
                                </div>
                            </div>
                            <div id="w-node-_70b99c9d-45d3-f9e9-2a37-4966b0fc5b8c-0b353c7e"
                                data-w-id="70b99c9d-45d3-f9e9-2a37-4966b0fc5b8c" style="opacity:0"
                                class="layout-wrapper horizontal w-inline-block">
                                <div>
                                    <div class="featured-icon-wrapper"><img src="{{ URL::asset('images/consult/bi.jpeg') }}"
                                            loading="lazy" alt="" class="conticons"></div>
                                    <h4><strong>Business Interaction Services</strong></h4>
                                    <div class="paragraph">We offer Business-to-Business (B2B) interaction services,
                                        helping companies build strategic partnerships, expand their market reach, and
                                        foster seamless collaborations. We facilitate high-value networking,
                                        customized matchmaking, and targeted market entry strategies to connect
                                        businesses with the right partners, suppliers, and clients. Whether you seek
                                        cross-border trade opportunities, corporate alliances, or industry insights,
                                        our expertise ensures smooth, efficient, and productive interactions, driving
                                        growth and long-term success for your business.</div>
                                </div>
                            </div>
                        </div>
                    </div><img src="{{ URL::asset('images/consult/Background-Gradient.svg') }}" loading="lazy"
                        alt="" class="bg-gradient"><img
                        src="{{ URL::asset('images/consult/Background-Gradient.svg') }}" loading="lazy" alt=""
                        class="bg-gradient right">
                </div>
            </section>
        </div>
        <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=681dc5f70da0efaf0b353c0b"
            type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous">
        </script>
    </body>
    <script src="{{ URL::asset('js/webflow.js') }}"></script>

@endsection
