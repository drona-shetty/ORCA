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

    <!-- Form -->
    <section class="shock-section has-holder pt-6 pb-6">
        <div class="container max-w-50">
            <!-- Example -->
            <div class="basic-intro mb-2">
                <h2 class="title gray-50 text-style-5">Contact ORCA</h2>
                <p class="description">Address: A/908-909, Bhutani Alphathum, Plot no.1, Sector 90, Noida, Delhi NCR, India
                    201305.</p>
                <p>Email: <a href="mailto:writetous.orca@gmail.com">writetous.orca@gmail.com</a>, <a href="mailto:administrator@orcasia.org">administrator@orcasia.org</a></p>
                <p><a target="_blank"
                        href="https://goo.gl/maps/4sWdiPScZa7VsBX3A">Navigate on Google Maps</a></p>
                <hr class="gray-25">
            </div>
            <!--<div class="form-area mb-35 scheme-1 primary">
                <form action="https://testcontact.orcasia.org/send_email.php" method="POST"
                    class="form-fields needs-validation" novalidate="novalidate">
                    @csrf
                    <div class="form-row row">
                        <div class="form-col col-12 col-md-6">
                            <label for="InputBasicExampleName" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control rounded-3 rounded-3"
                                required="required">
                            <div class="invalid-feedback">Please enter your name.</div>
                            <div class="valid-feedback">Looks good.</div>
                        </div>
                        <div class="form-col col-12 col-md-6">
                            <label for="InputBasicExampleEmail" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control rounded-3" required="required">
                            <div class="invalid-feedback">Please enter a valid email address.</div>
                            <div class="valid-feedback">Looks good.</div>
                        </div>
                    </div>

                    <div class="form-row row">
                        <div class="form-col col-12">
                            <label for="InputBasicExampleMessage" class="form-label">Message</label>
                            <textarea name="message" class="form-control rounded-3 form-textarea" rows="3"></textarea>
                            <div class="valid-feedback">It's optional, but we'd like to know about it :)</div>
                        </div>
                    </div>

                    <div class="form-row row">
                        <div class="form-col col-12">
                            
                            <button class="button shadow rounded-3 black primary-hover">
                                <span class="button-text white white-hover">Submit</span>
                                <i class="fa-solid fa-arrow-right button-icon white white-hover"></i>
                            </button>
                        </div>
                    </div>

                    <?php
                    $message = $_GET['message'] ?? ''; // Retrieve the message query parameter
                    
                    if (!empty($message)) {
                        if ($message === 'success') {
                            echo 'Message sent successfully!';
                        } elseif ($message === 'error') {
                            echo 'Error in sending the message. Please try again.';
                        } else {
                            echo 'Unexpected error occurred.';
                        }
                    }
                    ?>

                    <input type="hidden" name="subject" value="Message sent through the contact form.">

                </form>
            </div> -->

        </div>
    </section>

@endsection
