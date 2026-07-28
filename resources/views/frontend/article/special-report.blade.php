@extends('web')

@section('title', $article->title)
@section('meta_keywords', $article->keywords)
@section('meta_description', $article->introduction)
@section('og_image', asset('images/article/' . $article->title_image))

@section('meta')

    <!-- SEO META -->
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="{{ $article->title }}" />
    <meta property="og:description" content="{{ $article->introduction }}" />
    <meta property="og:image" content="{{ asset('images/article/' . $article->title_image) }}" />

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $article->title }}">
    <meta name="twitter:description" content="{{ $article->introduction }}">
    <meta name="twitter:image" content="{{ asset('images/article/' . $article->title_image) }}">

    <link rel="canonical" href="{{ url()->current() }}">

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

    <style>
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
        }
    </style>

    <!-- BANNER -->
    <section class="shock-section has-overlay">
        <div class="banner">
            <div class="content-wrapper">

                <div class="extended-intro max-w-65 mb-25">
                    <h1 class="title white text-white">
                        <div class="logo-print-only">
                            <img src="{{ asset('images/ORCA Website Banner Logo PNG.png') }}"
                                style="width: 200px; margin-bottom:2rem;" alt="ORCA" />
                        </div>

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

    <!-- SOCIAL -->
    <div class="side-widget to-left invert-color mix-blend-difference d-only-desktop">
        <div class="item">
            <span class="widget label-icons">
                <a href="https://www.facebook.com/sharer.php?u={{ url()->current() }}" class="link black">
                    <i class="icon fab fa-facebook-f"></i>
                </a>

                <a href="https://twitter.com/share?text={{ $article->title }}&url={{ url()->current() }}"
                    class="link black">
                    <i class="icon fab fa-twitter"></i>
                </a>

                <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ url()->current() }}" class="link black">
                    <i class="icon fab fa-linkedin-in"></i>
                </a>
            </span>
        </div>
    </div>

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
