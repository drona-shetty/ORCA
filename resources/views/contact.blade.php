@extends('web')

@section('title', 'Contact ORCA | Organisation for Research on China and Asia')

@section('meta_keywords', 'Contact ORCA, ORCA India contact, China research institute India, ORCA office, ORCA Noida')

@section('meta_description', 'Get in touch with ORCA – Organisation for Research on China and Asia. Contact us for
    research collaborations, media inquiries, academic partnerships, and strategic discussions.')

@section('meta')
    <!-- Canonical -->
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="Contact ORCA">
    <meta property="og:description"
        content="Contact ORCA for research collaborations, strategic dialogue, media inquiries, and academic partnerships.">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('images/logo.png') }}">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Contact ORCA">
    <meta name="twitter:description"
        content="Connect with ORCA – Organisation for Research on China and Asia.">
    <meta name="twitter:image" content="{{ asset('images/logo.png') }}">

    <!-- Structured Data -->
    <script type="application/ld+json">
        {
            "@context":"https://schema.org",
            "@type":"ContactPage",
            "name":"Contact ORCA",
            "url":"{{ url()->current() }}",
            "description":"Official contact page of ORCA – Organisation for Research on China and Asia.",
            "publisher":{
                "@type":"Organization",
                "name":"ORCA",
                "url":"{{ url('/') }}"
            }
        }
    </script>
@endsection

@section('content')

    <style>
        .shock-header .navbar .navbar-nav .nav-link {
            color: black !important;
        }
    </style>

    <!-- Contact Section -->
    <section class="shock-section has-holder pt-6 pb-6">
        <div class="container max-w-50">

            <!-- Intro -->
            <div class="basic-intro mb-2">

                <h1 class="title gray-50 text-style-5">
                    Contact ORCA
                </h1>

                <p class="description">
                    Address: A/908-909, Bhutani Alphathum, Plot no.1, Sector 90, Noida, Delhi NCR, India 201305.
                </p>

                <p>
                    Email:
                    <a href="mailto:writetous.orca@gmail.com"
                        aria-label="Email ORCA at writetous.orca@gmail.com">
                        writetous.orca@gmail.com
                    </a>,

                    <a href="mailto:administrator@orcasia.org"
                        aria-label="Email ORCA administrator">
                        administrator@orcasia.org
                    </a>
                </p>

                <p>
                    <a target="_blank"
                        rel="noopener noreferrer"
                        href="https://goo.gl/maps/4sWdiPScZa7VsBX3A"
                        aria-label="Navigate to ORCA office on Google Maps">
                        Navigate on Google Maps
                    </a>
                </p>

                <hr class="gray-25">

            </div>
        </div>
    </section>

@endsection
