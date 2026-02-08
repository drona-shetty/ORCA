@extends('web')
@section('title', 'ORCA | Organisation for Research on China and Asia')
@section('meta_keywords', 'ORCA')
@section('meta_description', 'ORCA')
@section('content')
    <!-- Blog -->

    <style>
        .banner {
            position: relative;
            z-index: 1;
        }

        .text-1.outline.white {
            color: white;
            text-align: right !important;
        }

        .text-2 {
            color: white;
        }

        .rtalng {
            text-align: right !important;
        }

        .text-8 {
            color: white;
        }

        .rounded-bottom {
            border-bottom-left-radius: 0.375rem !important;
            border-bottom-right-radius: 0.375rem !important;
        }

        .cardcontainerred {
            background: #ffffff !important;
            margin: 0 !important;
        }

        .black {
            color: black !important;
        }

        .fit-contain {
            object-fit: contain;
        }
    </style>

    <!-- Banner -->
    <section class="shock-section has-overlay bg-image bg-fixed"
        data-bg-image="{{ URL::asset('images/AdobeStock_599518432.jpg') }}">
        <div class="banner vh-100 align-h-center align-v-center">
            <div class="p-3 extended-intro">
                <div class="wrapper">
                    <div class="left-column">
                        <h2 class="title text-style-1 text-offset">
                            <span class="text-1 rtalng filled white">Infographics</span>

                        </h2>

                        <div class="description text-style-12 gray">
                            <p class="filled white text-8">subtitle</p>

                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- Overlay -->
        <div class="overlay" data-bg-color="#192a3d99"></div>
    </section>

    <!-- Banner -->
    <section class="shock-section bg-image bg-fixed" style="color: black;"
        data-bg-image="{{ URL::asset('images/AdobeStock_599518432.jpg') }}">
        <div class="holder vh-75"></div>
    </section>

    <!-- Portfolio -->
    <section style="color: black;" class="shock-section pt-5 pb-2 has-overlay">
        <div class="container" style="text-align:justify;">

        </div>
    </section>

    @foreach ($graphs as $graph)
        <div class="gallery stretched has-gap scrolling-grid">
            <div class="bricklayer" data-columns="4">

                <div class="card">
                    <a href="#" data-bs-toggle="modal"
                        data-bs-target="#modal-@if ($graph->content != null) {{ $graph->content }} @endif"
                        class="item hover-zoom">
                        <div class="image-wrapper small-shadow rounded-top">
                            <img src="{{ URL::asset('images/graph/' . $graph->image) }}" class="image"
                                alt="Eerishika Pankaj" />

                        </div>
                    </a>
                    <div class="small-shadow rounded-bottom cardcontainer">
                        <h4><b>Eerishika Pankaj</b></h4>
                        <p class="mgtneg-15">Head of Research & Operations Director</p>
                        <div class="mt-social-1">
                            <a class="link primary-hover" href="https://twitter.com/eerishika"><i
                                    class="icon fab fab fa-twitter"></i></a>
                            <a class="link primary-hover" href="https://www.linkedin.com/in/eerishika-pankaj-17507914b/"><i
                                    class="icon fab fa-linkedin-in"></i></a>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal eerishika -->
        <div id="modal-@if ($graph->content != null) {{ $graph->content }} @endif" class="modalbg modal fade"
            tabindex="-1" aria-hidden="true">

            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content br-0375">
                    <!-- Image -->
                    <section class="shock-section p-3 bg-color gray-10">
                        <div class="container">
                            <div class="row g-4">
                                <div class="col-12 col-md-7 align-v-center">
                                    <div class="holder">
                                        <!-- Intro -->
                                        <div class="basic-intro">
                                            <h2 class="title black">
                                                <span class="text-1 text-style-5">Eerishika</span>
                                                <span class="text-2 text-style-6">Pankaj</span>
                                            </h2>
                                            <p>Head of Research & Operations Director</p>
                                            <a class="link gray primary-hover" href="https://twitter.com/eerishika"><i
                                                    class="icon fa-2x fab fab fa-twitter"></i></a>
                                            <a class="link gray primary-hover"
                                                href="https://www.linkedin.com/in/eerishika-pankaj-17507914b/"><i
                                                    class="icon fa-2x fab fa-linkedin-in"></i></a>
                                            <div class="description gray">
                                                <p>
                                                    @if ($graph->content != null)
                                                        {{ $graph->content }}
                                                    @endif
                                                </p>
                                            </div>
                                        </div>
                                        <div class="mt-social-1 mt-1">

                                            <a href="{{ URL::asset('images/graph/' . $graph->image) }}"
                                                class="button mt-1 outline rounded primary primary-hover hover-up">

                                                <span class="button-text primary white-hover">View Publications</span>

                                            </a>

                                        </div>

                                    </div>
                                </div>
                                <div class="col-12 col-md-5">
                                    <!-- Image -->
                                    <div class="image-wrapper" data-lax="inertia-top">
                                        <img style="border-radius: 0.375rem;"
                                            src="{{ URL::asset('images/graph/' . $graph->image) }}" class="image"
                                            alt="Image name" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                </div>
            </div>

        </div>
        <!--pop up modal close-->
    @endforeach

@endsection
