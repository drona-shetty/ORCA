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

    <!-- Featured -->
    <section class="shock-section has-holder pt-2 gray-10">
        <div class="container">
            <!-- Posts -->
            <div class="row g-0">
                <div class="col-12 col-md-12">
                    <!-- Intro -->
                    <div class="basic-intro text-center">

                    </div>

                </div>

                <!-- Author -->
                <div class="comments mt-3">

                    <div class="comments-wrapper">
                        <!-- Comment -->
                        <div id="comment-1" class="comment">
                            <div class="comment-metadata">
                                <div class="comment-author">
                                    <div class="author-photo">
                                        <img src="{{ URL::asset('images/author') }}/{{ $user_meta->avatar }}"
                                            class="image shadow" alt="Image name">
                                    </div>
                                    <h2 class="text-1 text-style-5 author-name">{{ $user->name }}</h2>
                                </div>
                            </div>
                            <p class="mt-1">{{ $user_meta->about }}</p>
                            <!--
                            <div class="exta-content">
                                <div class="col-6">
                                    <span>Email: {{ $user->email }}</span>
                                </div>
                                <div class="col-6">
                                    <a class="" href="{{ $user_meta->twitter }}" target="_blank">
                                        twitter
                                           <i class="bi bi-twitter"></i>
                                    </a>
                                    <a class="" href="{{ $user_meta->facebook }}" target="_blank">
                                        facebook
                                           <i class="bi bi-facebook"></i>
                                    </a>
                                    <a class="" href="{{ $user_meta->linkedin }}" target="_blank">
                                    linkedin  <i class="bi bi-linkedin"></i>
                                    </a>
                                    <a class="" href="{{ $user_meta->instagram }}" target="_blank">
                                    instagram  <i class="bi bi-instagram"></i>
                                    </a>
                                </div>
                                -->
                            <!-- <div class="col-6">
                                    <?php echo count($articles); ?> Posts
                                </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog -->
    <section class="shock-section pt-2 pb-2">
        <div class="container">
            <!-- Posts -->
            <div id="load-more-1" class="row g-5" data-display="6" data-columns="3">
                @foreach (collect($articles)->sortByDesc('created_at') as $article)
                    <?php $category = App\Models\Category::where('id', $article->category)->first(); ?>
                    <div class="col-12 col-md-6 col-lg-4 load-more-item-1">
                        <div class="card has-image shadow parent">

                            <!-- Label -->
                            <span class="label-vertical to-bottom-right-out">
                                <span class="label-line gray"></span>
                                <span class="label-text gray"><i class="icon fas fa-user-circle"></i>
                                    {{ $user->name }}</span>
                            </span>
                            <!-- Image -->
                            <div class="image-wrapper rounded-top hover-zoom">
                                <x-webp-image src="{{ URL::asset('images/article/' . $article->title_image) }}" alt="Image name"
                                    class="image" />
                            </div>
                            <!-- Body -->
                            <div class="card-body rounded-bottom bg-color white">
                                <h3 class="title text-style-11 black">{{ $article->title }}</h3>
                                <p class="description line-clamp-3">{{ $article->subtitle }}</p>
                                <!-- Button -->

                                <div class="tag-cloud mt-2">
                                    <a href="#your-link" class="link">
                                        <span class="badge outline gray-50 primary-hover">
                                            <span
                                                class="badge-text gray white-hover"><?= date_format(date_create($article->created_at), 'F j, Y') ?></span>
                                        </span>
                                    </a>
                                    @if ($category != null)
                                        <a href="{{ url('category/' . $category->slug) }}" class="link">
                                            <span class="badge outline gray-50 primary-hover">
                                                <span class="badge-text gray white-hover">{{ $category->category }}</span>
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
                            <!-- Link -->
                            @if ($category != null)
                                <a href="{{ url('article/' . $article->id) }}/{{ $article->slug }}" class="full-link"></a>
                            @else
                                <a href="{{ url('episodesofexchanges/' . $article->id) }}/{{ $article->slug }}"
                                    class="full-link"></a>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="mt-4 text-center">
                <!-- Button -->
                <button id="load-more-button-1" class="button double-edge transparent black-hover">
                    <span class="button-text black white-hover">Load more</span>
                    <i class="fa-solid fa-rotate-right button-icon black white-hover"></i>
                    <span class="overlay gray-50 magnetic-effect"></span>
                </button>
            </div>
        </div>
    </section>

@endsection
