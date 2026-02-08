<!DOCTYPE html>
<!--  This site was created in Webflow. https://webflow.com  --><!--  Last Published: Wed Dec 04 2024 07:54:38 GMT+0000 (Coordinated Universal Time)  -->
@csrf
@method('PUT')

<html data-wf-page="674ffdd90a98c4f3e62a5538" data-wf-site="6746eddfad9193dcd3896f6d">

<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Language" content="en">
    <meta name="google" content="notranslate">

    <!-- HTML Meta Tags -->
    <title>{{ $article->title }}</title>
    <meta name="description" content="{{ $article->subtitle }}">
    <meta name="keywords" content="{{ $article->keywords }}">
    <meta name="author" content="ORCA">

    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ $article->title }}">
    <meta property="og:description" content="{{ $article->subtitle }}">
    <meta property="og:image" content="{{ URL::asset('images/article/' . $article->title_image) }}">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="orcasia.org">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta name="twitter:title" content="{{ $article->title }}">
    <meta name="twitter:description" content="{{ $article->subtitle }}">
    <meta name="twitter:image" content="{{ URL::asset('images/article/' . $article->title_image) }}">

    <!-- Meta Tags Generated via https://www.opengraph.xyz -->

    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="Webflow" name="generator">
    <link href="{{ URL::asset('civil/css/normalize.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('civil/css/webflow.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('civil/css/orca-8a6dfd.webflow.css') }}" rel="stylesheet" type="text/css">
    <script type="text/javascript">
        ! function(o, c) {
            var n = c.documentElement,
                t = " w-mod-";
            n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n
                .className += t + "touch")
        }(window, document);
    </script>
    <link rel="icon" href="{{ URL::asset('civil/images/ORCA-Logo-PNG-p-500.png') }}" type="image/png">
    <script src="https://cdn.usefathom.com/script.js" data-site="IQBTILBA" defer=""></script>

</head>
<style>
    .titlelink {
        text-decoration: none;
        color: black;
    }

    .text-decor {
        text-decoration: none;
        color: black;
    }

    img {
        object-fit: contain !important;
    }
</style>

<body class="body">
    <div data-w-id="a5fdbc60-e01c-ca80-251d-a2954f9ab93d" style="opacity:0" class="header">
        <div class="container-w1 gutter-outside">
            <div class="header-inner">
                <div class="header-left">
                    <div class="header-button-wrapper">
                        <a href="/episodesofexchanges" class="header-button">Back</a>
                    </div>
                    <div class="w-embed"></div>
                </div>
                <div class="project-title"> <a class="titlelink" href="/episodesofexchanges">
                        <p class="page-project-title">Episodes of India-China Exchanges</p>
                        <p class="page-project-title title-bottom">Modern Bridges and Resonant Connections</p>
                    </a>
                </div>
                <div class="header-right"><img src="{{ URL::asset('civil/images/ORCA-Website-Banner-Logo-PNG.png') }}"
                        class="image" loading="lazy" alt=""></div>
            </div>

            <div class="project-titlefor-mob"><a class="titlelink" href="/episodesofexchanges">
                    <p class="page-project-title">Episodes of India-China Exchanges</p>
                    <p class="page-project-title title-bottom">Modern Bridges and Resonant Connections</p>
                </a>
            </div>
            </a>

        </div>
    </div>
    <div class="page-wrapper">
        <div class="global-css w-embed">
            <style>
                /* Fluid Design System Settings for Desktop Breakpoint */
                html {
                    font-size: 1rem;
                }

                @media screen and (max-width:1600px) {
                    html {
                        font-size: calc(0.34318555008210183rem + 0.6568144499178982vw);
                    }
                }

                @media screen and (max-width:991px) {
                    html {
                        font-size: 1rem;
                    }
                }

                /* Blog Teaser image hover effect */
                @media (min-width:992px) {
                    .blog-teaser-image-wrapper:hover img {
                        -webkit-transform: scale(1.1);
                        -ms-transform: scale(1.1);
                        transform: scale(1.1);
                    }
                }
            </style>
        </div>
        <div data-w-id="b941c747-5247-9bcd-6e97-d2a57b98826d" class="section-blog-overview">
            <div data-w-id="7f583a75-eae1-f8a4-a925-51ab5bb28c42" class="blog-header-wrapper">
                <div class="container-w1 gutter-outside"></div>
                <div class="blog-header-divider-wrapper">
                    <div class="blog-header-divider-inner">
                        <div style="width:0%;height:1px;opacity:0" class="blog-header-divider"></div>
                    </div>
                    <div class="blog-header-divider-inner">
                        <div class="blog-header-divider right"></div>
                    </div>
                </div>
            </div>
            <div class="container-w1 gutter-outside">
                <div class="p-xl-end">
                    <div id="w-node-e2e5467c-c5ae-4ad7-b602-bc8be50db3f5-e62a5538" class="position-realtive">
                        <div class="w-layout-grid blog-post-overview-grid">
                            <div id="w-node-_117d1d6a-d362-3aba-1b79-676845fb75ba-e62a5538"
                                class="blog-post-teaser-item-wrapper page-post-teaser">
                                <div class="page-teaser-wrapper"><img
                                        src="{{ URL::asset('images/article/' . $article->title_image) }}"
                                        loading="lazy"
                                        sizes="(max-width: 479px) 85vw, (max-width: 767px) 87vw, (max-width: 991px) 82vw, (max-width: 1919px) 87vw, 1334px"
                                        alt="" class="page-teaser-image"></div>
                            </div>
                        </div>

                        <div id="w-node-_83b72c63-e61b-5763-da42-3b725b2853b6-e62a5538" class="title-subtitle">
                            <div class="page-teaser-text-wrapper title-subtitle-div">
                                <p class="page-teaser-title black">{{ $article->title }}</p>
                                <div class="p-xxs-end black">
                                    <div class="page-post-teaser-subtitle-copy">{{ $article->subtitle }}</div>
                                </div>
                                <p class="date"><?= date_format(date_create($article->created_at), 'jS F, Y') ?></p>
                                <br>
                            </div>
                        </div>

                        <div class="div-flex">
                            <div class="post-content-wrapper">
                                <div class="synopsys">
                                    <p class="blog-post-teaser-summary-copy">
                                        @if ($article->introduction != null)
                                            {{ $article->introduction }}

                                    </p>
                                    <div class="seperator"></div>
                                    @endif
                                </div>

                                <div class="blog-post-content">
                                    <p class="blog-post-teaser-summary-copy"><br>
                                        {!! $article->content !!}
                                    </p>
                                </div>

                                <div class="seperator"></div>
                                <div class="author-div">
                                    <p class="page-tags-title">Author</p>
                                    <?php $i = 1; ?>
                                    @foreach ($authors as $author)
                                        <?php $author_meta = App\Models\UserMeta::where('user_id', $author->id)->first(); ?>
                                        <a class="text-decor" href="{{ url('author/' . $author_meta->slug) }}">
                                            <div class="multi-authors">
                                                <div class="author-details">
                                                    <div class="author-image"><img
                                                            src="{{ URL::asset('images/author') }}/{{ $author_meta->avatar }}"
                                                            loading="lazy"
                                                            sizes="(max-width: 1279px) 30px, (max-width: 1919px) 2vw, 30px"
                                                            alt="{{ $author->name }}"></div>
                                                    <div class="author-name">
                                                        <p class="author-name-title">{{ $author->name }}</p>
                                                    </div>
                                                </div>
                                                <div class="author-bio">
                                                    <p class="paragraph">{{ $author_meta->about }}</p>
                                                </div>
                                            </div>
                                        </a>
                                        <?php $i++; ?>
                                    @endforeach
                                </div>

                                <div class="seperator"></div>
                                <div class="tags">
                                    <p class="page-tags-title">Tags</p>
                                    <div class="tags-div">
                                        @foreach ($tags as $tag)
                                            <a href="{{ url('tag/' . $tag['slug']) }}"
                                                class="tag-btn w-button">{{ $tag['tag'] }}</a>
                                        @endforeach
                                    </div>
                                </div>
                                <br><br>
                                <div class="social-media-share">
                                    <a target="_blank"
                                        href="https://www.facebook.com/sharer.php?u={{ url()->current() }}"
                                        class="w-inline-block">
                                        <div class="social-media-icon w-embed"><svg xmlns="http://www.w3.org/2000/svg"
                                                x="0px" y="0px" width="100%" height="100%" viewbox="0 0 50 50">
                                                <path
                                                    d="M41,4H9C6.24,4,4,6.24,4,9v32c0,2.76,2.24,5,5,5h32c2.76,0,5-2.24,5-5V9C46,6.24,43.76,4,41,4z M37,19h-2c-2.14,0-3,0.5-3,2 v3h5l-1,5h-4v15h-5V29h-4v-5h4v-3c0-4,2-7,6-7c2.9,0,4,1,4,1V19z">
                                                </path>
                                            </svg></div>
                                    </a>
                                    <a target="_blank"
                                        href="https://www.linkedin.com/shareArticle?mini=true&url={{ url()->current() }}"
                                        class="w-inline-block">
                                        <div class="social-media-icon w-embed"><svg xmlns="http://www.w3.org/2000/svg"
                                                x="0px" y="0px" width="100%" height="100%" viewbox="0 0 50 50">
                                                <path
                                                    d="M41,4H9C6.24,4,4,6.24,4,9v32c0,2.76,2.24,5,5,5h32c2.76,0,5-2.24,5-5V9C46,6.24,43.76,4,41,4z M17,20v19h-6V20H17z M11,14.47c0-1.4,1.2-2.47,3-2.47s2.93,1.07,3,2.47c0,1.4-1.12,2.53-3,2.53C12.2,17,11,15.87,11,14.47z M39,39h-6c0,0,0-9.26,0-10 c0-2-1-4-3.5-4.04h-0.08C27,24.96,26,27.02,26,29c0,0.91,0,10,0,10h-6V20h6v2.56c0,0,1.93-2.56,5.81-2.56 c3.97,0,7.19,2.73,7.19,8.26V39z">
                                                </path>
                                            </svg></div>
                                    </a>
                                    <a target="_blank"
                                        href="https://twitter.com/share?&text={{ $article->title }}&url={{ url()->current() }}"
                                        class="w-inline-block">
                                        <div class="social-media-icon w-embed">
                                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100%"
                                                height="100%" viewbox="0 0 50 50">
                                                <path
                                                    d="M 11 4 C 7.134 4 4 7.134 4 11 L 4 39 C 4 42.866 7.134 46 11 46 L 39 46 C 42.866 46 46 42.866 46 39 L 46 11 C 46 7.134 42.866 4 39 4 L 11 4 z M 13.085938 13 L 21.023438 13 L 26.660156 21.009766 L 33.5 13 L 36 13 L 27.789062 22.613281 L 37.914062 37 L 29.978516 37 L 23.4375 27.707031 L 15.5 37 L 13 37 L 22.308594 26.103516 L 13.085938 13 z M 16.914062 15 L 31.021484 35 L 34.085938 35 L 19.978516 15 L 16.914062 15 z">
                                                </path>
                                            </svg>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="seperator"></div>
                        <div class="related-posts">
                            <h3 class="related-articles-title">Related Articles</h3>
                            <div class="related-posts-grid">
                                @php
                                    $rel_articles = App\Models\DMArticle::select(
                                        'id',
                                        'status',
                                        'title_image',
                                        'views',
                                        'author_id',
                                        'title',
                                        'created_at',
                                        'category',
                                        'slug',
                                    )
                                        ->where('status', 'approved')
                                        ->orderBy('created_at', 'desc')
                                        ->limit(3)
                                        ->get();
                                @endphp
                                @foreach ($rel_articles as $r_article)
                                    <a href="{{ url('episodesofexchanges/' . $r_article->id . '/' . $r_article->slug) }}"
                                        class="related-post-div w-inline-block">
                                        <div class="related-post-image"><img
                                                src="{{ URL::asset('images/article/' . $r_article->title_image) }}"
                                                loading="lazy"
                                                sizes="(max-width: 479px) 35vw, (max-width: 1919px) 17vw, 268.796875px"
                                                alt="" class="related-post-image-indiv"></div>
                                        <div class="releated-post-content">
                                            <h4 class="related-post-title">{{ $r_article->title }}</h4>
                                        </div>
                                    </a>
                                @endforeach
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <style>
                .footer-civil {
                    background-color: #000;
                    justify-content: center;
                    padding-top: 2em;
                    padding-bottom: 2em;
                    display: flex;
                }

                .footer-text {
                    color: grey;
                    text-align: center;
                    margin-bottom: 0;
                }

                .link {
                    color: #fff;
                }
            </style>
            <div class="footer-civil">
                <p class="footer-text">ORCA © 2024 - All rights reserved. Designed by <a href="https://kwad.in/"
                        class="link">Kwad</a> </p>
            </div>
        </div>
    </div>
    <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=6746eddfad9193dcd3896f6d"
        type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous">
    </script>
    <script src="{{ URL::asset('civil/js/webflow.js') }}" type="text/javascript"></script>
</body>

</html>

<?php
$art = App\Models\Article::where('id', $article->id);
$art->update([
    'views' => $article->views + 1,
]);
?>
