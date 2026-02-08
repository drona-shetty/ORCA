@extends('web')
@section('title', 'ORCA | Organisation for Research on China and Asia')
@section('meta_keywords', 'ORCA')
@section('meta_description', 'ORCA')

@section('content')
    <style>
        .fit-contain {
            object-fit: contain;
            object-position: center;
        }

        .js-auto-width-wrapper {
            overflow: hidden;
        }

        .description {
            color: #000;
        }
    </style>

    <!-- Banner -->
    <section class="shock-section bg-image bg-fixed position-x-left"
        data-bg-image="{{ URL::asset('images/jpg/AdobeStock_90152948.jpeg') }}">
        <div class="container">
            <div class="holder vh-100 align-h-right align-v-center">
                <!-- Intro -->
                <div class="side-intro max-w-50">
                    <h2 class="title">
                        <span class="text-1 text-style-1 scheme-2 white">About</span>
                        <span class="text-2 text-style-2 subfont scheme-2">Organisation for Research on China and Asia
                            - ORCA</span>
                    </h2>
                    <div class="description text-style-12 white">
                        <!--  <p>Design is a concept that represents the process of creating products based on technical and aesthetic excellence, with the aim of solving problems.</p> -->
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Card outline -->
    <section class="shock-section pt-5 pb-5" data-bg-color="#16161b">
        <div class="container">
            <div class="horizontal-tab mb-3 scheme-2 tertiary" data-aos="fade-up">
                <!-- Tab navigation -->
                <ul id="h-tab" class="nav nav-tabs" role="tablist" aria-orientation="horizontal">
                    <li class="nav-item" role="presentation">
                        <button id="h-1-tab" class="nav-link active" aria-selected="true" aria-controls="h-1"
                            data-bs-target="#h-1" data-bs-toggle="tab" role="tab">
                            Our Mission
                        </button>
                    </li>

                </ul>
                <!-- Tab content -->
                <div class="tab-content">
                    <div id="h-1" class="tab-pane fade show active" role="tabpanel">
                        <div class="max-w-75 mx-auto text-style-12 text-center">
                            <!--  <p>Our work consists of prototyping creative products with a focus on innovation and resource availability. We use the best technologies available on the market to ensure positive results.</p> -->
                        </div>
                    </div>

                </div>
            </div>
            <div class="row g-2">
                <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="card has-icon parent">
                        <div class="card-body">
                            <i class="fas fa-3x fa-users-cog" style="color: #fff;"></i>

                            <h3 class="title text-style-11 white">To build</h3>
                            <p class="description white">Knowledge, interest and understanding across sectors,
                                professionals and laypeople regarding China’s innate perceptions of —and responses
                                to—Asia and especially India</p>
                            <!-- Button -->
                            <div class="button-wrapper align-h-right">

                            </div>
                        </div>
                        <!-- Link -->
                        <a href="#your-link" class="full-link">
                            <div class="overlay secondary-25 magnetic-effect"></div>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="card has-icon parent">
                        <div class="card-body">
                            <i class="fas fa-3x fa-chart-line" style="color: #fff;"></i>
                            <h3 class="title text-style-11 white">To assess</h3>
                            <p class="description white">Data/resources that narrate the daily ‘chatter’ of China’s
                                domestic circles on happenings both within China and involving China beyond its own
                                borders.</p>
                            <!-- Button -->
                            <div class="button-wrapper align-h-right">

                            </div>
                        </div>
                        <!-- Link -->
                        <a href="#your-link" class="full-link">
                            <div class="overlay secondary-25 magnetic-effect"></div>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="card has-icon parent">
                        <div class="card-body">
                            <i class="fas fa-3x fa-link" style="color: #fff;"></i>
                            <h3 class="title text-style-11 white">To link</h3>
                            <p class="description white">Data with the broader political, diplomatic, cultural,
                                economic and social developments taking place and their impact on India’s national
                                security, regional power, and India-China ties. </p>
                            <!-- Button -->
                            <div class="button-wrapper align-h-right">

                            </div>
                        </div>
                        <!-- Link -->
                        <a href="#your-link" class="full-link">
                            <div class="overlay secondary-25 magnetic-effect"></div>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="card has-icon parent">
                        <div class="card-body">
                            <i class="fas fa-3x fa-user-shield" style="color: #fff;"></i>
                            <h3 class="title text-style-11 white">To ensure</h3>
                            <p class="description white">The venture emerges as a go-to resource tool for
                                policymakers, scholars, students and enthusiasts alike.</p>
                            <!-- Button -->
                            <div class="button-wrapper align-h-right">

                            </div>
                        </div>
                        <!-- Link -->
                        <a href="#your-link" class="full-link">
                            <div class="overlay secondary-25 magnetic-effect"></div>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="500">
                    <div class="card has-icon parent">
                        <div class="card-body">
                            <i class="fas fa-3x fa-cogs" style="color: #fff;"></i>
                            <h3 class="title text-style-11 white">To implement</h3>
                            <p class="description white">Research and data from social media ‘chatter’ in China to
                                dedicated subsections focused on India and its concerns</p>
                            <!-- Button -->
                            <div class="button-wrapper align-h-right">

                            </div>
                        </div>
                        <!-- Link -->
                        <a href="#your-link" class="full-link">
                            <div class="overlay secondary-25 magnetic-effect"></div>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="600">
                    <div class="card has-icon parent">
                        <div class="card-body">
                            <i class="fas fa-3x fa-laptop" style="color: #fff;"></i>
                            <h3 class="title text-style-11 white">To publish</h3>
                            <p class="description white">Daily newsletters, monthly reports and frequent publications
                                that are dedicated to deciphering broader strategic chatter and data</p>
                            <!-- Button -->
                            <div class="button-wrapper align-h-right">

                            </div>
                        </div>
                        <!-- Link -->
                        <a href="#your-link" class="full-link">
                            <div class="overlay secondary-25 magnetic-effect"></div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--banner-->
    <section class="shock-section has-overlay">
        <div class="banner">
            <div class="content-wrapper">
                <!-- Intro -->
                <div class="basic-intro max-w-75 text-center">
                    <h1 class="title white">
                        <span class="text-1 d-block text-style-2 white">Meet our Team</span>

                    </h1>
                    <div class="description text-style-12 gray">
                        <!-- <p>Integer eu felis ut ex facilisis feugiat in pellentesque tortor nulla finibus justo quis lorem tristique.</p> -->
                    </div>
                    <!-- Button -->
                    <a href="/pages/team" class="button shadow rounded-pill gradient scheme-1 hover-up">
                        <span class="button-text white white-hover">Explore</span>
                        <i class="fa-solid fa-arrow-right button-icon white white-hover"></i>
                    </a>
                </div>
            </div>
            <!-- Image -->
            <div class="image-wrapper">
                <img src="{{ URL::asset('images/teamorca.jpeg') }}" class="image"
                    alt="Team ORCA">
            </div>
            <!-- Overlay -->
            <div class="overlay black-50"></div>
        </div>
    </section>
    <!--banner close-->

    <!-- logo -->
    <section class="shock-section pt-4 pb-4" data-bg-color="#16161b">
        <div class="container">
            <div class="row g-4">
                <div class="col-12 col-md-5">
                    <div class="card has-image shadow rounded parent">
                        <!-- Image -->
                        <div class="image-wrapper rounded-top">
                            <img src="{{ URL::asset('images/ORCALogowhite.png') }}" alt="ORCA Logo" class="image" />
                        </div>
                        <!-- Body -->

                    </div>
                </div>
                <div class="col-12 col-md-7 align-v-center">
                    <div class="holder">
                        <!-- Intro -->
                        <div class="basic-intro mb-35">
                            <h2 class="title black">
                                <span class="text-1 white text-style-5">Rationale behind </span>
                                <span class="text-2 white text-style-6 text-italic">our logo</span>
                            </h2>
                            <div class="description text-style-12 gray">
                                <p>Now that you are here, we would also love for you to understand our rationale
                                    behind our logo and namesake acronym. The orca is considered one of the deadliest
                                    mammals, while concurrently ranking as amongst one of the most intelligent
                                    species, on the planet. Orca’s are also called ‘Pandas of the Sea’ –allowing a
                                    parallel to China’s unofficial diplomats, the giant pandas. This allows ORCA a
                                    link to China with its own identity creation in mind. Furthermore, as orcas
                                    —despite being ferocious— only defend rather than attack and are known to be great
                                    at conflict resolution, our logo’s mascot draws parallels to India’s own strategic
                                    autonomy, no-attack policy and role as a promoter of peace and the rules-based
                                    order.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- timeline -->

    <!-- Carousel -->
    <section class="shock-section pt-4 pb-4 bg-color-lightbg gray-10 js-auto-width">
        <div class="container">
            <div class="row mb-35">
                <div class="col-12 col-md-8">
                    <!-- Intro -->
                    <div class="basic-intro">
                        <h2 class="title black">
                            <span class="text-1 text-style-7">ORCA’s Milestones </span>

                        </h2>

                    </div>
                </div>

            </div>
            <div class="js-auto-width-wrapper">
                <div class="vertical-tab scheme-1 primary">
                    <!-- Tab navigation -->

                    <!-- Tab content -->
                    <div class="tab-content pt-0">
                        <div id="v-1" class="tab-pane fade show active" role="tabpanel">
                            <!-- Carousel -->
                            <div class="swiper slider stretched-top stretched-side-on-mobile has-gap has-overflow-right has-drag-text scheme-1 primary"
                                data-columns="3,2,1,1">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="card has-image small-shadow parent">

                                            <div class="card-body rounded-bottom bg-color white">
                                                <h3 class="title text-style-11 black">July <mark
                                                        class="animated-underline accentred">2021</mark></h3>
                                                <p class="description">Inception</p>
                                                <!-- Button -->

                                                <!-- Link -->

                                            </div>
                                        </div>
                                    </div>
                                    <span class="arrowmargin">&#8594;</span>
                                    <div class="swiper-slide">
                                        <div class="card has-image small-shadow parent">

                                            <div class="card-body rounded-bottom bg-color white">
                                                <h3 class="title text-style-11 black">20th July <mark
                                                        class="animated-underline accentred">2021</mark></h3>
                                                <p class="description">First Newsletter</p>
                                                <!-- Button -->

                                                <!-- Link -->

                                            </div>
                                        </div>
                                    </div>
                                    <span class="arrowmargin">&#8594;</span>
                                    <div class="swiper-slide">
                                        <div class="card has-image small-shadow parent">

                                            <div class="card-body rounded-bottom bg-color white">
                                                <h3 class="title text-style-11 black">29th September <mark
                                                        class="animated-underline accentred">2021</mark></h3>
                                                <p class="description">First opinion piece</p>
                                                <!-- Button -->

                                                <!-- Link -->

                                            </div>
                                        </div>
                                    </div>
                                    <span class="arrowmargin">&#8594;</span>
                                    <div class="swiper-slide">
                                        <div class="card has-image small-shadow parent">

                                            <div class="card-body rounded-bottom bg-color white">
                                                <h3 class="title text-style-11 black">2nd March <mark
                                                        class="animated-underline accentred">2022</mark></h3>
                                                <p class="description">First Issue Brief</p>
                                                <!-- Button -->

                                                <!-- Link -->

                                            </div>
                                        </div>
                                    </div>
                                    <span class="arrowmargin">&#8594;</span>
                                    <div class="swiper-slide">
                                        <div class="card has-image small-shadow parent">

                                            <div class="card-body rounded-bottom bg-color white">
                                                <h3 class="title text-style-11 black">21st May <mark
                                                        class="animated-underline accentred">2022</mark></h3>
                                                <p class="description">First joint event</p>
                                                <!-- Button -->

                                                <!-- Link -->
                                                <!-- Link -->

                                            </div>
                                        </div>
                                    </div>
                                    <span class="arrowmargin">&#8594;</span>
                                    <div class="swiper-slide">
                                        <div class="card has-image small-shadow parent">

                                            <div class="card-body rounded-bottom bg-color white">
                                                <h3 class="title text-style-11 black">June <mark
                                                        class="animated-underline accentred">2022</mark></h3>
                                                <p class="description">First interactive dashboard (China’s Public
                                                    Diplomacy)</p>
                                                <!-- Button -->

                                                <!-- Link -->
                                                <!-- Link -->

                                            </div>
                                        </div>
                                    </div>
                                    <span class="arrowmargin">&#8594;</span>
                                    <div class="swiper-slide">
                                        <div class="card has-image small-shadow parent">

                                            <div class="card-body rounded-bottom bg-color white">
                                                <h3 class="title text-style-11 black">7th July <mark
                                                        class="animated-underline accentred">2022</mark></h3>
                                                <p class="description">First podcast (The ORCA Files)</p>
                                                <!-- Button -->

                                                <!-- Link -->
                                                <!-- Link -->

                                            </div>
                                        </div>
                                    </div>
                                    <span class="arrowmargin">&#8594;</span>
                                    <div class="swiper-slide">
                                        <div class="card has-image small-shadow parent">

                                            <div class="card-body rounded-bottom bg-color white">
                                                <h3 class="title text-style-11 black">9th September <mark
                                                        class="animated-underline accentred">2022</mark></h3>
                                                <p class="description">First Special Report (The ‘Prince’ and All His
                                                    Men)</p>
                                                <!-- Button -->

                                                <!-- Link -->
                                                <!-- Link -->

                                            </div>
                                        </div>
                                    </div>
                                    <span class="arrowmargin">&#8594;</span>
                                    <div class="swiper-slide">
                                        <div class="card has-image small-shadow parent">

                                            <div class="card-body rounded-bottom bg-color white">
                                                <h3 class="title text-style-11 black">11th October <mark
                                                        class="animated-underline accentred">2022</mark></h3>
                                                <p class="description">First Expert Scholars’ Dialogue</p>
                                                <!-- Button -->

                                                <!-- Link -->
                                                <!-- Link -->

                                            </div>
                                        </div>
                                    </div>
                                    <span class="arrowmargin">&#8594;</span>
                                    <div class="swiper-slide">
                                        <div class="card has-image small-shadow parent">

                                            <div class="card-body rounded-bottom bg-color white">
                                                <h3 class="title text-style-11 black">3rd November <mark
                                                        class="animated-underline accentred">2022</mark></h3>
                                                <p class="description">ORCA- NIICE MoU signed</p>
                                                <!-- Button -->

                                                <!-- Link -->
                                                <!-- Link -->

                                            </div>
                                        </div>
                                    </div>
                                    <span class="arrowmargin">&#8594;</span>
                                    <div class="swiper-slide">
                                        <div class="card has-image small-shadow parent">

                                            <div class="card-body rounded-bottom bg-color white">
                                                <h3 class="title text-style-11 black">December <mark
                                                        class="animated-underline accentred">2022</mark></h3>
                                                <p class="description">ORCA reached in 150+ countries</p>
                                                <!-- Button -->

                                                <!-- Link -->
                                                <!-- Link -->

                                            </div>
                                        </div>
                                    </div>
                                    <span class="arrowmargin">&#8594;</span>
                                    <div class="swiper-slide">
                                        <div class="card has-image small-shadow parent">

                                            <div class="card-body rounded-bottom bg-color white">
                                                <h3 class="title text-style-11 black">16 May <mark
                                                        class="animated-underline accentred">2023</mark></h3>
                                                <p class="description">ORCAxISDP Special Issue on Tibet</p>
                                                <!-- Button -->

                                                <!-- Link -->

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="drag-text">
                                    <i class="fa-solid fa-arrow-left icon"></i>
                                    <div class="text">Drag to navigate</div>
                                    <i class="fa-solid fa-arrow-right icon"></i>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-----timeline exit -->
    </main>

@endsection
