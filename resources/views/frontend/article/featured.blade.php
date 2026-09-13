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
        ARTICLE SCHEMA (SEO)
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
            @foreach($authors as $index => $author)
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
    <div class="print-watermark">
        <img src="{{ URL::asset('images/ORCA Website Banner Logo PNG.png') }}"
            alt="">
    </div>
    <style>
        .print-watermark {
            display: none;
        }

        p {
            color: #000 !important;
        }

        .shock-header .navbar .navbar-nav .nav-link {
            color: black !important;
        }

        @media print {
            body {
                -webkit-print-color-adjust: exact;
                print-color-adjust: exact;
            }

            /* ==============================
                   PRINT LOGO AT TOP
                   ============================== */
            .logo-print-only {
                display: block !important;
                text-align: center;
                margin-bottom: 25px;
            }

            .print-logo {
                width: 450px !important;
                max-width: 80% !important;
                height: auto !important;
                object-fit: contain !important;
            }

            /* ==============================
                   WATERMARK
                   ============================== */
            .print-watermark {
                display: block !important;
                position: fixed;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                width: 450px;
                opacity: 0.08;
                z-index: -1;
                pointer-events: none;
            }

            .print-watermark img {
                width: 100% !important;
                height: auto !important;
                object-fit: contain !important;
            }

            /* ==============================
                   HIDE WEBSITE ELEMENTS
                   ============================== */
            .print-button,
            .side-widget,
            .hidden-print {
                display: none !important;
            }

            /* ==============================
                   PRINT PAGE
                   ============================== */
            @page {
                size: A4;
                margin: 15mm;
            }

            /* Keep text above watermark */
            .shock-section,
            .container,
            .content,
            .article-content {
                position: relative;
                z-index: 1;
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

        img {
            max-width: 100%;
            height: auto;
        }

        ul,
        li {
            color: black;
        }
    </style>

    <!-- Banner -->
    <section class="shock-section bg-image bg-only-desktop size-50 bg-fixed position-x-left"
        data-bg-image="{{ asset('images/article/' . $article->half_image) }}">

        <div class="container-fluid">
            <div class="half-section ms-auto align-v-center">

                <span class="label-vertical to-top-left opacity-75">
                    <span class="label-line gray"></span>
                    <a href="{{ url('category/' . $category->slug) }}">
                        <span class="label-text gray">{{ $category->category }}</span>
                    </a>
                </span>

                <span class="label-vertical to-bottom-right opacity-75">
                    <span class="label-line gray"></span>
                    <span class="label-text gray">
                        <?= date_format(date_create($article->created_at), 'F j, Y') ?>
                    </span>
                </span>

                <div class="side-intro">
                    <h2 class="title black">
                        <span class="text-1 text-style-3">{{ $article->title }}</span>
                    </h2>

                    @foreach ($authors as $author)
                        @php
                            $author_meta = App\Models\UserMeta::where('user_id', $author->id)->first();
                        @endphp
                        <p>
                            by <a style="color:#000;"
                                href="{{ url('author/' . $author_meta->slug) }}">{{ $author->name }}</a>
                        </p>
                    @endforeach

                    <div class="description gray">
                        <p>{{ $article->subtitle }}</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Second Banner -->
    <section class="shock-section bg-image bg-fixed"
        data-bg-image="{{ asset('images/article/' . $article->title_image) }}">
        <div class="holder vh-75"></div>
    </section>

    <!-- Content -->
    <section class="shock-section pt-5 pb-5 has-overlay" style="text-align: justify!important;">
        <div class="container">

            <h4 class="title black">Summary</h4>

            <p>{{ $article->introduction }}</p>

            <div>{!! $article->content !!}</div>

            <!-- Author SEO LINKING (ENHANCED INTERNAL SEO) -->
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
                        <a href="{{ url('tag/' . $tag['slug']) }}">
                            <span class="badge">{{ $tag['tag'] }}</span>
                        </a>
                    @endforeach
                </div>
            </div>

        </div>
    </section>

    <!-- Side Widget -->
    @include('frontend.article.share')
    
@endsection

<?php
$art = App\Models\Article::where('id', $article->id);
$art->update([
    'views' => $article->views + 1,
]);
?>
