@extends('web')

@section('title', $article->title)
@section('meta_keywords', $article->keywords)
@section('meta_description', $article->introduction)
@section('og_image', asset('images/article/' . $article->title_image))

@section('meta')

    {{-- =========================================
        BASIC SEO
    ========================================== --}}
    <meta name="googlebot" content="index, follow">
    <link rel="preload" as="image" href="{{ asset('images/article/' . $article->title_image) }}">

    {{-- =========================================
        OPEN GRAPH / FACEBOOK
    ========================================== --}}

    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:site_name" content="ORCA" />
    <meta property="og:image:secure_url" content="{{ url('images/article/' . $article->title_image) }}" />
    <meta property="og:image:alt" content="{{ $article->title }}" />
    <meta property="article:published_time" content="{{ $article->created_at->toIso8601String() }}" />
    <meta property="article:modified_time" content="{{ $article->updated_at->toIso8601String() }}" />

    @foreach ($authors as $author)
        <meta property="article:author" content="{{ $author->name }}">
    @endforeach

    {{-- =========================
        ARTICLE SCHEMA (SEO BOOST)
    ========================== --}}
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Article",
        "headline": "{{ $article->title }}",
        "description": "{{ $article->introduction }}",
        "image": "{{ asset('images/article/' . $article->title_image) }}",
        "url": "{{ url()->current() }}",
        "datePublished": "{{ $article->created_at->toIso8601String() }}",
        "dateModified": "{{ $article->updated_at->toIso8601String() }}",
        "author": [
            @foreach($authors as $author)
                @php
                    $author_meta = App\Models\UserMeta::where('user_id', $author->id)->first();
                @endphp
                {
                    "@type": "Person",
                    "name": "{{ $author->name }}",
                    "url": "{{ url('author/' . $author_meta->slug) }}"
                }@if(!$loop->last),@endif
            @endforeach
        ],
        "publisher": {
            "@type": "Organization",
            "name": "ORCA",
            "logo": {
                "@type": "ImageObject",
                "url": "{{ asset('images/ORCA Website Banner Logo PNG.png') }}"
            }
        }
    }
    </script>

@endsection

@section('content')

    <?php
    $art = App\Models\Article::where('id', $article->id);
    $art->update([
        'views' => $article->views + 1,
    ]);
    ?>

    <style>
        p {
            color: #000 !important;
        }

        p.introduction {
            text-align: justify;
        }

        .aticlesubtitle {
            color: #c6c6c6 !important;
            text-align: center;
        }

        .side-widget .float-icon {
            height: auto !important;
        }

        ul,
        li {
            color: black;
        }

        @media print {
            body {
                -webkit-print-color-adjust: exact;
                print-color-adjust: exact;
            }

            .image-wrapper {
                position: absolute;
            }

            .text-white {
                color: #fff !important;
            }
        }

        @media (max-width:768px) {
            .table-scroll {
                overflow-x: auto;
                width: 100%;
                -webkit-overflow-scrolling: touch;
            }
        }
    </style>

    <!-- Banner -->
    <section class="shock-section has-overlay">
        <div class="banner">
            <div class="content-wrapper">

                <div class="extended-intro max-w-65 mb-25">
                    <h1 class="title text-style-1 text-offset">
                        <span class="text-1 filled primary-50" data-lax="inertia-top">Daily Conversations </span>
                        <span class="text-1 outline white">Daily Conversations</span>
                    </h1>

                    <span class="text-2 text-style-4 fw-400 text-outline text-italic white">
                        In Chinese Media<br>
                        <i class="icon fas fa-calendar-alt"></i>
                        <?= date_format(date_create($article->created_at), 'M j, Y') ?>
                    </span>
                </div>

            </div>

            <div class="image-wrapper">
                <x-webp-image src="{{ asset('images/article/' . $article->title_image) }}" class="image vh-100 fit-cover"
                    alt="{{ $article->title }}" />
            </div>

            <div class="overlay black-50"></div>
        </div>
    </section>

    <!-- Post -->
    <section class="shock-section mb-4">
        <div class="container max-w-85">
            <div class="holder p-5 climb shadow rounded">

                <div class="content max-w-85 scheme-2">

                    <!-- Breadcrumb (SEO improvement retained) -->
                    <div class="breadcrumb-nav scheme-2 primary">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item has-icon">
                                    <a href="{{ url('/') }}" class="breadcrumb-link">
                                        <i class="fa-solid fa-house icon"></i> Home
                                    </a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="{{ url('category/cicm') }}" class="breadcrumb-link">CiCM</a>
                                </li>
                                <li class="breadcrumb-item active">
                                    <?= date_format(date_create($article->created_at), 'M j, Y') ?>
                                </li>
                            </ol>
                        </nav>
                    </div>

                    {!! $article->content !!}

                    <!-- Author (SEO LINKED ENTITY) -->
                    <div class="comments mt-2">
                        <h2>Prepared By</h2>

                        @foreach ($authors as $author)
                            @php
                                $author_meta = App\Models\UserMeta::where('user_id', $author->id)->first();
                            @endphp
                            <div class="comments-wrapper">
                                <div class="comment">
                                    <div class="comment-metadata">
                                        <div class="comment-author">
                                            <div class="author-photo">
                                                <img src="{{ URL::asset('images/author/' . $author_meta->avatar) }}"
                                                    class="image shadow" alt="{{ $author->name }}">
                                            </div>
                                            <a href="{{ url('author/' . $author_meta->slug) }}">
                                                <h5 style="color:#000;" class="author-name">{{ $author->name }}</h5>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="comment-content">
                                        <p>{{ $author_meta->about }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <!-- Tags -->
                    <div class="block-section">
                        <h2>Tags</h2>
                        <div class="tag-cloud">
                            @foreach ($tags as $tag)
                                <a href="{{ url('tag/' . $tag['slug']) }}">
                                    <span class="badge">
                                        {{ $tag['tag'] }}
                                    </span>
                                </a>
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Side Widget
    <div class="side-widget to-left invert-color mix-blend-difference d-only-desktop">
        <div class="item">
            <span class="widget label-icons">
                {{-- Facebook Share --}}
                <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="link black black-hover"
                    aria-label="Share on Facebook"
                    title="Share on Facebook">
                    <i class="icon fab fa-facebook-f"></i>
                </a>

                {{-- X / Twitter Share --}}
                <a href="https://twitter.com/intent/tweet?text={{ urlencode($article->title) }}&url={{ urlencode(url()->current()) }}"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="link black black-hover"
                    aria-label="Share on X"
                    title="Share on X">
                    <i class="icon fab fa-twitter"></i>
                </a>

                {{-- LinkedIn Share --}}
                <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode(url()->current()) }}"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="link black black-hover"
                    aria-label="Share on LinkedIn"
                    title="Share on LinkedIn">
                    <i class="icon fab fa-linkedin-in"></i>
                </a>

                {{-- WhatsApp Share --}}
                <a href="https://api.whatsapp.com/send?text={{ urlencode($article->title . ' - ' . url()->current()) }}"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="link black black-hover"
                    aria-label="Share on WhatsApp"
                    title="Share on WhatsApp">
                    <i class="icon fab fa-whatsapp"></i>
                </a>

                {{-- Vertical / Decorative Line --}}
                <span class="label-line black"></span>
            </span>
        </div>
    </div> -->

@endsection
