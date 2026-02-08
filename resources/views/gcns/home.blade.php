@extends('gcns.main')
@section('content')
    <style>
        .cards-date-num {
            font-size: 35px;
            line-height: 35px;
        }
        .heading-2.event-title {
            -webkit-line-clamp: 5;
        }
        .load-more {
            margin-inline: auto;
            display: block;
            width: max-content;
            margin-top: 50px !important;
        }
        .scroll-card {
            height: 100%;
        }
    </style>
    <!--BANNER-->
    @php
        $address = App\Models\Event\About::where('id', 16)->first();
        $date = App\Models\Event\About::where('id', 25)->first();
    @endphp
    <section data-poster-url="{{ URL::asset('gcns25/images/IMG_1555.JPG') }}"
        data-video-urls="{{ URL::asset('gcns25/videos/2024 GCNS Video.mp4') }}"
        data-autoplay="true" data-loop="true" data-wf-ignore="true" id="first-section"
        class="video-section w-background-video w-background-video-atom"><video
            id="5cf9fb86-53b8-43f6-3e05-3e8b6bea6769-video" autoplay="" loop=""
            style="background-image:url({{ URL::asset('gcns25/images/IMG_1555.JPG') }})"
            muted="" playsinline="" data-wf-ignore="true" data-object-fit="cover">
            <source src="{{ URL::asset('gcns25/videos/2024 GCNS Video.mp4') }}" data-wf-ignore="true">
        </video>
        <div class="h1-title">
            <h1 data-w-id="5cf9fb86-53b8-43f6-3e05-3e8b6bea676b"
                style="opacity: 1;transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg);transform-style: preserve-3d;"
                class="title">Global Conference on New
                Sinology <span class="text-span"> (GCNS) </span></h1>
            <p data-w-id="5cf9fb86-53b8-43f6-3e05-3e8b6bea676d"
                style="background: black;padding: 10px;margin-top: 10px;opacity: 1;transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg);transform-style: preserve-3d;"
                class="slogan">{{ $date->desc }}<br><br>{{ $address->desc }}</p>
        </div>
    </section>
    <!--BANNER END-->

    <!--FEATURES-->
    @php
        $concept = App\Models\Event\About::where('id', 20)->first();
    @endphp
    <section class="features">
        <div class="sepbar"></div>
        <div class="headingtwo">
            <div class="break-left">
                <h2 class="heading2">Concept Note</h2>
                <h4 class="heading">{!! $concept->content !!}</h4>
            </div>
            <div data-w-id="0342cf17-6ce9-24ec-ad21-ce8afeaa85a4" class="break-right-1"><img loading="lazy"
                    src="{{ URL::asset('gcns25/images/685d961c7776a97bf68b1767_box1.svg') }}" alt="" class="image">
            </div>
            <div data-w-id="0342cf17-6ce9-24ec-ad21-ce8afeaa85a6" class="break-right-2"><img loading="lazy"
                    src="{{ URL::asset('gcns25/images/685d961c7776a97bf68b1765_box2.svg') }}" alt="" class="image">
            </div>
            <div data-w-id="0342cf17-6ce9-24ec-ad21-ce8afeaa85a8" class="break-right-3"><img loading="lazy"
                    src="{{ URL::asset('gcns25/images/685d961c7776a97bf68b1766_box3.svg') }}" alt="" class="image">
            </div>
            <div data-w-id="0342cf17-6ce9-24ec-ad21-ce8afeaa85aa" class="break-right-4"><img loading="lazy"
                    src="{{ URL::asset('gcns25/images/685d961c7776a97bf68b1764_box4.svg') }}" alt=""
                    class="image">
            </div>
        </div>
    </section>
    <!--FEATURES END-->

    <!--SPEAKERS-->
    <section class="speakers" id="speakers">
        <div data-w-id="1d87f775-9991-63f0-673c-26d16ffec647" style="opacity:1" class="left-event-wrap left">
            <div class="rotateblock">
                <div class="sepbar-2 white _25"></div>
                <h2 class="heading2-2 upevents white">SPeakers</h2>
            </div>
        </div>
        <div class="sticky-right">
            <div class="container-5">
                <div class="team-slider_component">
                    <div class="w-embed">
                        <style>
                            @container (width < 40em)

                                {
                                .team-slider_cms_item.swiper-slide {
                                    width: calc(100% / 2);
                                }
                            }

                            @container (width < 25em)

                                {
                                .team-slider_cms_item.swiper-slide {
                                    width: calc(100% / 1.2);
                                }
                            }
                        </style>
                    </div>
                    <div class="team-slider_cms_wrap swiper">
                        @include('gcns.partials.speaker')
                    </div>
                    <div class="team-slider_layout">
                        <div class="team-slider_bullet_wrap">
                            <div class="team-slider_bullet_item is-active"></div>
                            <div class="team-slider_bullet_item"></div>
                        </div>
                        <div class="team-slider_btn_layout">
                            <div class="team-slider_btn_element swiper-button-disabled is-prev"><button type="button"
                                    data-arrow="prev" class="arrow-2">
                                    <div class="arrow-background"></div><svg xmlns="http://www.w3.org/2000/svg"
                                        width="1em" height="1em" viewbox="0 0 20 20" fill="none" class="arrow-icon">
                                        <path d="M13.125 16.25L6.875 10L13.125 3.75" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </button>
                            </div>
                            <div class="team-slider_btn_element is-next"><button type="button" data-arrow="next"
                                    class="arrow-2">
                                    <div class="arrow-background"></div><svg xmlns="http://www.w3.org/2000/svg"
                                        width="1em" height="1em" viewbox="0 0 20 20" fill="none"
                                        class="arrow-icon">
                                        <path d="M6.875 3.75L13.125 10L6.875 16.25" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--SPEAKERS END-->

    <!--SCHEDULE-->
    @php
        $concept = App\Models\Event\About::where('id', 18)->first();
    @endphp
    <div class="scheduele--sect" id="schedule">
        <div class="faq-container">
            <div class="faq-menu-wrapper">
                <div class="faq-menu-title">
                    <div class="break-left fullwidth">
                        <div class="sepbar schedule-bar"></div>
                        <h2 class="schedule-title">schedule</h2>
                        <h4 class="heading">{{ $concept->desc }}</h4>
                    </div>
                </div>
            </div>
            @include('gcns.partials.schedule')
        </div>
    </div>
    <!--SCHEDULE END-->

    <!--MEDIA-->
    <section class="media" id="media" style="height:auto">
        <div class="black-wrapper">
            <div class="media-grid" id="media-grid">
                @php
                    $media_files = App\Models\Event\Media::where('gcns', 2024)->orderBy('sequence_no', 'asc')->paginate(6);
                @endphp
                @include('gcns.partials.media', ['media_files' => $media_files])               
            </div>
            @if ($media_files->hasMorePages())
                <a class="rdf-button-1 editions w-button load-more" href="{{ url('pages/gcns2024/all-media') }}">View All</a>
            @endif
        </div>
    </section>
    <!--MEDIA END-->

    <!--CONCEPT-->
    @php
        $concept = App\Models\Event\About::where('id', 1)->first();
    @endphp
    <section class="concept-note">
        <div class="black-wrapper">
            <div class="div-block-7">
                <h3 class="cards-title">ABout GCNS</h3>
            </div>
            <h4 class="heading white">{{ $concept->desc }}</h4>
        </div>
    </section>
    <!--CONCEPT END-->

    <!--ALL EDITION-->
    @php
        $concept = App\Models\Event\About::where('id', 17)->first();
        $pre_23 = App\Models\Event\About::where('id', 23)->first();
        $pre_25 = App\Models\Event\About::where('id', 22)->first();
    @endphp
    <section class="past-editions" id="previous-edition">
        <div class="break-left">
            <div class="sepbar"></div>
            <h2 class="heading2">OTHER EDITIONS</h2>
            <h4 class="heading">{{ $concept->desc }}</h4>
        </div>
        <div class="page-wrapper">
            <div class="global-styles">
                <div class="html w-embed">
                    <style>
                        /* ALL PAGES CSS */
                        /* Desktop Only CSS (i.e. hover states) */
                        @media only screen and (min-width: 992px) {}

                        /* Main Variables */
                        :root {
                            --main-dark: black;
                            --main-light: white;
                        }

                        /* Global Styles */
                        ::selection {
                            background: var(--main-dark);
                            color: var(--main-light);
                            text-shadow: none;
                        }

                        img::selection,
                        svg::selection {
                            background: transparent;
                        }

                        /* Link color inherits from parent font color  */
                        a {
                            color: inherit;
                        }

                        /* Disable / enable clicking on an element and its children  */
                        .no-click {
                            pointer-events: none;
                        }

                        .can-click {
                            pointer-events: auto;
                        }

                        /* Target any element with a certain "word" in the class name  */
                        [class*="spacer"] {}

                        @media screen and (min-width:768px) {
                            .tabs_heading {
                                writing-mode: vertical-rl;
                                text-orientation: mixed;
                            }
                        }
                    </style>
                </div>
            </div>
            <main class="main-wrapper">
                <div class="tabs">
                    <a href="#" class="tabs_link w-inline-block active">
                        <p class="tabs_heading">GCNS 2025</p>
                    </a>
                    <div class="tabs_content active">
                        <div class="tab_wrap">
                            <div class="break-left fullwidth">
                                <div class="sepbar"></div>
                                <h2 class="heading2">{{ $pre_25->title }}</h2>
                                <h4 class="heading">{{ $pre_25->desc }}</h4>
                                <a href="{{ url('pages/gcns2025') }}" class="rdf-button-1 editions w-button">Visit</a>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="tabs_link w-inline-block">
                        <p class="tabs_heading">GCNS 2023</p>
                    </a>
                    <div class="tabs_content">
                        <div class="tab_wrap">
                            <div class="break-left fullwidth">
                                <div class="sepbar"></div>
                                <h2 class="heading2">{{ $pre_23->title }}</h2>
                                <h4 class="heading">{{ $pre_23->desc }}</h4>
                                <a href="{{ url('pages/gcn2023') }}" class="rdf-button-1 editions w-button">Visit</a>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </section>
    <!--ALL EDITION END-->

    <!--PARTNERS-->
    @php
        $concept = App\Models\Event\About::where('id', 19)->first();
    @endphp
    <section class="partners">
        <div class="break-left">
            <div class="sepbar"></div>
            <h2 class="heading2">Partners</h2>
            <h4 class="heading">{{ $concept->desc }}</h4>
        </div>
        @include('gcns.partials.partner')
    </section>
    <!--PARTNERS END-->

    <!--CONVENORS-->
    @php
        $concept = App\Models\Event\About::where('id', 21)->first();
    @endphp
    <section class="partners" id="convenors">
        <div class="break-left">
            <div class="sepbar"></div>
            <h2 class="heading2">Convenors</h2>
            <h4 class="heading">{{ $concept->desc }}</h4>
        </div>
        @include('gcns.partials.convenor')
    </section>
    <!--CONVENORS END-->
@endsection
