@extends('web')
@section('title', 'Global Conference on New Sinology (GCNS) | ORCA')
@section('meta_keywords', 'GCNS, ORCA, China research, Asia studies, academic conference')
@section('meta_description', 'GCNS by ORCA brings together global scholars and policymakers to discuss China and Asia.')
@section('meta')
    <!-- Canonical -->
    <link rel="canonical" href="{{ url()->current() }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="GCNS | ORCA Global Conference on New Sinology">
    <meta property="og:description"
        content="GCNS by ORCA brings together global scholars and policymakers to discuss China and Asia.">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('images/logo.png') }}">
    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="GCNS | ORCA">
    <meta name="twitter:description"
        content="GCNS by ORCA brings together global scholars and policymakers to discuss China and Asia.">
    <meta name="twitter:image" content="{{ asset('images/logo.png') }}">
    <!-- Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "CollectionPage",
        "name": "Global Conference on New Sinology (GCNS)",
        "url": "{{ url()->current() }}",
        "description": "The Global Conference on New Sinology (GCNS) is ORCA's flagship annual conference on China studies, Chinese politics, international relations and strategic affairs.",
        "publisher": {
            "@type": "Organization",
            "name": "Organisation for Research on China and Asia (ORCA)",
            "url": "{{ url('/') }}"
        },
        "mainEntity": {
            "@type": "ItemList",
            "name": "GCNS Editions",
            "itemListElement": [
                {
                    "@type": "Event",
                    "name": "GCNS 2025",
                    "url": "{{ url('/pages/gcns2025') }}"
                },
                {
                    "@type": "Event",
                    "name": "GCNS 2024",
                    "url": "{{ url('/pages/gcns2024') }}"
                },
                {
                    "@type": "Event",
                    "name": "GCNS 2023",
                    "url": "{{ url('/pages/gcns2023') }}"
                }
            ]
        }
    }
    </script>
@endsection
@section('content')
    <link rel="stylesheet" href="{{ asset('css/gcns.css') }}">
    <!-- HERO -->
    <section class="shock-section has-holder pt-6 pb-6 hero">
        <video autoplay muted loop playsinline class="hero-video">
            <source src="{{ asset('videos/_GCNS IIC_compressed.mp4') }}" type="video/mp4">
        </video>
        <div class="hero-overlay"></div>
        <div class="container">
            <div class="hero-content">
                <div class="rdf-wrap-4">
                    <a href="http://3.111.242.204" class="rdf-link-block-1 w-inline-block"><img
                            src="http://3.111.242.204/gcns25/images/orca-white_1.svg" loading="lazy" alt=""
                            class="rdf-pic-1"></a>
                    <div class="rdf-decor-1"></div>
                    <a href="http://3.111.242.204/pages/gcns2025" class="rdf-link-block-1 w-inline-block"><img
                            src="http://3.111.242.204/gcns25/images/gcns-ww.svg" loading="lazy" alt=""
                            class="rdf-pic-1"></a>
                </div>
                <h1>
                    Global Conference on New Sinology (GCNS)
                </h1>
                <p>
                    India’s premier international conference examining Chinese politics, strategy, economy, security,
                    and emerging approaches to New Sinology through interdisciplinary and policy-oriented dialogue.
                </p>
                <div class="hero-buttons">
                    <a href="#editions" class="button shadow rounded-pill gradient scheme-1 hover-up">
                        <span class="button-text white white-hover">
                            Explore Editions
                        </span>
                        <i class="fa-solid fa-arrow-right button-icon white white-hover"></i>
                    </a>
                    <a href="#reports" class="button shadow rounded-pill outline hover-up">
                        <span class="button-text">
                            Download Reports
                        </span>
                        <i class="fa-solid fa-arrow-right button-icon"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
    @php
        $gcns = [
            [
                'year' => '2025',
                'title' => 'China’s “Dream” for a New Mandate of Power',
                'description' =>
                    "The Global Conference on New Sinology (GCNS) was held on 23rd-24th September 2025 on the theme 'China’s ‘Dream’ for a New Mandate of Power' at The India International Centre, New Delhi.",
                'url' => '/pages/gcns2025',
                'image' => asset('images/event/media/IMG_6494_(1).jpg'),
            ],
            [
                'year' => '2024',
                'title' => 'The Art of Power in Zhongnanhai',
                'description' =>
                    "The Global Conference on New Sinology (GCNS) was held on 26th-27th September 2024 on the theme 'The Art of Power in Zhongnanhai' at The Grand, New Delhi.",
                'url' => '/pages/gcns2024',
                'image' => asset('images/event/media/IMG_1413.JPG'),
            ],
            [
                'year' => '2023',
                'title' => 'China’s Superpower Ambitions in the New Era',
                'description' =>
                    "The Global Conference on New Sinology (GCNS) was held on 25th-26th September 2023 on the theme 'China's Superpower Ambitions in the New Era' at The Grand, New Delhi.",
                'url' => '/pages/gcns2023',
                'image' => asset('images/event/media/IMG_0040.jpg'),
            ],
        ];
    @endphp
    <!-- EDITIONS -->
    <section id="editions">
        <div class="container">
            <div class="basic-intro mb-35 text-center">
                <h2 class="title text-style-5">
                    <span class="text-2 black">
                        <mark class="animated-underline primary active">
                            Conference
                        </mark>
                    </span>
                    <span class="text-2 black">
                        Editions
                    </span>
                </h2>
                <div class="description maxwd">
                    <p>
                        Discover the themes, speakers and conference outcomes of previous editions.
                    </p>
                </div>
            </div>
            <div class="gcns-slider-wrapper">
                <div class="swiper gcnsSwiper">
                    <div class="gcns-prev">
                        <i class="fa-solid fa-arrow-left"></i>
                    </div>
                    <div class="gcns-next">
                        <i class="fa-solid fa-arrow-right"></i>
                    </div>
                    <div class="swiper-wrapper">
                        @foreach ($gcns as $edition)
                            <div class="swiper-slide">
                                <div class="timeline-card">
                                    <div class="timeline-image">
                                        <img src="{{ $edition['image'] }}" alt="GCNS {{ $edition['year'] }}">
                                    </div>
                                    <div class="timeline-content">
                                        <div class="timeline-header">
                                            <div class="year">
                                                GCNS {{ $edition['year'] }}
                                            </div>
                                            <div class="timeline-line"></div>
                                        </div>
                                        <h3>{{ $edition['title'] }}</h3>
                                        <p>{{ $edition['description'] }}</p>
                                        <a href="{{ url($edition['url']) }}"
                                            class="button shadow rounded-pill gradient scheme-1 hover-up">
                                            <span class="button-text white white-hover">
                                                View GCNS {{ $edition['year'] }}
                                            </span>
                                            <i class="fa-solid fa-arrow-right button-icon white white-hover"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </section>
    @php
        $media_files = App\Models\Event\Media::where('gcns', 2025)->orderBy('sequence_no', 'asc')->paginate(8);
    @endphp
    <!-- GCNS 2025 GALLERY -->
    <section id="gallery" class="gallery-section">
        <div class="container">
            <div class="d-flex align-items-end justify-content-between flex-wrap mb-5">
                <div class="basic-intro mb-0 text-center">
                    <h2 class="title text-style-5">
                        <span class="text-2 black">
                            <mark class="animated-underline primary active">
                                Previous
                            </mark>
                        </span>
                        <span class="text-2 black">
                            Conference Highlights
                        </span>
                    </h2>
                    <div class="description maxwd">
                        <p>
                            Participants interactions in the past GCNS editions
                        </p>
                    </div>
                </div>
            </div>
            <div class="swiper gallerySwiper">
                <div class="swiper-wrapper">
                    @foreach ($media_files as $media)
                        <div class="swiper-slide">
                            <div class="gallery-card">
                                <a href="{{ asset('images/event/media/' . $media->files) }}"
                                    data-fancybox="gcns-gallery">
                                    <img src="{{ asset('images/event/media/' . $media->files) }}"
                                        alt="GCNS 2025 Gallery">
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-pagination gallery-pagination"></div>
            </div>
        </div>
    </section>
    <!-- IMPACT -->
    <section>
        <div class="container">
            <div class="basic-intro mb-35 text-center">
                <h2 class="title text-style-5">
                    <span class="text-2 black">
                        <mark class="animated-underline primary active">
                            GCNS
                        </mark>
                    </span>
                    <span class="text-2 black">
                        Impact
                    </span>
                </h2>
                <div class="description maxwd">
                    <p>
                        Connecting scholars, diplomats, journalists, policymakers,
                        researchers and students through meaningful engagement.
                    </p>
                </div>
            </div>
            <div class="impact-grid">
                <div class="impact-box">
                    <h3>3</h3>
                    <p>Annual Editions</p>
                </div>
                <div class="impact-box">
                    <h3>180+</h3>
                    <p>Speakers</p>
                </div>
                <div class="impact-box">
                    <h3>1200+</h3>
                    <p>Delegates</p>
                </div>
                <div class="impact-box">
                    <h3>20+</h3>
                    <p>Institutional Collaborations</p>
                </div>
            </div>
        </div>
    </section>
    <!-- REPORTS -->
    <section class="reports" id="reports">
        <div class="container">
            <div class="basic-intro mb-35 text-center">
                <h2 class="title text-style-5">
                    <span class="text-2 black">
                        <mark class="animated-underline primary active">
                            Conference
                        </mark>
                    </span>
                    <span class="text-2 black">
                        Reports
                    </span>
                </h2>
            </div>
            <div class="report-grid">
                <div class="report-card">
                    <h3>GCNS 2023 Report</h3>
                    <p>
                        Insights and strategic discussions from the inaugural GCNS conference.
                    </p>
                    <br>
                    <a href="https://orcasia.org/allfiles/GCNS_2023_Report.pdf" class="button shadow rounded-pill gradient scheme-1 hover-up">
                        <span class="button-text white white-hover">
                            Download Report
                        </span>
                        <i class="fa-solid fa-download button-icon white white-hover"></i>
                    </a>
                </div>
                <div class="report-card">
                    <h3>GCNS 2024 Report</h3>
                    <p>
                        Proceedings and analyses focused on Zhongnanhai and elite Chinese politics.
                    </p>
                    <br>
                    <a href="https://orcasia.org/allfiles/ORCA's_GCNS_2024_Report.pdf" class="button shadow rounded-pill gradient scheme-1 hover-up">
                        <span class="button-text white white-hover">
                            Download Report
                        </span>
                        <i class="fa-solid fa-download button-icon white white-hover"></i>
                    </a>
                </div>
                <div class="report-card">
                    <h3>GCNS 2025 Report</h3>
                    <p>
                        Comprehensive coverage of discussions on China’s strategic ambitions and global influence.
                    </p>
                    <br>
                    <a href="https://orcasia.org/allfiles/ORCA%27s%20GCNS_2025%20Conference%20Report.pdf" class="button shadow rounded-pill gradient scheme-1 hover-up">
                        <span class="button-text white white-hover">
                            Download Report
                        </span>
                        <i class="fa-solid fa-download button-icon white white-hover"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
    {{-- SWIPER JS --}}
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            new Swiper('.gcnsSwiper', {
                slidesPerView: 1,
                spaceBetween: 30,
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true
                },
                navigation: {
                    nextEl: '.gcns-next',
                    prevEl: '.gcns-prev'
                },
                breakpoints: {
                    768: {
                        slidesPerView: 1
                    },
                    1200: {
                        slidesPerView: 1
                    }
                }
            });
            new Swiper(".gallerySwiper", {
                slidesPerView: 3,
                centeredSlides: true,
                loop: true,
                spaceBetween: 40,
                watchSlidesProgress: true,
                grabCursor: true,
                slidesPerView: "auto",
                speed: 800,
                autoplay: {
                    delay: 3000, // 3 seconds
                    disableOnInteraction: false,
                    pauseOnMouseEnter: true,
                },
                navigation: {
                    nextEl: ".gallery-next",
                    prevEl: ".gallery-prev",
                },
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
                breakpoints: {
                    0: {
                        slidesPerView: 1.2,
                        spaceBetween: 20
                    },
                    768: {
                        slidesPerView: 3,
                        spaceBetween: 40
                    }
                }
            });
        });
    </script>
@endsection
