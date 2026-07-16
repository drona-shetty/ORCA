@extends('gcns25.main')

{{-- ================= SEO ================= --}}
@section('title', $speaker->name . ' | GCNS 2026 Speaker ORCA Conference')

@section('meta_description')
    Learn about {{ $speaker->name }}, {{ $speaker->designation }} at ORCA’s Global Conference on New Sinology 2026.
    {{ \Illuminate\Support\Str::limit(strip_tags($speaker->content), 140) }}
@endsection

@section('meta_keywords')
    GCNS 2026 speaker, ORCA speaker, {{ $speaker->name }}, China studies, Sinology conference
@endsection

@section('content')

    {{-- Open Graph (Facebook / LinkedIn SEO) --}}
    <meta property="og:title" content="{{ $speaker->name }} | GCNS 2026 Speaker">
    <meta property="og:description" content="{{ \Illuminate\Support\Str::limit(strip_tags($speaker->content), 140) }}">
    <meta property="og:image" content="{{ url('images/event/speaker/' . $speaker->image) }}">
    <meta property="og:type" content="profile">

    {{-- Twitter SEO --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $speaker->name }} | GCNS 2026 Speaker">
    <meta name="twitter:description" content="{{ \Illuminate\Support\Str::limit(strip_tags($speaker->content), 140) }}">
    <meta name="twitter:image" content="{{ url('images/event/speaker/' . $speaker->image) }}">

    {{-- Structured Data (Google Rich Results) --}}
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Person",
        "name": "{{ $speaker->name }}",
        "jobTitle": "{{ $speaker->designation }}",
        "image": "{{ url('images/event/speaker/' . $speaker->image) }}",
        "description": "{{ \Illuminate\Support\Str::limit(strip_tags($speaker->content), 160) }}",
        "worksFor": {
            "@type": "Organization",
            "name": "ORCA"
        }
    }
    </script>

    {{-- ================= DESIGN ================= --}}
    <style>
        /* HERO */
        .speaker-hero {
            position: relative;
            min-height: 55vh;
            display: flex;
            align-items: center;
            background-size: cover;
            background-position: center;
        }

        .speaker-hero::before {
            content: "";
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, 0.55);
        }

        .speaker-hero-inner {
            position: relative;
            width: 100%;
            text-align: center;
            color: #fff;
            padding: 3rem 1rem;
        }

        .speaker-hero h1 {
            font-size: clamp(2rem, 4vw, 3.2rem);
            margin-bottom: 0.5rem;
            font-weight: 700;
        }

        .speaker-hero h2 {
            font-size: clamp(1rem, 2vw, 1.3rem);
            font-weight: 400;
            opacity: 0.9;
        }

        /* PROFILE */
        .speaker-wrapper {
            max-width: 1100px;
            margin: -80px auto 60px;
            padding: 0 20px;
            position: relative;
            z-index: 2;
        }

        .speaker-card {
            display: grid;
            grid-template-columns: 320px 1fr;
            gap: 40px;
            background: #fff;
            border-radius: 18px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            overflow: hidden;
        }

        /* IMAGE */
        .speaker-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        /* CONTENT */
        .speaker-content {
            padding: 30px;
        }

        .speaker-name {
            font-size: 1.8rem;
            font-weight: 700;
            margin-bottom: 5px;
            color: #111;
        }

        .speaker-role {
            font-size: 1rem;
            color: #666;
            margin-bottom: 20px;
        }

        .speaker-bio {
            font-size: 1rem;
            line-height: 1.8;
            color: #333;
        }

        /* RESPONSIVE */
        @media (max-width: 768px) {
            .speaker-card {
                grid-template-columns: 1fr;
            }

            .speaker-image {
                height: 320px;
            }

            .speaker-wrapper {
                margin-top: -40px;
            }
        }
    </style>

    {{-- ================= PAGE ================= --}}

    <!-- HERO -->
    <section class="speaker-hero"
        style="background-image: url('{{ asset('gcns26/images/Image_GCNS Speaker Section.jpg') }}');">

        <div class="speaker-hero-inner">
            <h1>{{ $speaker->name }}</h1>
            <h2>{{ $speaker->designation }} — ORCA Global Conference on New Sinology 2026</h2>
        </div>

    </section>

    <!-- PROFILE -->
    <div class="speaker-wrapper">

        <div class="speaker-card">

            <div class="speaker-image">
                <img src="{{ url('images/event/speaker/' . $speaker->image) }}"
                    alt="{{ $speaker->name }} - GCNS 2026 Speaker" loading="lazy" decoding="async">
            </div>

            <div class="speaker-content">

                <div class="speaker-name">{{ $speaker->name }}</div>

                <div class="speaker-role">{{ $speaker->designation }}</div>

                <div class="speaker-bio">
                    {{ $speaker->content }}
                </div>
            </div>
        </div>
    </div>
@endsection
