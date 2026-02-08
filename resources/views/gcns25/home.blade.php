@extends('gcns25.main')
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

        .main_card_contain.black._02,
        .main_card_contain.black._01 {
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
        }

        .break-right-5 {
            position: absolute;
            bottom: -100%;
            left: auto;
            right: 7%;
            color: #fff;
            font-family: Bebas Neue, sans-serif;
            font-size: 46px;
            line-height: 30px;
            background-color: var(--orca-red);
            padding: 20px;
        }

        .concept-note-schedule {
            display: none;
            color: #fff;
            font-family: Bebas Neue, sans-serif;
            font-size: 46px;
            line-height: 30px;
            background-color: var(--orca-red);
            padding: 20px;
        }

        @media (max-width: 768px) {
            .concept-note-schedule {
                display: block;
            }

            .break-right-5 {
                display: none;
            }
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if (request()->get('email_status') === 'success')
        <script>
            window.addEventListener('DOMContentLoaded', () => {
                Swal.fire({
                    toast: true,
                    position: 'top-end',
                    icon: 'success',
                    title: 'Email sent successfully!',
                    showConfirmButton: false,
                    timer: 30000,
                    timerProgressBar: true
                });
            });
        </script>
    @endif

    @if (request()->get('email_status') === 'failed')
        <script>
            window.addEventListener('DOMContentLoaded', () => {
                Swal.fire({
                    toast: true,
                    position: 'top-end',
                    icon: 'error',
                    title: 'Failed to send email!',
                    showConfirmButton: false,
                    timer: 30000,
                    timerProgressBar: true
                });
            });
        </script>
    @endif

    <!--BANNER-->
    @php
        $address = App\Models\Event\About::where('id', 12)->first();
        $date = App\Models\Event\About::where('id', 24)->first();
    @endphp
    <section id="first-section"
        style="background-image:linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),url({{ URL::asset('gcns25/images/Twitter-cover.jpg') }});background-size: cover;background-repeat: no-repeat;background-position: center;"
        class="video-section w-background-video w-background-video-atom">
        <div class="h1-title">
            <h1 data-w-id="5cf9fb86-53b8-43f6-3e05-3e8b6bea676b"
                style="opacity: 1;transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg);transform-style: preserve-3d;"
                class="title">Global Conference on New
                Sinology <span class="text-span"> (GCNS) </span></h1>
            <p data-w-id="5cf9fb86-53b8-43f6-3e05-3e8b6bea676d"
                style="background: black;padding: 10px;margin-top: 10px;opacity: 1;transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg);transform-style: preserve-3d;"
                class="slogan">{{ $date->desc }}<br><br>{{ $address->desc }}</p>
            <a class="rdf-button-1" href="https://orcasia.org/allfiles/ORCA%27s%20GCNS_2025%20Conference%20Report.pdf" target="_blank">
    GCNS 2025 Conference Report
</a>
        </div>
    </section>
    <!--BANNER END-->

    <!--FEATURES-->
    @php
        $concept = App\Models\Event\About::where('id', 2)->first();
    @endphp
    <section class="features">
        <div class="sepbar"></div>
        <div class="headingtwo">
            <div class="break-left">
                <h2 class="heading2">Concept Note</h2>
                <h4 class="heading">{{ $concept->desc }}</h4>
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
                    src="{{ URL::asset('gcns25/images/685d961c7776a97bf68b1764_box4.svg') }}" alt="" class="image">
            </div>
            <div class="break-right-5">
                <h1>DAY 1: REGISTRATIONS ARE CLOSED</h1>
                <h1>DAY 2: INVITE-ONLY</h1>
            </div>
        </div>
        <div class="concept-note-schedule">
            <h1>DAY 1: REGISTRATIONS ARE CLOSED</h1>
            <h1>DAY 2: INVITE-ONLY</h1>
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
                        @include('gcns25.partials.speaker')
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
                                        width="1em" height="1em" viewbox="0 0 20 20" fill="none" class="arrow-icon">
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

    <!--FOCUS-->
    @php
        $concept = App\Models\Event\About::where('id', 3)->first();
    @endphp
    <section class="features">
        <div class="flexcontainer">
            <div class="w-layout-grid grid">
                <div id="w-node-c162a1ea-7beb-61c0-0ebb-c2289ee30f11-53d1b8f2"
                    data-w-id="c162a1ea-7beb-61c0-0ebb-c2289ee30f11"
                    style="opacity:1;background-image:url('{{ URL::asset('images/event/media/' . $concept->image) }}')"
                    class="main_card_contain black _01">
                    <div class="div-contain">
                        <h3 class="cards-title">{{ $concept->title }}</h3>
                        <h4 class="heading white">{{ $concept->desc }}</h4>
                    </div>
                </div>
                @php
                    $concept = App\Models\Event\About::where('id', 4)->first();
                @endphp
                <div id="w-node-c162a1ea-7beb-61c0-0ebb-c2289ee30f18-53d1b8f2"
                    data-w-id="c162a1ea-7beb-61c0-0ebb-c2289ee30f18"
                    style="opacity:1;background-image:url('{{ URL::asset('images/event/media/' . $concept->image) }}')"
                    class="main_card_contain black _02">
                    <div class="div-contain">
                        <h1 class="cards-title blue">{{ $concept->title }}</h1>
                        <p class="heading white">{{ $concept->desc }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--FOCUS END-->

    <!--SCHEDULE-->
    @php
        $concept = App\Models\Event\About::where('id', 5)->first();
    @endphp
    <div class="scheduele--sect" id="schedule">
        <div class="faq-container">
            <div class="faq-menu-wrapper">
                <div class="faq-menu-title">
                    <div class="break-left fullwidth">
                        <div class="sepbar schedule-bar"></div>
                        <h2 class="schedule-title">schedule</h2>
                        <h4 class="heading">{{ $concept->desc }}</h4>
                        <a href="https://orcasia.org/allfiles/ORCA_GCNS_2025_Agenda.pdf" download style="text-decoration: none;"
                            class="rdf-button-1">Download Schedule</a>
                    </div>
                </div>
            </div>
            @include('gcns25.partials.schedule')
        </div>
    </div>
    <!--SCHEDULE END-->

    <!--MEDIA-->
    <section class="media" id="media" style="height:auto">
        <div class="black-wrapper">
            <div class="media-grid" id="media-grid">
                @php
                    $media_files = App\Models\Event\Media::where('gcns', 2025)
                        ->orderBy('sequence_no', 'asc')
                        ->paginate(6);
                @endphp
                @include('gcns25.partials.media', ['media_files' => $media_files])
            </div>
            @if ($media_files->hasMorePages())
                <a class="rdf-button-1 editions w-button load-more" href="{{ url('pages/gcns2025/all-media') }}">View
                    All</a>
            @endif
        </div>
    </section>
    <!--MEDIA END-->

    <!--CONCEPT-->
    @php
        $concept = App\Models\Event\About::where('id', 6)->first();
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
        $concept = App\Models\Event\About::where('id', 7)->first();
        $pre_24 = App\Models\Event\About::where('id', 10)->first();
        $pre_23 = App\Models\Event\About::where('id', 11)->first();
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
                        <p class="tabs_heading">GCNS 2024</p>
                    </a>
                    <div class="tabs_content active">
                        <div class="tab_wrap">
                            <div class="break-left fullwidth">
                                <div class="sepbar"></div>
                                <h2 class="heading2">{{ $pre_24->title }}</h2>
                                <h4 class="heading">{{ $pre_24->desc }}</h4>
                                <a href="{{ url('pages/gcns2024') }}" class="rdf-button-1 editions w-button">Visit</a>
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
        $concept = App\Models\Event\About::where('id', 8)->first();
    @endphp
    <section class="partners">
        <div class="break-left">
            <div class="sepbar"></div>
            <h2 class="heading2">Partners</h2>
            <h4 class="heading">{{ $concept->desc }}</h4>
        </div>
        @include('gcns25.partials.partner')
    </section>
    <!--PARTNERS END-->

    <!--CONVENORS-->
    @php
        $concept = App\Models\Event\About::where('id', 9)->first();
    @endphp
    <section class="partners" id="convenors">
        <div class="break-left">
            <div class="sepbar"></div>
            <h2 class="heading2">Convenors</h2>
            <h4 class="heading">{{ $concept->desc }}</h4>
        </div>
        @include('gcns25.partials.convenor')
    </section>
    <!--CONVENORS END-->
    @include('gcns25.partials.registeration')
@endsection
