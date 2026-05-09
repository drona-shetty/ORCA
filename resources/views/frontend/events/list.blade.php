@extends('web')

@section('title', 'Events | ORCA - Organisation for Research on China and Asia')

@section('meta_keywords', 'ORCA events, ORCA conferences, China Asia events, India China discussions, GCNS 2024, ORCA
    seminars')

@section('meta_description', 'Explore ORCA events, conferences, seminars, and strategic discussions focused on China,
    Asia, and India-China relations.')

@section('meta')

    <!-- Canonical -->
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Preload Hero Image -->
    <link rel="preload" as="image"
        href="{{ asset('images/gcnsorca.jpg') }}">

    <!-- Open Graph -->
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Events | ORCA" />
    <meta property="og:description"
        content="Explore ORCA conferences, seminars, and strategic events focused on China and Asia." />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:image"
        content="{{ asset('images/gcnsorca.jpg') }}" />

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Events | ORCA">
    <meta name="twitter:description"
        content="Explore ORCA conferences, seminars, and strategic events focused on China and Asia.">
    <meta name="twitter:image"
        content="{{ asset('images/gcnsorca.jpg') }}">

    <!-- Event Page Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "CollectionPage",
        "name": "ORCA Events",
        "url": "{{ url()->current() }}",
        "description": "ORCA events, seminars, strategic dialogues and conferences related to China and Asia.",
        "publisher": {
            "@type": "Organization",
            "name": "ORCA",
            "url": "{{ url('/') }}"
        }
    }
    </script>

@endsection

@section('content')

    <style>
        .shock-header .navbar .navbar-nav .nav-link {
            color: black !important;
        }

        #load-more {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: auto;
            margin-top: 40px;
        }
    </style>

    <!-- Intro -->
    <section class="shock-section has-holder pt-4 pb-8">

        <div class="container max-w-85">

            <div class="basic-intro text-center mb-5">

                <h1 class="title black">

                    <span class="text-1 text-style-5">
                        Events at
                    </span>

                    <span class="text-2 text-style-6">
                        <mark class="animated-underline primary-25">
                            ORCA
                        </mark>
                    </span>

                </h1>

                <p class="description mt-3">

                    Explore conferences, seminars, strategic dialogues,
                    workshops, and academic events organised by ORCA
                    focusing on China, Asia, Indo-Pacific affairs,
                    and India-China relations.

                </p>

                <p class="description">

                    To view all pictures of GCNS 2024,

                    <a href="https://orcasia.org/pages/gcns"
                        target="_blank"
                        rel="noopener noreferrer"
                        style="color:red;">

                        click here

                    </a>.

                </p>

            </div>

            <!-- Hero Banner -->
            <section class="shock-section mt-2 bg-image bg-fixed"
                data-bg-image="{{ asset('images/gcnsorca.jpg') }}">

                <div class="banner vh-65 align-h-center align-v-center">

                    <div class="holder"></div>

                </div>

                <div class="overlay gray-25"></div>

            </section>

            <!-- Gallery -->
            <div class="gallery mt-5">

                <div class="row g-3">

                    <!-- Image 1 -->
                    <div class="col-12 col-md-4"
                        data-aos="fade-up">

                        <a href="{{ asset('images/png/event.jpg') }}"
                            class="item lightbox-link">

                            <div class="image-wrapper shadow rounded hover-zoom"
                                data-lax="v-bottom">

                                <x-webp-image
                                    src="{{ asset('images/png/events-1.png') }}"
                                    alt="ORCA strategic event session"
                                    class="image fit-cover" />

                                <div class="overlay primary-25"></div>

                            </div>

                        </a>

                    </div>

                    <!-- Image 2 -->
                    <div class="col-12 col-md-4"
                        data-aos="fade-up"
                        data-aos-delay="100">

                        <a href="{{ asset('images/png/event.jpg') }}"
                            class="item lightbox-link">

                            <div class="image-wrapper shadow rounded hover-zoom"
                                data-lax="v-top">

                                <x-webp-image
                                    src="{{ asset('images/png/events-2.png') }}"
                                    alt="ORCA conference discussion"
                                    class="image fit-cover" />

                                <div class="overlay primary-25"></div>

                            </div>

                        </a>

                    </div>

                    <!-- Image 3 -->
                    <div class="col-12 col-md-4"
                        data-aos="fade-up"
                        data-aos-delay="200">

                        <a href="{{ asset('images/png/event.jpg') }}"
                            class="item lightbox-link">

                            <div class="image-wrapper shadow rounded hover-zoom"
                                data-lax="v-bottom">

                                <x-webp-image
                                    src="{{ asset('images/png/events-3.png') }}"
                                    alt="ORCA seminar audience"
                                    class="image fit-cover" />

                                <div class="overlay primary-25"></div>

                            </div>

                        </a>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- Video Banner -->
    <section class="shock-section has-overlay mt-2 bg-image bg-fixed"
        data-bg-image="{{ asset('images/event.jpeg') }}">

        <div class="banner vh-65 align-h-center align-v-center">

            <div class="holder">

                <div class="gallery">

                    <a href="https://youtu.be/Rwx7_yykb5I"
                        class="item active lightbox-link"
                        aria-label="Watch ORCA event video">

                        <!-- Circular Text -->
                        <div class="circular-text large mix-blend-lighter"
                            data-lax="inertia-top">

                            <div class="emblem gray">
                                O R C A • E V E N T S •
                            </div>

                        </div>

                        <i class="fa-solid fa-circle-play gallery-icon white"
                            style="color: #e41e25!important;"
                            aria-hidden="true"></i>

                    </a>

                </div>

            </div>

        </div>

        <div class="overlay gray-25"></div>

    </section>

    <!-- Events List -->
    <section class="shock-section pt-5 mt-2 pb-5">

        <div class="container">

            <!-- Section Heading -->
            <div class="basic-intro text-center mb-5">

                <h2 class="title black">
                    Recent Events & Conferences
                </h2>

                <p class="description">
                    Stay updated with ORCA’s latest conferences,
                    discussions, academic collaborations,
                    and strategic engagements.
                </p>

            </div>

            <!-- Events -->
            <div class="row g-3"
                data-columns="2"
                id="items-container">

                @include('frontend.events.partial')

            </div>

            <!-- Pagination -->
            <input type="hidden"
                id="page"
                value="1">

            <button class="button double-edge transparent black-hover"
                id="load-more">

                <span class="button-text black white-hover">
                    Load More
                </span>

                <span class="overlay gray-50 magnetic-effect"></span>

            </button>

        </div>

    </section>

@endsection

@section('scripts')

    <script>
        let page = 1;

        $('#load-more').on('click', function() {

            page++;

            $.ajax({

                url: "?page=" + page,

                type: 'GET',

                beforeSend: function() {

                    $('#load-more .button-text').text('Loading...');

                },

                success: function(data) {

                    if (data.trim().length == 0) {

                        $('#load-more').remove();

                    } else {

                        $('#items-container').append(data);

                        $('#load-more .button-text').text('Load More');

                    }

                },

                error: function() {

                    alert("Server error");

                    $('#load-more .button-text').text('Load More');

                }

            });

        });
    </script>

@endsection
