@extends('gcns26.main')

@section('title', 'Speakers | GCNS 2026 ORCA Conference')

@section('meta_description', 'All speakers for ORCA\'s Global Conference on New Sinology 2026. Explore experts,
    scholars, and policymakers at GCNS 2026.')

@section('meta_keywords', 'GCNS 2026 speakers, ORCA speakers, China experts, Sinology conference speakers')

@section('content')

    <style>
        /* ===== DESIGN OPTIMIZATION ===== */

        .allspeakers {
            width: 100% !important;
            height: 100%;
            max-height: 500px;
            min-height: 500px !important;
            object-fit: cover !important;
            border-radius: 12px;
            transition: transform 0.35s ease, box-shadow 0.35s ease, opacity 0.3s ease;
        }

        .container {
            width: 100% !important;
            padding: 0 !important;
        }

        .slidername {
            color: #000 !important;
            margin: 0;
            line-height: 1.3;
        }

        .video-sec-wrap {
            width: 100%;
            min-height: 100vh;
            padding: 2rem 0;
        }

        .video-sec {
            width: 85%;
            margin: 3em auto;
            border-bottom: 1px solid #e0e0e0;
            text-align: left;
        }

        .video-sec-middle {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 20px;
            padding: 20px 0;
        }

        /* Card */
        .thumb-wrap {
            list-style: none;
        }

        .thumb-wrap a {
            display: block;
            background: #fff;
            border-radius: 14px;
            overflow: hidden;
            text-decoration: none;
            box-shadow: 0 4px 14px rgba(0, 0, 0, 0.06);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            will-change: transform;
        }

        .thumb-wrap a:hover {
            transform: translateY(-6px);
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.12);
        }

        .thumb-wrap a:hover .allspeakers {
            transform: scale(1.05);
        }

        .thumb-info {
            padding: 12px 14px;
        }

        .thumb-info h3 {
            font-size: 1.05rem;
            font-weight: 600;
            margin-bottom: 4px;
        }

        .thumb-info p {
            font-size: 0.9rem;
            color: #666 !important;
        }

        /* Banner typography */
        .lgx-heading .heading {
            font-size: clamp(2rem, 4vw, 3rem);
            letter-spacing: 0.5px;
        }

        .lgx-heading .subheading {
            font-size: clamp(1rem, 1.5vw, 1.2rem);
            opacity: 0.9;
        }

        /* Mobile */
        @media (max-width: 768px) {
            .video-sec {
                width: 92%;
            }

            .thumb-info {
                padding: 10px;
            }
        }
    </style>

    <!-- BANNER -->
    <section>
        <div class="lgx-banner"
            style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('{{ asset('gcns25/images/Image_GCNS Speaker Section.jpg') }}') top center no-repeat;background-size: cover;">

            <div class="lgx-page-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">

                            <div class="lgx-heading-area">
                                <div class="lgx-heading lgx-heading-white">

                                    <!-- SEO -->
                                    <h1 class="heading">Who’s Speaking</h1>

                                    <h2 class="subheading">
                                        All speakers for ORCA's Global Conference on
                                        New Sinology 2026
                                    </h2>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- SPEAKERS -->
    <section>
        <article class="video-sec-wrap">
            <div class="video-sec">

                <ul class="video-sec-middle" id="vid-grid">

                    @php
                        $speakerData = App\Models\Event\Speaker::where('gcns', 2026)->orderBy('id', 'asc')->get();
                    @endphp

                    @foreach ($speakerData as $speaker)
                        <li class="thumb-wrap">

                            <a href="{{ url('pages/gcns2026/speaker/' . $speaker->id) }}"
                                title="{{ $speaker->name }} - GCNS 2026 Speaker">

                                <img class="thumb allspeakers" src="{{ asset('images/event/speaker/' . $speaker->image) }}"
                                    alt="{{ $speaker->name }} - {{ $speaker->designation }}" loading="lazy" decoding="async"
                                    width="400" height="500">

                                <div class="thumb-info">
                                    <h3 class="slidername">{{ $speaker->name }}</h3>
                                    <p class="slidername">{{ $speaker->designation }}</p>
                                </div>

                            </a>

                        </li>
                    @endforeach

                </ul>

            </div>
        </article>
    </section>

    <!-- STRUCTURED DATA -->
    <script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "ItemList",
    "name": "GCNS 2026 Speakers",
    "itemListElement": [
        @foreach($speakerData as $index => $speaker)
        {
            "@type": "Person",
            "position": {{ $index + 1 }},
            "name": "{{ $speaker->name }}"
        }@if(!$loop->last),@endif
        @endforeach
    ]
}
</script>

@endsection
