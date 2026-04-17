@extends('web')
@section('title', $category->category . ' | Organisation for Research on China and Asia')
@section('meta_keywords', $category->category . ', ORCA research, China analysis, Asia geopolitics, India China
    relations')
@section('meta_description', 'Explore ' . $category->category . ' articles by ORCA covering China, Asia, and
    geopolitical developments.')

@section('content')

    <style>
        .shock-header .navbar .navbar-nav .nav-link {
            color: black !important;
        }
    </style>

    <!-- SEO Hidden Content -->
    <p class="sr-only">
        Browse {{ $category->category }} articles by ORCA focusing on China, Asia, and India-China relations.
    </p>

    <!-- Banner -->
    <section class="pt-6 shock-section has-holder pb-2">
        <div class="container max-w-75">

            <div class="basic-intro text-center">
                <h1 class="title black">
                    <span class="text-1 d-block text-style-2">{{ $category->category }}</span>
                </h1>

                <div class="description gray">
                    <p>{{ $category->title }}</p>
                    <p>(Views mentioned in the {{ $category->category }} vertical belong to the author(s) alone.)</p>
                </div>
            </div>

        </div>
    </section>

    <!-- Blog -->
    <section class="shock-section pt-5 pb-5">
        <div class="container">

            <div id="load-more-2" class="row g-2" data-display="9" data-columns="3">

                @foreach ($articles as $article)
                    <?php
                    $author_id = unserialize($article->author_id);
                    $author = App\Models\User::where('id', $author_id)->first();
                    $author_meta = App\Models\UserMeta::where('user_id', $author->id)->first();
                    ?>

                    <article class="col-12 col-md-6 col-lg-4 load-more-item-2" itemscope
                        itemtype="https://schema.org/Article">

                        <div class="card has-full-image vh-65 small-shadow rounded parent">

                            <!-- Image -->
                            <div class="image-wrapper hover-up-down">
                                <x-webp-image src="{{ asset('images/article/' . $article->title_image) }}" class="image"
                                    alt="{{ $article->title }}" loading="lazy" />
                            </div>

                            <!-- Body -->
                            <div class="card-body align-v-bottom">
                                <div class="holder">

                                    <!-- Category -->
                                    <a href="{{ url('category/' . $category->slug) }}"
                                        title="{{ $category->category }} articles" class="link">
                                        <span class="badge outline primary primary-hover">
                                            <span class="badge-text white-75 white-hover">
                                                {{ $category->category }}
                                            </span>
                                        </span>
                                    </a>

                                    <!-- Title -->
                                    <h2 class="title text-style-9 white" itemprop="headline">
                                        {{ $article->title }}
                                    </h2>

                                    <!-- Subtitle -->
                                    <p class="description line-clamp-3" itemprop="description">
                                        @if ($article->subtitle)
                                            {{ $article->subtitle }}
                                        @endif
                                    </p>

                                    <hr class="gray-25">

                                    <!-- Metadata -->
                                    <div class="card-metadata">

                                        <div class="item" itemprop="author" itemscope
                                            itemtype="https://schema.org/Person">
                                            <a href="{{ url('author/' . $author_meta->slug) }}"
                                                class="link gray primary-hover">
                                                <i class="fa-solid fa-user icon"></i>
                                                <span itemprop="name">{{ $author->name }}</span>
                                            </a>
                                        </div>

                                        <div class="item">
                                            <span class="link gray">
                                                <i class="fa-solid fa-calendar-days icon"></i>
                                                <time itemprop="datePublished"
                                                    datetime="{{ date('c', strtotime($article->created_at)) }}">
                                                    {{ date_format(date_create($article->created_at), 'F j, Y') }}
                                                </time>
                                            </span>
                                        </div>

                                    </div>

                                </div>

                                <!-- Overlay -->
                                <div class="overlay black"></div>

                                <!-- Link -->
                                <a href="{{ url('article/' . $article->id) }}/{{ $article->slug }}" class="full-link"
                                    itemprop="url"></a>

                            </div>

                        </div>

                        <!-- Hidden SEO Meta -->
                        <meta itemprop="image" content="{{ asset('images/article/' . $article->title_image) }}">
                        <meta itemprop="mainEntityOfPage"
                            content="{{ url('article/' . $article->id) }}/{{ $article->slug }}">

                    </article>
                @endforeach

            </div>

            <!-- Load More -->
            <div class="mt-4 text-center">
                <button id="load-more-button-2" class="button border-gradient scheme-1">
                    <span class="button-text">Load more</span>
                    <i class="fa-solid fa-arrow-rotate-right button-icon secondary primary-hover"></i>
                </button>
            </div>

        </div>
    </section>

    <!-- Category Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "CollectionPage",
        "name": "{{ $category->category }}",
        "description": "{{ $category->title }}",
        "url": "{{ url()->current() }}"
    }
    </script>

@endsection
