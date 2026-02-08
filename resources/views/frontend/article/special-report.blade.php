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

    <style>
        img {
            max-width: 100%;
            height: auto;
            /* background-size: contain; */
            object-fit: cover;
        }

        p {
            color: {{ $article->p_color ?? '#fff' }} !important;
        }

        a {
            color: {{ $article->a_color ?? '#e41e25' }};
        }

        p.introduction {
            text-align: justify;
        }

        .aticlesubtitle {
            color: #fff !important;
            text-align: center;
        }

        ul {
            color: black;
        }

        li {
            color: black;
        }

        .shock-section {
            background: {{ $article->section_bg }};
        }

        .bg-grad-c {
            background: linear-gradient(to top, {{ $article->section_bg }} 10%, transparent 60%) !important;
        }

        .author-name {
            color: white !important;
        }

        .shock-section .content {
            max-width: 100% !important;
        }

        @media (min-width: 1200px) {
            .authflex {
                display: flex;
                align-items: flex-start;
                gap: 30px;
            }

            .wid70 {
                width: 75%;
            }

            .wid30 {
                width: 25%;
                margin-top: 10px !important;
            }

            .thumbimg {
                max-width: 70%;
            }

            /* Sticky author section */
            .comments {
                /* position: sticky; */
                /* top: 100px; */
                /* Space from top while scrolling */
            }

            .comments .comments-wrapper {
                margin-bottom: 0px;
                padding: 1rem 0rem;
            }

            .comments .comment {
                padding: 1rem 0rem;
            }

            .shock-section .content h2 {
                margin-bottom: 1rem;
            }

            .comments .comment .comment-content {
                margin: 1rem 0rem;
            }

            .dpdf {
                color: white !important;
            }
        }

        @media print {
            body {
                -webkit-print-color-adjust: exact;
                print-color-adjust: exact;
            }

            .image-wrapper {
                position: absolute;
            }

            .text-white {
                color: #fff !important;
            }
        }
    </style>

    <!-- Banner -->
    <section class="shock-section has-overlay">
        <div class="banner">
            <div class="content-wrapper">
                <!-- Intro -->
                <div class="extended-intro max-w-65 mb-25">
                    <h1 class="title white text-white">
                        <div class="logo-print-only">
                            <img src="{{ URL::asset('images/ORCA Website Banner Logo PNG.png') }}"
                                style=" width: 200px; margin-bottom:2rem; " alt="ORCA" />
                        </div>
                        <span class="text-1 text-center text-style-3 text-white">{{ $article->title }}</span>
                    </h1>
                    <!--  <p class="aticlesubtitle text-style-9 text-white">{{ $article->subtitle }}</p> -->
                </div>
            </div>
            <!-- Metadata -->
            <div class="banner-metadata absolute">
                @foreach ($authors as $author)
                    <?php $author_meta = App\Models\UserMeta::where('user_id', $author->id)->first(); ?>
                    <div class="item">
                        <a href="{{ url('author/' . $author_meta->slug) }}">
                            <h5 class="text text-style-11 white">
                                <i class="icon fas fa-user-circle"></i>{{ $author->name }}
                            </h5>
                        </a>
                    </div>
                @endforeach
                <div class="item">
                    <h5 class="text text-style-11 white"><i
                            class="icon fas fa-calendar-alt"></i><?= date_format(date_create($article->created_at), 'M j, Y') ?>
                    </h5>
                </div>
                <a href="{{ url('category/' . $category->slug) }}">
                    <div class="item">
                        <h5 class="text text-style-11 white"><i
                                class="icon fas fa-layer-group"></i>{{ $category->category }}</h5>
                </a>
            </div>
        </div>
        <!-- Image -->
        <div class="image-wrapper">
            <img src="{{ URL::asset('images/article/' . $article->title_image) }}" class="image vh-100 fit-cover"
                alt="This is an example description for this item." />
        </div>
        <!-- Overlay -->
        <div class="overlay black-50 hidden-print bg-grad-c"></div>
        </div>
    </section>

    <!-- Post -->
    <section class="shock-section pt-5 pb-5">
        <div class="container max-w-75">
            <div class="content scheme-1">
                <div class="authflex">
                    <div class="wid70">
                        <!-- <p class="introduction">
                        <strong>
                            <em>
                                @if ($article->introduction != null)
                                {{ $article->introduction }}
                                @endif
                            </em>
                        </strong>
                    </p> -->

                        <div class="article-content">
                            {!! $article->content !!}
                        </div>
                    </div>

                    <!-- Author -->
                    <div class="comments mt-2 wid30">
                        <h2>Author</span></h2>
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
                                                class="link gray primary-hover">
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

                        <div class="pdf img">
                            <h5 class="dpdf">Download PDF</span></h5>
                            <a target="_blank" data-id="{{ $article->id }}" id="pdfLink" href="{{ $article->subtitle }}">
                                <img class="thumbimg"
                                    src="@if ($article->introduction != null) {{ $article->introduction }} @endif">
                            </a>

                        </div>

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

    <!-- Side Widget -->
    <div class="side-widget to-left invert-color mix-blend-difference d-only-desktop">
        <div class="item">
            <span class="widget label-icons">
                <a href="https://www.facebook.com/sharer.php?u={{ url()->current() }}" class="link black black-hover"><i
                        class="icon fab fa-facebook-f"></i></a>
                <a href="https://twitter.com/share?&text={{ $article->title }}&url={{ url()->current() }}"
                    class="link black black-hover"><i class="icon fab fa-twitter"></i></a>
                <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ url()->current() }}"
                    class="link black black-hover"><i class="icon fab fa-linkedin-in"></i></a>
                <span class="label-line black"></span>
            </span>
        </div>
    </div>
@endsection
@section('scripts')
<script>
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
    $('#pdfLink').on('click', function(e) {
        e.preventDefault();
        let url = $(this).attr('href');
        let id = $(this).attr('data-id');

        $.ajax({
            url: '{{ url("pdf-log") }}',  // your Laravel API route
            method: 'POST',
            data: { id: id },
            success: function() {
                // After logging, open the PDF in new tab
                window.open(url, '_blank');
            }
        });
    });

</script>
@endsection
<?php
$art = App\Models\Article::where('id', $article->id);
$art->update([
    'views' => $article->views + 1,
]);
?>
