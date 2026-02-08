@extends('web')
@section('title', 'ORCA | Organisation for Research on China and Asia')
@section('meta_keywords', 'ORCA')
@section('meta_description', 'ORCA')
@section('content')

    <style>
        .shock-header .navbar .navbar-nav .nav-link {
            color: black !important;
        }
    </style>

    <section class="shock-section has-holder pt-6 pb-6">
        <div class="container max-w-50">
            <!-- Example -->
            <div class="basic-intro mb-2">
                <h2 class="title gray-50 text-style-5">Log In</h2>
                <hr class="gray-25">
            </div>
            <div class="form-area mb-35 scheme-1 primary">
                <form action="{{ url('user_login') }}" method="POST" enctype="multipart/form-data"
                    class="form-fields needs-validation" novalidate>
                    @csrf
                    <div class="form-row row">
                        <div class="form-col col-12 col-md-12">
                            <label for="InputBasicExampleEmail" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control rounded-3" id="InputBasicExampleEmail"
                                required="required">
                            <div class="invalid-feedback">Please enter a valid email address.</div>
                            <div class="valid-feedback">Looks good.</div>
                        </div>
                        <div class="form-col col-12 col-md-12">
                            <label for="InputBasicExampleName" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control rounded-3 rounded-3"
                                id="InputBasicExampleName" required="required">
                            <div class="invalid-feedback">Please enter your password.</div>
                            <div class="valid-feedback">Looks good.</div>
                        </div>
                    </div>

                    <div class="form-row row">
                        <div class="form-col col-12">
                            <div class="form-check">
                                <label class="form-label form-check-label" for="rememberMe">
                                    <input type="checkbox" name="terms" id="rememberMe" class="form-check-input">
                                    Remember me
                                </label>
                            </div>
                        </div>
                        <div class="form-row row">
                            <div class="form-col col-12">
                                <!-- Button -->
                                <button class="button shadow rounded-3 black primary-hover">
                                    <span class="button-text white white-hover">Login</span>
                                    <i class="fa-solid fa-arrow-right button-icon white white-hover"></i>
                                </button>
                            </div>
                        </div>
                        <!-- <input type="hidden" name="subject" value="Message sent through the contact form."> -->
                        <!-- <span class="form-alert success">Your message was sent successful. Thanks.</span>
                    <span class="form-alert error">Sorry. We were unable to send your message.</span> -->
                </form>
            </div>
        </div>
    </section>
@endsection
