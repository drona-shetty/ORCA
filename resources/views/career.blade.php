@extends('web')

@section('title', 'Careers at ORCA | Research Jobs & Internships')
@section('meta_keywords', 'ORCA careers, internships, research jobs, policy internships, Asia studies jobs')
@section('meta_description',
    'Explore careers, internships, and research opportunities at ORCA - Organisation for
    Research on China and Asia.')

@section('content')

    <style>
        .career-hero {
            background: linear-gradient(rgba(0, 0, 0, 0.65), rgba(0, 0, 0, 0.65)),
                url('/assets/images/career-banner.jpg');
            background-size: cover;
            background-position: center;
            padding: 140px 0;
            color: #fff;
        }

        .career-hero h1 {
            font-size: 58px;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .career-hero p {
            font-size: 18px;
            max-width: 700px;
            opacity: 0.9;
        }

        .career-btn {
            display: inline-block;
            padding: 14px 28px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 600;
            transition: 0.3s ease;
        }

        .btn-primary-custom {
            background: #0b1f3a;
            color: #fff;
        }

        .btn-primary-custom:hover {
            background: #132c52;
            color: #fff;
        }

        .btn-outline-custom {
            border: 1px solid #fff;
            color: #fff;
        }

        .btn-outline-custom:hover {
            background: #fff;
            color: #000;
        }

        .section-title {
            font-size: 40px;
            font-weight: 700;
            margin-bottom: 20px;
            color: #0b1f3a;
        }

        .section-subtitle {
            color: #666;
            max-width: 700px;
            margin: auto;
            margin-bottom: 50px;
        }

        .feature-card {
            background: #fff;
            padding: 35px;
            border-radius: 14px;
            box-shadow: 0 5px 25px rgba(0, 0, 0, 0.06);
            height: 100%;
            transition: 0.3s ease;
        }

        .feature-card:hover {
            transform: translateY(-5px);
        }

        .feature-card h4 {
            font-size: 22px;
            margin-bottom: 15px;
            color: #0b1f3a;
        }

        .job-card {
            background: #fff;
            border-radius: 16px;
            padding: 30px;
            box-shadow: 0 5px 25px rgba(0, 0, 0, 0.05);
            transition: 0.3s ease;
            margin-bottom: 30px;
            border: 1px solid #eee;
        }

        .job-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 10px 35px rgba(0, 0, 0, 0.08);
        }

        .job-badge {
            display: inline-block;
            padding: 6px 14px;
            border-radius: 30px;
            background: #eef3fb;
            color: #0b1f3a;
            font-size: 13px;
            margin-right: 8px;
            margin-bottom: 10px;
            font-weight: 600;
        }

        .job-card h3 {
            font-size: 28px;
            margin-bottom: 15px;
            color: #0b1f3a;
        }

        .internship-box {
            background: #0b1f3a;
            color: #fff;
            padding: 60px;
            border-radius: 20px;
        }

        .internship-box h2 {
            font-size: 42px;
            margin-bottom: 20px;
        }

        .timeline {
            position: relative;
            padding-left: 40px;
        }

        .timeline::before {
            content: '';
            position: absolute;
            left: 12px;
            top: 0;
            width: 3px;
            height: 100%;
            background: #d1d8e0;
        }

        .timeline-item {
            position: relative;
            margin-bottom: 40px;
        }

        .timeline-item::before {
            content: '';
            position: absolute;
            left: -33px;
            top: 5px;
            width: 18px;
            height: 18px;
            background: #0b1f3a;
            border-radius: 50%;
        }

        .faq-item {
            background: #fff;
            border-radius: 12px;
            padding: 25px;
            margin-bottom: 20px;
            box-shadow: 0 3px 15px rgba(0, 0, 0, 0.05);
        }

        .cta-section {
            background: #0b1f3a;
            color: #fff;
            padding: 90px 0;
            text-align: center;
        }

        .cta-section h2 {
            font-size: 48px;
            margin-bottom: 20px;
        }

        @media(max-width: 768px) {
            .career-hero h1 {
                font-size: 40px;
            }

            .section-title {
                font-size: 32px;
            }

            .internship-box {
                padding: 35px;
            }
        }
    </style>

    <!-- HERO -->
    <section class="career-hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <h1>Work With ORCA</h1>
                    <p>
                        Join a growing network of researchers, analysts, editors, and policy professionals focused on China
                        and Asia.
                    </p>

                    <div class="mt-4">
                        <a href="#openings" class="career-btn btn-primary-custom me-3">
                            View Openings
                        </a>

                        <a href="#internships" class="career-btn btn-outline-custom">
                            Internship Program
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- WHY JOIN -->
    <section class="py-5">
        <div class="container py-5">

            <div class="text-center mb-5">
                <h2 class="section-title">Why Join ORCA</h2>
                <p class="section-subtitle">
                    Work on impactful research, publish meaningful insights, and collaborate with experts shaping discourse
                    on Asia.
                </p>
            </div>

            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="feature-card">
                        <h4>Research Impact</h4>
                        <p>
                            Contribute to policy and geopolitical discussions shaping India's understanding of China and
                            Asia.
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="feature-card">
                        <h4>Publication Opportunities</h4>
                        <p>
                            Publish articles, policy briefs, and analytical research under the ORCA platform.
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="feature-card">
                        <h4>Collaborative Culture</h4>
                        <p>
                            Engage with researchers, editors, strategists, and domain experts from diverse backgrounds.
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="feature-card">
                        <h4>Flexible Opportunities</h4>
                        <p>
                            Explore remote internships, hybrid collaborations, and project-based research opportunities.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- JOB OPENINGS -->
    <section class="py-5 bg-light" id="openings">
        <div class="container py-5">

            <div class="text-center mb-5">
                <h2 class="section-title">Current Openings</h2>
                <p class="section-subtitle">
                    Explore research, editorial, technical, and internship opportunities at ORCA.
                </p>
            </div>

            <div class="row">

                <div class="row">

                    <!-- JOB 1 -->
                    <div class="col-lg-6">
                        <div class="job-card">

                            <div class="mb-3">
                                <span class="job-badge">Internship</span>
                                <span class="job-badge">Remote</span>
                                <span class="job-badge">Research</span>
                            </div>

                            <h3>Research Intern – China Studies</h3>

                            <p>
                                Assist in geopolitical and strategic research related to China, Indo-Pacific affairs,
                                and Asian regional developments. Ideal for students and young researchers interested
                                in policy and international relations.
                            </p>

                            <div class="mt-4 d-flex justify-content-between align-items-center">
                                <small>
                                    Deadline: 30 June 2026
                                </small>

                                <a href="#"
                                    class="career-btn btn-primary-custom">
                                    View Details
                                </a>
                            </div>

                        </div>
                    </div>

                    <!-- JOB 2 -->
                    <div class="col-lg-6">
                        <div class="job-card">

                            <div class="mb-3">
                                <span class="job-badge">Full Time</span>
                                <span class="job-badge">Hybrid</span>
                                <span class="job-badge">Editorial</span>
                            </div>

                            <h3>Editorial Associate</h3>

                            <p>
                                Work closely with ORCA’s editorial team to review articles, manage publication
                                workflows, coordinate contributors, and ensure high-quality analytical content.
                            </p>

                            <div class="mt-4 d-flex justify-content-between align-items-center">
                                <small>
                                    Deadline: 15 July 2026
                                </small>

                                <a href="#"
                                    class="career-btn btn-primary-custom">
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- JOB 3 -->
                    <div class="col-lg-6">
                        <div class="job-card">
                            <div class="mb-3">
                                <span class="job-badge">Internship</span>
                                <span class="job-badge">Remote</span>
                                <span class="job-badge">Media</span>
                            </div>

                            <h3>Social Media & Communications Intern</h3>

                            <p>
                                Support ORCA’s digital outreach initiatives by managing social media content,
                                audience engagement, campaign planning, and visual communication strategies.
                            </p>

                            <div class="mt-4 d-flex justify-content-between align-items-center">
                                <small>
                                    Deadline: 05 July 2026
                                </small>

                                <a href="#"
                                    class="career-btn btn-primary-custom">
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- JOB 4 -->
                    <div class="col-lg-6">
                        <div class="job-card">

                            <div class="mb-3">
                                <span class="job-badge">Part Time</span>
                                <span class="job-badge">Remote</span>
                                <span class="job-badge">Development</span>
                            </div>

                            <h3>Web Development Associate</h3>

                            <p>
                                Help improve ORCA’s digital platforms, optimize website performance, and build
                                modern web features using Laravel, frontend technologies, and SEO best practices.
                            </p>

                            <div class="mt-4 d-flex justify-content-between align-items-center">
                                <small>
                                    Deadline: 20 July 2026
                                </small>

                                <a href="#"
                                    class="career-btn btn-primary-custom">
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- INTERNSHIP -->
    <section class="py-5" id="internships">
        <div class="container py-5">

            <div class="internship-box">
                <div class="row align-items-center">

                    <div class="col-lg-7">
                        <h2>ORCA Internship Program</h2>

                        <p class="mb-4">
                            ORCA offers research and editorial internships for students, young professionals, and scholars
                            interested in Asia-focused strategic affairs and policy research.
                        </p>

                        <div class="row">
                            <div class="col-md-6">
                                <ul>
                                    <li>China Studies</li>
                                    <li>International Relations</li>
                                    <li>Policy Research</li>
                                    <li>Editorial & Writing</li>
                                </ul>
                            </div>

                            <div class="col-md-6">
                                <ul>
                                    <li>Graphic Design</li>
                                    <li>Web Development</li>
                                    <li>Social Media</li>
                                    <li>Data Research</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5 text-lg-end mt-4 mt-lg-0">
                        <a href="mailto:careers@orcasia.org"
                            class="career-btn btn-outline-custom">
                            Apply for Internship
                        </a>
                    </div>

                </div>
            </div>

        </div>
    </section>

    <!-- CONTRIBUTOR -->
    <section class="py-5 bg-light">
        <div class="container py-5 text-center">

            <h2 class="section-title">Become a Contributor</h2>

            <p class="section-subtitle">
                ORCA welcomes analysts, professors, researchers, and independent scholars interested in contributing
                articles, papers, and policy analysis.
            </p>

            <a href="mailto:research@orcasia.org"
                class="career-btn btn-primary-custom">
                Submit Proposal
            </a>

        </div>
    </section>

    <!-- APPLICATION PROCESS -->
    <section class="py-5">
        <div class="container py-5">

            <div class="text-center mb-5">
                <h2 class="section-title">Application Process</h2>
            </div>

            <div class="timeline">

                <div class="timeline-item">
                    <h4>1. Apply Online</h4>
                    <p>Submit your application and supporting documents.</p>
                </div>

                <div class="timeline-item">
                    <h4>2. Application Review</h4>
                    <p>Our team evaluates applications based on role requirements.</p>
                </div>

                <div class="timeline-item">
                    <h4>3. Interview</h4>
                    <p>Shortlisted candidates may be invited for an interview.</p>
                </div>

                <div class="timeline-item">
                    <h4>4. Selection & Onboarding</h4>
                    <p>Selected candidates receive onboarding instructions and project details.</p>
                </div>

            </div>

        </div>
    </section>

    <!-- FAQ -->
    <section class="py-5 bg-light">
        <div class="container py-5">

            <div class="text-center mb-5">
                <h2 class="section-title">Frequently Asked Questions</h2>
            </div>

            <div class="faq-item">
                <h5>Are internships remote?</h5>
                <p class="mb-0">Yes. Most ORCA internships are remote unless otherwise specified.</p>
            </div>

            <div class="faq-item">
                <h5>Do interns receive certificates?</h5>
                <p class="mb-0">Yes. Certificates are provided upon successful completion of the internship.</p>
            </div>

            <div class="faq-item">
                <h5>Can international applicants apply?</h5>
                <p class="mb-0">Yes. ORCA accepts applications from eligible candidates globally.</p>
            </div>

            <div class="faq-item">
                <h5>Do interns get publication opportunities?</h5>
                <p class="mb-0">Exceptional interns may receive opportunities to publish on ORCA platforms.</p>
            </div>

        </div>
    </section>

    <!-- CTA -->
    <section class="cta-section">
        <div class="container">

            <h2>Help Shape Research on Asia</h2>

            <p class="mb-5">
                Join ORCA's growing network of researchers, editors, analysts, and strategic thinkers.
            </p>

            <a href="#openings" class="career-btn btn-outline-custom me-3">
                Explore Openings
            </a>

            <a href="mailto:careers@orcasia.org" class="career-btn btn-primary-custom">
                Contact ORCA
            </a>

        </div>
    </section>

@endsection
