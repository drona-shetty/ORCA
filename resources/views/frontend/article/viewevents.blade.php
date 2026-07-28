@extends('web')

@section('title', $article->title)
@section('meta_keywords', $article->keywords)
@section('meta_description', $article->introduction)
@section('og_image', asset('images/article/' . $article->title_image))

@section('meta')

    {{-- Canonical (VERY IMPORTANT for SEO ranking stability) --}}
    <link rel="canonical" href="{{ url()->current() }}">

    {{-- Open Graph --}}
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="{{ $article->title }}" />
    <meta property="og:description" content="{{ $article->introduction }}" />
    <meta property="og:image" content="{{ asset('images/article/' . $article->title_image) }}" />

    {{-- Twitter --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $article->title }}">
    <meta name="twitter:description" content="{{ $article->introduction }}">
    <meta name="twitter:image" content="{{ asset('images/article/' . $article->title_image) }}">

    {{-- SEO: Article Schema (CRITICAL FOR GOOGLE) --}}
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

    <style>
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

        .aticlesubtitle {
            color: #fff !important;
            text-align: center;
        }

        .white {
            color: #fff !important;
        }

        ul,
        li {
            color: black;
        }
    </style>

    <!-- Banner -->
    <section class="shock-section has-overlay">
        <div class="banner">
            <div class="content-wrapper">

                <div class="extended-intro max-w-65 mb-25">
                    <h1 class="title white">
                        <div class="logo-print-only">
                            <img src="{{ asset('images/ORCA Website Banner Logo PNG.png') }}"
                                style="width:200px;margin-bottom:2rem;" alt="ORCA" />
                        </div>

                        <span class="text-1 text-center text-style-5">{{ $article->title }}</span>
                    </h1>

                    <p class="aticlesubtitle text-style-9">{{ $article->subtitle }}</p>
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

            <div class="overlay black-50"></div>
        </div>
    </section>

    <!-- Post -->
    <section class="shock-section pt-5 pb-5">
        <div class="container max-w-75">
            <div class="content scheme-1">

                <p class="introduction">
                    <strong>
                        <em>
                            @if ($article->introduction != null)
                                {{ $article->introduction }}
                            @endif
                        </em>
                    </strong>
                </p>

                <div class="article-content">
                    {!! $article->content !!}
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
    App\Models\Article::where('id', $article->id)->update(['views' => $article->views + 1]);
@endphp
