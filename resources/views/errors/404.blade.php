@extends('web')

@section('title', '404 | ORCA – Organisation for Research on China and Asia')

@section('meta')
    <meta name="robots" content="noindex, follow">
@endsection

@section('content')

    <style>
        .orca-404-wrapper {
            min-height: 100vh;
            display: flex;
            align-items: center;
            background: linear-gradient(rgba(255, 255, 255, 0.96), rgba(255, 255, 255, 0.96)),
                url('{{ asset('images/china-pattern.jpg') }}');
            background-size: cover;
            background-position: center;
        }

        .orca-title {
            font-family: 'Playfair Display', serif;
        }

        .btn-orca {
            background-color: #8B0000;
            color: #fff;
            border: none;
        }

        .btn-orca:hover {
            background-color: #6e0000;
            color: #fff;
        }

        .shock-header .navbar .navbar-nav .nav-link {
            color: #000;
        }

        .shock-header .navbar .navbar-nav .dropdown-toggle.has-icon .image-icon {
            fill: #000;
            stroke: #000;
        }
    </style>

    <section class="orca-404-wrapper">
        <div class="container text-center">

            <div class="mb-4">
                <h1 class="display-1 fw-bold text-danger">404</h1>
                <h2 class="orca-title fw-semibold">Strategic Document Not Found</h2>
                <p class="text-muted mt-3">
                    The page you are looking for may have been moved,
                    removed, or is temporarily unavailable.
                </p>
            </div>

            <!-- Buttons -->
            <div class="mt-4">
                <a href="{{ url('/') }}" class="btn btn-orca px-4 py-2 me-2">
                    Return to Homepage
                </a>

                <a href="{{ url('pages/publications') }}" class="btn btn-outline-dark px-4 py-2">
                    Browse Research
                </a>
            </div>

            <!-- Contact -->
            <div class="mt-5 text-muted small">
                If you believe this is an error, please contact us at
                <a href="mailto:info@orcasia.org">info@orcasia.org</a>
            </div>

        </div>
    </section>

@endsection
