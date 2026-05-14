@extends('web')

@section('title', 'ORCA Events | Conferences, Dialogues & Strategic Forums on China and Asia')

@section('meta_keywords', 'ORCA events, China conferences India, Asia strategic dialogue, Indo-Pacific events, ORCA seminars, geopolitics conferences')

@section('meta_description', 'Explore ORCA events, conferences, strategic dialogues, and academic forums focused on China, Asia, Indo-Pacific geopolitics, security, trade, and international relations.')

@section('meta')
    <!-- Canonical -->
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="ORCA Events">
    <meta property="og:description"
        content="Explore ORCA conferences, seminars, strategic dialogues, and geopolitical events focused on China and Asia.">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('images/gcnsorca.jpg') }}">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="ORCA Events">
    <meta name="twitter:description"
        content="Explore ORCA conferences and strategic dialogues on China and Asia.">
    <meta name="twitter:image" content="{{ asset('images/gcnsorca.jpg') }}">

    <!-- Structured Data -->
    <script type="application/ld+json">
        {
            "@context":"https://schema.org",
            "@type":"CollectionPage",
            "name":"ORCA Events",
            "url":"{{ url()->current() }}",
            "description":"Events, seminars, and strategic dialogues conducted by ORCA."
        }
    </script>
@endsection

@section('content')

    <style>
        .shock-header .navbar .navbar-nav .nav-link {
            color: black !important;
        }
    </style>

    <!-- Events Section -->
    <section class="shock-section has-holder pt-4 pb-8">
        <div class="container max-w-85">

            <!-- Intro -->
            <div class="basic-intro text-center mb-5">
                <h1 class="title black">
                    <span class="text-1 text-style-5">Events at </span>
                    <span class="text-2 text-style-6">
                        <mark class="animated-underline primary-25">ORCA</mark>
                    </span>
                </h1>

                <p class="description">
                    To view all pictures of GCNS 2024,
                    <a href="https://orcasia.org/pages/gcns"
                        target="_blank"
                        rel="noopener noreferrer"
                        style="color:red;"
                        aria-label="View GCNS 2024 event gallery">
                        click here.
                    </a>
                </p>
            </div>

            <!-- Banner -->
            <section class="shock-section mt-2 bg-image bg-fixed"
                data-bg-image="{{ asset('images/gcnsorca.jpg') }}"
                aria-label="ORCA Events Banner">
                <div class="banner vh-65 align-h-center align-v-center">
                    <div class="holder"></div>
                </div>

                <div class="overlay gray-25"></div>
            </section>

            <br><br>

            <!-- Gallery -->
            <section aria-labelledby="orca-gallery">
                <h2 id="orca-gallery" class="visually-hidden">
                    ORCA Events Gallery
                </h2>

                <div class="gallery">
                    <div class="row g-2">

                        <div class="col-4" data-aos="fade-up" data-aos-delay="600">
                            <a href="{{ asset('images/png/event.jpg') }}"
                                class="item lightbox-link"
                                aria-label="View ORCA Event Image 1">
                                <div class="image-wrapper shadow rounded hover-zoom" data-lax="v-bottom">
                                    <img src="{{ asset('images/png/events-1.png') }}"
                                        alt="ORCA Event Gallery Image 1"
                                        class="image fit-cover"
                                        loading="lazy"
                                        decoding="async" />

                                    <div class="overlay primary-25"></div>
                                </div>
                            </a>
                        </div>

                        <div class="col-4" data-aos="fade-up" data-aos-delay="900">
                            <a href="{{ asset('images/png/event.jpg') }}"
                                class="item lightbox-link"
                                aria-label="View ORCA Event Image 2">
                                <div class="image-wrapper shadow rounded hover-zoom" data-lax="v-top">
                                    <img src="{{ asset('images/png/events-2.png') }}"
                                        alt="ORCA Event Gallery Image 2"
                                        class="image fit-cover"
                                        loading="lazy"
                                        decoding="async" />

                                    <div class="overlay primary-25"></div>
                                </div>
                            </a>
                        </div>

                        <div class="col-4" data-aos="fade-up" data-aos-delay="1200">
                            <a href="{{ asset('images/png/event.jpg') }}"
                                class="item lightbox-link"
                                aria-label="View ORCA Event Image 3">
                                <div class="image-wrapper shadow rounded hover-zoom" data-lax="v-bottom">
                                    <img src="{{ asset('images/png/events-3.png') }}"
                                        alt="ORCA Event Gallery Image 3"
                                        class="image fit-cover"
                                        loading="lazy"
                                        decoding="async" />

                                    <div class="overlay primary-25"></div>
                                </div>
                            </a>
                        </div>

                    </div>
                </div>
            </section>

        </div>
    </section>

    <!-- Video Banner -->
    <section class="shock-section has-overlay mt-2 bg-image bg-fixed"
        data-bg-image="{{ asset('images/event.jpeg') }}"
        aria-label="ORCA Events Video Banner">

        <div class="banner vh-65 align-h-center align-v-center">
            <div class="holder">
                <div class="gallery">
                    <a href="https://youtu.be/Rwx7_yykb5I"
                        class="item active lightbox-link"
                        target="_blank"
                        rel="noopener noreferrer"
                        aria-label="Watch ORCA event video on YouTube">

                        <div class="circular-text large mix-blend-lighter" data-lax="inertia-top">
                            <div class="emblem gray">O R C A•E V E N T S•</div>
                        </div>

                        <i style="color: #e41e25!important;"
                            class="fa-solid fa-circle-play gallery-icon white"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="overlay gray-25"></div>
    </section>

    <!-- Latest Events -->
    <section class="shock-section pt-5 mt-2 pb-5" aria-labelledby="latest-events">
        <div class="container">

            <h2 id="latest-events" class="visually-hidden">
                Latest ORCA Events
            </h2>

            <div class="row g-2" data-columns="2">

                <?php
                $latest_articles = App\Models\Article::select(
                    'id',
                    'author_id',
                    'category',
                    'read_time',
                    'title',
                    'slug',
                    'subtitle',
                    'title_image',
                    'created_at'
                )
                    ->whereIn('category', ['31'])
                    ->where('status', 'approved')
                    ->orderBy('created_at', 'desc')
                    ->limit(5)
                    ->get();
                ?>

                @foreach ($latest_articles as $article)

                    <?php
                    $category = App\Models\Category::where('id', $article->category)->first();
                    $author_id = unserialize($article->author_id);
                    $author = App\Models\User::where('id', $author_id)->first();
                    ?>

                    <article class="col-12 col-md-6 load-more-item">
                        <div class="card has-full-image vh-60 small-shadow rounded parent">

                            <div class="image-wrapper hover-up-down">
                                <img src="{{ asset('images/article/' . $article->title_image) }}"
                                    alt="{{ $article->title }} - ORCA Event"
                                    class="image"
                                    loading="lazy"
                                    decoding="async" />
                            </div>

                            <div class="card-body align-v-bottom">
                                <div class="holder">

                                    <a href="{{ url('category/' . $category->slug) }}"
                                        class="link"
                                        aria-label="View {{ $category->category }} category">

                                        <span class="badge outline primary primary-hover">
                                            <span class="badge-text white-75 white-hover">
                                                {{ $category->category }}
                                            </span>
                                        </span>
                                    </a>

                                    <time datetime="{{ date('c', strtotime($article->created_at)) }}"
                                        class="d-block mb-2 text-white">
                                        <?= date_format(date_create($article->created_at), 'd F Y') ?>
                                    </time>

                                    <h2 class="title text-style-11 white">
                                        {{ $article->title }}
                                    </h2>

                                    <p class="description gray line-clamp-2">
                                        {{ $article->subtitle }}
                                    </p>

                                    <hr class="gray-25">
                                </div>

                                <div class="overlay black"></div>

                                <a href="{{ url('article/' . $article->id . '/' . $article->slug) }}"
                                    class="full-link"
                                    aria-label="{{ $article->title }}">
                                </a>

                            </div>
                        </div>
                    </article>

                @endforeach

            </div>
        </div>
    </section>

@endsection