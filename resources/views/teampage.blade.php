@extends('web')
@section('title', 'ORCA | Organisation for Research on China and Asia')
@section('meta_keywords', 'ORCA')
@section('meta_description', 'ORCA')

@section('content')

    <style>
        .shock-header .navbar .navbar-nav .nav-link {
            color: black !important;
        }

        .modal-dialog {
            max-width: 75%;
            margin-right: auto;
            margin-left: auto;
        }
    </style>

    <!-- Portfolio scrolling -->
    <section class="shock-section has-holder pt-5 pb-5">
        <div class="container">
            <!-- Intro -->
            <div class="extended-intro max-w-65">
                <h1 class="title text-style-1 text-offset">
                    <span class="text-1 filled primary-50" data-lax="inertia-top">Team ORCA</span>
                    <span class="text-1 outline black">Team ORCA</span>
                </h1>
                <!-- <span class="text-2 text-style-4 fw-400 text-outline text-italic black">Team<mark
                  class="animated-underline primary-50">Members</mark></span> -->
            </div>
            <!-- Portfolio -->
            <div class="gallery stretched has-gap scrolling-grid">
                <div class="bricklayer" data-columns="4">
                    @foreach ($teams as $team)
                        <?php $isIntern = 'cardcontainer';
                        if ($team['sequence_no'] % 2 === 0) {
                            $isIntern = 'cardcontainerred';
                        } ?>
                        <?php $authorSlug = strtolower(str_replace(' ', '-', $team['name'])); ?>
                        <div class="card">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal-{{ $authorSlug }}"
                                class="item hover-zoom">
                                <div class="image-wrapper small-shadow rounded-top">
                                    <img src="{{ URL::asset('images/graph/' . $team->image) }}" class="image"
                                        alt="{{ $team->name }}" />

                                </div>
                            </a>
                            <div class="small-shadow rounded-bottom {{ $isIntern }}">
                                <h4><b>{{ $team->name }}</b></h4>
                                <p class="mgtneg-15">{{ $team->designation }}</p>
                                <div class="mt-social-1">
                                    <a class="link secondary-hover" href="{{ $team->twitter }}"><i
                                            class="icon fab fab fa-twitter"></i></a>
                                    <a class="link secondary-hover" href="{{ $team->linkedin }}"><i
                                            class="icon fab fa-linkedin-in"></i></a>

                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>

    <!-- Vertical Lines -->
    <div class="vertical-lines scheme-1 primary">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-3 align-h-center">
                    <span class="line"></span>
                </div>
                <div class="col-12 col-md-6 col-lg-3 align-h-center">
                    <span class="line"></span>
                </div>
                <div class="col-12 col-md-6 col-lg-3 align-h-center">
                    <span class="line"></span>
                </div>
                <div class="col-12 col-md-6 col-lg-3 align-h-center">
                    <span class="line"></span>
                </div>
            </div>
        </div>
    </div>

    <!-- pop up modal -->
    @foreach ($teams as $team)
        <!-- Modal eerishika -->
        <?php $authorSlug = strtolower(str_replace(' ', '-', $team['name'])); ?>
        <div id="modal-{{ $authorSlug }}" class="modalbg modal fade" tabindex="-1" aria-hidden="true">

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
                                                <span class="text-1 text-style-5">{{ $team->name }}</span>
                                                <!-- <span class="text-2 text-style-6">Pankaj</span> -->
                                            </h2>
                                            <p>{{ $team->designation }}</p>
                                            <a class="link gray primary-hover" href="{{ $team->twitter }}"><i
                                                    class="icon fa-2x fab fab fa-twitter"></i></a>
                                            <a class="link gray primary-hover" href="{{ $team->linkedin }}"><i
                                                    class="icon fa-2x fab fa-linkedin-in"></i></a>
                                            <div class="description gray">
                                                <p>{{ $team->content }}</p>
                                            </div>
                                        </div>
                                        <div class="mt-social-1 mt-1">

                                            <a href="{{ $team->instagram }}"
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
                                            src="{{ URL::asset('images/graph/' . $team->image) }}" class="image"
                                            alt="Image name" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                </div>
            </div>

        </div>
    @endforeach
    <!--pop up modal close-->
@endsection
