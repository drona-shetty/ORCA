@extends('web')

@section('title', $article->title)
@section('meta_keywords', $article->keywords)
@section('meta_description', $article->introduction)

@section('meta')

    {{-- Canonical --}}
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

    <style>
        p {
            color: #000 !important;
        }

        .shock-header .navbar .navbar-nav .nav-link {
            color: black !important;
        }

        .side-widget .float-icon {
            height: auto !important;
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

                @foreach ($authors as $author)
                    @php
                        $author_meta = App\Models\UserMeta::where('user_id', $author->id)->first();
                    @endphp

                    <div class="comment">
                        <div class="comment-author">
                            <a href="{{ url('author/' . $author_meta->slug) }}">
                                <h5 class="author-name">{{ $author->name }}</h5>
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
                            <span class="badge">{{ $tag['tag'] }}</span>
                        </a>
                    @endforeach
                </div>
            </div>

        </div>
    </section>

@endsection

<?php
$art = App\Models\Article::where('id', $article->id);
$art->update([
    'views' => $article->views + 1,
]);
?>
