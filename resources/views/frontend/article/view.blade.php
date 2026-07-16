@extends('web')

@section('title', $article->title)
@section('meta_keywords', $article->keywords)
@section('meta_description', $article->introduction)

@section('meta')
    {{-- =========================================
        BASIC SEO
    ========================================== --}}
    <meta name="author" content="ORCA">
    <meta name="robots" content="index, follow, max-image-preview:large">
    <meta name="googlebot" content="index, follow">
    <link rel="canonical" href="{{ url()->current() }}">
    <link rel="preload" as="image" href="{{ asset('images/article/' . $article->title_image) }}">

    {{-- =========================================
        OPEN GRAPH / FACEBOOK
    ========================================== --}}

    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:site_name" content="ORCA" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:title" content="{{ $article->title }}" />
    <meta property="og:description" content="{{ Str::limit(strip_tags($article->introduction), 200) }}" />
    <meta property="og:image" content="{{ url('images/article/' . $article->title_image) }}" />
    <meta property="og:image:secure_url" content="{{ url('images/article/' . $article->title_image) }}" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta property="og:image:alt" content="{{ $article->title }}" />
    <meta property="article:published_time" content="{{ $article->created_at->toIso8601String() }}" />
    <meta property="article:modified_time" content="{{ $article->updated_at->toIso8601String() }}" />

    @foreach ($authors as $author)
        <meta property="article:author" content="{{ $author->name }}">
    @endforeach

    {{-- =========================================
        TWITTER SEO
    ========================================== --}}

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $article->title }}">
    <meta name="twitter:description" content="{{ Str::limit(strip_tags($article->introduction), 200) }}">
    <meta name="twitter:image" content="{{ asset('images/article/' . $article->title_image) }}">

    {{-- =========================================
        ARTICLE STRUCTURED DATA
    ========================================== --}}

    <script type="application/ld+json">
    {!! json_encode([
        "@context" => "https://schema.org",
        "@type" => "Article",
        "mainEntityOfPage" => [
            "@type" => "WebPage",
            "@id" => url()->current()
        ],
        "headline" => $article->title,
        "description" => Str::limit(strip_tags($article->introduction), 200),
        "image" => [
            asset('images/article/' . $article->title_image)
        ],
        "datePublished" => $article->created_at->toIso8601String(),
        "dateModified" => $article->updated_at->toIso8601String(),
        "articleSection" => $category->category ?? 'Article',
        "keywords" => $article->keywords . ', ORCA, China, Asia',
        "author" => collect($authors)->map(function ($author) {
            $author_meta = App\Models\UserMeta::where('user_id', $author->id)->first();
            return [
                "@type" => "Person",
                "name" => $author->name,
                "url" => url('author/' . ($author_meta->slug ?? ''))
            ];
        })->values(),
        "publisher" => [
            "@type" => "Organization",
            "name" => "ORCA",
            "url" => url('/'),
            "logo" => [
                "@type" => "ImageObject",
                "url" => asset('images/ORCA Website Banner Logo PNG.png')
            ]
        ]
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}
    </script>

    {{-- =========================================
        BREADCRUMB STRUCTURED DATA
    ========================================== --}}

    <script type="application/ld+json">
    {!! json_encode([
        "@context" => "https://schema.org",
        "@type" => "BreadcrumbList",
        "itemListElement" => [
            [
                "@type" => "ListItem",
                "position" => 1,
                "name" => "Home",
                "item" => url('/')
            ],
            [
                "@type" => "ListItem",
                "position" => 2,
                "name" => $category->category ?? 'Category',
                "item" => url('category/' . ($category->slug ?? ''))
            ],
            [
                "@type" => "ListItem",
                "position" => 3,
                "name" => $article->title,
                "item" => url()->current()
            ]
        ]
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}
    </script>

    {{-- =========================================
        OPTIONAL: NEWSARTICLE SCHEMA
        (GOOD FOR GOOGLE DISCOVER)
    ========================================== --}}

    <script type="application/ld+json">
    {!! json_encode([
        "@context" => "https://schema.org",
        "@type" => "NewsArticle",
        "headline" => $article->title,
        "image" => [
            asset('images/article/' . $article->title_image)
        ],
        "datePublished" => $article->created_at->toIso8601String(),
        "dateModified" => $article->updated_at->toIso8601String(),
        "author" => collect($authors)->map(function ($author) {
            return [
                "@type" => "Person",
                "name" => $author->name
            ];
        })->values(),
        "publisher" => [
            "@type" => "Organization",
            "name" => "ORCA",
            "logo" => [
                "@type" => "ImageObject",
                "url" => asset('images/ORCA Website Banner Logo PNG.png')
            ]
        ],
        "description" => Str::limit(strip_tags($article->introduction), 200)
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}
    </script>
@endsection

@section('content')
    <style>
        img {
            max-width: 100%;
            height: auto;
            object-fit: cover;
        }

        p {
            color: #000 !important;
        }

        p.introduction {
            text-align: justify;
        }

        .aticlesubtitle {
            color: #fff !important;
            text-align: center;
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

                <!-- Intro -->
                <div class="extended-intro max-w-65 mb-25">
                    <h1 class="title white text-white">

                        <div class="logo-print-only">
                            <img src="{{ URL::asset('images/ORCA Website Banner Logo PNG.png') }}"
                                style=" width: 200px; margin-bottom:2rem; " alt="ORCA" />
                        </div>

                        <span class="text-1 text-center text-style-3 text-white">
                            {{ $article->title }}
                        </span>
                    </h1>

                    <p class="aticlesubtitle text-style-9 text-white">
                        {{ $article->subtitle }}
                    </p>
                </div>
            </div>

            <!-- Metadata -->
            <div class="banner-metadata absolute">

                @foreach ($authors as $author)
                    @php
                        $author_meta = App\Models\UserMeta::where('user_id', $author->id)->first();
                    @endphp

                    <div class="item">
                        <a href="{{ url('author/' . $author_meta->slug) }}" rel="author">
                            <h5 class="text text-style-11 white">
                                <i class="icon fas fa-user-circle"></i>{{ $author->name }}
                            </h5>
                        </a>
                    </div>
                @endforeach

                <div class="item">
                    <h5 class="text text-style-11 white">
                        <i class="icon fas fa-calendar-alt"></i>
                        {{ date_format(date_create($article->created_at), 'M j, Y') }}
                    </h5>
                </div>

                <a href="{{ url('category/' . $category->slug) }}">
                    <div class="item">
                        <h5 class="text text-style-11 white">
                            <i class="icon fas fa-layer-group"></i>{{ $category->category }}
                        </h5>
                    </div>
                </a>

            </div>

            <!-- Image -->
            <div class="image-wrapper">
                <img src="{{ URL::asset('images/article/' . $article->title_image) }}" class="image vh-100 fit-cover"
                    alt="{{ $article->title }}" fetchpriority="high" loading="eager" decoding="async">
            </div>

            <div class="overlay black-50 hidden-print"></div>
        </div>
    </section>

    <!-- Post -->
    <section class="shock-section pt-5 pb-5">
        <div class="container max-w-75">
            <div class="content scheme-1">

                <p class="introduction">
                    <strong><em>
                            @if ($article->introduction != null)
                                {{ $article->introduction }}
                            @endif
                        </em></strong>
                </p>

                <div class="article-content">
                    {!! $article->content !!}
                </div>

                <script>
                    document.addEventListener("DOMContentLoaded", function() {
                        document.querySelectorAll(".article-content table").forEach(function(table) {
                            var wrapper = document.createElement("div");
                            wrapper.classList.add("table-scroll");
                            table.parentNode.insertBefore(wrapper, table);
                            wrapper.appendChild(table);
                        });
                    });
                </script>

                <!-- Author -->
                <div class="comments mt-2">
                    <h2>Author</h2>

                    <div class="comments-wrapper">
                        @foreach ($authors as $author)
                            @php
                                $author_meta = App\Models\UserMeta::where('user_id', $author->id)->first();
                            @endphp

                            <div class="comment">
                                <div class="comment-metadata">
                                    <div class="comment-author">
                                        <div class="author-photo">
                                            <img src="{{ URL::asset('images/author/' . $author_meta->avatar) }}"
                                                class="image shadow" alt="{{ $author->name }}">
                                        </div>

                                        <a href="{{ url('author/' . $author_meta->slug) }}" rel="author"
                                            class="link gray primary-hover">
                                            <h5 class="author-name">{{ $author->name }}</h5>
                                        </a>
                                    </div>
                                </div>

                                <div class="comment-content">
                                    <p>{{ $author_meta->about }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Tags -->
                <div class="block-section">
                    <h2>Tags</h2>

                    <div class="tag-cloud">
                        @foreach ($tags as $tag)
                            <a href="{{ url('tag/' . $tag['slug']) }}" class="link">
                                <span class="badge outline gray-50 primary-hover">
                                    <span class="badge-text gray white-hover">
                                        {{ $tag['tag'] }}
                                    </span>
                                </span>
                            </a>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Side Widget -->
    <div class="side-widget to-left invert-color mix-blend-difference d-only-desktop">
        <div class="item">
            <span class="widget label-icons">
                <a href="https://www.facebook.com/sharer.php?u={{ url()->current() }}" class="link black black-hover">
                    <i class="icon fab fa-facebook-f"></i>
                </a>

                <a href="https://twitter.com/share?&text={{ $article->title }}&url={{ url()->current() }}"
                    class="link black black-hover">
                    <i class="icon fab fa-twitter"></i>
                </a>

                <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ url()->current() }}"
                    class="link black black-hover">
                    <i class="icon fab fa-linkedin-in"></i>
                </a>

                <span class="label-line black"></span>
            </span>
        </div>
    </div>

@endsection

@php
    $art = App\Models\Article::where('id', $article->id);
    $art->update([
        'views' => $article->views + 1,
    ]);
@endphp
