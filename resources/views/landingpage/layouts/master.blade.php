<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title') - Yotta Aksara Energy</title>
    <meta name="robots" content="noindex, follow">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="iot-api-url" content="{{ route('airquality.data') }}">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/yotta.png') }}">

    <!-- CSS
	============================================ -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/sal.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/euclid-circulara.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/swiper.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/odometer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/animation.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/bootstrap-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/magnigy-popup.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/plyr.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/jodit.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
</head>

<body class="rbt-header-sticky">

    <div id="my_switcher" class="my_switcher">
        <ul>
            <li>
                <a href="javascript: void(0);" data-theme="light" class="setColor light">
                    <img src="{{ asset('assets/images/about/sun-01.svg') }}" alt="Sun images"><span title="Light Mode"> Light</span>
                </a>
            </li>
            <li>
                <a href="javascript: void(0);" data-theme="dark" class="setColor dark">
                    <img src="{{ asset('assets/images/about/vector.svg') }}" alt="Vector Images"><span title="Dark Mode"> Dark</span>
                </a>
            </li>
        </ul>
    </div>

    <!-- Start Header Area -->

    @include('landingpage.layouts.header')

    

    <!-- Start Side Vav -->
    <div class="side-menu">
        <div class="inner-wrapper">
            <div class="inner-top">
                <div class="content">
                    <div class="logo">
                        <a href="index.html">
                            <img src="{{ asset('assets/images/IoT/logo.jpg') }}" alt="Education Logo Images">
                        </a>
                    </div>
                    <div class="rbt-btn-close" id="btn_sideNavClose">
                        <button class="rbt-round-btn"><i class="feather-x"></i></button>
                    </div>
                </div>
                <p class="description">Internet of Things by Yotta Aksara Energy</p>

                <ul class="navbar-top-left rbt-information-list justify-content-start">
                    <li>
                        <a href="mailto:hello@example.com"><i class="feather-mail"></i>aksara.yotta@gmail.com</a>
                    </li>
                    <li>
                        <a href="https://wa.me/6285708364407"><i class="feather-phone"></i>(62) 857-0836-4407</a>
                    </li>
                </ul>
            </div>
            <nav class="side-nav w-100 mt--60 mb--80">
                <ul class="navbar-nav">
                    <li>
                        <a href="{{ route('home') }}">Home</a>
                    </li>
                    <li>
                        <a href="{{ route('airquality') }}">Air Quality</a>
                    </li>
                    <li>
                        <a href="{{ route('outdoor') }}">Outdoor Farming</a>
                    </li>
                    <li>
                        <a href="{{ route('greenhouse') }}">Greenhouse</a>
                    </li>
                    <li>
                        <a href="{{ route('soilmanag') }}">Soil Management</a>
                    </li>
                    <li>
                        <a href="{{ route('soiltest') }}">Soil Testing</a>
                    </li>
                    <li>
                        <a href="https://aksarayotta.com/">About Us</a>
                    </li>
                </ul>
            </nav>
            <div class="social-share-wrapper">
                <span class="rbt-short-title d-block">Find With Us</span>
                <ul class="social-icon social-default transparent-with-border justify-content-start mt--20">
                    <li><a href="https://www.instagram.com//aksara.yotta/">
                            <i class="feather-instagram"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <ul class="rbt-secondary-menu mt--50">
                <li><a href="https://wa.me/6285708364407">Contact Us</a></li>
                <li><a href="https://wa.me/6285708364407">Privacy Policy</a></li>
            </ul>
        </div>
    </div>
    <!-- End Side Vav -->

    <a class="close_side_menu" href="javascript:void(0);"></a>

    <!-- Start Banner Area  -->
    @yield('content')
    <!-- End Banner Area  -->


    <!-- Start Footer aera -->
    @include('landingpage.layouts.footer')

    <!-- End Footer aera -->
    <div class="rbt-separator-mid">
        <div class="container">
            <hr class="rbt-separator m-0">
        </div>
    </div>
    <!-- Start Copyright Area  -->
    <div class="copyright-area copyright-style-1 ptb--20">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-12">
                    <p class="rbt-link-hover text-center text-lg-start">Copyright © 2025 <a href="https://aksarayotta.com/">Yotta Aksara.</a> All Rights Reserved</p>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-12">
                    <ul class="copyright-link rbt-link-hover justify-content-center justify-content-lg-end mt_sm--10 mt_md--10">
                        <li><a href="#">Terms of service</a></li>
                        <li><a href="privacy-policy.html">Privacy policy</a></li>
                        <li><a href="subscription.html">Subscription</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Copyright Area  -->
    <div class="rbt-progress-parent">
        <svg class="rbt-back-circle svg-inner" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

    <!-- JS
============================================ -->
    <!-- Modernizer JS -->
    <script src="{{ asset('assets/js/vendor/modernizr.min.js') }}"></script>
    <!-- jQuery JS -->
    <script src="{{ asset('assets/js/vendor/jquery.js') }}"></script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('assets/js/vendor/bootstrap.min.js') }}"></script>
    <!-- sal.js') }} -->
    <script src="{{ asset('assets/js/vendor/sal.js') }}"></script>
    <!-- Dark Mode Switcher -->
    <script src="{{ asset('assets/js/vendor/js.cookie.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery.style.switcher.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/swiper.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery-appear.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/odometer.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/backtotop.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/isotop.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/imageloaded.js') }}"></script>

    <script src="{{ asset('assets/js/vendor/wow.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/waypoint.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/easypie.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/text-type.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery-one-page-nav.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery-ui.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/magnify-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/paralax-scroll.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/paralax.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/countdown.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/plyr.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jodit.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/Sortable.min.js') }}"></script>



    <!-- Main JS -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    @stack('scripts')

</body>

</html>