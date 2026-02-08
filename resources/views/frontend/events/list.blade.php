@extends('web')
@section('title', 'ORCA | Organisation for Research on China and Asia')
@section('meta_keywords', 'ORCA')
@section('meta_description', 'ORCA')

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
    <!-- Images -->
    <section class="shock-section has-holder pt-4 pb-8">
        <div class="container max-w-85">

            <!-- Intro -->
            <div class="basic-intro text-center mb-5">
                <h1 class="title black">
                    <span class="text-1 text-style-5">Events at </span>
                    <span class="text-2 text-style-6"><mark class="animated-underline primary-25">ORCA</mark></span>
                </h1>
                <p class="description">To view all pictures of GCNS 2024, <a href="https://orcasia.org/pages/gcns"
                        target="_blank" style="color:red;">click
                        here.</a></p>
            </div>
            <!-- Banner -->
            <section class="shock-section mt-2 bg-image bg-fixed" data-bg-image="{{ URL::asset('images/gcnsorca.jpg') }}">
                <div class="banner vh-65 align-h-center align-v-center">
                    <div class="holder">

                    </div>
                </div>
                <!-- Overlay -->
                <div class="overlay gray-25"></div>
            </section>

            <br><br>
            <!-- Gallery -->
            <div class="gallery">
                <div class="row g-2">
                    <div class="col-4" data-aos="fade-up" data-aos-delay="600">
                        <a href="{{ URL::asset('images/png/event.jpg') }}" class="item lightbox-link">
                            <div class="image-wrapper shadow rounded hover-zoom" data-lax="v-bottom">
                                <img src="{{ URL::asset('images/png/events-1.png') }}" alt="Event 1"
                                    class="image fit-cover" />
                                <div class="overlay primary-25"></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-4" data-aos="fade-up" data-aos-delay="900">
                        <a href="{{ URL::asset('images/png/event.jpg') }}" class="item lightbox-link">
                            <div class="image-wrapper shadow rounded hover-zoom" data-lax="v-top">
                                <img src="{{ URL::asset('images/png/events-2.png') }}" alt="Event 2"
                                    class="image fit-cover" />
                                <div class="overlay primary-25"></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-4" data-aos="fade-up" data-aos-delay="1200">
                        <a href="{{ URL::asset('images/png/event.jpg') }}" class="item lightbox-link">
                            <div class="image-wrapper shadow rounded hover-zoom" data-lax="v-bottom">
                                <img src="{{ URL::asset('images/png/events-3.png') }}" alt="Event 3"
                                    class="image fit-cover" />
                                <div class="overlay primary-25"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Banner -->
    <section class="shock-section has-overlay mt-2 bg-image bg-fixed" data-bg-image="{{ URL::asset('images/event.jpeg') }}">
        <div class="banner vh-65 align-h-center align-v-center">
            <div class="holder">
                <div class="gallery">
                    <a href="https://youtu.be/Rwx7_yykb5I" class="item active lightbox-link">
                        <!-- Circular text -->
                        <div class="circular-text large mix-blend-lighter" data-lax="inertia-top">
                            <div class="emblem gray">O R C A•E V E N T S•</div>
                        </div>
                        <i style="color: #e41e25!important;" class="fa-solid fa-circle-play gallery-icon white"></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- Overlay -->
        <div class="overlay gray-25"></div>
    </section>

    <!-- events -->
    <section class="shock-section pt-5 mt-2 pb-5">
        <div class="container">
            <!-- Posts -->
            <div class="row g-2" data-columns="2" id="items-container">
                @include('frontend.events.partial')
            </div>
            <input type="hidden" id="page" value="1">
            <button class="button double-edge transparent black-hover" id="load-more">
                <span class="button-text black white-hover">Load More</span>
                <span class="overlay gray-50 magnetic-effect"></span>
            </button>
        </div>
    </section>
    <!-----timeline exit -->
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
                    $('#load-more').text('Load More');
                }
            });
        });
    </script>
@endsection
