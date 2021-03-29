<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content="Premium Bootstrap 4 Landing Page Template"/>
    <meta name="keywords" content="bootstrap 4, premium, marketing, multipurpose"/>
    <meta content="Themesdesign" name="author"/>
    <!-- favicon -->
    <link rel="shortcut icon" href="images/favicon.ico"/>
    <!-- css -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/css/materialdesignicons.min.css') }}" rel="stylesheet" type="text/css"/>
    <!-- flexslider slider -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/flexslider.css') }}"/>
    <!-- magnific pop-up -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/magnific-popup.css') }}"/>
    <!-- magnific pop-up -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/ion.rangeSlider.min.css') }}"/>
    <!-- Pe-icon-7 icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/pe-icon-7-stroke.css') }}"/>
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/swiper.min.css') }}"/>
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css"/>
    <style>
        .navbar-custom {
            background-color: #607d8b;
        }
    </style>
</head>

<body>
<!--Navbar Start-->
<nav class="navbar navbar-expand-lg fixed-top navbar-custom sticky navbar-light">
    <div class="container">
        <!-- LOGO -->
        <a class="navbar-brand logo text-uppercase" href="index.html" style="color: #fff;">VMEDIA</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <i class="mdi mdi-menu"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav ml-auto navbar-center" id="mySidenav">
                <li class="nav-item active">
                    <a href="#home" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="#portfolio" class="nav-link">Portfolio</a>
                </li>
                <li class="nav-item">
                    <a href="#pricing" class="nav-link">Pricing</a>
                </li>
                <li class="nav-item">
                    <a href="#team" class="nav-link">Team</a>
                </li>
                <li class="nav-item">
                    <a href="#testimonial" class="nav-link">Testimonial</a>
                </li>
                <li class="nav-item">
                    <a href="#contact" class="nav-link">Contact</a>
                </li>
            </ul>
            @php
                if (Auth::check()) {
               echo '<div class="navbar-button d-none d-lg-inline-block">
                        <a href="https://www.vmedia.com/dashboard" class="btn btn-sm btn-success btn-round">Dashboard</a>
                    </div>';
                }
                else{
                    echo '<div class="navbar-button d-none d-lg-inline-block">
                                <a href="https://www.vmedia.com/login" class="btn btn-sm btn-success btn-round">Sign in</a>
                            </div>';
                }
            @endphp
        </div>
    </div>
</nav>
<!-- Navbar End -->
@yield('main_content')


<!-- START FOOTER -->
<section class="section bg-light pb-5">
    <div class="container">

        <hr class="my-5"/>

        <div class="row">
            <div class="col-12">
                <div class="text-center">
                    <p class="text-muted mb-0">2020 © Floaks. Design by Themesdesign</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END FOOTER -->

<!-- javascript -->
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.easing.min.js') }}"></script>
<script src="{{ asset('assets/js/scrollspy.min.js') }}"></script>
<!--flex slider plugin-->
<script src="{{ asset('assets/js/jquery.flexslider-min.js') }}"></script>

<!-- Portfolio -->
<script src="{{ asset('assets/js/ion.rangeSlider.min.js') }}"></script>

<!-- Portfolio -->
<script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('assets/js/isotope.js') }}"></script>

<!-- counter init -->
<script src="{{ asset('assets/js/counter.init.js') }}"></script>

<!-- Swiper JS -->
<script src="{{ asset('assets/js/swiper.min.js') }}"></script>

<!-- yt player -->
<script src="{{ asset('assets/js/jquery.mb.YTPlayer.js') }}"></script>

<!-- contact init -->
<script src="{{ asset('assets/js/contact.init.js') }}"></script>

<!-- Main Js -->
<script src="{{ asset('assets/js/app.js') }}"></script>
</body>
</html>

