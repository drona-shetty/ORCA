@extends('web')

@section('title', $article->title)
@section('meta_keywords', $article->keywords)
@section('meta_description', $article->introduction)

@section('meta')
    {{-- Canonical URL (VERY IMPORTANT) --}}
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
                        <span class="text-1 text-center text-style-3">{{ $article->title }}</span>
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

@endsection

{{-- DB logic kept exactly as you had it --}}
<?php
$art = App\Models\Article::where('id', $article->id);
$art->update([
    'views' => $article->views + 1,
]);
?>
