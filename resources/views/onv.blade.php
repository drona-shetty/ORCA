@extends('web')
@section('title', 'ORCA Outputs and Ventures | Research, Publications & Dashboards')
@section('meta_keywords', 'ORCA outputs, ORCA publications, China research newsletters, ORCA dashboards, India China
    research, ORCASIA outputs')
@section('meta_description', 'Explore ORCA’s outputs including newsletters, opinion pieces, issue briefs, dashboards,
    podcasts, and research publications on China and Asia.')

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

    <!-- SEO Hidden Content -->
    <p class="sr-only">
        ORCA produces research outputs including newsletters, opinion pieces, dashboards, podcasts, and analytical
        publications focused on China, Asia, and India-China relations.
    </p>

    <!-- Banner -->
    <section class="shock-section has-overlay">
        <div class="banner">
            <div class="content-wrapper">
                <div class="extended-intro max-w-65">
                    <h1 class="title">
                        <span class="text-1 d-block text-style-2 white-65">Output</span>
                        <span class="text-2 d-block text-style-3 text-italic white-85">
                            and <mark class="animated-underline primary">Ventures</mark>
                        </span>
                    </h1>
                </div>
            </div>

            <!-- Optimized Image -->
            <div class="image-wrapper">
                <img src="{{ asset('/images/jpg/AdobeStock_60369364.jpeg') }}" class="image vh-65 fit-cover"
                    alt="ORCA research outputs and ventures banner" loading="eager" width="1600" height="900">
            </div>

            <div class="overlay black-65"></div>
        </div>
    </section>

    <!-- Content Tabs -->
    <section class="shock-section pt-6 pb-6">
        <div class="container">

            <div class="vertical-tab scheme-1 primary">

                <!-- Tabs -->
                <ul id="example-v-tab" class="nav nav-pills" role="tablist">

                    <!-- Keep structure SAME, only add SEO titles -->
                    <li class="nav-item">
                        <button class="nav-link active" data-bs-target="#example-v-1" data-bs-toggle="tab">
                            Daily Newsletter – Conversations in Chinese Media
                        </button>
                    </li>

                    <li class="nav-item">
                        <button class="nav-link" data-bs-target="#example-v-2" data-bs-toggle="tab">
                            Opinion Pieces
                        </button>
                    </li>

                    <li class="nav-item">
                        <button class="nav-link" data-bs-target="#example-v-11" data-bs-toggle="tab">
                            Dashboards
                        </button>
                    </li>

                    <li class="nav-item">
                        <button class="nav-link" data-bs-target="#example-v-7" data-bs-toggle="tab">
                            ORCA Files
                        </button>
                    </li>

                    <li class="nav-item">
                        <button class="nav-link" data-bs-target="#example-v-6" data-bs-toggle="tab">
                            Backgrounders
                        </button>
                    </li>

                    <li class="nav-item">
                        <button class="nav-link" data-bs-target="#example-v-8" data-bs-toggle="tab">
                            Reviewing Chinese Culture
                        </button>
                    </li>

                    <li class="nav-item">
                        <button class="nav-link" data-bs-target="#example-v-4" data-bs-toggle="tab">
                            Issue Brief
                        </button>
                    </li>

                    <li class="nav-item">
                        <button class="nav-link" data-bs-target="#example-v-5" data-bs-toggle="tab">
                            Graphs, Maps, and Infographics
                        </button>
                    </li>

                </ul>

                <!-- Example Tab (pattern applied to all) -->
                <div class="tab-content overflow-hidden">

                    <div id="example-v-1" class="tab-pane fade show active">

                        <section class="shock-section p-2 bg-color gray-10">
                            <div class="container">
                                <div class="basic-intro">

                                    <!-- Internal Linking Boost -->
                                    <a href="{{ url('category/cicm') }}" title="ORCA Daily Newsletter China Media Analysis">
                                        <h2 class="title black">
                                            Daily Newsletter – Conversations in Chinese Media
                                        </h2>
                                    </a>

                                    <div class="description gray">
                                        <p>
                                            ORCA’s CiCM newsletters analyse grassroots Chinese discourse, tracking trends on
                                            Weibo, domestic media narratives, and their implications for India-China
                                            relations and global geopolitics.
                                        </p>
                                    </div>

                                </div>
                            </div>
                        </section>

                    </div>

                    <!-- DASHBOARDS (Important SEO Fix) -->
                    <div id="example-v-11" class="tab-pane fade">

                        <section class="shock-section p-2 bg-color gray-10">
                            <div class="container">
                                <div class="row g-3">

                                    @php
                                        $dashboards = [
                                            [
                                                'title' => 'India-China Trade Dashboard',
                                                'img' => 'dashboard1.png',
                                                'url' => 'india-china-trade-dashboard',
                                            ],
                                            [
                                                'title' => 'China Census Dashboard',
                                                'img' => 'dashboard2.png',
                                                'url' => 'china-census-dashboard',
                                            ],
                                            [
                                                'title' => "China's Provinces Dashboard",
                                                'img' => 'dashboard3.png',
                                                'url' => 'china-provinces-dashboard',
                                            ],
                                            [
                                                'title' => 'China Public Diplomacy Dashboard',
                                                'img' => 'dashboard4.png',
                                                'url' => 'china-public-diplomacy-dashboard',
                                            ],
                                        ];
                                    @endphp

                                    @foreach ($dashboards as $d)
                                        <div class="col-12 col-md-6 col-lg-6">
                                            <a href="{{ url('pages/' . $d['url']) }}" title="{{ $d['title'] }}">
                                                <div class="card has-full-image mt-05 vh-25 small-shadow rounded parent">

                                                    <div class="image-wrapper shadow rounded">
                                                        <div class="overlay black-50"></div>

                                                        <img src="{{ asset('images/jpg/' . $d['img']) }}" class="image"
                                                            alt="{{ $d['title'] }}" loading="lazy" width="600"
                                                            height="400">
                                                    </div>

                                                </div>
                                            </a>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Structured Data -->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "WebPage",
            "name": "ORCA Outputs and Ventures",
            "description": "Research outputs including newsletters, dashboards, and publications on China and Asia.",
            "url": "{{ url()->current() }}"
        }
    </script>

@endsection
