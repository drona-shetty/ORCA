@extends('web')

@section('title', 'The ORCA Files Podcast | ORCA – Organisation for Research on China and Asia')

@section('meta_keywords', 'ORCA podcast, China research podcast, Asia geopolitics podcast, ORCA Files')

@section('meta_description', 'Listen to The ORCA Files podcast featuring expert discussions on China, geopolitics, and Asia by ORCA.')

@section('content')
    <style>
        #video-wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 60vh; /* reduced from 100vh for better CLS */
        }

        .hover-video {
            width: 100%;
            height: 100%;
            min-height: 400px;
            border-radius: 1.5rem;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }

        .txtfont2 {
            font-size: clamp(1.6rem, 2vw, 2.2rem); /* responsive font */
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
            <div class="basic-intro text-center">
                <h1 class="title black">
                    <span class="text-1 d-block text-style-2">
                        <i class="fa-solid fa-headphones icon" aria-hidden="true"></i>
                        The ORCA Files Podcast
                    </span>
                </h1>

                <div class="description gray">
                    <p>
                        Our Podcast 'The ORCA Files' features nuanced and in-depth conversations with leading scholars,
                        policymakers, and practitioners for a greater understanding of all things China.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- Structured Data for SEO --}}
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "PodcastSeries",
        "name": "The ORCA Files",
        "publisher": {
            "@type": "Organization",
            "name": "ORCA"
        },
        "description": "Podcast featuring expert discussions on China and Asia."
    }
    </script>

    <!-- Orcafiles -->
    @php $count = 1; @endphp

    @foreach ($orcafiles as $orcafile)
        <section class="shock-section mt-4">
            <div class="overflow-hidden">
                <div class="row g-0">

                    @if ($count % 2 != 0)
                        <!-- TEXT -->
                        <div class="col-12 col-md-6 align-v-center order-2 order-md-1">
                            <div class="holder p-4 p-md-5">
                                <div class="basic-intro mb-2">

                                    <h2 class="title text-style-5">
                                        <time datetime="{{ $orcafile->created_at }}">
                                            <span class="text-1 h6 d-block gray-75">
                                                {{ \Carbon\Carbon::parse($orcafile->created_at)->format('M d, Y') }}
                                            </span>
                                        </time>

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

                        <!-- VIDEO -->
                        <div class="col-12 col-md-6 order-1 order-md-2">
                            <div class="image-wrapper">
                                <iframe
                                    src="{{ $orcafile->embed_code }}"
                                    width="100%"
                                    height="352"
                                    loading="lazy"
                                    style="border-radius:12px"
                                    frameborder="0"
                                    allow="autoplay; encrypted-media; picture-in-picture"
                                    allowfullscreen
                                    title="{{ $orcafile->title }}"
                                ></iframe>
                            </div>
                        </div>

                    @else
                        <!-- VIDEO -->
                        <div class="col-12 col-md-6">
                            @if ($count == 2)
                                <div class="circular-text d-only-desktop">
                                    <div class="emblem to-top-right gray">O R C A • F I L E S •</div>
                                </div>
                            @endif

                            <div class="image-wrapper">
                                <iframe
                                    src="{{ $orcafile->embed_code }}"
                                    width="100%"
                                    height="352"
                                    loading="lazy"
                                    style="border-radius:12px"
                                    frameborder="0"
                                    allow="autoplay; encrypted-media; picture-in-picture"
                                    allowfullscreen
                                    title="{{ $orcafile->title }}"
                                ></iframe>
                            </div>
                        </div>

                        <!-- TEXT -->
                        <div class="col-12 col-md-6 align-v-center">
                            <div class="holder p-4 p-md-5">
                                <div class="basic-intro mb-2">

                                    <h2 class="title text-style-5">
                                        <time datetime="{{ $orcafile->created_at }}">
                                            <span class="text-1 h6 d-block gray-75">
                                                {{ \Carbon\Carbon::parse($orcafile->created_at)->format('M d, Y') }}
                                            </span>
                                        </time>

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

        @php $count++; @endphp
    @endforeach

    <!-- Decorative Lines (mark as hidden for SEO) -->
    <div class="vertical-lines scheme-1 primary" aria-hidden="true">
        <div class="row">
            @for ($i = 0; $i < 4; $i++)
                <div class="col-12 col-md-6 col-lg-3 align-h-center">
                    <span class="line"></span>
                </div>
            @endfor
        </div>
    </div>

@endsection