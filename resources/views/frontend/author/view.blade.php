@extends('web')

{{-- ================= SEO ================= --}}
@section('title', $user->name . ' | ORCA Author')

@section('meta_description')
    {{ $user->name }} - Author profile at ORCA. {{ \Illuminate\Support\Str::limit(strip_tags($user_meta->about), 140) }}
@endsection

@section('meta_keywords')
    ORCA author, {{ $user->name }}, China research, Asia studies, ORCA articles
@endsection

@section('content')

    <style>
        .shock-header .navbar .navbar-nav .nav-link {
            color: black !important;
        }
    </style>

    {{-- ================= STRUCTURED DATA (GOOGLE AUTHOR PROFILE) ================= --}}
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Person",
        "name": "{{ $user->name }}",
        "description": "{{ \Illuminate\Support\Str::limit(strip_tags($user_meta->about), 160) }}",
        "image": "{{ asset('images/author/' . $user_meta->avatar) }}",
        "jobTitle": "Author",
        "worksFor": {
            "@type": "Organization",
            "name": "ORCA"
        },
        "sameAs": [
            "{{ url('/') }}",
            "https://www.google.com/search?q={{ urlencode($user->name) }}",
            @if(!empty($user_meta->linkedin))
            "{{ $user_meta->linkedin }}",
            @endif
            @if(!empty($user_meta->twitter))
            "{{ $user_meta->twitter }}",
            @endif
            @if(!empty($user_meta->website))
            "{{ $user_meta->website }}",
            @endif
            "https://orcasia.org"
        ]
    }
    </script>

    <!-- Featured -->
    <section class="shock-section has-holder pt-2 gray-10">
        <div class="container">

            <div class="row g-0">
                <div class="col-12 col-md-12">

                    <div class="basic-intro text-center"></div>

                </div>

                <!-- Author -->
                <div class="comments mt-3">

                    <div class="comments-wrapper">

                        <div id="comment-1" class="comment">

                            <div class="comment-metadata">

                                <div class="comment-author">

                                    <div class="author-photo">
                                        <img src="{{ asset('images/author/' . $user_meta->avatar) }}" class="image shadow"
                                            alt="{{ $user->name }} - ORCA Author" loading="lazy" decoding="async">
                                    </div>

                                    <h2 class="text-1 text-style-5 author-name">
                                        {{ $user->name }}
                                    </h2>

                                </div>

                            </div>

                            <p class="mt-1">{{ $user_meta->about }}</p>

                        </div>

                    </div>

                </div>

            </div>

        </div>
    </section>

    <!-- Blog -->
    <section class="shock-section pt-2 pb-2">
        <div class="container">

            <div id="load-more-1" class="row g-5" data-display="6" data-columns="3">

                @php
                    $articlesSorted = collect($articles)->sortByDesc('created_at');

                    $categories = App\Models\Category::whereIn('id', $articlesSorted->pluck('category')->unique())
                        ->get()
                        ->keyBy('id');
                @endphp

                @foreach ($articlesSorted as $article)
                    @php
                        $category = $categories[$article->category] ?? null;
                    @endphp

                    <div class="col-12 col-md-6 col-lg-4 load-more-item-1">

                        <div class="card has-image shadow parent">

                            <span class="label-vertical to-bottom-right-out">
                                <span class="label-line gray"></span>
                                <span class="label-text gray">
                                    <i class="icon fas fa-user-circle"></i>
                                    {{ $user->name }}
                                </span>
                            </span>

                            <div class="image-wrapper rounded-top hover-zoom">
                                <x-webp-image src="{{ asset('images/article/' . $article->title_image) }}"
                                    alt="{{ $article->title }}" class="image" loading="lazy" />
                            </div>

                            <div class="card-body rounded-bottom bg-color white">

                                <h3 class="title text-style-11 black">
                                    {{ $article->title }}
                                </h3>

                                <p class="description line-clamp-3">
                                    {{ $article->subtitle }}
                                </p>

                                <div class="tag-cloud mt-2">

                                    <a href="#your-link" class="link">
                                        <span class="badge outline gray-50 primary-hover">
                                            <span class="badge-text gray white-hover">
                                                {{ date_format(date_create($article->created_at), 'F j, Y') }}
                                            </span>
                                        </span>
                                    </a>

                                    @if ($category)
                                        <a href="{{ url('category/' . $category->slug) }}" class="link">
                                            <span class="badge outline gray-50 primary-hover">
                                                <span class="badge-text gray white-hover">
                                                    {{ $category->category }}
                                                </span>
                                            </span>
                                        </a>
                                    @endif

                                </div>

                                <div class="button-wrapper align-h-right">
                                    <span class="arrow-button cross scheme-1 primary">
                                        <span class="arrow">
                                            <span class="item"></span>
                                            <span class="item"></span>
                                        </span>
                                        <span class="line"></span>
                                        <span class="text">READ MORE</span>
                                    </span>
                                </div>

                            </div>

                            @if ($category)
                                <a href="{{ url('article/' . $article->id . '/' . $article->slug) }}"
                                    class="full-link"></a>
                            @else
                                <a href="{{ url('episodesofexchanges/' . $article->id . '/' . $article->slug) }}"
                                    class="full-link"></a>
                            @endif

                        </div>

                    </div>
                @endforeach

            </div>

            <div class="mt-4 text-center">
                <button id="load-more-button-1" class="button double-edge transparent black-hover">
                    <span class="button-text black white-hover">Load more</span>
                    <i class="fa-solid fa-rotate-right button-icon black white-hover"></i>
                    <span class="overlay gray-50 magnetic-effect"></span>
                </button>
            </div>

        </div>
    </section>

@endsection
