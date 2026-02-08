@extends('web')
@section('title', $category->category . ' | Organisation for Research on China and Asia')
@section('meta_keywords', 'ORCA')
@section('meta_description', 'ORCA')

@section('content')
    <script src="https://code.jquery.com/jquery-1.8.2.js"></script>
    <style>
        .shock-header .navbar .navbar-nav .nav-link {
            color: black !important;
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
            overflow-y: scroll !important;
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
                            <p class="graycolor">Subscribe to our newsletter and follow our content closely.<br>Receive news
                                based on what has to do with you.</p>
                            <p>

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
                            <!-- <div class="form-row row">
                                           <div class="form-col col-12">
                                              <div class="form-check">
                                                 <input type="checkbox" name="terms" id="InputCheckbox" class="form-check-input" required="required">
                                                 <label class="form-label form-check-label" for="InputCheckbox">
                                                 I agree to the <a href="#" class="link white primary-hover"><u>terms of use</u>.</a>
                                                 </label>
                                                 <div class="invalid-feedback">Please accept the terms to continue.</div>
                                              </div>
                                           </div>
                                        </div> -->
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

                            <!--
                                           <span class="form-alert success">Your have subscribed successfully. Thanks.</span>
                                           <span class="form-alert error">Your have subscribed successfully. Thanks.</span>
                                           -->
                        </form>

                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Featured -->
    <section class="shock-section has-holder pb-4 pt-2 gray-10">
        <div class="container">
            <!-- Posts -->
            <div class="row g-0">
                <div class="col-12 col-md-12">
                    <!-- Intro -->
                    <div class="basic-intro text-center mb-35">
                        <h2 class="title black">
                            <span class="text-1 text-style-5">{{ $category['category'] }}</span>
                        </h2>
                        <div class="description gray">
                            <p>{{ $category['title'] }}</p>
                            <p>CiCM Editorial Team: <span>
                                    <?php $i = 1; ?>
                                    @foreach ($users->sortBy('name') as $user)
                                        <?php $author_meta = App\Models\UserMeta::where('user_id', $user->id)->first(); ?>
                                        <a href="{{ url('author/' . $author_meta->slug) }}">
                                            {{ $user->name }}
                                        </a>
                                        @if ($i < 5)
                                            ,
                                        @endif
                                        <?php $i++; ?>
                                    @endforeach
                                </span>
                            </p>
                            <p><a href="#archive">Click here</a> to explore our archives</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-12">
                    <div class="card has-full-image is-featured-left small-shadow rounded parent">

                        <!-- Image -->
                        <div class="image-wrapper hover-up-down">
                            <img src="{{ URL::asset('images/article/' . $articles[0]['title_image']) }}" alt="Image name"
                                class="image" />
                        </div>
                        <!-- Body -->
                        <div class="card-body align-v-bottom">
                            <div class="holder">
                                <a href="{{ url('category/' . $category->slug) }}" class="link">
                                    <span class="badge primary-50 primary-hover">
                                        <span class="badge-text white white-hover">{{ $category['category'] }}</span>
                                    </span>
                                </a>
                                <a href="{{ url('article/' . $articles[0]['id']) }}/{{ $articles[0]['slug'] }}"
                                    class="link">
                                    <h3 class="title text-style-9 white">{{ $articles[0]['title'] }}</h3>
                                </a>
                                <p class="description line-clamp-3">{{ $articles[0]['subtitle'] }}</p>
                                <hr class="gray-25">
                                <!-- Metadata -->
                                <?php
                                $author_id = unserialize($articles[0]['author_id']);
                                $author = App\Models\User::where('id', $author_id)->first();
                                $author_meta = App\Models\UserMeta::where('user_id', $author['id'])->first();
                                ?>
                                <div class="card-metadata">
                                    <div class="item">
                                        <a href="{{ url('author/' . $author_meta['slug']) }}"
                                            class="link gray primary-hover d-flex">
                                            <img style="margin-right: 5px;border-radius:50%;" width="25"
                                                src="{{ asset('images/author/' . $author_meta->avatar) }}"
                                                alt="{{ $author['name'] }}">
                                            {{ $author['name'] }}
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a href="#" class="link gray primary-hover"><i
                                                class="fa-solid fa-calendar-days icon"></i><?= date_format(date_create($articles[0]['created_at']), 'F j, Y') ?></a>
                                    </div>

                                </div>
                            </div>
                            <!-- Overlay -->
                            <div class="overlay black"></div>
                            <!-- Link -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Carousel -->
    <section class="shock-section pt-4 pb-4 gray-10 js-auto-width">
        <div class="container">
            <div class="js-auto-width-wrapper">
                <div class="vertical-tab scheme-1 primary">
                    <!-- Tab navigation -->
                    <ul id="v-tab" class="nav nav-pills" role="tablist" aria-orientation="vertical">
                        <?php $i = 1; ?>
                        @foreach ($monthsYearArticle as $articleKey => $articleValue)
                            <li class="nav-item" role="presentation">
                                <?php $activeClass = date('F Y') == $articleKey ? 'active' : ''; ?>
                                <button id="v-{{ $i }}-tab" class="nav-link cicmTab" aria-selected="true"
                                    aria-controls="v-{{ $i }}" data-bs-target="#v-{{ $i }}"
                                    data-bs-toggle="tab" role="tab">
                                    {{ $articleKey }}
                                </button>
                            </li>
                            <?php $i++; ?>
                        @endforeach
                    </ul>
                    <!-- Tab content -->
                    <div class="tab-content pt-0 overflow-hidden">
                        <?php $i = 1; ?>
                        @foreach ($monthsYearArticle as $articleKey => $articleValue)
                            <?php $activeClass = date('F Y') == $articleKey ? 'active' : ''; ?>
                            <div id="v-{{ $i }}" class="tab-pane fade" role="tabpanel">
                                <!-- Carousel -->
                                <div class="swiper slider stretched-top has-navigation has-pagination stretched-side-on-mobile has-gap has-overflow-right has-drag-text scheme-{{ $i }} primary tertiary"
                                    data-columns="3,2,1,1">
                                    <div class="swiper-wrapper">
                                        @foreach ($articleValue as $article)
                                            <div class="swiper-slide">
                                                <div class="card has-full-image vh-50 small-shadow rounded parent">
                                                    <!-- Image -->
                                                    <div class="image-wrapper hover-up-down">
                                                        <img src="{{ URL::asset('images/article/' . $article->title_image) }}"
                                                            alt="Image name" class="image" />
                                                    </div>
                                                    <!-- Body -->
                                                    <div class="card-body align-v-bottom">
                                                        <div class="holder">
                                                            <a href="{{ url('category/' . $category->slug) }}"
                                                                class="link">
                                                                <span class="badge tertiary-50 tertiary-hover">
                                                                    <span
                                                                        class="badge-text white-75 white-hover">{{ $category->category }}</span>
                                                                </span>
                                                            </a>
                                                            <a
                                                                href="{{ url('article/' . $article->id . '/' . $article->slug) }}">
                                                                <h3 class="title text-style-12 white">
                                                                    {{ $article->title }}</h3>
                                                            </a>
                                                            <p class="description line-clamp-3">{{ $article->subtitle }}
                                                            </p>
                                                            <hr class="gray-25">
                                                            <!-- Metadata -->
                                                            <?php
                                                            $author_id = unserialize($article->author_id);
                                                            $author = App\Models\User::where('id', $author_id)->first();
                                                            $author_meta = App\Models\UserMeta::where('user_id', $author->id)->first(); ?>
                                                            <div class="card-metadata">
                                                                <!-- <div class="item">
                                                  <a href="{{ url('author/' . $author_meta->slug) }}" class="link gray tertiary-hover"><i class="fa-solid fa-user icon"></i>{{ $author->name }}</a>
                                                </div> -->
                                                                <div class="item">
                                                                    <a href="#" class="link gray tertiary-hover"><i
                                                                            class="fa-solid fa-calendar-days icon"></i><?= date_format(date_create($article->created_at), 'F j, Y') ?></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Overlay -->
                                                        <div class="overlay black"></div>
                                                        <!-- Link -->
                                                        <!-- <a href="#your-link" class="full-link"></a> -->
                                                    </div>
                                                </div>

                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-pagination"></div>
                                    <div class="drag-text">
                                        <i class="fa-solid fa-arrow-left icon"></i>
                                        <div class="text">Drag to navigate</div>
                                        <i class="fa-solid fa-arrow-right icon"></i>
                                    </div>
                                </div>
                            </div>
                            <?php $i++; ?>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Faq -->
    <section id="archive" class="shock-section has-holder pt-5 pb-5" style="background:#000;">
        <div class="container max-w-85">
            <!-- Intro -->
            <div class="basic-intro mb-35 text-center">
                <h2 class="title">
                    <span class="text-1 d-block text-style-1 primary">CiCM Archive</span>
                </h2>
                <hr class="gray-25">
            </div>
            <!-- Collapse -->
            <div class="collapsible max-w-100 mx-auto">

                <!-- for May 2023 to July 2021 months -->

                <!-- for May 2023 to July 2021 months -->
                <!-- for May 2023 to July 2021 months -->
                @php
                    $startDate = strtotime('2023-05-31');
                    $endDate = strtotime('2021-07-19');
                    $currentDate = $startDate;
                @endphp

                @while ($currentDate >= $endDate)
                    @php
                        $year = date('Y', $currentDate);
                        $month = date('F', $currentDate);
                        $monthLower = date('M', $currentDate);
                        $daysInMonth = cal_days_in_month(
                            CAL_GREGORIAN,
                            date('m', $currentDate),
                            date('Y', $currentDate),
                        );
                    @endphp

                    <div class="collapse-group">
                        <a href="#collapse-{{ $monthLower . $year }}" class="collapse-toggle parent"
                            aria-expanded="false" aria-controls="collapse-{{ $monthLower . $year }}"
                            data-bs-toggle="collapse">
                            <div class="collapse-button outline primary-25">
                                <span class="arrow-button cross scheme-2 primary">
                                    <span class="arrow">
                                        <span class="item"></span>
                                        <span class="item"></span>
                                    </span>
                                    <span class="line"></span>
                                </span>
                            </div>
                            <h3 class="title text-style-11 white">{{ $month }} {{ $year }}</h3>
                        </a>
                        <hr class="gray-25">
                        <div id="collapse-{{ $monthLower . $year }}" class="collapse-content collapse">
                            <!-- month and year -->
                            <div class="row g-2" data-display="{{ $daysInMonth }}" data-columns="3">
                                <!-- Generated code for each day of the month -->
                                <!-- Loop for generating code for each day -->
                                @php
                                    $currentDay = $daysInMonth;
                                @endphp
                                @while ($currentDay >= 1)
                                    @if ($currentDate > $endDate)
                                        <div class="col-12 col-md-6 col-lg-4">
                                            <div class="card has-full-image vh-25 small-shadow rounded parent">
                                                <!-- Body -->
                                                <div class="card-body align-v-bottom">
                                                    <div class="holder">
                                                        @php
                                                            $day = sprintf('%02d', $currentDay);
                                                            $formattedMonth = sprintf('%02d', date('m', $currentDate));
                                                        @endphp
                                                        <h3 class="mb-0 text-style-9 white">
                                                            {{ $day }}.{{ $formattedMonth }}.{{ $year }}
                                                        </h3>
                                                        <p class="white"></p>
                                                        <!-- Button -->
                                                        <a href="{{ URL::asset('images/cicmpdf/' . $day . '.' . $formattedMonth . '.' . substr($year, -2) . '.pdf') }}"
                                                            class="button mt-1 outline rounded primary primary-hover hover-up">

                                                            <span class="button-text primary white-hover">Download</span>
                                                            <span class="button-duocolor primary white-hover">
                                                                <i
                                                                    class="fa-solid fa-arrow-down button-icon white primary-hover"></i>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <!-- Overlay -->
                                                <div class="overlay secondary-25"></div>
                                            </div>
                                        </div>
                                    @endif
                                    @php
                                        $currentDay--;
                                        $currentDate = strtotime('-1 day', $currentDate);
                                    @endphp
                                @endwhile
                                <!-- End of loop -->
                            </div>
                        </div>
                    </div>
                @endwhile

            </div>
        </div>
    </section>

    </main>

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

    <script>
        $(function() {
            var overlay = $('<div id="overlay"></div>');
            overlay.show();
            overlay.appendTo(document.body);
            $('.popup-onload').show();
            $('.close').click(function() {
                $('.popup-onload').hide();
                overlay.appendTo(document.body).remove();
                return false;
            });




            $('.x').click(function() {
                $('.popup').hide();
                overlay.appendTo(document.body).remove();
                return false;
            });
        });
    </script>

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

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#v-1-tab").addClass("active");
            $("#v-1").addClass("show active");
            $(".nav-link .cicmTab").click(function(e) {
                e.preventDefault();
                $(".tab-pane").removeClass("show active");
                $(".nav-link .cicmTab").removeClass("active");

                var elementId = $(this).attr("data-bs-target");
                $(elementId + "-tab").addClass("active");
                $(elementId).addClass("show active");
            });
        });
    </script>
@endsection
