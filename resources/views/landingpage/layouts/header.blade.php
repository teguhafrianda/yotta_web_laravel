<!-- Start Header Area -->
<header class="rbt-header">
    <div class="rbt-sticky-placeholder"></div>
    <div class="rbt-header-wrapper">
        <div class="container">
            <div class="mainbar-row rbt-navigation-center align-items-center">
                
                <!-- Logo -->
                <div class="header-left">
                    <div class="logo logo-dark">
                        <a href="{{ url('/') }}">
                            <img src="{{ asset('assets/images/IoT/logo.jpg') }}" alt="Logo">
                        </a>
                    </div>
                    <div class="logo d-none logo-light">
                        <a href="{{ url('/') }}">
                            <img src="{{ asset('assets/images/IoT/logotrans.png') }}" alt="Logo Light">
                        </a>
                    </div>
                </div>

                <!-- Main Navigation -->
                <div class="rbt-main-navigation d-none d-xl-block">
                    <nav class="mainmenu-nav">
                        <ul class="mainmenu">
                            <li class="current"><a href="{{ route('home') }}">Home</a></li>
                            <li><a href="{{ route('airquality') }}">Air Quality</a></li>
                            <li><a href="{{ route('solardome') }}">Solar Dome</a></li>
                            <li><a href="{{ route('greenhouse') }}">Green House</a></li>
                            <li class="has-dropdown has-menu-child-item">
                                <a href="#">Soil Monitoring
                                    <i class="feather-chevron-down"></i>
                                </a>
                                <ul class="submenu">
                                    <li><a href="{{ route('soilmanag') }}">Soil Management</a></li>
                                    <li><a href="{{ route('soiltest') }}">Soil Testing</a></li>
                                    <li><a href="{{ route('soilquality') }}">Soil Quality</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>

                <!-- Hamburger / Offcanvas -->
                <div class="header-right">
                    <div class="rbt-offcanvas-trigger" id="rbt-offcanvas-activation">
                        <span class="offcanvas-trigger">
                            <span class="offcanvas-bars">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                        </span>
                    </div>
                </div>

            </div>
        </div>

        <!-- Start Search Dropdown -->
        <div class="rbt-search-dropdown">
            <div class="wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <form action="#">
                            <input type="text" placeholder="What are you looking for?">
                            <div class="submit-btn">
                                <a class="rbt-btn btn-gradient btn-md" href="#">Search</a>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="rbt-separator-mid">
                    <hr class="rbt-separator m-0">
                </div>
            </div>
        </div>
        <!-- End Search Dropdown -->
    </div>
</header>
