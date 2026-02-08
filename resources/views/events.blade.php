@extends('web')
@section('title', 'ORCA | Organisation for Research on China and Asia')
@section('meta_keywords', 'ORCA')
@section('meta_description', 'ORCA')

@section('content')

    <style>
        .shock-header .navbar .navbar-nav .nav-link {
            color: black !important;
        }
    </style>

    <!-- Images -->
    <section class="shock-section has-holder pt-4 pb-8">
        <div class="container max-w-85">

            <!-- Intro -->
            <div class="basic-intro text-center mb-5">
                <h1 class="title black">
                    <span class="text-1 text-style-5">Events at </span>
                    <span class="text-2 text-style-6"><mark class="animated-underline primary-25">ORCA</mark></span>
                </h1>
                <p class="description">To view all pictures of GCNS 2024, <a href="https://orcasia.org/pages/gcns"
                        target="_blank" style="color:red;">click
                        here.</a></p>
            </div>
            <!-- Banner -->
            <section class="shock-section mt-2 bg-image bg-fixed" data-bg-image="{{ URL::asset('images/gcnsorca.jpg') }}">
                <div class="banner vh-65 align-h-center align-v-center">
                    <div class="holder">

                    </div>
                </div>
                <!-- Overlay -->
                <div class="overlay gray-25"></div>
            </section>

            <br><br>
            <!-- Gallery -->
            <div class="gallery">
                <div class="row g-2">
                    <div class="col-4" data-aos="fade-up" data-aos-delay="600">
                        <a href="{{ URL::asset('images/png/event.jpg') }}" class="item lightbox-link">
                            <div class="image-wrapper shadow rounded hover-zoom" data-lax="v-bottom">
                                <img src="{{ URL::asset('images/png/events-1.png') }}" alt="Event 1"
                                    class="image fit-cover" />
                                <div class="overlay primary-25"></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-4" data-aos="fade-up" data-aos-delay="900">
                        <a href="{{ URL::asset('images/png/event.jpg') }}" class="item lightbox-link">
                            <div class="image-wrapper shadow rounded hover-zoom" data-lax="v-top">
                                <img src="{{ URL::asset('images/png/events-2.png') }}" alt="Event 2"
                                    class="image fit-cover" />
                                <div class="overlay primary-25"></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-4" data-aos="fade-up" data-aos-delay="1200">
                        <a href="{{ URL::asset('images/png/event.jpg') }}" class="item lightbox-link">
                            <div class="image-wrapper shadow rounded hover-zoom" data-lax="v-bottom">
                                <img src="{{ URL::asset('images/png/events-3.png') }}" alt="Event 3"
                                    class="image fit-cover" />
                                <div class="overlay primary-25"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Banner -->
    <section class="shock-section has-overlay mt-2 bg-image bg-fixed" data-bg-image="{{ URL::asset('images/event.jpeg') }}">
        <div class="banner vh-65 align-h-center align-v-center">
            <div class="holder">
                <div class="gallery">
                    <a href="https://youtu.be/Rwx7_yykb5I" class="item active lightbox-link">
                        <!-- Circular text -->
                        <div class="circular-text large mix-blend-lighter" data-lax="inertia-top">
                            <div class="emblem gray">O R C A•E V E N T S•</div>
                        </div>
                        <i style="color: #e41e25!important;" class="fa-solid fa-circle-play gallery-icon white"></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- Overlay -->
        <div class="overlay gray-25"></div>
    </section>

    <!-- events -->
    <section class="shock-section pt-5 mt-2 pb-5">
        <div class="container">
            <!-- Posts -->
            <div class="row g-2" data-columns="2">
                <?php $latest_articles = App\Models\Article::select('id', 'author_id', 'category', 'read_time', 'title', 'slug', 'subtitle', 'title_image', 'created_at')
                    ->whereIn('category', ['31'])
                    ->where('status', 'approved')
                    ->orderBy('created_at', 'desc')
                    ->limit(5)
                    ->get();
                ?>
                @foreach ($latest_articles as $article)
                    <?php $category = App\Models\Category::where('id', $article->category)->first();
                    $author_id = unserialize($article->author_id);
                    $author = App\Models\User::where('id', $author_id)->first();
                    ?>
                    <div class="col-12 col-md-6 load-more-item">
                        <div class="card has-full-image vh-60 small-shadow rounded parent">
                            <!-- Image -->
                            <div class="image-wrapper hover-up-down">
                                <img src="{{ URL::asset('images/article/' . $article->title_image) }}"
                                    alt="$article->title_image" class="image" />
                            </div>
                            <!-- Body -->
                            <div class="card-body align-v-bottom">
                                <div class="holder">
                                    <a href="{{ url('category' . $category->slug) }}" class="link">
                                        <span class="badge outline primary primary-hover">
                                            <span class="badge-text white-75 white-hover">{{ $category->category }}</span>
                                        </span>
                                    </a>
                                    <h1 class="title white"><span
                                            class="text-1 text-style-5"><?= date_format(date_create($article->created_at), 'd') ?>
                                        </span><br>
                                        <span
                                            class="text-2 text-style-10"><?= date_format(date_create($article->created_at), 'F Y') ?>
                                        </span>

                                    </h1>

                                    <h3 class="title text-style-11 white">{{ $article->title }}</h3>
                                    <p class="description gray line-clamp-2">{{ $article->subtitle }}</p>
                                    <hr class="gray-25">

                                </div>
                                <!-- Overlay -->
                                <div class="overlay black"></div>
                                <!-- Link -->
                                <a href="{{ url('article/' . $article->id . '/' . $article->slug) }}"
                                    class="full-link"></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-----timeline exit -->
@endsection
