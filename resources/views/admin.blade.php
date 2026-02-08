<?php $user_meta = App\Models\UserMeta::where('user_id', Auth::user()->id)->first(); ?>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>@yield('title')</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->

    <link rel="apple-touch-icon" sizes="57x57" href="{{ URL::asset('images/favicon/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ URL::asset('images/favicon/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ URL::asset('images/favicon/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ URL::asset('images/favicon/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ URL::asset('images/favicon/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ URL::asset('images/favicon/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ URL::asset('images/favicon/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ URL::asset('images/favicon/apple-icon-152x152.png') }}') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ URL::asset('images/favicon/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192"
        href="{{ URL::asset('images/favicon/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ URL::asset('images/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ URL::asset('images/favicon/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ URL::asset('images/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ URL::asset('images/favicon/manifest.json') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ URL::asset('images/favicon/ms-icon-144x144.png') }}">
    <meta name="theme-color" content="#ffffff">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.6/cropper.css" />

    <!-- Template Main CSS File -->
    <link href="{{ URL::asset('css/admin.css') }}" rel="stylesheet">

</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="{{ url('/') }}" class="logo d-flex align-items-center">
                <img src="{{ URL::asset('images/ORCA Website Banner Logo PNG.png') }}" alt="logo">
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->

        <!-- End Search Bar -->

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">
                <li class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="{{ URL::asset('images/author/' . $user_meta->avatar) }}" alt="Profile"
                            class="rounded-circle">
                        <span class="d-none d-md-block dropdown-toggle ps-2">{{ Auth::user()->name }}</span>
                    </a><!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile" style="">

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="{{ URL::asset('user_logout') }}">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Sign Out</span>
                            </a>
                        </li>

                    </ul><!-- End Profile Dropdown Items -->
                </li><!-- End Profile Nav -->

            </ul>
        </nav><!-- End Icons Navigation -->

    </header>
    <!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">
        <ul class="sidebar-nav" id="sidebar-nav">
            <li class="nav-item">
                @if (request()->is('yn-admin'))
                    <a class="nav-link" href="{{ url('yn-admin') }}">
                    @else
                        <a class="nav-link collapsed" href="{{ url('yn-admin') }}">
                @endif
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->

            <li class="nav-item">
                @if (str_contains(url()->current(), '/yn-admin/articles'))
                    <a class="nav-link" data-bs-target="#articles-nav" data-bs-toggle="collapse" href="#"
                        aria-expanded="true">
                    @else
                        <a class="nav-link collapsed" data-bs-target="#articles-nav" data-bs-toggle="collapse"
                            href="#" aria-expanded="false">
                @endif
                <i class="bi bi-journal-text"></i>
                <span>Articles</span>
                <i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="articles-nav"
                    class="nav-content collapse <?= str_contains(url()->current(), '/yn-admin/articles') ? 'show' : '' ?>"
                    data-bs-parent="#sidebar-nav" style="">
                    <li>
                        <a href="{{ url('yn-admin/articles') }}"
                            class="<?= request()->is('yn-admin/articles') ? 'active' : '' ?>">
                            <i class="bi bi-circle"></i><span>All</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('yn-admin/articles/create') }}"
                            class="<?= request()->is('yn-admin/articles/create') ? 'active' : '' ?>">
                            <i class="bi bi-circle"></i><span>Add</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Article Nav -->

            <li class="nav-item">
                @if (str_contains(url()->current(), '/yn-admin/users'))
                    <a class="nav-link" data-bs-target="#users-nav" data-bs-toggle="collapse" href="#"
                        aria-expanded="true">
                    @else
                        <a class="nav-link collapsed" data-bs-target="#users-nav" data-bs-toggle="collapse"
                            href="#" aria-expanded="false">
                @endif
                <i class="bi bi-vector-pen"></i>
                <span>Authors</span>
                <i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="users-nav"
                    class="nav-content collapse <?= str_contains(url()->current(), '/yn-admin/users') ? 'show' : '' ?>"
                    data-bs-parent="#sidebar-nav" style="">
                    <li>
                        <a href="{{ url('yn-admin/users') }}"
                            class="<?= request()->is('yn-admin/users') ? 'active' : '' ?>">
                            <i class="bi bi-circle"></i><span>All</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('yn-admin/users/create') }}"
                            class="<?= request()->is('yn-admin/users/create') ? 'active' : '' ?>">
                            <i class="bi bi-circle"></i><span>Add</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End User Nav -->

            <li class="nav-item">
                @if (str_contains(url()->current(), '/yn-admin/category'))
                    <a class="nav-link" href="{{ url('yn-admin/category') }}">
                    @else
                        <a class="nav-link collapsed" href="{{ url('yn-admin/category') }}">
                @endif
                <i class="bi bi-list-columns-reverse"></i>
                <span>Category</span>
                </a>
            </li><!-- End Category Nav -->

            <li class="nav-item">
                @if (str_contains(url()->current(), '/yn-admin/tags'))
                    <a class="nav-link" href="{{ url('yn-admin/tags') }}">
                    @else
                        <a class="nav-link collapsed" href="{{ url('yn-admin/tags') }}">
                @endif
                <i class="bi bi-tags-fill"></i>
                <span>Tag</span>
                </a>
            </li><!-- End Tag Nav -->

            <li class="nav-item">
                @if (request()->is('yn-admin/subscribers'))
                    <a class="nav-link" href="{{ url('yn-admin/subscribers') }}">
                    @else
                        <a class="nav-link collapsed" href="{{ url('yn-admin/subscribers') }}">
                @endif
                <i class="bi bi-people"></i>
                <span>Subscribers</span>
                </a>
            </li><!-- End Subscribers Nav -->

            <li class="nav-item">
                @if (request()->is('yn-admin/all-users'))
                    <a class="nav-link" href="{{ url('yn-admin/all-users') }}">
                    @else
                        <a class="nav-link collapsed" href="{{ url('yn-admin/all-users') }}">
                @endif
                <i class="bi bi-person"></i>
                <span>All Users</span>
                </a>
            </li><!-- End All Users Nav -->

            <li class="nav-item">
                @if (request()->is('yn-admin/graphsPage'))
                    <a class="nav-link" href="{{ url('yn-admin/graphsPage') }}">
                    @else
                        <a class="nav-link collapsed" href="{{ url('yn-admin/graphsPage') }}">
                @endif
                <i class="bi bi-people"></i>
                <span>Team Page</span>
                </a>
            </li>

            <li class="nav-item">
                @if (request()->is('yn-admin/fileUpload'))
                    <a class="nav-link" href="{{ url('yn-admin/fileUpload') }}">
                    @else
                        <a class="nav-link collapsed" href="{{ url('yn-admin/fileUpload') }}">
                @endif
                <i class="bi bi-people"></i>
                <span>File Uploader</span>
                </a>
            </li><!-- End GraphsPage Nav -->

            <li class="nav-item">
                @if (str_contains(url()->current(), '/yn-admin/gcns/'))
                    <a class="nav-link" data-bs-target="#gcns-nav" data-bs-toggle="collapse" href="#"
                        aria-expanded="true">
                    @else
                        <a class="nav-link collapsed" data-bs-target="#gcns-nav" data-bs-toggle="collapse"
                            href="#" aria-expanded="false">
                @endif
                <i class="bi bi-journal-text"></i>
                <span>GCNS 25</span>
                <i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="gcns-nav"
                    class="nav-content collapse <?= str_contains(url()->current(), '/yn-admin/gcns/') ? 'show' : '' ?>"
                    data-bs-parent="#sidebar-nav" style="">
                    <li>
                        <a href="{{ url('yn-admin/gcns/registeration') }}"
                            class="<?= request()->is('yn-admin/gcns/registeration') ? 'active' : '' ?>">
                            <i class="bi bi-circle"></i><span>Registerations Listing</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('yn-admin/gcns/schedule') }}"
                            class="<?= request()->is('yn-admin/gcns/schedule') ? 'active' : '' ?>">
                            <i class="bi bi-circle"></i><span>Schedule</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('yn-admin/gcns/partner') }}"
                            class="<?= request()->is('yn-admin/gcns/partner') ? 'active' : '' ?>">
                            <i class="bi bi-circle"></i><span>Partner</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('yn-admin/gcns/speaker') }}"
                            class="<?= request()->is('yn-admin/gcns/speaker') ? 'active' : '' ?>">
                            <i class="bi bi-circle"></i><span>Speaker</span>
                        </a>
                    </li>                    
                    <li>
                        <a href="{{ url('yn-admin/gcns/convenors') }}"
                            class="<?= request()->is('yn-admin/gcns/convenors') ? 'active' : '' ?>">
                            <i class="bi bi-circle"></i><span>Convenors</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('yn-admin/gcns/about') }}"
                            class="<?= request()->is('yn-admin/gcns/about') ? 'active' : '' ?>">
                            <i class="bi bi-circle"></i><span>About</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('yn-admin/gcns/media') }}"
                            class="<?= request()->is('yn-admin/gcns/media') ? 'active' : '' ?>">
                            <i class="bi bi-circle"></i><span>Media</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End GCNS 25 Nav -->

            <li class="nav-item">
                @if (str_contains(url()->current(), '/yn-admin/event'))
                    <a class="nav-link" data-bs-target="#event-nav" data-bs-toggle="collapse" href="#"
                        aria-expanded="true">
                    @else
                        <a class="nav-link collapsed" data-bs-target="#event-nav" data-bs-toggle="collapse"
                            href="#" aria-expanded="false">
                @endif
                <i class="bi bi-journal-text"></i>
                <span>GCNS 24</span>
                <i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="event-nav"
                    class="nav-content collapse <?= str_contains(url()->current(), '/yn-admin/event') ? 'show' : '' ?>"
                    data-bs-parent="#sidebar-nav" style="">
                    <li>
                        <a href="{{ url('yn-admin/event/registeration') }}"
                            class="<?= request()->is('yn-admin/event/registeration') ? 'active' : '' ?>">
                            <i class="bi bi-circle"></i><span>Registerations Listing</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('yn-admin/event/schedule') }}"
                            class="<?= request()->is('yn-admin/event/schedule') ? 'active' : '' ?>">
                            <i class="bi bi-circle"></i><span>Schedule</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('yn-admin/event/partner') }}"
                            class="<?= request()->is('yn-admin/event/partner') ? 'active' : '' ?>">
                            <i class="bi bi-circle"></i><span>Partner</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('yn-admin/event/convenors') }}"
                            class="<?= request()->is('yn-admin/event/convenors') ? 'active' : '' ?>">
                            <i class="bi bi-circle"></i><span>Convenors</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('yn-admin/event/about') }}"
                            class="<?= request()->is('yn-admin/event/about') ? 'active' : '' ?>">
                            <i class="bi bi-circle"></i><span>About</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('yn-admin/event/speaker') }}"
                            class="<?= request()->is('yn-admin/event/speaker') ? 'active' : '' ?>">
                            <i class="bi bi-circle"></i><span>Speaker</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('yn-admin/event/media') }}"
                            class="<?= request()->is('yn-admin/event/media') ? 'active' : '' ?>">
                            <i class="bi bi-circle"></i><span>Media</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End GCNS 24 Nav -->

            <li class="nav-item">
                @if (str_contains(url()->current(), '/yn-admin/gcns23'))
                    <a class="nav-link" data-bs-target="#gcns23-nav" data-bs-toggle="collapse" href="#"
                        aria-expanded="true">
                    @else
                        <a class="nav-link collapsed" data-bs-target="#gcns23-nav" data-bs-toggle="collapse"
                            href="#" aria-expanded="false">
                @endif
                <i class="bi bi-journal-text"></i>
                <span>GCNS 23</span>
                <i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="gcns23-nav"
                    class="nav-content collapse <?= str_contains(url()->current(), '/yn-admin/gcns23') ? 'show' : '' ?>"
                    data-bs-parent="#sidebar-nav" style="">
                    <li>
                        <a href="{{ url('yn-admin/gcns23/registeration') }}"
                            class="<?= request()->is('yn-admin/gcns23/registeration') ? 'active' : '' ?>">
                            <i class="bi bi-circle"></i><span>Registerations Listing</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('yn-admin/gcns23/schedule') }}"
                            class="<?= request()->is('yn-admin/gcns23/schedule') ? 'active' : '' ?>">
                            <i class="bi bi-circle"></i><span>Schedule</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('yn-admin/gcns23/partner') }}"
                            class="<?= request()->is('yn-admin/gcns23/partner') ? 'active' : '' ?>">
                            <i class="bi bi-circle"></i><span>Partner</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('yn-admin/gcns23/convenors') }}"
                            class="<?= request()->is('yn-admin/gcns23/convenors') ? 'active' : '' ?>">
                            <i class="bi bi-circle"></i><span>Convenors</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('yn-admin/gcns23/speaker') }}"
                            class="<?= request()->is('yn-admin/gcns23/speaker') ? 'active' : '' ?>">
                            <i class="bi bi-circle"></i><span>Speaker</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('yn-admin/gcns23/about') }}"
                            class="<?= request()->is('yn-admin/gcns23/about') ? 'active' : '' ?>">
                            <i class="bi bi-circle"></i><span>About</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('yn-admin/gcns23/media') }}"
                            class="<?= request()->is('yn-admin/gcns23/media') ? 'active' : '' ?>">
                            <i class="bi bi-circle"></i><span>Media</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End GCNS 23 Nav -->
            
            <li class="nav-item">
                @if (str_contains(url()->current(), '/yn-admin/orcafiles'))
                    <a class="nav-link" data-bs-target="#orcafiles-nav" data-bs-toggle="collapse" href="#"
                        aria-expanded="true">
                    @else
                        <a class="nav-link collapsed" data-bs-target="#orcafiles-nav" data-bs-toggle="collapse"
                            href="#" aria-expanded="false">
                @endif
                <i class="bi bi-journal-text"></i>
                <span>Orcafiles</span>
                <i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="orcafiles-nav"
                    class="nav-content collapse <?= str_contains(url()->current(), '/yn-admin/orcafiles') ? 'show' : '' ?>"
                    data-bs-parent="#sidebar-nav" style="">
                    <li>
                        <a href="{{ url('yn-admin/orcafiles') }}"
                            class="<?= request()->is('yn-admin/orcafiles') ? 'active' : '' ?>">
                            <i class="bi bi-circle"></i><span>All</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('yn-admin/orcafiles/create') }}"
                            class="<?= request()->is('yn-admin/orcafiles/create') ? 'active' : '' ?>">
                            <i class="bi bi-circle"></i><span>Add</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End OrcaFile Nav -->

            <li class="nav-item">
                @if (str_contains(url()->current(), '/yn-admin/episodesofexchanges'))
                    <a class="nav-link" data-bs-target="#episodesofexchanges-nav" data-bs-toggle="collapse" href="#"
                        aria-expanded="true">
                    @else
                        <a class="nav-link collapsed" data-bs-target="#episodesofexchanges-nav" data-bs-toggle="collapse"
                            href="#" aria-expanded="false">
                @endif
                <i class="bi bi-journal-text"></i>
                <span>Episodes of Exchanges</span>
                <i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="episodesofexchanges-nav"
                    class="nav-content collapse <?= str_contains(url()->current(), '/yn-admin/episodesofexchanges') ? 'show' : '' ?>"
                    data-bs-parent="#sidebar-nav" style="">
                    <li>
                        <a href="{{ url('yn-admin/episodesofexchanges') }}"
                            class="<?= request()->is('yn-admin/episodesofexchanges') ? 'active' : '' ?>">
                            <i class="bi bi-circle"></i><span>All</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('yn-admin/episodesofexchanges/create') }}"
                            class="<?= request()->is('yn-admin/episodesofexchanges/create') ? 'active' : '' ?>">
                            <i class="bi bi-circle"></i><span>Add</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End DMArticle Nav -->
        </ul>
    </aside>
    <!-- End Sidebar-->

    <!-- Main Content Wrapper -->
    @yield('content')
    <!-- End Main Content Wrapper -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="credits">
            Designed by <a href="https://kwad.in">KWAD</a>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-migrate-3.4.0.min.js"
        integrity="sha256-mBCu5+bVfYzOqpYyK4jm30ZxAZRomuErKEFJFIyrwvM=" crossorigin="anonymous"></script>
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.js"></script>
    <script src="{{ URL::asset('vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.6/cropper.js"></script>

    <!-- Template Main JS File -->
    <script src="{{ URL::asset('js/admin.js') }}"></script>
    @yield('scripts')
</body>

</html>
