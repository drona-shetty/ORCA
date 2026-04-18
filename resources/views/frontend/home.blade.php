@extends('web')
@section('title', 'ORCA | Organisation for Research on China and Asia')
@section('meta_keywords',
    'ORCA, Organisation for Research on China and Asia, China, research on china, orca india,
    orcasia, #china')
@section('meta_description',
    'With assessments based on real-time, ground level chatter in/on/from #China, ORCA seeks to
    add new levels of research insight to how China perceives the world.')

@section('content')
    <meta property="og:image" name="thumbnail" content="http://orcasia.org/images/orcadesign.png" />

    <?php
    if (Auth::check()) {
        $user_meta = App\Models\UserMeta::where('user_id', Auth::user()->id)->first();
    } ?>

    <style>
        .publicationbody {
            background-color: #f7f7ea !important;
        }

        .subtitledesign {
            font-style: italic;
            color: #fff;
            font-weight: bold;
        }

        #overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #000;
            filter: alpha(opacity=70);
            -moz-opacity: 0.7;
            -khtml-opacity: 0.7;
            opacity: 0.7;
            z-index: 100;
            display: none;
        }

        .popup-onload {
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            position: fixed;
            z-index: 101;
            background: #000000b0;
        }

        .cnt223 {
            min-width: 600px;
            width: 80%;
            max-width: 800px;
            /* Added to limit the maximum width for larger screens */
            min-height: auto;
            margin: 100px auto;
            /* Changed to "auto" to center the popup horizontally */
            background: #030303;
            position: relative;
            z-index: 103;
            padding: 15px 35px;
            border-radius: 5px;
            box-shadow: 0 2px 5px #000;
        }

        /* Add the following CSS */
        .cnt223 input[type="text"],
        .cnt223 input[type="email"] {
            color: white !important;
        }

        .cnt223 label {
            color: white !important;
        }

        .cnt223 input[type="text"]::placeholder,
        .cnt223 input[type="email"]::placeholder {
            color: white !important;
        }

        .cnt223 .x {
            position: absolute;
            top: 10px;
            padding: 0.5rem;
            right: 10px;
            font-size: 24px;
            color: white;
            cursor: pointer;
        }

        @media (max-width: 767px) {
            .popup-onload {
                align-items: center;
            }

            .cnt223 {
                min-width: 100%;
                width: 90%;
                margin: auto;
            }
        }

        @media (max-width: 991px) {
            .dynamic-slider .slide-navigation {
                padding: 2rem 2rem 5rem;
            }
        }
    </style>

    <div class='popup-onload'>
        <div class='cnt223'>

            <!-- Add the close symbol (X) -->
            <span class="close x">X</span>

            <div class="row mt-4 mb-4 m-1">
                <div class="col-12 col-md-6 align-h-center align-v-center">
                    <!-- Intro -->
                    <div class="side-intro">
                        <h2 class="title white">

                            <span class="text-2 text-style-10 text-italic">Subscribe now to our <mark
                                    class="animated-underline primary">newsletter</mark> !</span>
                        </h2>
                        <div class="description gray">
                            <p class="graycolor">Get a daily dose of local and national news from China, top trends in
                                Chinese social media and what it means for India and the region at large.</p>
                            <p>
                            <p class="white"><a
                                    href="https://orcasia.org/allfiles/ORCA's%20GCNS%202025%20Conference%20Report.pdf"
                                    target="_blank" style="color:#e74646">Read ORCA's GCNS 2025 Conference Report</a></p>

                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 align-h-center align-v-center">
                    <!-- Form -->
                    <div class="form-area scheme-2 primary">
                        <form method="post" action="{{ url('add-subscriber') }}"
                            class="form-fields needs-validation ajax-form" novalidate="novalidate">
                            @csrf
                            <div class="form-row row">
                                <div class="form-col form-floating col-12 col-md-6">
                                    <input type="text" name="name" id="name" class="form-control"
                                        placeholder="Name" required="required">
                                    <label for="InputFloatingName" class="form-label">Name</label>
                                    <div class="invalid-feedback">Please enter your name.</div>
                                    <div class="valid-feedback">Looks good.</div>
                                </div>
                                <div class="form-col form-floating col-12 col-md-6">
                                    <input type="email" name="email" id="email" class="form-control"
                                        placeholder="name@example.com" required="required">
                                    <label for="InputFloatingEmail" class="form-label">Email</label>
                                    <div class="invalid-feedback">Please enter a valid email address.</div>
                                    <div class="valid-feedback">Looks good.</div>
                                </div>
                            </div>
                            <div class="form-row row">
                                <div class="form-col form-floating col-12">
                                    <!-- Button -->
                                    <button type="submit" id="popup-box-dismiss"
                                        class="button arrow-button next scheme-2 primary">
                                        <span class="arrow">
                                            <span class="item"></span>
                                            <span class="item"></span>
                                        </span>
                                        <span class="line"></span>
                                        <span class="text">SUBSCRIBE</span>
                                    </button>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Check if the popup should be shown
        function shouldShowPopup() {
            return !getCookie('subscribed');
        }

        // Set a cookie with the given name, value, and expiry days
        function setCookie(name, value, days) {
            var expires = '';
            if (days) {
                var date = new Date();
                date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
                expires = '; expires=' + date.toUTCString();
            }
            document.cookie = name + '=' + (value || '') + expires + '; path=/';
        }

        // Get the value of the cookie with the given name
        function getCookie(name) {
            var nameEQ = name + '=';
            var cookies = document.cookie.split(';');
            for (var i = 0; i < cookies.length; i++) {
                var cookie = cookies[i];
                while (cookie.charAt(0) == ' ') {
                    cookie = cookie.substring(1, cookie.length);
                }
                if (cookie.indexOf(nameEQ) == 0) {
                    return cookie.substring(nameEQ.length, cookie.length);
                }
            }
            return null;
        }

        // Subscribe the user and set the subscribed cookie
        function subscribeUser() {
            // Perform subscription logic here

            // Set the subscribed cookie
            setCookie('subscribed', 'true', 365);
        }

        // Show or hide the popup based on the subscription status
        function togglePopup() {
            var popup = document.querySelector('.popup-onload');
            if (shouldShowPopup()) {
                popup.style.display = 'flex';
            } else {
                popup.style.display = 'none';
            }
        }

        // Attach event listeners
        window.addEventListener('DOMContentLoaded', togglePopup);
        document.getElementById('popup-box-dismiss').addEventListener('click', subscribeUser);
    </script>

    <script>
        $(document).ready(function() {
            $('.ajax-form').submit(function(event) {
                event.preventDefault(); // Prevent the default form submission

                // Perform AJAX form submission
                $.ajax({
                    url: $(this).attr('action'),
                    type: $(this).attr('method'),
                    data: $(this).serialize(),
                    success: function(response) {
                        // Handle the successful form submission here
                        // You can display a success message or perform any other actions

                        // Close the popup
                        $('.popup-onload').hide();
                        $('#overlay').hide();
                    },
                    error: function(error) {
                        // Handle the form submission error here
                        // You can display an error message or perform any other actions
                    }
                });
            });

            // Close the popup when the "Close" link is clicked
            $('.close').click(function(event) {
                event.preventDefault();
                $('.popup-onload').hide();
                $('#overlay').hide();
            });
        });
    </script>

    <!-- Dynamic slider -->
    <section id="home" class="shock-section dynamic-slider scheme-1" data-autoplay="10000">

        {{-- Slide Index --}}
        <div id="slide-index" class="slide-index">
            <span class="slide-index-current">
                <span class="slide-index-inner"></span>
            </span>
            <span class="slide-index-total"></span>
        </div>

        {{-- Navigation --}}
        <nav class="slide-navigation">
            <a href="#home" class="slide-navigation-item-prev">
                <span class="arrow-button prev scheme-1 primary">
                    <span class="arrow">
                        <span class="item"></span>
                        <span class="item"></span>
                    </span>
                    <span class="line"></span>
                    <span class="text">PREV</span>
                </span>
            </a>
            <a href="#home" class="slide-navigation-item-next">
                <span class="arrow-button next scheme-1 primary">
                    <span class="arrow">
                        <span class="item"></span>
                        <span class="item"></span>
                    </span>
                    <span class="line"></span>
                    <span class="text">NEXT</span>
                </span>
            </a>
        </nav>

        {{-- Info Toggle --}}
        <div class="slide-info-menu parent">
            <div id="slide-info-toggle" class="slide-info-toggle">
                <span class="arrow-button cross scheme-2 primary"></span>
            </div>
            <span class="slide-info-menu-close"></span>
        </div>

        @php
            // Merge all articles into one collection
            $allSlides = collect()->merge($cat23)->merge($cat38)->merge($multiCategory)->values();
        @endphp

        {{-- Slides --}}
        @foreach ($allSlides as $article)
            <div class="slide-item side-intro bgblackslider {{ $loop->first ? 'current-slide' : '' }}">

                {{-- Content --}}
                <div class="slide-content">
                    <div class="slide-description">

                        {{-- Title (SEO optimized) --}}
                        <a href="{{ route('article.show', $article->slug) }}">
                            <h2 class="text-2 text-style-7 text-italic white">
                                {{ $article->title }}
                            </h2>
                        </a>

                        {{-- Subtitle --}}
                        @if (!empty($article->subtitle))
                            <p class="subtitledesign gray">
                                {{ $article->subtitle }}
                            </p>
                        @endif

                        {{-- Introduction --}}
                        @if (!empty($article->introduction))
                            <p class="gray line-clamp-3">
                                {{ \Illuminate\Support\Str::limit(strip_tags($article->introduction), 150) }}
                            </p>
                        @endif

                    </div>
                </div>

                {{-- Image --}}
                <div class="slide-image-wrapper">
                    <div class="slide-image-inner">
                        <x-webp-image src="{{ asset('images/article/' . $article->title_image) }}"
                            alt="{{ $article->title }}" class="slide-image bg-color accent"
                            loading="{{ $loop->first ? 'eager' : 'lazy' }}"
                            fetchpriority="{{ $loop->first ? 'high' : 'auto' }}" />
                    </div>
                </div>

                {{-- Sidebar / Info --}}
                <div class="slide-info">
                    @foreach ($sidebarArticles as $side)
                        <a href="{{ route('article.show', $side->slug) }}" class="slide-info-item">
                            <h3 class="slide-info-title">
                                {{ $side->title }}
                                <i class="fas fa-chevron-right icon"></i>
                            </h3>
                            @if ($side->subtitle)
                                <span class="slide-info-detail">
                                    {{ $side->subtitle }}
                                </span>
                            @endif
                        </a>
                    @endforeach
                </div>

                {{-- Expander --}}
                <div class="slide-expander"></div>

            </div>
        @endforeach

    </section>

    <!-- Banner -->
    {{-- ================= HERO SECTION ================= --}}
    <section class="shock-section has-overlay bg-color black">
        <div class="banner orcabannerheight">

            <div class="content-wrapper text-center">
                <div class="basic-intro mb-35">

                    {{-- SEO FIX: Proper heading hierarchy --}}
                    <h1 class="title text-style-5">
                        <span class="text-1 text-outline white-75">Huānyíng </span>
                        <span class="text-2 white">
                            to <mark class="animated-underline primary">ORCA!</mark>
                        </span>
                    </h1>

                    <p class="description maxwd white-50">
                        Delhi NCR-based research institute focused on Chinese politics and policy.
                        We analyze the Communist Party of China’s internal dynamics and global impact.
                    </p>

                </div>
            </div>

            {{-- VIDEO --}}
            <div class="image-wrapper">
                <video class="video vh-75 fit-cover" autoplay muted loop playsinline preload="none">
                    {{-- PERFORMANCE FIX --}}
                    <source src="{{ asset('assets/videos/2.mp4') }}" type="video/mp4">
                </video>
            </div>

            <div class="overlay black-50"></div>
        </div>
    </section>

    {{-- ================= COUNTER ================= --}}
    <section class="shock-section pb-5">
        <div class="container max-w-85">
            <div class="holder p-25 climb shadow rounded bg-color white">
                <div class="row text-center">

                    @php
                        $stats = [
                            [
                                'value' => 1100,
                                'label' => 'Publications',
                                'desc' => 'Op-eds, reports, and research outputs',
                            ],
                            [
                                'value' => 1500,
                                'label' => 'Daily Newsletters',
                                'desc' => 'Insights on China and regional affairs',
                            ],
                            [
                                'value' => 205,
                                'label' => 'Countries Reached',
                                'desc' => 'Global readership across continents',
                            ],
                        ];
                    @endphp

                    @foreach ($stats as $stat)
                        <div class="col-md-4">
                            <div class="counter text-style-5" data-value="{{ $stat['value'] }}" data-symbol="+"></div>

                            <h2 class="title text-style-11 black">{{ $stat['label'] }}</h2>
                            <p class="description text-dark">{{ $stat['desc'] }}</p>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>

    {{-- ================= MAP SECTION ================= --}}
    <section class="shock-section text-center">

        <div class="basic-intro mb-35">
            <h2 class="title text-style-5">
                <mark class="primary">China's Provinces</mark> at a glance
            </h2>

            <p class="description maxwd">
                Explore key facts about each province through our interactive map.
            </p>
        </div>

        {{-- Load map separately --}}
        @include('frontend.map')

    </section>

    {{-- ================= BLOG SECTION ================= --}}
    <section class="shock-section pt-5 pb-5 bg-dark">
        <div class="container">

            <div class="basic-intro mb-35 text-center">
                <h2 class="title text-style-5 text-white">
                    Latest Publications
                </h2>
            </div>

            <div class="swiper slider has-gap has-navigation has-pagination">

                <div class="swiper-wrapper">

                    @foreach ($latestPublications as $article)
                        <div class="swiper-slide">

                            <article class="card has-full-image vh-65 small-shadow">

                                {{-- IMAGE --}}
                                <div class="image-wrapper">
                                    <x-webp-image src="{{ asset('images/article/' . $article->title_image) }}"
                                        alt="{{ $article->title }}" class="image" loading="lazy" />
                                </div>

                                {{-- CONTENT --}}
                                <div class="card-body">

                                    <span class="badge primary-50">
                                        {{ $article->category->category ?? 'News' }}
                                    </span>

                                    <h3 class="title text-style-9 white">
                                        <a href="{{ route('article.show', $article->slug) }}">
                                            {{ $article->title }}
                                        </a>
                                    </h3>

                                    <div class="tag-cloud">
                                        <span>{{ $article->author->name ?? 'Admin' }}</span>
                                        <span>{{ $article->created_at->format('M d, Y') }}</span>
                                    </div>

                                </div>

                                <div class="overlay black"></div>

                            </article>

                        </div>
                    @endforeach

                </div>

                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-pagination"></div>

            </div>
        </div>
    </section>

    {{-- ================= CTA SECTION ================= --}}
    <section class="shock-section pt-4 pb-4">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-md-6">
                    <x-webp-image src="{{ asset('/images/AdobeStock_165506040.jpg') }}" alt="Write for ORCA"
                        class="image shadow" loading="lazy" />
                </div>

                <div class="col-md-6">

                    <h2 class="title text-style-5">
                        Write for <span class="primary">ORCA</span>
                    </h2>

                    <p class="description gray">
                        Contribute your research and insights on China and Asia.
                    </p>

                    <a href="{{ url('pages/submission') }}" class="button double-edge transparent black-hover">

                        <span>Get Started</span>

                    </a>

                </div>

            </div>
        </div>
    </section>

    <!-- Scroll to Top -->
    <div class="side-widget to-right invert-color mix-blend-difference">
        <div class="item align-v-bottom">
            <a href="#" class="link hover-up">
                <span class="widget float-icon">
                    <i class="fa-solid fa-arrow-up-long icon"></i>
                </span>
            </a>
        </div>
    </div>

    <!--- map mpdals open --->

    @include('frontend.mapmodals')

    <!-- map modals close -->

@endsection
