@extends('web')
@section('title', 'ORCA | Organisation for Research on China and Asia')
@section('meta_keywords',
    'ORCA, Organisation for Research on China and Asia, China, research on china, orca india,
    orcasia, #china')
@section('meta_description',
    'With assessments based on real-time, ground level chatter in/on/from #China, ORCA seeks to
    add new levels of research insight to how China perceives the world.')

@section('content')

    <script src="https://code.jquery.com/jquery-1.8.2.js"></script>

    <meta property="og:image" name="thumbnail" content="http://orcasia.org/images/orcadesign.png" />

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@ORCA_India">
    <meta name="twitter:creator" content="@ORCA_India">
    <meta name="twitter:title" content="ORCA | Organisation for Research on China & Asia">
    <meta name="twitter:description"
        content="With assessments based on real-time, ground level chatter in/on/from #China, ORCA seeks to add new levels of research insight to how China perceives the world.">
    <meta name="twitter:image" content="{{ URL::asset('/images/orcadesign.png') }}">
    <meta name="twitter:card" content="summary_large_image">
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
                            <p class="white"><a href="https://orcasia.org/allfiles/ORCA's%20GCNS%202025%20Conference%20Report.pdf"
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

    <script src="https://code.jquery.com/jquery-1.8.2.js"></script>
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

        <!-- Index -->
        <div id="slide-index" class="slide-index">
            <span class="slide-index-current">
                <span class="slide-index-inner"></span>
            </span>
            <span class="slide-index-total"></span>
        </div>
        <!-- Navigation -->
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
        <!-- Info toggle -->
        <div class="slide-info-menu parent">
            <div id="slide-info-toggle" class="slide-info-toggle">
                <span class="arrow-button cross scheme-2 primary">

                </span>
            </div>
            <span class="slide-info-menu-close"></span>
        </div>
        <?php $latest_articles = App\Models\Article::select('id', 'author_id', 'category', 'read_time', 'title', 'slug', 'subtitle', 'title_image', 'created_at', 'introduction')
            ->whereIn('category', ['23'])
            ->where('status', 'approved')
            ->orderBy('created_at', 'desc')
            ->take(3)
            ->get();
        ?>
        @foreach ($latest_articles as $article)
            <?php $category = App\Models\Category::where('id', $article->category)->first();
            $author_id = unserialize($article->author_id);
            $author = App\Models\User::where('id', $author_id)->first();
            ?>
            <!-- Slide 2 -->
            <div class="slide-item side-intro bgblackslider {{ $loop->first ? 'current-slide' : '' }}">
                <!-- Intro -->
                <div class="slide-content">

                    <div class="slide-description">
                        <a href="{{ url('article/' . $article->id) }}/{{ $article->slug }}"> <span
                                class="text-2 text-style-7 text-italic white">{{ $article->title }}</span></a>
                        <div class="description gray">
                            <p class="subtitledesign">{{ $article->subtitle }}</p>
                        </div>
                        <div class="description gray line-clamp-3">

                            <p>{{ $article->introduction }}</p>
                        </div>
                    </div>
                    <span class="slide-title text-1 text-style-1 black">&nbsp;</span>
                </div>
                <!-- Image -->

                <!-- Image -->
                <div class="slide-image-wrapper">
                    <div class="slide-image-inner">
                        <x-webp-image src="{{ URL::asset('images/article/' . $article->title_image) }}" alt="Image name"
                            class="slide-image bg-color accent" />
                    </div>
                </div>
                <!-- Action -->
                <div class="slide-action">
                    <div class="slide-action-inner">

                    </div>
                </div>

                <?php
                $latest_articles = App\Models\Article::select('id', 'author_id', 'category', 'read_time', 'title', 'slug', 'subtitle', 'title_image', 'created_at', 'introduction')
                    ->whereIn('category', ['20'])
                    ->where('status', 'approved')
                    ->orderBy('created_at', 'desc')
                
                    ->get();
                ?>

                <!-- Info menu -->
                <div class="slide-info">
                    <?php $articles = $latest_articles->take(5); ?>
                    <?php $count = 0; ?>

                    <?php if ($count < $articles->count()): ?>
                    <?php $article = $articles->get($count); ?>
                    <a href="{{ url('article/' . $article->id) }}/{{ $article->slug }}" class="slide-info-item">
                        <h3 class="slide-info-title">{{ $article->title }} <i class="fas fa-chevron-right icon"></i></h3>
                        <span class="slide-info-detail">{{ $article->subtitle }}</span>
                    </a>
                    <?php $count++; ?>
                    <?php endif; ?>

                </div>
                <!-- Expander -->
                <div class="slide-expander"></div>

            </div>
        @endforeach

        <?php $latest_articles = App\Models\Article::select('id', 'author_id', 'category', 'read_time', 'title', 'slug', 'subtitle', 'title_image', 'created_at', 'introduction')
            ->whereIn('category', ['38'])
            ->where('status', 'approved')
            ->orderBy('created_at', 'desc')
            ->take(2)
            ->get();
        ?>
        @foreach ($latest_articles as $article)
            <?php $category = App\Models\Category::where('id', $article->category)->first();
            $author_id = unserialize($article->author_id);
            $author = App\Models\User::where('id', $author_id)->first();
            ?>
            <!-- Slide 1 -->
            <div class="slide-item side-intro bgblackslider">
                <!-- Intro -->
                <div class="slide-content">
                    <div class="slide-description">
                        <a href="{{ url('article/' . $article->id) }}/{{ $article->slug }}"><span
                                class="text-2 text-style-7 text-italic white">{{ $article->title }}</span></a>

                    </div>
                    <span class="slide-title text-1 text-style-1 black">&nbsp;</span>

                </div>
                <!-- Image -->
                <div class="slide-image-wrapper">
                    <div class="slide-image-inner">
                        <x-webp-image src="{{ URL::asset('images/article/' . $article->title_image) }}" alt="Image name"
                            class="slide-image bg-color accent" />
                    </div>
                </div>
                <!-- Action -->
                <div class="slide-action">
                    <div class="slide-action-inner">

                    </div>
                </div>

                <?php
                $latest_articles = App\Models\Article::select('id', 'author_id', 'category', 'read_time', 'title', 'slug', 'subtitle', 'title_image', 'created_at', 'introduction')
                    ->whereIn('category', ['20'])
                    ->where('status', 'approved')
                    ->orderBy('created_at', 'desc')
                
                    ->get();
                ?>

                <!-- Info menu -->
                <div class="slide-info">
                    <?php $articles = $latest_articles->take(5); ?>
                    <?php $count = 0; ?>

                    <?php if ($count < $articles->count()): ?>
                    <?php $article = $articles->get($count); ?>
                    <a href="{{ url('article/' . $article->id) }}/{{ $article->slug }}" class="slide-info-item">
                        <h3 class="slide-info-title">{{ $article->title }} <i class="fas fa-chevron-right icon"></i></h3>
                        <span class="slide-info-detail">{{ $article->subtitle }}</span>
                    </a>
                    <?php $count++; ?>
                    <?php endif; ?>

                </div>
                <!-- Expander -->
                <div class="slide-expander"></div>

            </div>
        @endforeach

        <?php
        $categories = [18, 22, 21, 36, 27, 26, 35];
        $latest_articles = collect();
        
        foreach ($categories as $catId) {
            $article = App\Models\Article::select('id', 'author_id', 'category', 'read_time', 'title', 'slug', 'subtitle', 'title_image', 'created_at', 'introduction')->where('category', $catId)->where('status', 'approved')->orderBy('created_at', 'desc')->first();
        
            if ($article) {
                $latest_articles->push($article);
            }
        }
        ?>
        @foreach ($latest_articles as $article)
            <?php $category = App\Models\Category::where('id', $article->category)->first();
            $author_id = unserialize($article->author_id);
            $author = App\Models\User::where('id', $author_id)->first();
            ?>
            <!-- Slide 2 -->
            <div class="slide-item side-intro bgblackslider">
                <!-- Intro -->
                <div class="slide-content">

                    <div class="slide-description">
                        <a href="{{ url('article/' . $article->id) }}/{{ $article->slug }}"> <span
                                class="text-2 text-style-7 text-italic white">{{ $article->title }}</span></a>
                        <div class="description gray">
                            <p class="subtitledesign">{{ $article->subtitle }}</p>
                        </div>
                        <div class="description gray line-clamp-3">

                            <p>{{ $article->introduction }}</p>
                        </div>
                    </div>
                    <span class="slide-title text-1 text-style-1 black">&nbsp;</span>
                </div>
                <!-- Image -->

                <!-- Image -->
                <div class="slide-image-wrapper">
                    <div class="slide-image-inner">
                        <x-webp-image src="{{ URL::asset('images/article/' . $article->title_image) }}" alt="Image name"
                            class="slide-image bg-color accent" />
                    </div>
                </div>
                <!-- Action -->
                <div class="slide-action">
                    <div class="slide-action-inner">

                    </div>
                </div>

                <?php
                $latest_articles = App\Models\Article::select('id', 'author_id', 'category', 'read_time', 'title', 'slug', 'subtitle', 'title_image', 'created_at', 'introduction')
                    ->whereIn('category', ['20'])
                    ->where('status', 'approved')
                    ->orderBy('created_at', 'desc')
                
                    ->get();
                ?>

                <!-- Info menu -->
                <div class="slide-info">
                    <?php $articles = $latest_articles->take(5); ?>
                    <?php $count = 0; ?>

                    <?php if ($count < $articles->count()): ?>
                    <?php $article = $articles->get($count); ?>
                    <a href="{{ url('article/' . $article->id) }}/{{ $article->slug }}" class="slide-info-item">
                        <h3 class="slide-info-title">{{ $article->title }} <i class="fas fa-chevron-right icon"></i></h3>
                        <span class="slide-info-detail">{{ $article->subtitle }}</span>
                    </a>
                    <?php $count++; ?>
                    <?php endif; ?>

                </div>
                <!-- Expander -->
                <div class="slide-expander"></div>

            </div>
        @endforeach

    </section>

    <!-- Banner -->
    <section class="shock-section has-overlay bg-color black">
        <div class="banner orcabannerheight">
            <div class="content-wrapper text-center">
                <!-- Intro -->
                <div class="basic-intro mb-35">
                    <h2 class="title text-style-5">
                        <span class="text-1 text-outline white-75">Huānyíng </span>
                        <span class="text-2 white">to <mark class="animated-underline primary">ORCA!</mark></span>
                    </h2>
                    <div class="description maxwd white-50">
                        <p>We are a Delhi NCR based research institute focusing on domestic Chinese politics/policy!<br>Our
                            work studies the Communist Party of China's internal maneuvering and how that impacts China's
                            external posturing.
                        </p>
                    </div>
                </div>
                <!-- Button
                                  <div class="gallery">
                                    <a href="https://vimeo.com/222990241" class="button outline lightbox-link white tertiary-hover magnetic-effect">
                                      <span class="button-text white white-hover">Know More</span>
                                      <i class="fa-solid fa-arrow-right button-icon white white-hover"></i>
                                    </a>
                                  </div> -->
            </div>
            <!-- Video -->
            <div class="image-wrapper">
                <video class="video vh-75 fit-cover" playsinline="playsinline" autoplay="autoplay" muted="muted"
                    loop="loop">
                    <source src="assets/videos/2.mp4" type="video/mp4">
                </video>
            </div>
            <!-- Overlay -->
            <div class="overlay black-50"></div>
        </div>
    </section>
    <!-- Counter -->
    <section class="shock-section pb-5" data-lax="inertia-top">
        <div class="container max-w-85">
            <div class="holder p-25 climb shadow rounded bg-color white">
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-4">
                        <!-- Counter -->
                        <div class="animated-counter">
                            <div class="item text-center">
                                <div class="counter text-style-5" data-value="1100" data-symbol="+" data-duration="2500"
                                    data-text-bg-color="transparent" data-text-color="var(--primary-color)"></div>
                                <h3 class="title text-style-11 black">Publications</h3>
                                <p style="color:#000;" class="description">Ranging from op-eds to issue briefs, special
                                    reports and more by our Community of senior and junior Scholars
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4">
                        <!-- Counter -->
                        <div class="animated-counter">
                            <div class="item text-center">
                                <div class="counter text-style-5" data-value="1500" data-symbol="+" data-duration="2500"
                                    data-text-bg-color="transparent" data-text-color="var(--primary-color)"></div>
                                <h3 class="title text-style-11 black">Daily CiCM Newsletters</h3>
                                <p style="color:#000;" class="description">Subscribers every evening receive crisp
                                    insights divided into sections: China’s social media, regional news and an India Watch
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4">
                        <!-- Counter -->
                        <div class="animated-counter">
                            <div class="item text-center">
                                <div class="counter text-style-5" data-value="205" data-symbol="" data-duration="2500"
                                    data-text-bg-color="transparent" data-text-color="var(--primary-color)"></div>
                                <h3 class="title text-style-11 black">Countries Reached</h3>
                                <p style="color:#000;" class="description">Within an year of inception, ORCA began being
                                    accessed and read across continents with consistent readership that has only grown over
                                    time</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Scrolling text -->
    <section class="shock-section">

        <div class="content-wrapper text-center">
            <!-- Intro -->
            <div class="basic-intro mb-35">
                <h2 class="title text-style-5">
                    <span class="text-2 black"><mark class="animated-underline primary">China's Provinces </mark></span>
                    <span class="text-2 black">at a glance</span>

                </h2>
                <div class="description maxwd">
                    <p>Made with the intention of furthering our audience's knowledge, our interactive map will tell you
                        some interesting facts about each province in China.
                    </p>
                </div>
            </div>

        </div>

        <style>
            *:focus {
                outline: none !important;
            }

            html {
                scroll-behavior: smooth;
            }

            svg {
                max-width: 75%;
                display: block;
                margin: 0 auto;
            }

            .state {
                fill: #B7B7B7 !important;
            }

            .state:hover {
                fill: #CC0033 !important;
                cursor: pointer;
            }

            path {
                transition: fill .25s ease-in-out;
            }

            .modal {
                text-align: center;
            }

            .btn {
                background-color: #CC0033;
                color: white;
            }

            .btn:hover {
                background-color: black;
                color: white !important;
            }

            .hq {
                color: #CC0033;
            }

            .zoomer {
                position: relative;
                fill: #e74646 !important;
            }

            .zoomer:hover {
                z-index: 99999999;
                fill: #393939 !important;
            }

            .zoomerautonomus {
                position: relative;
                fill: #e86e6e !important;
            }

            .zoomerautonomus:hover {
                z-index: 99999999;
                fill: #6f6f6f !important;
            }

            .zoomermunicipal {
                position: relative;
                fill: #762b2b !important;
            }

            .zoomermunicipal:hover {
                z-index: 99999999;
                fill: #000000 !important;
            }

            .card.boxed .image-wrapper {
                width: 100% !important;
            }

            .label-vertical.outline {
                bottom: 50% !important;
                right: -15% !important;
            }

            .label-vertical {
                transform: rotate(270deg) !important;
            }

            .card.boxed .box {
                left: 37%;
            }

            .label-vertical.outline {
                -webkit-text-fill-color: white;
            }

            .cls-1 {
                fill: #e86e6e !important;
            }

            .cls-2 {
                fill: #e74646 !important;
            }

            .cls-3 {
                fill: #762b2b !important;
            }

            .cls-4 {
                font-size: 36px;
            }

            .cls-5 {
                fill: none;
                stroke: #fff;
                stroke-linecap: square;
                stroke-linejoin: bevel;
                stroke-width: 4.61px;
            }

            .cls-6 {
                fill: #f7f7ea;
                fill-rule: evenodd;
            }

            .card.boxed .box {
                left: 37% !important;
            }

            @media (max-width: 991px) {
                .card.boxed .box {
                    left: 10% !important;
                    bottom: -21rem;
                }

                .label-vertical.outline {
                    display: none;
                }
            }

            @media (max-width: 375px) {
                .card.boxed .box {
                    left: 10% !important;
                }
            }
        </style>

        <!--- map content -->

        @include('frontend.map')

        <!-- map content ends -->
    </section>

    <!-- Blog -->
    <section class="shock-section pt-5 pb-5" data-bg-color="#16161b">
        <div class="container">
            <!-- Intro -->
            <div class="basic-intro mb-35 text-center">
                <h2 class="title text-style-5">
                    <span class="text-1 primary scheme-2">Latest Publications</span>
                </h2>
                <!-- <div class="description text-style-12 gray">
                                    <p>Over many years of work, we have built a very successful history in our area of expertise.</p>
                                  </div> -->
            </div>
            <!-- Posts -->
            <div class="swiper slider has-gap has-navigation has-pagination scheme-2 tertiary" data-columns="3,2,1,1">
                <div class="swiper-wrapper">
                    <?php
                    $categories = [18, 21, 22, 23];
                    $latest_articles = collect();
                    
                    foreach ($categories as $catId) {
                        $article = App\Models\Article::select('id', 'author_id', 'category', 'read_time', 'title', 'slug', 'subtitle', 'title_image', 'created_at', 'introduction')->where('category', $catId)->where('status', 'approved')->orderBy('created_at', 'desc')->first();
                    
                        if ($article) {
                            $latest_articles->push($article);
                        }
                    }
                    ?>

                    @foreach ($latest_articles as $article)
                        <?php $category = App\Models\Category::where('id', $article->category)->first();
                        $author_id = unserialize($article->author_id);
                        $author = App\Models\User::where('id', $author_id)->first();
                        ?>
                        <div class="swiper-slide">
                            <div class="card has-full-image vh-65 small-shadow parent">

                                <!-- Image -->
                                <div class="image-wrapper hover-up-down">
                                    <x-webp-image src="{{ URL::asset('images/article/' . $article->title_image) }}"
                                        alt="Image name" class="image" />
                                </div>
                                <div class="card-body align-v-bottom">
                                    <div class="holder">

                                        <span class="badge primary-50 primary-hover">
                                            <span class="badge-text white white-hover">{{ $category->category }}</span>
                                        </span>

                                        <h3 class="title text-style-9 white">{{ $article->title }}</h3>
                                        <hr class="gray-25">
                                        <!-- Tag cloud -->
                                        <div class="tag-cloud">
                                            <a href="#your-link" class="link">
                                                <span class="badge outline gray-50 secondary-hover">
                                                    <span class="badge-text gray white-hover">{{ $author->name }}</span>
                                                </span>
                                            </a>
                                            <a href="#your-link" class="link">
                                                <span class="badge outline gray-50 secondary-hover">
                                                    <span
                                                        class="badge-text gray white-hover"><?= date_format(date_create($article->created_at), 'F j, Y') ?></span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Overlay -->
                                <div class="overlay black"></div>
                                <!-- Link -->
                                <a href="{{ url('article/' . $article->id) }}/{{ $article->slug }}"
                                    class="full-link"></a>
                            </div>
                        </div>
                    @endforeach

                </div>
                <div class="swiper-button-prev rounded-circle"></div>
                <div class="swiper-button-next rounded-circle"></div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>

    <!--  Banner -->
    <section class="shock-section pt-2 pb-4 has-holder">
        <div class="container">
            <div class="row g-4">
                <div class="col-12 col-md-6 align-v-center">
                    <!-- Image -->
                    <div class="gallery image-mirror align-h-left">
                        <div class="image-wrapper">
                            <x-webp-image src="{{ URL::asset('/images/AdobeStock_165506040.jpg') }}" alt="Image name"
                                class="image shadow" />
                        </div>

                    </div>
                </div>
                <div class="col-12 col-md-6 align-v-center">
                    <!-- Intro -->
                    <div class="side-intro">
                        <h1 class="title text-style-1 text-offset">
                            <span class="text-1 filled black">Write for</span>
                            <span class="text-1 outline black" data-lax="inertia-top">Write for</span>
                        </h1>
                        <h2 class="title text-style-5">
                            <span class="text-1 primary text-outline text-italic scheme-2"><span
                                    class="typed-text"></span></span>
                        </h2>

                        <!-- Srings -->
                        <div id="typed-strings">
                            <span>ORCA !</span>
                            <span>ORCA !</span>

                        </div>
                        <div class="description gray">
                            <p>Join us in advancing knowledge and fostering meaningful discussions on China and Asia!
                                Check out ORCA's submission guidelines and send us your work.</p>
                        </div>
                        <!-- Button -->
                        <a href="{{ url('pages/submission') }}" class="button double-edge transparent black-hover">
                            <span class="button-text black white-hover">Get Started</span>
                            <i class="fa-solid fa-arrow-right button-icon black white-hover"></i>
                            <span class="overlay gray-50 magnetic-effect"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    </main>

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
