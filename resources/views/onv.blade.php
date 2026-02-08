@extends('web')
@section('title', 'ORCA | Organisation for Research on China and Asia')
@section('meta_keywords', 'ORCA')
@section('meta_description', 'ORCA')

@section('content')

    <style>
        .black {
            color: #000 !important;
        }

        .description {
            color: var(--gray-color);
        }

        .modal-dialog {
            max-width: 75%;
            margin-right: auto;
            margin-left: auto;
        }

        .extended-intro .text-2 {
            text-align: left !important;
        }
    </style>

    <!-- Main -->
    <main id="main" class="shock-main">

        <!-- Banner -->
        <section class="shock-section has-overlay">
            <div class="banner">
                <div class="content-wrapper">
                    <!-- Intro -->
                    <div class="extended-intro max-w-65">
                        <h1 class="title">
                            <span class="text-1 d-block text-style-2 white-65">Output</span>
                            <span class="text-2 d-block text-style-3 text-italic white-85">and <mark
                                    class="animated-underline primary">Ventures</mark></span>
                        </h1>
                    </div>
                </div>
                <!-- Image -->
                <div class="image-wrapper">
                    <img src="{{ URL::asset('/images/jpg/AdobeStock_60369364.jpeg') }}" class="image vh-65 fit-cover"
                        alt="This is an example description for this item." />
                </div>
                <!-- Overlay -->
                <div class="overlay black-65"></div>
            </div>
        </section>

        <!-- Vertical Tab: Light background -->
        <section class="shock-section pt-6 pb-6">
            <div class="container">
                <!-- Intro -->

                <div class="vertical-tab scheme-1 primary">
                    <!-- Tab navigation -->
                    <ul id="example-v-tab" class="nav nav-pills" role="tablist" aria-orientation="vertical">
                        <li class="nav-item" role="presentation">
                            <button id="example-v-1-tab" class="nav-link active" aria-selected="true"
                                aria-controls="example-v-1" data-bs-target="#example-v-1" data-bs-toggle="tab"
                                role="tab">
                                Daily Newsletter – Conversations in Chinese Media
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button id="example-v-2-tab" class="nav-link" aria-selected="false" aria-controls="example-v-2"
                                data-bs-target="#example-v-2" data-bs-toggle="tab" role="tab">
                                Opinion Pieces
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button id="example-v-11-tab" class="nav-link" aria-selected="false"
                                aria-controls="example-v-11" data-bs-target="#example-v-11" data-bs-toggle="tab"
                                role="tab">
                                Dashboards
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button id="example-v-3-tab" class="nav-link" aria-selected="false" aria-controls="example-v-3"
                                data-bs-target="#example-v-3" data-bs-toggle="tab" role="tab">
                                Expert Speak
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button id="example-v-7-tab" class="nav-link" aria-selected="false" aria-controls="example-v-7"
                                data-bs-target="#example-v-7" data-bs-toggle="tab" role="tab">
                                ORCA Files
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button id="example-v-6-tab" class="nav-link" aria-selected="false" aria-controls="example-v-6"
                                data-bs-target="#example-v-6" data-bs-toggle="tab" role="tab">
                                Backgrounders
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button id="example-v-8-tab" class="nav-link" aria-selected="false" aria-controls="example-v-8"
                                data-bs-target="#example-v-8" data-bs-toggle="tab" role="tab">
                                Reviewing Chinese Culture
                            </button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button id="example-v-4-tab" class="nav-link" aria-selected="false" aria-controls="example-v-4"
                                data-bs-target="#example-v-4" data-bs-toggle="tab" role="tab">
                                Issue Brief
                            </button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button id="example-v-5-tab" class="nav-link" aria-selected="false"
                                aria-controls="example-v-5" data-bs-target="#example-v-5" data-bs-toggle="tab"
                                role="tab">
                                Graphs, Maps, and Infographics
                            </button>
                        </li>

                    </ul>
                    <!-- Tab content -->
                    <div class="tab-content overflow-hidden">
                        <div id="example-v-1" class="tab-pane fade show active" role="tabpanel">
                            <div class="max-w-85 mx-auto">
                                <section class="shock-section p-2 bg-color gray-10">
                                    <div class="container">
                                        <div class="row g-4">
                                            <div class="col-12 col-md-12 align-v-center">
                                                <div class="holder">
                                                    <!-- Intro -->
                                                    <div class="basic-intro">
                                                        <a href="{{ url('category/cicm') }}">
                                                            <h2 class="title black">
                                                                Daily Newsletter – Conversations in Chinese Media
                                                            </h2>
                                                        </a>

                                                        <div class="description gray">
                                                            <div class="row">
                                                                <!--  <div class="col-4">
                                            <div class="image-wrapper" data-lax="inertia-top">
                                              <img style="border-radius: 0.375rem;"
                                                src="assets/images/output/CICM-logo-for-home-page-and-about.png" class="image" alt="Image name" />
                                            </div>
                                          </div> -->
                                                                <div class="col-12">
                                                                    <p>Information that comes out of China is
                                                                        extremely difficult to collect and sift
                                                                        through. While many
                                                                        think tanks across the world have set up
                                                                        dedicated China centers, there is still a
                                                                        gap present in
                                                                        looking at the grassroot level chatter in
                                                                        China and making sense of it. The CiCMs
                                                                        are divided into
                                                                        three sections —covering viral or trending
                                                                        topics on Chinese social media platforms
                                                                        such as Weibo;
                                                                        tracking local, regional, domestic and foreign
                                                                        Chinese news outlets and; an analysis
                                                                        section with a
                                                                        focus on how these developments affect Indian
                                                                        domestic and foreign policy. The CiCM
                                                                        newsletters are
                                                                        curated by our interns in totality, who are
                                                                        specifically trained to research and
                                                                        analyse accessible
                                                                        Chinese news. The CiCMs are a great tool for
                                                                        connecting seemingly unrelated news
                                                                        with that of broader
                                                                        Chinese policy developments, and a one of a
                                                                        kind output in India. </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </section>

                            </div>
                        </div>
                        <div id="example-v-2" class="tab-pane fade" role="tabpanel">
                            <div class="max-w-85 mx-auto">

                                <section class="shock-section p-2 bg-color gray-10">
                                    <div class="container">
                                        <div class="row g-4">
                                            <div class="col-12 col-md-12 align-v-center">
                                                <div class="holder">
                                                    <!-- Intro -->
                                                    <div class="basic-intro">
                                                        <a href="{{ url('category/opinion-pieces') }}">
                                                            <h2 class="title black">
                                                                Opinion Pieces
                                                            </h2>
                                                        </a>

                                                        <div class="description gray">
                                                            <div class="row">
                                                                <!--  <div class="col-4">
                                            <div class="image-wrapper" data-lax="inertia-top">
                                              <img style="border-radius: 0.375rem;"
                                                src="assets/images/output/CICM-logo-for-home-page-and-about.png" class="image" alt="Image name" />
                                            </div>
                                          </div> -->
                                                                <div class="col-12">
                                                                    <p>Opinion pieces by scholars on China and its
                                                                        workings in Asia and beyond. These
                                                                        well-analysed, substantive pieces on China,
                                                                        Asia and the wider Indo-Pacific
                                                                        landscape with focused assessments on topics
                                                                        ranging from geopolitics in the
                                                                        Indo-Pacific to domestic Chinese politics
                                                                        allow a publication base largely catering
                                                                        to the younger scholars across the world.
                                                                        ORCA’s audience is now global, with the
                                                                        site being routinely accessed across over a
                                                                        hundred countries. Hence, publishing
                                                                        op-eds with us allows scholars –ranging from
                                                                        college students to young professionals
                                                                        –to present their views in front of a niche
                                                                        global audience focusing on all things
                                                                        China.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </section>

                            </div>
                        </div>
                        <div id="example-v-3" class="tab-pane fade" role="tabpanel">
                            <div class="max-w-85 mx-auto">
                                <section class="shock-section p-2 bg-color gray-10">
                                    <div class="container">
                                        <div class="row g-4">
                                            <div class="col-12 col-md-12 align-v-center">
                                                <div class="holder">
                                                    <!-- Intro -->
                                                    <div class="basic-intro">
                                                        <a href="{{ url('category/expert-speak') }}">
                                                            <h2 class="title black">
                                                                Expert Speak
                                                            </h2>
                                                        </a>

                                                        <div class="description gray">
                                                            <div class="row">
                                                                <!--  <div class="col-4">
                                            <div class="image-wrapper" data-lax="inertia-top">
                                              <img style="border-radius: 0.375rem;"
                                                src="assets/images/output/CICM-logo-for-home-page-and-about.png" class="image" alt="Image name" />
                                            </div>
                                          </div> -->
                                                                <div class="col-12">
                                                                    <p>This section publishes columns by senior
                                                                        scholars in the field of China and Asia
                                                                        studies on issues of vital importance.
                                                                        Expertise-driven estimations on the present
                                                                        and future of China in particular and Asia at
                                                                        large is covered by leading voices in
                                                                        the field. Uniquely, our Expert Columns allow
                                                                        writers to delve into intelligence
                                                                        based critique; this allows senior scholars
                                                                        the flexibility to write in a manner
                                                                        that conventional media houses and think-tanks
                                                                        would ideally not publish, especially
                                                                        as the pieces are largely encouraged to be
                                                                        predictive in nature, drawing more from
                                                                        the scholars own research experiences and
                                                                        expertise rather than coverage found
                                                                        online/in print.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                        <div id="example-v-4" class="tab-pane fade" role="tabpanel">
                            <div class="max-w-85 mx-auto">
                                <section class="shock-section p-2 bg-color gray-10">
                                    <div class="container">
                                        <div class="row g-4">
                                            <div class="col-12 col-md-12 align-v-center">
                                                <div class="holder">
                                                    <!-- Intro -->
                                                    <div class="basic-intro">
                                                        <a href="{{ url('category/issue-brief') }}">
                                                            <h2 class="title black">
                                                                Issue Brief
                                                            </h2>
                                                        </a>

                                                        <div class="description gray">
                                                            <div class="row">
                                                                <!--  <div class="col-4">
                                            <div class="image-wrapper" data-lax="inertia-top">
                                              <img style="border-radius: 0.375rem;"
                                                src="assets/images/output/CICM-logo-for-home-page-and-about.png" class="image" alt="Image name" />
                                            </div>
                                          </div> -->
                                                                <div class="col-12">
                                                                    <p>These are longer research pieces detailing the
                                                                        relevance, scope and impact of
                                                                        specific pertinent issues with implications
                                                                        for Asia and beyond. Our Issue Briefs
                                                                        are informative assessments of issues
                                                                        accompanied with policy implications. These
                                                                        are mostly written by young professionals with
                                                                        work experience or mid-career
                                                                        scholars and provide a cohesive and thorough
                                                                        understanding of the topic as well as
                                                                        deductions on how its progression can be
                                                                        expected in the near future. </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                        <div id="example-v-5" class="tab-pane fade" role="tabpanel">
                            <div class="max-w-85 mx-auto">
                                <section class="shock-section p-2 bg-color gray-10">
                                    <div class="container">
                                        <div class="row g-4">
                                            <div class="col-12 col-md-12 align-v-center">
                                                <div class="holder">
                                                    <!-- Intro -->
                                                    <div class="basic-intro">
                                                        <h2 class="title black">
                                                            Graphs, Maps, and Infographics
                                                        </h2>

                                                        <div class="description gray">
                                                            <div class="row">
                                                                <!--  <div class="col-4">
                                            <div class="image-wrapper" data-lax="inertia-top">
                                              <img style="border-radius: 0.375rem;"
                                                src="assets/images/output/CICM-logo-for-home-page-and-about.png" class="image" alt="Image name" />
                                            </div>
                                          </div> -->
                                                                <div class="col-12">
                                                                    <p>This section explains China in the form of data
                                                                        visualisations. In this section
                                                                        through Maps and Graphs we present
                                                                        quantitative data to track the rise of China
                                                                        and
                                                                        make assessments according to our findings.
                                                                        The maps are prepared using QGIS and
                                                                        geo-tagging of points is accurately
                                                                        maintained. The goal of this section is to
                                                                        bridge the gap between quantitative and
                                                                        qualitative research in the field of China
                                                                        studies. This section also allows for external
                                                                        submission, guidelines for which can
                                                                        be found on the website. </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                        <div id="example-v-6" class="tab-pane fade" role="tabpanel">
                            <div class="max-w-85 mx-auto">
                                <section class="shock-section p-2 bg-color gray-10">
                                    <div class="container">
                                        <div class="row g-4">
                                            <div class="col-12 col-md-12 align-v-center">
                                                <div class="holder">
                                                    <!-- Intro -->
                                                    <div class="basic-intro">
                                                        <a href="{{ url('category/backgrounders') }}">
                                                            <h2 class="title black">
                                                                Backgrounders
                                                            </h2>
                                                        </a>

                                                        <div class="description gray">
                                                            <div class="row">
                                                                <!--  <div class="col-4">
                                            <div class="image-wrapper" data-lax="inertia-top">
                                              <img style="border-radius: 0.375rem;"
                                                src="assets/images/output/CICM-logo-for-home-page-and-about.png" class="image" alt="Image name" />
                                            </div>
                                          </div> -->
                                                                <div class="col-12">
                                                                    <p>ORCA also produces detailed background
                                                                        information about Chinese domestic and
                                                                        foreign policy. A valuable resource for
                                                                        understanding the context behind how China
                                                                        got to where it currently is, in terms of its
                                                                        policies and more. This vertical is
                                                                        meant as a resource tool for scholars across
                                                                        career levels and sectors, allowing
                                                                        them a one-stop destination for finding
                                                                        references to China’s domestic and
                                                                        international history.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                        <div id="example-v-7" class="tab-pane fade" role="tabpanel">
                            <div class="max-w-85 mx-auto">
                                <section class="shock-section p-2 bg-color gray-10">
                                    <div class="container">
                                        <div class="row g-4">
                                            <div class="col-12 col-md-12 align-v-center">
                                                <div class="holder">
                                                    <!-- Intro -->
                                                    <div class="basic-intro">
                                                        <a href="{{ url('pages/orcafiles') }}">
                                                            <h2 class="title black">
                                                                ORCA Files
                                                            </h2>
                                                        </a>

                                                        <div class="description gray">
                                                            <div class="row">
                                                                <!--  <div class="col-4">
                                            <div class="image-wrapper" data-lax="inertia-top">
                                              <img style="border-radius: 0.375rem;"
                                                src="assets/images/output/CICM-logo-for-home-page-and-about.png" class="image" alt="Image name" />
                                            </div>
                                          </div> -->
                                                                <div class="col-12">
                                                                    <p>The ORCA Files is ORCA’s very own podcast
                                                                        series, hosted by the team at ORCA. The
                                                                        ORCA Files holds conversations with our
                                                                        Community of Scholars for a greater
                                                                        understanding of all things China. Scholars
                                                                        deep dive into the nitty-gritties of
                                                                        their publications with us and provide
                                                                        additional context for their pieces. Beyond
                                                                        these conversations we also host spaces for
                                                                        delving into explainer series,
                                                                        interactions amongst team members as well as
                                                                        interviews with experts. Our podcast
                                                                        series is available on Spotify as well. </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                        <div id="example-v-8" class="tab-pane fade" role="tabpanel">
                            <div class="max-w-85 mx-auto">
                                <section class="shock-section p-2 bg-color gray-10">
                                    <div class="container">
                                        <div class="row g-4">
                                            <div class="col-12 col-md-12 align-v-center">
                                                <div class="holder">
                                                    <!-- Intro -->
                                                    <div class="basic-intro">
                                                        <a href="{{ url('category/reviewing-chinese-culture') }}">
                                                            <h2 class="title black">
                                                                Reviewing Chinese Culture
                                                            </h2>
                                                        </a>

                                                        <div class="description gray">
                                                            <div class="row">
                                                                <!--  <div class="col-4">
                                            <div class="image-wrapper" data-lax="inertia-top">
                                              <img style="border-radius: 0.375rem;"
                                                src="assets/images/output/CICM-logo-for-home-page-and-about.png" class="image" alt="Image name" />
                                            </div>
                                          </div> -->
                                                                <div class="col-12">
                                                                    <p>Through these publications, ORCA will study
                                                                        Chinese leaders & policymaking by
                                                                        connecting it to China’s culture and cultural
                                                                        outputs ranging across documentaries,
                                                                        books, songs & more.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                        <div id="example-v-11" class="tab-pane fade" role="tabpanel">
                            <div class="max-w-85 mx-auto">
                                <section class="shock-section p-2 bg-color gray-10">
                                    <div class="container">
                                        <div class="row g-3">
                                            <div class="col-12 col-md-6 col-lg-6">
                                                <div class="megamenu-item">
                                                    <ul class="nav-list list-unstyled">
                                                        <li class="nav-item">
                                                            <a href="{{ url('pages/india-china-trade-dashboard') }}"
                                                                class="nav-link parent">
                                                                <span class="text">INDIA-CHINA TRADE
                                                                    DASHBOARD</span>
                                                            </a>
                                                            <div
                                                                class="card has-full-image mt-05 vh-25 small-shadow rounded parent">
                                                                <div class="bricklayer-column" bis_skin_checked="1">

                                                                    <div class="text-wrapper text-center"
                                                                        bis_skin_checked="1"></div>
                                                                    <div class="image-wrapper shadow rounded"
                                                                        bis_skin_checked="1">
                                                                        <div class="overlay black-50"
                                                                            bis_skin_checked="1"></div>
                                                                        <img src="{{ URL::asset('images/jpg/dashboard1.png') }}"
                                                                            class="image"
                                                                            alt="India China Trade Dashboard">
                                                                    </div>
                                                                    <a href="{{ url('pages/india-china-trade-dashboard') }}"
                                                                        class="full-link"></a>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6 col-lg-6">
                                                <div class="megamenu-item">
                                                    <ul class="nav-list list-unstyled">
                                                        <li class="nav-item">
                                                            <a href="{{ url('pages/china-census-dashboard') }}"
                                                                class="nav-link parent">
                                                                <span class="text">CHINA CENSUS DASHBOARD</span>
                                                            </a>
                                                            <div
                                                                class="card has-full-image mt-05 vh-25 small-shadow rounded parent">
                                                                <div class="bricklayer-column" bis_skin_checked="1">

                                                                    <div class="text-wrapper text-center"
                                                                        bis_skin_checked="1"></div>
                                                                    <div class="image-wrapper shadow rounded"
                                                                        bis_skin_checked="1">
                                                                        <div class="overlay black-50"
                                                                            bis_skin_checked="1"></div>
                                                                        <img src="{{ URL::asset('images/jpg/dashboard2.png') }}"
                                                                            class="image"
                                                                            alt="India China Trade Dashboard">
                                                                    </div>
                                                                    <a href="{{ url('pages/china-census-dashboard') }}"
                                                                        class="full-link"></a>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6 col-lg-6">
                                                <div class="megamenu-item">
                                                    <ul class="nav-list list-unstyled">
                                                        <li class="nav-item">
                                                            <a href="{{ url('pages/china-provinces-dashboard') }}"
                                                                class="nav-link parent">
                                                                <span class="text">CHINA'S PROVINCES
                                                                    DASHBOARD</span>
                                                            </a>
                                                            <div
                                                                class="card has-full-image mt-05 vh-25 small-shadow rounded parent">
                                                                <div class="bricklayer-column" bis_skin_checked="1">

                                                                    <div class="text-wrapper text-center"
                                                                        bis_skin_checked="1"></div>
                                                                    <div class="image-wrapper shadow rounded"
                                                                        bis_skin_checked="1">
                                                                        <div class="overlay black-50"
                                                                            bis_skin_checked="1"></div>
                                                                        <img src="{{ URL::asset('images/jpg/dashboard3.png') }}"
                                                                            class="image"
                                                                            alt="India China Trade Dashboard">
                                                                    </div>
                                                                    <a href="{{ url('pages/china-provinces-dashboard') }}"
                                                                        class="full-link"></a>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6 col-lg-6">
                                                <div class="megamenu-item">
                                                    <ul class="nav-list list-unstyled">
                                                        <li class="nav-item">
                                                            <a href="{{ url('pages/china-public-diplomacy-dashboard') }}"
                                                                class="nav-link parent">
                                                                <span class="text">CHINA’S PUBLIC DIPLOMACY
                                                                    DASHBOARD</span>
                                                            </a>
                                                            <div
                                                                class="card has-full-image mt-05 vh-25 small-shadow rounded parent">
                                                                <div class="bricklayer-column" bis_skin_checked="1">

                                                                    <div class="text-wrapper text-center"
                                                                        bis_skin_checked="1"></div>
                                                                    <div class="image-wrapper shadow rounded"
                                                                        bis_skin_checked="1">
                                                                        <div class="overlay black-50"
                                                                            bis_skin_checked="1"></div>
                                                                        <img src="{{ URL::asset('images/jpg/dashboard4.png') }}"
                                                                            class="image"
                                                                            alt="India China Trade Dashboard">
                                                                    </div>
                                                                    <a href="{{ url('pages/china-public-diplomacy-dashboard') }}"
                                                                        class="full-link"></a>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

@endsection
