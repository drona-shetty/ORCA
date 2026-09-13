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

    {{-- SEO: Article Schema (Google understands context better) --}}
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Article",
        "headline": "{{ $article->title }}",
        "description": "{{ $article->introduction }}",
        "image": "{{ asset('images/article/' . $article->title_image) }}",
        "url": "{{ url()->current() }}",
        "datePublished": "{{ $article->created_at->toW3cString() }}",
        "dateModified": "{{ $article->updated_at ? $article->updated_at->toW3cString() : $article->created_at->toW3cString() }}",
        "author": [
            @foreach ($authors as $author)
                <?php $author_meta = App\Models\UserMeta::where('user_id', $author->id)->first(); ?>
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

        img {
            max-width: 100%;
            object-fit: cover;
            max-height: 700px;
            height: auto;
        }

        p {
            color: #000 !important;
        }

        p.introduction {
            text-align: justify;
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
    </style>

    <!-- Banner -->
    <section class="shock-section has-overlay">
        <div class="banner">
            <div class="content-wrapper">

                <div class="extended-intro max-w-65 mb-25">
                    <div class="logo-print-only">
                        <img src="{{ URL::asset('images/ORCA Website Banner Logo PNG.png') }}"
                            alt="ORCA"
                            class="print-logo">
                    </div>
                    <h1 class="title white text-white">
                        <span class="text-1 text-center text-style-3 text-white">
                            {{ $article->title }}
                        </span>
                    </h1>

                    <p class="aticlesubtitle text-style-8">{{ $article->subtitle }}</p>
                </div>

            </div>

            <div class="banner-metadata absolute">
                @foreach ($authors as $author)
                    <?php $author_meta = App\Models\UserMeta::where('user_id', $author->id)->first(); ?>
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

                <a href="{{ url('/pages/infographics') }}">
                    <div class="item">
                        <h5 class="text text-style-11 white">
                            <i class="icon fas fa-layer-group"></i>{{ $category->category }}
                        </h5>
                    </div>
                </a>
            </div>

            <div class="image-wrapper">
                <img src="{{ asset('images/article/' . $article->title_image) }}" class="image vh-100 fit-cover"
                    alt="{{ $article->title }}" />
            </div>

            <div class="overlay black-50"></div>
        </div>
    </section>

    <!-- Post -->
    <section class="shock-section pt-5 pb-5">
        <div class="container max-w-100">
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

                <!-- Author -->
                <div class="comments mt-2">
                    <h2>Prepared by</h2>

                    <div class="comments-wrapper">
                        <?php $i = 1; ?>
                        @foreach ($authors as $author)
                            <?php $author_meta = App\Models\UserMeta::where('user_id', $author->id)->first(); ?>

                            <div id="comment-{{ $i }}" class="comment">
                                <div class="comment-metadata">
                                    <div class="comment-author">

                                        <div class="author-photo">
                                            <img src="{{ asset('images/author') }}/{{ $author_meta->avatar }}"
                                                class="image shadow" alt="{{ $author->name }}">
                                        </div>

                                        <a href="{{ url('author/' . $author_meta->slug) }}" rel="author">
                                            <h5 class="author-name">{{ $author->name }}</h5>
                                        </a>

                                    </div>
                                </div>

                                <div class="comment-content">
                                    <p>{{ $author_meta->about }}</p>
                                </div>
                            </div>

                            <?php $i++; ?>
                        @endforeach
                    </div>
                </div>

                <!-- Tag Cloud -->
                <div class="block-section">
                    <h2>Tags</h2>

                    <div class="tag-cloud">
                        @foreach ($tags as $tag)
                            <a href="{{ url('tag/' . $tag['slug']) }}" class="link">
                                <span class="badge outline gray-50 primary-hover">
                                    <span class="badge-text gray white-hover">{{ $tag['tag'] }}</span>
                                </span>
                            </a>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Side Widget -->
    @include('frontend.article.share')
    
@endsection

{{-- DB logic kept exactly as you had it --}}
<?php
$art = App\Models\Article::where('id', $article->id);
$art->update([
    'views' => $article->views + 1,
]);
?>
