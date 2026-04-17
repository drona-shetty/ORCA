@extends('web')

@section('title', 'Submission Guidelines | ORCA - Organisation for Research on China and Asia')
@section('keywords', 'ORCA, Submission Guidelines, Opinion Pieces, Issue Briefs, Visualisations, ORCA Asia')
@section('description', 'Learn about ORCA\'s submission guidelines for opinion pieces, issue briefs, and visualisations. Ensure your work meets our standards for consideration.')

@section('content')

<style>
    .shock-header .navbar .navbar-nav .nav-link {
        color: black !important;
    }
</style>

<!-- Banner -->
<section class="shock-section has-holder pt-2 pb-3 bg-color gray-10">
    <div class="container">
        <div class="banner mb-3">
            <div class="row">
                
                <div class="col-12 col-lg-3 align-v-center d-only-desktop">
                    <div class="image-wrapper p-2">
                        <!-- Optional image or design element -->
                    </div>
                </div>

                <div class="col-12 mt-3 col-lg-6 align-v-center">
                    <div class="basic-intro text-center">

                        <!-- H1 optimized -->
                        <h1 class="title black">
                            <span class="text-1 d-block text-style-3">Submission </span>
                            <span class="text-2 text-style-4 text-italic">
                                <mark class="animated-underline accentred">Guidelines</mark>
                            </span>
                        </h1>

                        <p class="mt-3">
                            Due to the high volume of submissions, we are unable to respond to all
                            mails and will only get in touch with you if we are proceeding with your piece. If you
                            do not hear from us in three working days post submitting your piece, please feel free
                            to submit your article to other publications. Note that we will automatically not
                            consider any pieces that do not adhere to our submission guidelines.
                        </p>

                    </div>
                </div>

                <div class="col-12 col-lg-3 align-v-center">
                    <div class="image-wrapper p-2">
                        <!-- Optional mirrored image -->
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- Guidelines Section -->
<section class="shock-section has-holder pb-6 bg-color gray-10">
    <div class="container">
        <div class="row g-4">

            <style>
                :root .arrow-button.scheme-1 {
                    --color-1: #000;
                }
            </style>

            <!-- Opinion Pieces -->
            <div class="col-12 col-md-6 col-lg-4">
                <article class="card double-edge has-icon parent h-100">
                    <div class="card-body">

                        <h2 class="title text-style-8 black">
                            Submission Guidelines for<br><strong>Opinion Pieces</strong>
                        </h2>

                        <div class="button-wrapper align-h-right">
                            <span class="button arrow-button cross scheme-1 primary" aria-label="Read Opinion Guidelines">
                                <span class="arrow">
                                    <span class="item"></span>
                                    <span class="item"></span>
                                </span>
                                <span class="line"></span>
                                <span class="text">Read</span>
                            </span>
                        </div>

                    </div>

                    <a href="https://orcasia.org/pdf/Submission-Guidelines-Opinion-Piece.pdf"
                       target="_blank"
                       rel="noopener noreferrer"
                       class="full-link"
                       aria-label="Open Opinion Piece Guidelines PDF">
                        <div class="overlay primary-25 magnetic-effect"></div>
                    </a>
                </article>
            </div>

            <!-- Issue Briefs -->
            <div class="col-12 col-md-6 col-lg-4">
                <article class="card double-edge has-icon parent h-100">
                    <div class="card-body">

                        <h2 class="title text-style-8 black">
                            Submission Guidelines for<br><strong>Issue Briefs</strong>
                        </h2>

                        <div class="button-wrapper align-h-right">
                            <span class="button arrow-button cross scheme-1 primary" aria-label="Read Issue Brief Guidelines">
                                <span class="arrow">
                                    <span class="item"></span>
                                    <span class="item"></span>
                                </span>
                                <span class="line"></span>
                                <span class="text">Read</span>
                            </span>
                        </div>

                    </div>

                    <!-- FIXED URL encoding -->
                    <a href="https://orcasia.org/allfiles/Submission_Guidelines_Issue_Brief.pdf"
                       target="_blank"
                       rel="noopener noreferrer"
                       class="full-link"
                       aria-label="Open Issue Brief Guidelines PDF">
                        <div class="overlay primary-25 magnetic-effect"></div>
                    </a>
                </article>
            </div>

            <!-- Visualisations -->
            <div class="col-12 col-md-6 col-lg-4">
                <article class="card double-edge has-icon parent h-100">
                    <div class="card-body">

                        <h2 class="title text-style-8 black">
                            Submission Guidelines for<br><strong>Visualisations</strong>
                        </h2>

                        <div class="button-wrapper align-h-right">
                            <span class="button arrow-button cross scheme-1 primary" aria-label="Read Visualisations Guidelines">
                                <span class="arrow">
                                    <span class="item"></span>
                                    <span class="item"></span>
                                </span>
                                <span class="line"></span>
                                <span class="text">Read</span>
                            </span>
                        </div>

                    </div>

                    <!-- FIXED URL encoding -->
                    <a href="https://orcasia.org/allfiles/Submission_Guidelines_Visualisations.pdf"
                       target="_blank"
                       rel="noopener noreferrer"
                       class="full-link"
                       aria-label="Open Visualisations Guidelines PDF">
                        <div class="overlay primary-25 magnetic-effect"></div>
                    </a>
                </article>
            </div>
        </div>
    </div>
</section>

@endsection