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

    <!-- ARTICLE STRUCTURED DATA (SEO BOOST) -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Article",
      "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "{{ url()->current() }}"
      },
      "headline": "{{ addslashes($article->title) }}",
      "description": "{{ addslashes($article->introduction) }}",
      "image": "{{ asset('images/article/' . $article->title_image) }}",
      "datePublished": "{{ $article->created_at->toIso8601String() }}",
      "dateModified": "{{ $article->updated_at->toIso8601String() }}",

      "author": [
        @foreach ($authors as $author)
            @php
                $author_meta = App\Models\UserMeta::where('user_id', $author->id)->first();
            @endphp
            {
                "@type": "Person",
                "name": "{{ $author->name }}",
                "url": "{{ url('author/' . ($author_meta->slug ?? '')) }}"
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

    <!-- BREADCRUMB STRUCTURED DATA -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "BreadcrumbList",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Home",
          "item": "{{ url('/') }}"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "{{ $category->category ?? 'Article' }}",
          "item": "{{ url('category/' . ($category->slug ?? '')) }}"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "{{ $article->title }}",
          "item": "{{ url()->current() }}"
        }
      ]
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
            height: auto;
            object-fit: cover;
        }

        p {
            color: {{ $article->p_color ?? '#fff' }} !important;
        }

        a {
            color: {{ $article->a_color ?? '#e41e25' }};
        }

        .shock-section {
            background: {{ $article->section_bg }};
        }

        .bg-grad-c {
            background: linear-gradient(to top, {{ $article->section_bg }} 10%, transparent 60%) !important;
        }

        .author-name {
            color: white !important;
        }

        .shock-section .content {
            max-width: 100% !important;
        }

        @media (min-width: 1200px) {
            .authflex {
                display: flex;
                gap: 30px;
            }

            .wid70 {
                width: 75%;
            }

            .wid30 {
                width: 25%;
            }
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
    </style>

    <!-- BANNER -->
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
                </div>

            </div>

            <!-- AUTHORS + META -->
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

            <div class="image-wrapper">
                <img src="{{ asset('images/article/' . $article->title_image) }}" class="image vh-100 fit-cover"
                    alt="{{ $article->title }}" />
            </div>

            <div class="overlay black-50 hidden-print bg-grad-c"></div>
        </div>
    </section>

    <!-- CONTENT -->
    <section class="shock-section pt-5 pb-5">
        <div class="container max-w-75">

            <div class="content scheme-1">

                <div class="authflex">

                    <div class="wid70">
                        <div class="article-content">
                            {!! $article->content !!}
                        </div>
                    </div>

                    <!-- AUTHOR SIDEBAR -->
                    <div class="comments mt-2 wid30">

                        <h2>Author</h2>

                        <div class="comments-wrapper">
                            @foreach ($authors as $author)
                                @php
                                    $author_meta = App\Models\UserMeta::where('user_id', $author->id)->first();
                                @endphp

                                <div class="comment">
                                    <div class="comment-author">
                                        <img src="{{ asset('images/author/' . $author_meta->avatar) }}"
                                            class="image shadow" alt="{{ $author->name }}">

                                        <a href="{{ url('author/' . $author_meta->slug) }}" rel="author">
                                            <h5 class="author-name">{{ $author->name }}</h5>
                                        </a>
                                    </div>

                                    <div class="comment-content">
                                        <p>{{ $author_meta->about }}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <!-- PDF -->
                        <div class="pdf img">
                            <h5 class="dpdf">Download PDF</h5>

                            <a target="_blank" data-id="{{ $article->id }}" id="pdfLink"
                                href="{{ $article->subtitle }}">
                                <img class="thumbimg" src="{{ $article->introduction }}">
                            </a>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- Side Widget -->
    @include('frontend.article.share')

@endsection

@section('scripts')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#pdfLink').on('click', function(e) {
            e.preventDefault();

            let url = $(this).attr('href');
            let id = $(this).data('id');

            $.post('{{ url('pdf-log') }}', {
                id: id
            }, function() {
                window.open(url, '_blank');
            });
        });
    </script>
@endsection

@php
    $art = App\Models\Article::where('id', $article->id);
    $art->update([
        'views' => $article->views + 1,
    ]);
@endphp
