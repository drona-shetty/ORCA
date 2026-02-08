@extends('web')
@section('title', 'ORCA | Organisation for Research on China and Asia')
@section('meta_keywords', 'ORCA')
@section('meta_description', 'ORCA')

@section('content')

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
        <script src="jquery.hoverplay.js"></script>
    </head>
    <style>
        #video-wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .hover-video {
            width: 100%;
            height: 100%;
            min-height: 600px;
            border-radius: 1.5rem;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }

        .txtfont2 {
            font-size: 2.2rem;
        }

        .podcastbg {
            background-size: cover;
        }

        .publicationbody {
            background-color: #f7f7ea !important;
        }

        .shock-header .navbar .navbar-nav .nav-link {
            color: black !important;
        }
    </style>

    <!-- Banner -->
    <section class="pt-6 shock-section has-holder pb-2">
        <div class="container max-w-75">
            <!-- Intro -->
            <div class="basic-intro text-center">
                <h1 class="title black">
                    <span class="text-1 d-block text-style-2"> <i style="color:black;" class="fa-solid fa-headphones icon"></i>
                        The ORCA Files</span>

                </h1>
                <div class="description gray">
                    <p>Our Podcast The ORCA Files holds conversations with our Community of Scholars for a greater
                        understanding of all things China.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Orcafiles -->
    <?php $count = 1; ?>
    @foreach ($orcafiles as $orcafile)
        <section class="shock-section mt-4">
            <div class="overflow-hiddenn">
                <div class="row g-0">
                    @if ($count % 2 != 0)
                        <div class="col-12 col-md-6 align-v-center order-2 order-md-1">
                            <div class="holder p-5">
                                <!-- Intro -->
                                <div class="basic-intro mb-2">
                                    <h2 class="title text-style-5">
                                        <span class="text-1 h6 d-block gray-75" data-lax="inertia-top">
                                            <?= date_format(date_create($orcafile->created_at), 'M d, Y') ?>
                                        </span>
                                        <span class="text-2 txtfont2 d-block black">
                                            {{ $orcafile->title }}
                                        </span>
                                    </h2>
                                    <div class="description gray">
                                        <p>{!! $orcafile->description !!}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 order-1 order-md-2">
                            <!-- Image -->
                            <div class="image-wrapper">
                                <iframe style="border-radius:12px" src="{{ $orcafile->embed_code }}" width="100%"
                                    height="352" frameBorder="0" allowfullscreen=""
                                    allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
                                    loading="lazy"></iframe>

                            </div>
                        </div>
                    @else
                        <div class="col-12 col-md-6">
                            @if ($count == 2)
                                <div class="circular-text d-only-desktop">
                                    <div class="emblem to-top-right gray">O R C A • F I L E S •</div>
                                </div>
                            @endif
                            <!-- Image -->
                            <div class="image-wrapper">
                                <iframe style="border-radius:12px" src="{{ $orcafile->embed_code }}" width="100%"
                                    height="352" frameBorder="0" allowfullscreen=""
                                    allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
                                    loading="lazy"></iframe>

                            </div>
                        </div>
                        <div class="col-12 col-md-6 align-v-center">
                            <div class="holder p-5">
                                <!-- Intro -->
                                <div class="basic-intro mb-2">
                                    <h2 class="title text-style-5">
                                        <span class="text-1 h6 d-block gray-75" data-lax="inertia-top">
                                            <?= date_format(date_create($orcafile->created_at), 'M d, Y') ?>
                                        </span>
                                        <span class="text-2 txtfont2 d-block black">
                                            {{ $orcafile->title }}
                                        </span>
                                    </h2>
                                    <div class="description gray">
                                        <p>{!! $orcafile->description !!}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </section>
        <?php $count++; ?>
    @endforeach

    <!-- Vertical Lines -->
    <div class="vertical-lines scheme-1 primary">
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

    </main>

@endsection
