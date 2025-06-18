@extends('landingpage.layouts.master')

@section('title', 'IoT Aksara Yotta')

@section('content')
<!-- Start Banner Area  -->
    <div class="rbt-banner-area rbt-banner-8 variation-03 section-bottom-overlay">
        <div class="wrapper bg-color-secondary-alt">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-10 offset-lg-1">
                        <div class="content">
                            <div class="inner text-center">
                                <div class="section-title">
                                    <span class="subtitle bg-primary-opacity">Enjoy Monitoring!</span>
                                </div>

                                <h1 class="banner-title">Internet of Things<span class="theme-gradient"><br>Yotta Aksara Energy</span></h1>

                                <p class="description has-medium-font-size mt--20">Discover IoT innovations by Yotta — air quality monitoring, 
                                    greenhouse automation, outdoor farming, and soil management & testing.</p>

                                <div class="slider-btn rbt-button-group justify-content-center">
                                    <a class="rbt-btn btn-gradient rbt-switch-btn rbt-switch-y" href="#">
                                        <span data-text="Learn More About Us">Learn More About Us</span>
                                    </a>
                                </div>
                                <div class="brand-area mt--60">
                                    <span class="follow-us-text">Making sensitive clients more valuable for companies
                                        like</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-overlay-section">
            <div class="container">
                <div class="row row--15">
                    <div class="col-lg-12">
                        <div class="swiper team-slide-activation-4 rbt-arrow-between rbt-dot-bottom-center">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="team team-style--bottom variation-2">
                                        <div class="thumbnail">
                                            <a href="#"><img src="{{ asset('assets/images/IoT/Air Quality IoT.png') }}" alt="Blog Images"></a>
                                        </div>
                                        <div class="content">
                                            <div class="inner">
                                                <h4 class="title"><a href="{{ route('airquality') }}">Air Quality IoT</a></h4>
                                                <p class="designation">By Yotta</p>
                                            </div>
                                            <div class="icon-right">
                                                <a href="#"><i class="feather-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="team team-style--bottom variation-2">
                                        <div class="thumbnail">
                                            <a href="#"><img src="{{ asset('assets/images/IoT/Green House.png') }}" alt="Blog Images"></a>
                                        </div>
                                        <div class="content">
                                            <div class="inner">
                                                <h4 class="title"><a href="#">Green House</a></h4>
                                                <p class="designation">By Yotta</p>
                                            </div>
                                            <div class="icon-right">
                                                <a href="#"><i class="feather-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="team team-style--bottom variation-2">
                                        <div class="thumbnail">
                                            <a href="#"><img src="{{ asset('assets/images/IoT/Outdoor Farming.png') }}" alt="Blog Images"></a>
                                        </div>
                                        <div class="content">
                                            <div class="inner">
                                                <h4 class="title"><a href="#">Outdoor Farming</a></h4>
                                                <p class="designation">By Yotta</p>
                                            </div>
                                            <div class="icon-right">
                                                <a href="#"><i class="feather-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="team team-style--bottom variation-2">
                                        <div class="thumbnail">
                                            <a href="#"><img src="{{ asset('assets/images/IoT/Soil.png') }}" alt="Blog Images"></a>
                                        </div>
                                        <div class="content">
                                            <div class="inner">
                                                <h4 class="title"><a href="#">Soil Mngmt & Testing</a></h4>
                                                <p class="designation">By Yotta</p>
                                            </div>
                                            <div class="icon-right">
                                                <a href="#"><i class="feather-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            <div class="rbt-swiper-arrow rbt-arrow-left">
                                <div class="custom-overfolow">
                                    <i class="rbt-icon feather-arrow-left"></i>
                                    <i class="rbt-icon-top feather-arrow-left"></i>
                                </div>
                            </div>

                            <div class="rbt-swiper-arrow rbt-arrow-right">
                                <div class="custom-overfolow">
                                    <i class="rbt-icon feather-arrow-right"></i>
                                    <i class="rbt-icon-top feather-arrow-right"></i>
                                </div>
                            </div>
                            <div class="rbt-swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner Area  -->
@endsection