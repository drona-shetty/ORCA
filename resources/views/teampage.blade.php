@extends('web')
@section('title', 'Team ORCA | Organisation for Research on China and Asia')
@section('meta_keywords', 'ORCA team, ORCA researchers, China research experts, ORCASIA team, India China analysts')
@section('meta_description', 'Meet the team behind ORCA (Organisation for Research on China and Asia), a research
    initiative focused on China, Asia, and India-China relations.')

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
                    <span class="text-1 filled primary-50">Team ORCA</span>
                    <span class="text-1 outline black">Team ORCA</span>
                </h1>

                <!-- SEO Text (invisible visually but useful) -->
                <p class="sr-only">
                    ORCA team includes researchers and analysts focused on China, Asia, and India-China relations.
                </p>
            </div>

            <!-- Portfolio -->
            <div class="gallery stretched has-gap scrolling-grid">
                <div class="bricklayer" data-columns="4">

                    @foreach ($teams as $team)
                        <?php
                        $isIntern = $team['sequence_no'] % 2 === 0 ? 'cardcontainerred' : 'cardcontainer';
                        $authorSlug = strtolower(str_replace(' ', '-', $team['name']));
                        ?>

                        <div class="card" itemscope itemtype="https://schema.org/Person">

                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal-{{ $authorSlug }}"
                                class="item hover-zoom">

                                <div class="image-wrapper small-shadow rounded-top">
                                    <x-webp-image src="{{ asset('images/graph/' . $team->image) }}" class="image"
                                        alt="{{ $team->name }} - ORCA Team Member" loading="lazy" />
                                </div>
                            </a>

                            <div class="small-shadow rounded-bottom {{ $isIntern }}">
                                <h4 itemprop="name"><b>{{ $team->name }}</b></h4>
                                <p class="mgtneg-15" itemprop="jobTitle">{{ $team->designation }}</p>

                                <div class="mt-social-1">
                                    @if ($team->twitter)
                                        <a class="link secondary-hover" href="{{ $team->twitter }}" target="_blank"
                                            rel="noopener nofollow">
                                            <i class="icon fab fa-twitter"></i>
                                        </a>
                                    @endif

                                    @if ($team->linkedin)
                                        <a class="link secondary-hover" href="{{ $team->linkedin }}" target="_blank"
                                            rel="noopener nofollow">
                                            <i class="icon fab fa-linkedin-in"></i>
                                        </a>
                                    @endif
                                </div>
                            </div>

                            <!-- Hidden SEO content -->
                            <meta itemprop="description" content="{{ Str::limit(strip_tags($team->content), 160) }}">

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
                <div class="col-12 col-md-6 col-lg-3 align-h-center"><span class="line"></span></div>
                <div class="col-12 col-md-6 col-lg-3 align-h-center"><span class="line"></span></div>
                <div class="col-12 col-md-6 col-lg-3 align-h-center"><span class="line"></span></div>
                <div class="col-12 col-md-6 col-lg-3 align-h-center"><span class="line"></span></div>
            </div>
        </div>
    </div>

    <!-- pop up modal -->
    @foreach ($teams as $team)
        <?php $authorSlug = strtolower(str_replace(' ', '-', $team['name'])); ?>

        <div id="modal-{{ $authorSlug }}" class="modalbg modal fade" tabindex="-1" aria-hidden="true">

            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content br-0375">

                    <section class="shock-section p-3 bg-color gray-10">
                        <div class="container">
                            <div class="row g-4">

                                <div class="col-12 col-md-7 align-v-center">
                                    <div class="holder">
                                        <div class="basic-intro">

                                            <h2 class="title black">{{ $team->name }}</h2>
                                            <p><strong>{{ $team->designation }}</strong></p>

                                            <a class="link gray primary-hover" href="{{ $team->twitter }}" target="_blank"
                                                rel="noopener nofollow">
                                                <i class="icon fa-2x fab fa-twitter"></i>
                                            </a>
                                            <a class="link gray primary-hover" href="{{ $team->linkedin }}" target="_blank"
                                                rel="noopener nofollow">
                                                <i class="icon fa-2x fab fa-linkedin-in"></i>
                                            </a>

                                            <div class="description gray">
                                                <p>{{ $team->content }}</p>
                                            </div>
                                        </div>

                                        <div class="mt-social-1 mt-1">
                                            <a href="{{ $team->instagram }}" target="_blank" rel="noopener"
                                                class="button mt-1 outline rounded primary primary-hover hover-up">
                                                <span class="button-text primary white-hover">View Publications</span>
                                            </a>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-12 col-md-5">
                                    <div class="image-wrapper">
                                        <x-webp-image style="border-radius: 0.375rem;"
                                            src="{{ asset('images/graph/' . $team->image) }}" class="image"
                                            alt="{{ $team->name }} profile photo" loading="lazy" />
                                    </div>
                                </div>

                            </div>
                        </div>
                    </section>

                </div>
            </div>

        </div>
    @endforeach

@endsection
