@extends('web')
@section('title', $article->title)
@section('meta_keywords', $article->keywords)
@section('meta_description', $article->introduction)
@section('meta')
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="{{ $article->title }}" />
    <meta property="og:description" content="{{ $article->introduction }}" />
    <meta property="og:image" content="{{ URL::asset('images/article/' . $article->title_image) }}" />
    <meta name="twitter:card" content="summary_large_image">
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

        ul {
            color: black;
        }

        li {
            color: black;
        }
    </style>

    <!-- Banner -->
    <section class="shock-section has-overlay">
        <div class="banner">
            <div class="content-wrapper">
                <!-- Intro -->
                <div class="extended-intro max-w-65 mb-25">
                    <h1 class="title text-style-1 text-offset">
                        <span class="text-1 filled primary-50" data-lax="inertia-top">Daily Conversations </span>
                        <span class="text-1 outline white">Daily Conversations</span>
                    </h1>
                    <span class="text-2 text-style-4 fw-400 text-outline text-italic white">In Chinese Media<br><i
                            class="icon fas fa-calendar-alt"></i>
                        <?= date_format(date_create($article->created_at), 'M j, Y') ?></span>

                </div>
            </div>
            <!-- Metadata -->

            <!-- Image -->
            <div class="image-wrapper">
                <img src="{{ URL::asset('images/article/' . $article->title_image) }}" class="image vh-100 fit-cover"
                    alt="This is an example description for this item." />
            </div>
            <!-- Overlay -->
            <div class="overlay black-50"></div>
        </div>
    </section>

    <!-- Post -->
    <section class="shock-section mb-4">
        <div class="container max-w-85">
            <div class="holder p-5 climb shadow rounded" data-bg-color="#fff" data-lax="inertia-top">
                <div class="content max-w-85 scheme-2">

                    <!-- Breadcrumb -->
                    <div class="breadcrumb-nav scheme-2 primary">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item has-icon">
                                    <a href="{{ URL::asset('/') }}" class="breadcrumb-link"><i
                                            class="fa-solid fa-house icon"></i><span class="text">Home</span></a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="{{ URL::asset('category/cicm') }}" class="breadcrumb-link">CiCM</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    <?= date_format(date_create($article->created_at), 'M j, Y') ?>
                                </li>
                            </ol>
                        </nav>
                    </div>

                    <!-- Paragraph -->
                    {!! $article->content !!}

                    <!-- Author -->
                    <div class="comments mt-2">
                        <h2>Prepared By</span></h2>
                        <div class="comments-wrapper">
                            <!-- Comment -->
                            <?php $i = 1; ?>
                            @foreach ($authors as $author)
                                <?php $author_meta = App\Models\UserMeta::where('user_id', $author->id)->first(); ?>
                                <div id="comment-{{ $i }}" class="comment">
                                    <div class="comment-metadata">
                                        <div class="comment-author">
                                            <div class="author-photo">
                                                <img src="{{ URL::asset('images/author') }}/{{ $author_meta->avatar }}"
                                                    class="image shadow" alt="Image name">
                                            </div>
                                            <a href="{{ url('author/' . $author_meta->slug) }}"
                                                class="link black primary-hover">
                                                <h5 style="color:#000;" class="author-name">{{ $author->name }}</h5>
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
            <div>
    </section>
@endsection