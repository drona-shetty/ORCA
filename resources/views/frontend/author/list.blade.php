@extends('web')
@section('title', 'ORCA | Organisation for Research on China and Asia')
@section('meta_keywords', 'ORCA')
@section('meta_description', 'ORCA')

@section('content')
    <style>
        #load-more {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: auto;
            margin-top: 40px;
        }
    </style>
    <!-- Banner -->
    <section class="shock-section has-overlay focus-trigger">
        <div class="banner">
            <div class="content-wrapper">
                <!-- Intro -->
                <div class="basic-intro mb-35 text-center">
                    <h1 class="title">
                        <span class="text-1 d-block text-style-1 white">ORCA’S</span>
                        <span class="text-2 d-block text-style-3 text-outline text-italic white-75">Community of
                            Scholars</span>
                    </h1>
                </div>
            </div>
            <!-- Image -->
            <div class="image-wrapper">
                <img src="{{ URL::asset('images/jpg/AdobeStock_215045010.jpeg') }}" class="image vh-85 fit-cover"
                    alt="AdobeStock_215045010.jpeg" />
            </div>
            <!-- Overlay -->
            <div class="overlay black-50"></div>
        </div>
    </section>

    <!-- Card boxed -->
    <section class="shock-section pt-4 pb-4">
        <div class="container">
            <!-- Intro -->
            <div class="row g-4" id="items-container">
                @include('frontend.author.partial')
            </div>
            <input type="hidden" id="page" value="1">
            <button class="button double-edge transparent black-hover" id="load-more">
                <span class="button-text black white-hover">Load More</span>
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
                    $('#load-more').text('Load More');
                }
            });
        });
    </script>
@endsection
