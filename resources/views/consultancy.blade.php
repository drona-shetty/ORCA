@extends('web')
@section('title', 'Consultancy | Organisation for Research on China and Asia')
@section('meta_keywords', 'Consultancy ORCA')
@section('meta_description', 'Organisation for Research on China and Asia (ORCA) provides expert-led advisory and research
                            services tailored to help our clients navigate the complexities of China’s political and
                            economic landscape. We offer a wide range of services, including market research, risk analysis,
                            strategic planning, policy analysis, and business interactions to enhance decision-making of
                            businesses, policymakers and individuals. Our team of analysts and researchers offer actionable
                            insights and strategic guidance in a variety of ways to support your objectives.')

@section('content')
    <style>
        h3.text-style-5 {
            font-size: 2rem
        }

        .side-intro .text-1 {
            color: #d5d5d5 !important;
        }

        .side-intro .description {
            margin: 0;
            color: #d5d5d5 !important;
        }

        .side-intro .button {
            margin: 2rem 0;
        }

        /* ===== Tabs Container (Glass Effect) ===== */
        #consultTabs {
            border: none;
            background: rgba(255, 255, 255, 0.6);
            backdrop-filter: blur(12px);
            padding: 10px;
            border-radius: 12px;
            display: flex;
            gap: 8px;
            overflow-x: auto;
            flex-wrap: nowrap;
        }

        /* ===== Tab Buttons ===== */
        #consultTabs .nav-link {
            border: none;
            color: #555;
            padding: 10px 18px;
            border-radius: 8px;
            transition: all 0.3s ease;
            background: transparent;
        }

        /* Hover */
        #consultTabs .nav-link:hover {
            background: rgba(255, 255, 255, 0.7);
            transform: translateY(-2px);
        }

        /* Active Tab (3D Pop Effect) */
        #consultTabs .nav-link.active {
            background: #ffffff;
            color: #000;
            font-weight: 500;

            /* Soft 3D shadow */
            box-shadow: 
                0 4px 10px rgba(0, 0, 0, 0.1),
                inset 0 1px 0 rgba(255, 255, 255, 0.6);

            transform: translateY(-3px);
        }

        /* ===== Tab Content Card ===== */
        .tab-content {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(10px);
            border-radius: 16px;
            height: 450px; /* controls overall card height */

            /* Soft floating card */
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.12);
            overflow: hidden;
        }

        /* ===== Image Styling ===== */
        .tab-pane img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 12px 0 0 12px;
        }

        /* Make row full height */
        .tab-pane .row {
            height: 100%;
        }

        /* Make both columns equal height */
        .tab-pane .col-md-6 {
            display: flex;
            flex-direction: column;
        }

        /* Image should fill full height */
        .tab-pane img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* Ensure image container stretches */
        .tab-pane .col-md-6.p-0 {
            height: 100%;
        }

        /* ===== Text Section ===== */
        .tab-pane .col-md-6.p-3 {
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        /* Optional: smooth fade animation */
        .tab-pane {
            transition: all 0.4s ease;
        }

        .consult-contact .form-control,
        .consult-contact .form-select {
            padding: 12px;
            border-radius: 8px;
        }

        .consult-contact button {
            border-radius: 30px;
        }

        .consult-form {
            font-weight: 600;
            line-height: 1.5;
            font-size: 1rem;
        }

        #consult-banner {
            background: linear-gradient(rgba(0, 0, 0, 0.55), rgba(0, 0, 0, 0.55)), url('{{ url("images/Consultancy/title image.png") }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .partner-item {
            padding: 5px;
        }

        .partner-card {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 140px;
        }

        .partner-logo {
            max-height: 130px;
            object-fit: contain;
            filter: grayscale(100%);
            transition: 0.3s;
        }

        .partner-card:hover .partner-logo {
            filter: grayscale(0%);
        }

        .partner-desc {
            font-size: 18px;
            text-align: center;
        }

        @media (min-width: 768px) {
            .tab-pane img {
                height: 450px;
            }
        }
        @media (max-width: 768px) {
            section {
                padding-top: 30px !important;
                padding-bottom: 30px !important;
            }
            #consult-banner .holder {
                height: auto !important;
                padding: 80px 0px 0px 10px;
                align-items: flex-end;
            }

            .side-intro .description p {
                font-size: 14px;
            }

            h3.text-style-5 {
                font-size: 1.4rem;
            }

            .text-style-12 {
                font-size: 14px;
                line-height: 1.6;
            }
            .tab-content {
                min-height: auto;
                padding: 10px;
            }
            #consultTabs {
                padding: 6px;
                gap: 6px;
                border-radius: 8px;
                justify-content: flex-start !important;
                margin-bottom: 0;
            }

            #consultTabs .nav-link {
                font-size: 13px;
                padding: 8px 12px;
                white-space: nowrap;
            }

            .tab-pane .row {
                flex-direction: column;
            }

            .tab-pane .col-md-6 {
                width: 100%;
            }

            .tab-pane .col-md-6.p-0 {
                order: 1;
            }

            .tab-pane .col-md-6.p-3 {
                order: 2;
            }

            .tab-pane img {
                height: 220px;
                border-radius: 12px 12px 0 0;
            }

            .consult-contact .form-control,
            .consult-contact .form-select {
                font-size: 14px;
                padding: 10px;
            }

            .consult-contact button {
                width: 100%;
            }

            .consult-form .row > div {
                margin-bottom: 10px;
            }
        }
    </style>
    
    @if(session('success'))
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Request Submitted',
                text: "{{ session('success') }}",
                confirmButtonText: 'OK'
            });
        </script>
    @endif
    <!-- Banner -->
    <section id="consult-banner" class="shock-section bg-image bg-fixed position-x-left">
        <div class="container">
            <div class="holder vh-100 align-h-right align-v-bottom">
                <!-- Intro -->
                <div class="side-intro mb-4">
                    <h2 class="title">
                        <span class="text-1 text-style-1 scheme-2 white">ORCA Consultancy</span>
                    </h2>
                    <div class="description text-style-12 white">
                        <p>Organisation for Research on China and Asia (ORCA) provides expert-led advisory and research
                            services tailored to help our clients navigate the complexities of China’s political and
                            economic landscape. We offer a wide range of services, including market research, risk analysis,
                            strategic planning, policy analysis, and business interactions to enhance decision-making of
                            businesses, policymakers and individuals. Our team of analysts and researchers offer actionable
                            insights and strategic guidance in a variety of ways to support your objectives.</p>
                    </div>
                    <!-- Button -->
                    <a href="#start-project" class="button shadow rounded-pill gradient scheme-1 hover-up">
                        <span class="button-text white white-hover">Contact us</span>
                        <i class="fa-solid fa-arrow-right button-icon white white-hover"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-5 text-black">
        <div class="container-fluid">
            <div class="section-title text-center mb-2">
                <h2 class="title text-style-5">
                    <span class="text-2 black"><mark class="animated-underline primary active">Products</mark></span>
                    <span class="text-2 black">& Services</span>
                </h2>
            </div>

            <!-- Tabs Navigation -->
            <ul class="nav nav-tabs justify-content-center" id="consultTabs" role="tablist">
                <li class="nav-item">
                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#tab1">
                        Social Media Analysis
                    </button>
                </li>
                <li class="nav-item">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#tab2">
                        Public Opinion Surveys
                    </button>
                </li>
                <li class="nav-item">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#tab3">
                        Reports & Dashboards
                    </button>
                </li>
                <li class="nav-item">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#tab4">
                        B2B Roundtables
                    </button>
                </li>
                <li class="nav-item">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#tab5">
                        Workshops & Courses
                    </button>
                </li>
            </ul>

            <!-- Tab Content -->
            <div class="tab-content">
                <!-- TAB 1 -->
                <div class="tab-pane fade show active" id="tab1">
                    <div class="row align-items-center">
                        <div class="col-md-6 p-0">
                            <img src="{{ asset('images/Consultancy/social media analysis.png') }}" class="w-100">
                        </div>
                        <div class="col-md-6 p-3">
                            <h3 class="title text-style-5 black">Commission Social Media and Perception Analysis</h3>
                            <p class="text-style-12">
                                Want to know what Chinese social media thinks about events, breaking news and international
                                affairs?
                                The Social Media and Perception Analysis presents a cross-section of reactions, responses
                                and
                                perspectives of netizens away from official narratives, covering a variety of Chinese social
                                media
                                platforms.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- TAB 2 -->
                <div class="tab-pane fade" id="tab2">
                    <div class="row align-items-center">
                        <div class="col-md-6 p-0">
                            <img src="{{ asset('images/Consultancy/surveys.png') }}" class="w-100">
                        </div>
                        <div class="col-md-6 p-3">
                            <h3 class="title text-style-5 black">Public Opinion Surveys</h3>
                            <p class="text-style-12">
                                Looking to understand public attitudes, policy preferences, and perceptions on key issues?
                                Our Public Opinion Surveys generate reliable insights through carefully designed
                                questionnaires
                                and targeted sampling.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- TAB 3 -->
                <div class="tab-pane fade" id="tab3">
                    <div class="row align-items-center">
                        <div class="col-md-6 p-0">
                            <img src="{{ asset('images/Consultancy/dashboard.png') }}" class="w-100">
                        </div>
                        <div class="col-md-6 p-3">
                            <h3 class="title text-style-5 black">Reports and Dashboards</h3>
                            <p class="text-style-12">
                                Need clear, data-driven insights on complex issues? Our Reports and Dashboards provide
                                structured
                                analysis and visualised data on policy developments, economic trends, and strategic
                                developments.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- TAB 4 -->
                <div class="tab-pane fade" id="tab4">
                    <div class="row align-items-center">
                        <div class="col-md-6 p-0">
                            <img src="{{ asset('images/Consultancy/b2b meetings.jpeg') }}" class="w-100">
                        </div>
                        <div class="col-md-6 p-3">
                            <h3 class="title text-style-5 black">B2B Interactions and Roundtables</h3>
                            <p class="text-style-12">
                                Our B2B Interactions and Roundtables bring together policymakers, industry leaders, and
                                academics
                                for focused discussions and knowledge exchange.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- TAB 5 -->
                <div class="tab-pane fade" id="tab5">
                    <div class="row align-items-center">
                        <div class="col-md-6 p-0">
                            <img src="{{ asset('images/Consultancy/workshops.jpeg') }}" class="w-100">
                        </div>
                        <div class="col-md-6 p-3">
                            <h3 class="title text-style-5 black">Workshops and Courses</h3>
                            <p class="text-style-12">
                                Our Workshops and Courses provide structured training on areas such as data analysis, policy
                                research, and regional studies.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-5 text-black">
        <div class="container-fluid">
            <div class="section-title text-center mb-2">
                <h2 class="title text-style-5">
                    <span class="text-2 black"><mark class="animated-underline primary active">Clients</mark></span>
                    <span class="text-2 black">& Partners</span>
                </h2>
            </div>
            <div class="partner-section">
                <div class="container">
                    <div class="swiper partnerSwiper">
                        <div class="swiper-wrapper">

                            @php
                            $partners = [
                                [
                                    'url' => 'https://signadynelabs.com/',
                                    'logo' => 'images/Consultancy/SignadyneLabs.webp',
                                    'name' => 'Signadyne Labs',
                                    'desc' => 'Signadyne Labs is an applied AI research lab building and deploying intelligent systems for complex real-world challenges.'
                                ],
                                [
                                    'url' => 'https://orcasia.org/',
                                    'logo' => 'images/Consultancy/ORCA.png',
                                    'name' => 'Organisation for Research on China and Asia',
                                    'desc' => 'Organisation for Research on China and Asia is a Delhi NCR based research institute focusing on domestic Chinese politics/policy.'
                                ],
                                [
                                    'url' => 'https://www.flame.edu.in/',
                                    'logo' => 'images/flame.png',
                                    'name' => 'Flame University',
                                    'desc' => 'Flame University provides interdisciplinary education guided by expert faculty and leadership.'
                                ],
                                [
                                    'url' => 'https://cccsindia.in/',
                                    'logo' => 'images/Consultancy/CCCS.jpg',
                                    'name' => 'Centre for Contemporary China Studies',
                                    'desc' => 'The Centre for Contemporary China Studies is a policy think tank dedicated to Contemporary China Studies.'
                                ],
                            ];
                            @endphp

                            @foreach($partners as $partner)
                                <div class="swiper-slide">
                                    <div class="partner-item text-center">
                                        <a href="{{ $partner['url'] }}" target="_blank" class="partner-card">
                                            <div class="image-wrapper">
                                                <img src="{{ asset($partner['logo']) }}" class="partner-logo" alt="">
                                            </div>
                                        </a>
                                        <p class="partner-desc">
                                            <strong>{{ $partner['name'] }}</strong>
                                        </p>
                                    </div>
                                </div>
                            @endforeach

                        </div>

                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="consult-contact pt-5 pb-5 text-black" id="start-project">
        <div class="container">
            <div class="text-center mb-2">
                <h2 class="title text-style-5">
                    <span class="text-2 black"><mark class="animated-underline primary active">Start a</mark></span>
                    <span class="text-2 black">Project</span>
                </h2>
            </div>

            <form class="consult-form" action="{{ url('add-consultancy-project') }}" method="POST">
                @csrf
                <div class="row g-1">
                    <!-- Name -->
                    <div class="col-md-6">
                        <label class="form-label">Full Name<span class="text-danger">*</span></label>
                        <input type="text" name="name" class="form-control" placeholder="Enter your name" required>
                    </div>

                    <!-- Organisation -->
                    <div class="col-md-6">
                        <label class="form-label">Organisation<span class="text-danger">*</span></label>
                        <input type="text" name="organisation" class="form-control" placeholder="Name of Organisation/Company" required>
                    </div>

                    <!-- Email -->
                    <div class="col-md-6">
                        <label class="form-label">Email<span class="text-danger">*</span></label>
                        <input type="email" name="email" class="form-control" placeholder="Enter your email" required>
                    </div>

                    <!-- Mobile -->
                    <div class="col-md-6">
                        <label class="form-label">Mobile Number<span class="text-danger">*</span></label>
                        <input type="tel" name="mobile" class="form-control" placeholder="XXXXXXXXXX"
                            required>
                    </div>

                    <!-- Product Dropdown -->
                    <div class="col-12">
                        <label class="form-label">Product/Service<span class="text-danger">*</span></label>
                        <select name="product" class="form-select" required>
                            <option value="">Select Product</option>
                            <option value="Social Media Analysis">Social Media Analysis</option>
                            <option value="Public Opinion Surveys">Public Opinion Surveys</option>
                            <option value="Reports & Dashboards">Reports & Dashboards</option>
                            <option value="B2B Roundtables">B2B Roundtables</option>
                            <option value="Workshops & Courses">Workshops & Courses</option>
                            <option value="Other/Custom">Other/Custom</option>
                        </select>
                    </div>

                    <!-- Message (optional but recommended) -->
                    <div class="col-12">
                        <label class="form-label">Project Details</label>
                        <textarea name="project_details" rows="4" class="form-control" id="project_details" style="resize: none;"
                            placeholder="Briefly describe your project or requirement within 100 words"></textarea>
                        <small id="wordCount" class="text-muted">0 / 100 words</small>
                    </div>
                    <script>
                        const textarea = document.getElementById('project_details');
                        const wordCount = document.getElementById('wordCount');

                        textarea.addEventListener('input', function () {
                            let words = this.value.trim().split(/\s+/).filter(word => word.length > 0);

                            if (words.length > 100) {
                                words = words.slice(0, 100);
                                this.value = words.join(' ');
                            }

                            wordCount.textContent = words.length + " / 100 words";

                            // Optional: turn red when limit reached
                            if (words.length >= 100) {
                                wordCount.classList.remove('text-muted');
                                wordCount.classList.add('text-danger');
                            } else {
                                wordCount.classList.remove('text-danger');
                                wordCount.classList.add('text-muted');
                            }
                        });
                    </script>
                    <!-- Submit -->
                    <div class="col-12 text-center mt-1" style="margin: auto; width:auto">
                        <button type="submit" class="button shadow rounded-pill gradient scheme-1 hover-up">
                            <span class="button-text white white-hover">Submit</span>
                            <i class="fa-solid fa-arrow-right button-icon white white-hover"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
@section('scripts')
    <script>
        new Swiper(".partnerSwiper", {
            slidesPerView: 3,
            spaceBetween: 10,
            loop: true,

            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },

            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },

            breakpoints: {
                0: { slidesPerView: 1 },
                576: { slidesPerView: 2 },
                992: { slidesPerView: 3 }
            }
        });
    </script>
@endsection
