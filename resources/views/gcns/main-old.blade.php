<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <!-- The above 3 meta tags *must* come first in the head -->

    <!-- SITE TITLE -->
    <title>ORCA | GCNS</title>
    <meta name="description" content="Global Conference on New Sinology" />
    <meta name="keywords" content="GCNS, ORCA" />
    <meta name="author" content="kwad.in" />

    <!-- twitter card starts from here, if you don't need remove this section -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@GCNS_ORCA" />
    <meta name="twitter:creator" content="@GCNS_ORCA" />
    <meta name="twitter:url" content="{{url('pages/gcns2024')}}" />
    <meta name="twitter:title" content="Global Conference on New Sinology" />
    <!-- maximum 140 char -->
    <meta name="twitter:description" content="Global Conference on New Sinology" />
    <!-- maximum 140 char -->
    <meta name="twitter:image" content="https://gcns.orcasia.org/gcns.png" />
    <!-- when you post this page url in twitter , this image will be shown -->
    <!-- twitter card ends from here -->

    <!-- facebook open graph starts from here, if you don't need then delete open graph related  -->
    <meta property="og:title" content="Global Conference on New Sinology" />
    <meta property="og:url" content="{{url('pages/gcns2024')}}" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:description" content="Global Conference on New Sinology" />
    <meta property="og:site_name" content="GCNS" />
    <!--meta property="fb:admins" content="" /--> <!-- use this if you have  -->
    <meta property="og:type" content="website" />
    <meta property="og:image" content="https://gcns.orcasia.org/gcns.png" />
    <!-- when you post this page url in facebook , this image will be shown -->
    <!-- facebook open graph ends from here -->

    <!--  FAVICON AND TOUCH ICONS -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ URL::asset('gcns/img/gcnslogo.png') }}" />
    <!-- this icon shows in browser toolbar -->
    <link rel="icon" type="image/x-icon" href="{{ URL::asset('gcns/img/gcnslogo.png') }}" />
    <!-- this icon shows in browser toolbar -->
    <link rel="apple-touch-icon" sizes="57x57" href="{{ URL::asset('gcns/img/gcnslogo.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ URL::asset('gcns/img/gcnslogo.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ URL::asset('gcns/img/gcnslogo.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ URL::asset('gcns/img/gcnslogo.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ URL::asset('gcns/img/gcnslogo.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ URL::asset('gcns/img/gcnslogo.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ URL::asset('gcns/img/gcnslogo.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ URL::asset('gcns/img/gcnslogo.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ URL::asset('gcns/img/gcnslogo.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ URL::asset('gcns/img/gcnslogo.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ URL::asset('gcns/img/gcnslogo.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ URL::asset('gcns/img/gcnslogo.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ URL::asset('gcns/img/gcnslogo.png') }}">
    <link rel="manifest" href="{{ URL::asset('gcns/img/favicon/manifest.json') }}">

    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="{{ URL::asset('gcns/libs/bootstrap/css/bootstrap.min.css') }}" media="all" />

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="{{ URL::asset('gcns/libs/fontawesome/css/font-awesome.min.css') }}" media="all" />

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="{{ URL::asset('gcns/libs/maginificpopup/magnific-popup.css') }}" media="all" />

    <!-- Time Circle -->
    <link rel="stylesheet" href="{{ URL::asset('gcns/libs/timer/TimeCircles.css') }}" media="all" />

    <!-- OWL CAROUSEL CSS -->
    <link rel="stylesheet" href="{{ URL::asset('gcns/libs/owlcarousel/owl.carousel.min.css') }}" media="all" />
    <link rel="stylesheet" href="{{ URL::asset('gcns/libs/owlcarousel/owl.theme.default.min.css') }}"
        media="all" />

    <!-- GOOGLE FONT -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Oswald:400,700%7cPoppins:300,400,400i,600,600i,700,800,900" />

    <!-- MASTER  STYLESHEET  -->
    <link id="lgx-master-style" rel="stylesheet" href="{{ URL::asset('gcns/css/style-default.min.css') }}"
        media="all" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.3/tiny-slider.css">

    <!-- MODERNIZER CSS  -->
    <script src="{{ URL::asset('gcns/js/vendor/modernizr-2.8.3.min.js') }}"></script>

    <!----re captcha -->
    <script src="https://www.google.com/recaptcha/api.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>
</head>

<style>
    html {
        scroll-behavior: smooth;
    }

    .white-logo {
        filter: brightness(0) invert(1);
    }

    #slider {
        height: 500px;
        background-color: whitesmoke;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .slide-img {
        width: 100%;
        height: 275px;
        border-radius: 10px;
        background-position: center;
        background-size: cover;
        cursor: pointer;
        display: flex;
        justify-content: center;
        align-items: center;
        transition: 0.5s;
    }

    .slide-img:hover {}

    .slide-img a {
        font-size: 1.5rem;
        color: white;
    }

    .slide-img:hover a {
        opacity: 1;
        transform: scale(1);
    }

    .slidername {
        color: #fff !important;
        margin-bottom: 1px !important;
        text-align: center !important;
    }

    .slidemr {
        margin: 2rem !important;
    }

    .sessiontag {
        background: #e41e25 !important;
        color: #fff !important;
    }

    .newspeaker {
        border-radius: 20px;
        max-width: 275px;
        min-width: 375px;
        max-height: 300px;
        min-height: 300px;
        object-fit: cover;
    }
</style>

<body class="home">

    <!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->

    <div class="lgx-container lgx-box-layout">
        <!-- ***  ADD YOUR SITE CONTENT HERE *** -->

        <!--HEADER-->
        <header>
            <div id="lgx-header" class="lgx-header">
                <div class="lgx-header-position">
                    <!--lgx-header-position-fixed lgx-header-position-white lgx-header-fixed-container lgx-header-fixed-container-gap lgx-header-position-white-->
                    <div class="lgx-container-fluid"> <!--lgx-container-fluid-->
                        <nav class="navbar navbar-default lgx-navbar">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                    data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <div class="lgx-logo">
                                    <a href="/pages/gcns" class="lgx-scroll">
                                        <img id="logo-img" src="{{ URL::asset('gcns/img/gcnslogo.png') }}"
                                            alt="GCNS LOGO" />
                                    </a>
                                    <a href="http://orcasia.org" class="lgx-scroll">
                                        <img id="logo-imgtwo" src="{{ URL::asset('gcns/img/orcalogo.png') }}"
                                            alt="ORCA LOGO" />
                                    </a>
                                </div>
                            </div>
                            <div id="navbar" class="navbar-collapse collapse">
                                <div class="lgx-nav-right navbar-right">
                                    <div class="lgx-cart-area">
                                        <a class="lgx-btn lgx-btn-red" target="_blank"
                                            href="https://orcasia.org/allfiles/ORCA's_GCNS_2024_Report.pdf">Download
                                            GCNS 2024 Report</a>
                                    </div>
                                </div>
                                <div class="lgx-nav-right navbar-right">
                                    <div class="lgx-cart-area">
                                        <!--  <a class="lgx-btn lgx-btn-red" data-toggle="modal" data-target="#lgx-modal-map">Register Now!</a> -->
                                    </div>
                                </div>
                                <ul class="nav navbar-nav lgx-nav navbar-right">
                                    <li><a class="lgx-scroll"
                                            href="https://orcasia.org/pages/gcns#lgx-about">About</a></li>

                                    <li><a class="lgx-scroll"
                                            href="https://orcasia.org/pages/gcns#lgx-schedule">Schedule</a></li>
                                    <li><a class="lgx-scroll"
                                            href="https://orcasia.org/pages/gcns#lgx-speakers">Speakers</a></li>
                                    <li><a class="lgx-scroll"
                                            href="https://orcasia.org/pages/gcns#lgx-media">Media</a></li>
                                    <li><a class="lgx-scroll"
                                            href="https://orcasia.org/pages/gcns#lgx-partners">Partners</a></li>

                                    <li><a class="lgx-scroll"
                                            href="https://orcasia.org/pages/gcns#lgx-contact">Contact</a></li>

                                </ul>
                            </div><!--/.nav-collapse -->
                        </nav>
                    </div>
                    <!-- //.CONTAINER -->
                </div>
            </div>
        </header>
        <!--HEADER END-->

        @yield('content')

        <!--FOOTER-->
        <footer>
            <div id="lgx-contact" class="lgx-footer lgx-footer-black"> <!--lgx-footer-white-->
                <div class="lgx-inner-footer">

                    <div class="container">
                        <div class="lgx-footer-area lgx-footer-area-center">
                            <div class="lgx-footer-single">
                                <h3 class="footer-title">Follow Us</h3>
                                <p class="text">

                                </p>
                                <ul class="list-inline lgx-social-footer">
                                    <li><a
                                            href="https://www.linkedin.com/company/orca-s-global-conference-on-new-sinology/"><i
                                                class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    <li><a href="https://twitter.com/GCNS_ORCA"><i class="fa fa-twitter"
                                                aria-hidden="true"></i></a></li>

                                </ul>
                                <h3 class="footer-title">Write to us at</h3>
                                <a class="map-link" href="mailto:gcns.orca@gmail.com"
                                    target="_blank">gcns.orca@gmail.com</a>
                            </div>
                            <div class="lgx-footer-single">
                                <h3 class="footer-title">Venue Location </h3>
                                <h4 class="date">
                                    26 - 27 September, 2024
                                </h4>
                                <address>
                                    The Grand<br>Nelson Mandela Marg, Pocket 4,<br>Vasant Kunj II, Vasant Kunj, New
                                    Delhi,<br>Delhi 110070
                                </address>
                                <a class="map-link" target="_blank" href="https://goo.gl/maps/WZdHG8wuzJCWMgCY7"><i
                                        class="fa fa-map-marker" aria-hidden="true"></i> View Map location</a>
                            </div>
                            <div class="lgx-footer-single">
                                <style>

                                </style>

                                <a class="twitter-timeline" href="https://twitter.com/GCNS_ORCA?ref_src=twsrc%5Etfw"
                                    data-theme="dark" data-height="400">Tweets by GCNS_ORCA</a>
                                <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

                                <div id="instafeed">

                                </div>
                            </div>
                        </div>
                        @include('gcns.form.registeration')
                        <div class="lgx-footer-bottom">
                            <div class="lgx-copyright">
                                <p> <span>©</span> 2024 ORCA | Designed by<a href="http://www.kwad.in"> KWAD</a>
                                </p>
                            </div>
                        </div>

                    </div>
                    <!-- //.CONTAINER -->
                </div>
                <!-- //.footer Middle -->
            </div>
            <!-- Modal Success Popup -->
            <div class="modal fade" id="successModal" tabindex="-1" role="dialog"
                aria-labelledby="successModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="successModalLabel">Success</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>Your form has been submitted successfully!</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--FOOTER END-->

    </div>
    <!--//.LGX SITE CONTAINER-->
    <!-- *** ADD YOUR SITE SCRIPT HERE *** -->
    <!-- JQUERY  -->
    <script src="{{ URL::asset('gcns/js/vendor/jquery-1.12.4.min.js') }}"></script>

    <!-- BOOTSTRAP JS  -->
    <script src="{{ URL::asset('gcns/libs/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- Smooth Scroll  -->
    <script src="{{ URL::asset('gcns/libs/jquery.smooth-scroll.js') }}"></script>

    <!-- SKILLS SCRIPT  -->
    <script src="{{ URL::asset('gcns/libs/jquery.validate.js') }}"></script>

    <!-- if load google maps then load this api, change api key as it may expire for limit cross as this is provided with any theme -->
    <script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDQvRGGtL6OrpP5xVMxq_0NgiMiRhm3ycI"></script>

    <!-- CUSTOM GOOGLE MAP -->
    <script type="text/javascript" src="{{ URL::asset('gcns/libs/gmap/jquery.googlemap.js') }}"></script>

    <!-- adding magnific popup js library -->
    <script type="text/javascript" src="{{ URL::asset('gcns/libs/maginificpopup/jquery.magnific-popup.min.js') }}">
    </script>

    <!-- Owl Carousel  -->
    <script src="{{ URL::asset('gcns/libs/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- COUNTDOWN   -->
    <script src="{{ URL::asset('gcns/libs/countdown.js') }}"></script>
    <script src="{{ URL::asset('gcns/libs/timer/TimeCircles.js') }}"></script>

    <!-- Counter JS -->
    <script src="{{ URL::asset('gcns/libs/waypoints.min.js') }}"></script>
    <script src="{{ URL::asset('gcns/libs/counterup/jquery.counterup.min.js') }}"></script>

    <!-- SMOTH SCROLL -->
    <script src="{{ URL::asset('gcns/libs/jquery.smooth-scroll.min.js') }}"></script>
    <script src="{{ URL::asset('gcns/libs/jquery.easing.min.js') }}"></script>

    <!-- type js -->
    <script src="{{ URL::asset('gcns/libs/typed/typed.min.js') }}"></script>

    <!-- header parallax js -->
    <script src="{{ URL::asset('gcns/libs/header-parallax.js') }}"></script>

    <!-- instafeed js -->
    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/instafeed.js/1.4.1/instafeed.min.js"></script>-->
    <script src="{{ URL::asset('gcns/libs/instafeed.min.js') }}"></script>

    <!-- CUSTOM SCRIPT  -->
    <script src="{{ URL::asset('gcns/js/custom.script.js') }}"></script>

    <script>
        $(window).scroll(function() {
            var scroll = $(window).scrollTop();
            var logo = $('#logo-img');

            if (scroll >= 1) { // Change this value to the scroll position at which you want the logo to change
                logo.addClass('white-logo');
            } else {
                logo.removeClass('white-logo');
            }
        });
    </script>

</body>

</html>
