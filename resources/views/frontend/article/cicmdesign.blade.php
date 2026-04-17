@extends('web')

@section('title', $article->title)
@section('meta_keywords', $article->keywords)
@section('meta_description', $article->introduction)

@section('meta')

    {{-- Canonical URL --}}
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

                            <div class="comment">
                                <div class="comment-author">
                                    <a href="{{ url('author/' . $author_meta->slug) }}">
                                        <h5 style="color:#000;" class="author-name">{{ $author->name }}</h5>
                                    </a>
                                </div>
                                <p>{{ $author_meta->about }}</p>
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

@endsection
