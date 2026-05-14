@extends('web')

@section('title', $article->title)
@section('meta_keywords', $article->keywords)
@section('meta_description', $article->introduction)

@section('meta')
    <!-- Basic SEO -->
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="{{ $article->title }}" />
    <meta property="og:description" content="{{ $article->introduction }}" />
    <meta property="og:image" content="{{ URL::asset('images/article/' . $article->title_image) }}" />

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $article->title }}">
    <meta name="twitter:description" content="{{ $article->introduction }}">
    <meta name="twitter:image" content="{{ URL::asset('images/article/' . $article->title_image) }}">

    <!-- Canonical -->
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- ARTICLE SCHEMA (SEO STRONG) -->
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
      "image": "{{ URL::asset('images/article/' . $article->title_image) }}",
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
          "url": "{{ URL::asset('images/ORCA Website Banner Logo PNG.png') }}"
        }
      }
    }
    </script>

    <!-- BREADCRUMB SCHEMA -->
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
                    alt="{{ $article->title }}" />
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
