@extends('web')

@section('title', 'Our Mission | ORCA - Organisation for Research on China and Asia')

@section('meta_keywords', 'ORCA mission, China research India, Asia strategic studies, India China relations, ORCA think tank')

@section('meta_description', 'Learn about ORCA’s mission to build strategic understanding of China and Asia through research, policy analysis, publications, and regional studies.')

@section('meta')

    <!-- Canonical -->
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Preload Hero Image -->
    <link rel="preload" as="image"
        href="{{ asset('images/jpg/AdobeStock_90152948.jpeg') }}">

    <!-- Open Graph -->
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Our Mission | ORCA" />
    <meta property="og:description"
        content="Explore ORCA’s mission to research China and Asia through strategic analysis, publications, and policy-oriented studies." />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:image"
        content="{{ asset('images/jpg/AdobeStock_90152948.jpeg') }}" />

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Our Mission | ORCA">
    <meta name="twitter:description"
        content="Explore ORCA’s mission to research China and Asia through strategic analysis and publications.">
    <meta name="twitter:image"
        content="{{ asset('images/jpg/AdobeStock_90152948.jpeg') }}">

    <!-- Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "AboutPage",
        "name": "ORCA Mission",
        "url": "{{ url()->current() }}",
        "description": "Organisation for Research on China and Asia mission page",
        "publisher": {
            "@type": "Organization",
            "name": "ORCA",
            "url": "{{ url('/') }}"
        }
    }
    </script>

@endsection

@section('content')

    <!-- Hero Banner -->
    <section class="shock-section bg-image bg-fixed position-x-left"
        data-bg-image="{{ asset('images/jpg/AdobeStock_90152948.jpeg') }}">

        <div class="container">
            <div class="holder vh-100 align-h-right align-v-center">

                <div class="side-intro max-w-50">

                    <h1 class="title">
                        <span class="text-1 text-style-1 scheme-2 white">
                            ORCA’s
                        </span>

                        <span class="text-2 text-style-2 text-italic scheme-2">
                            Mission
                        </span>
                    </h1>

                    <p class="description white mt-4">
                        ORCA is dedicated to advancing strategic understanding
                        of China and Asia through research, publications,
                        policy analysis, and regional studies focused on
                        India’s geopolitical interests.
                    </p>

                </div>

            </div>
        </div>

    </section>

    <!-- Mission Section -->
    <section class="shock-section pt-5 pb-5" data-bg-color="#16161b">

        <div class="container">

            <!-- Intro -->
            <div class="horizontal-tab mb-5 scheme-2 tertiary" data-aos="fade-up">

                <ul id="h-tab" class="nav nav-tabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button id="h-1-tab"
                            class="nav-link active"
                            aria-selected="true"
                            aria-controls="h-1"
                            data-bs-target="#h-1"
                            data-bs-toggle="tab"
                            role="tab">
                            Our Mission
                        </button>
                    </li>
                </ul>

                <div class="tab-content">

                    <div id="h-1"
                        class="tab-pane fade show active"
                        role="tabpanel">

                        <div class="max-w-75 mx-auto text-style-12 text-center">

                            <p class="white">
                                ORCA aims to serve as a premier platform for
                                strategic discourse and policy-oriented
                                research on China and Asia by connecting
                                data-driven insights with geopolitical,
                                economic, social, and security developments
                                affecting India and the wider Indo-Pacific region.
                            </p>

                        </div>

                    </div>

                </div>

            </div>

            <!-- Mission Cards -->
            <div class="row g-4">

                <!-- Card -->
                <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up">

                    <article class="card has-icon parent h-100">

                        <div class="card-body">

                            <i class="fas fa-3x fa-users-cog white mb-4"
                                aria-hidden="true"></i>

                            <h2 class="title text-style-11 white">
                                To Build
                            </h2>

                            <p class="description">
                                Knowledge, interest, and understanding
                                regarding China’s perceptions of Asia and
                                India among policymakers, scholars,
                                professionals, students, and the public.
                            </p>

                        </div>

                    </article>

                </div>

                <!-- Card -->
                <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">

                    <article class="card has-icon parent h-100">

                        <div class="card-body">

                            <i class="fas fa-3x fa-chart-line white mb-4"
                                aria-hidden="true"></i>

                            <h2 class="title text-style-11 white">
                                To Assess
                            </h2>

                            <p class="description">
                                Strategic data and digital discourse emerging
                                from China’s domestic circles and their
                                implications for regional and international affairs.
                            </p>

                        </div>

                    </article>

                </div>

                <!-- Card -->
                <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">

                    <article class="card has-icon parent h-100">

                        <div class="card-body">

                            <i class="fas fa-3x fa-link white mb-4"
                                aria-hidden="true"></i>

                            <h2 class="title text-style-11 white">
                                To Link
                            </h2>

                            <p class="description">
                                Research insights with broader political,
                                diplomatic, cultural, economic, and security
                                developments shaping India-China relations.
                            </p>

                        </div>

                    </article>

                </div>

                <!-- Card -->
                <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">

                    <article class="card has-icon parent h-100">

                        <div class="card-body">

                            <i class="fas fa-3x fa-user-shield white mb-4"
                                aria-hidden="true"></i>

                            <h2 class="title text-style-11 white">
                                To Ensure
                            </h2>

                            <p class="description">
                                ORCA becomes a trusted resource for strategic
                                research, policy discussions, and academic
                                engagement related to China and Asia.
                            </p>

                        </div>

                    </article>

                </div>

                <!-- Card -->
                <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="400">

                    <article class="card has-icon parent h-100">

                        <div class="card-body">

                            <i class="fas fa-3x fa-cogs white mb-4"
                                aria-hidden="true"></i>

                            <h2 class="title text-style-11 white">
                                To Implement
                            </h2>

                            <p class="description">
                                Dedicated research initiatives and analytical
                                platforms focused on India’s strategic,
                                regional, and security concerns.
                            </p>

                        </div>

                    </article>

                </div>

                <!-- Card -->
                <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="500">

                    <article class="card has-icon parent h-100">

                        <div class="card-body">

                            <i class="fas fa-3x fa-laptop white mb-4"
                                aria-hidden="true"></i>

                            <h2 class="title text-style-11 white">
                                To Publish
                            </h2>

                            <p class="description">
                                Daily newsletters, analytical reports,
                                strategic publications, and research outputs
                                interpreting developments across China and Asia.
                            </p>

                        </div>

                    </article>

                </div>

            </div>

            <!-- Additional Content -->
            <div class="row mt-5">

                <div class="col-lg-10 mx-auto text-center">

                    <h2 class="title text-style-5 white mb-4">
                        Why ORCA Exists
                    </h2>

                    <p class="text-style-12">
                        ORCA was established to bridge the gap between
                        academic research, policy discourse, and public
                        understanding regarding China and Asia. Through
                        interdisciplinary analysis and data-driven insights,
                        ORCA seeks to contribute to informed strategic thinking
                        and meaningful dialogue on regional developments that
                        influence India’s national interests and the evolving
                        Indo-Pacific landscape.
                    </p>

                </div>

            </div>

        </div>

    </section>

@endsection