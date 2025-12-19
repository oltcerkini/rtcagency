@extends('layouts.app')

@section('title', $service->title . ' | RTC Agency')

@section('content')
    <!-- Preloader -->
    <div class="loader-wrap">
        <div class="preloader">
            <div id="handle-preloader" class="handle-preloader">
                <div class="layer layer-one">
                    <span class="overlay"></span>
                </div>
                <div class="layer layer-three">
                    <span class="overlay"></span>
                </div>
                <div class="layer layer-two">
                    <span class="overlay"></span>
                </div>
                <div class="animation-preloader">
                    <div class="spinner"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader End -->

    <!-- Start sidebar widget content -->
    <div class="xs-sidebar-group info-group info-sidebar">
        <div class="xs-overlay xs-bg-black"></div>
        <div class="xs-sidebar-widget">
            <div class="sidebar-widget-container">
                <div class="widget-heading">
                    <a href="#" class="close-side-widget">X</a>
                </div>
                <div class="sidebar-textwidget">
                    <div class="sidebar-info-contents">
                        <div class="content-inner">
                            <div class="logo">
                                <a href="{{ url('/') }}">
                                    <img src="{{ asset('assets/images/resources/side-content__logo.png') }}" alt="" />
                                </a>
                            </div>
                            <div class="content-box">
                                <h3>Professional Business<br> Solutions</h3>
                                <div class="inner-text">
                                    <p>
                                        Our experienced team offers comprehensive services for businesses of all sizes.
                                        With years of experience in the industry, we provide all the knowledge and 
                                        expertise needed to grow your business.
                                    </p>
                                </div>
                            </div>
                            <div class="sidebar-contact-info">
                                <h3>Contact Us</h3>
                                <ul>
                                    <li>
                                        <div class="inner">
                                            <div class="icon">
                                                <span class="icon-location map-marker"></span>
                                            </div>
                                            <div class="text">
                                                <p>Business District,<br> City, Country</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="inner">
                                            <div class="icon">
                                                <span class="icon-mail"></span>
                                            </div>
                                            <div class="text">
                                                <p><a href="mailto:contact@rtcagency.com">contact@rtcagency.com</a></p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="inner">
                                            <div class="icon">
                                                <span class="icon-telephone"></span>
                                            </div>
                                            <div class="text">
                                                <p><a href="tel:+1234567890">+1 234 567 890</a></p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="inner">
                                            <div class="icon">
                                                <span class="icon-working-hours"></span>
                                            </div>
                                            <div class="text">
                                                <p>Working Hours: 9:00am to 6:00pm</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="side-content-newsletter-box">
                                <h3>Newsletter Subscription</h3>
                                <form action="#" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <input type="email" name="email" placeholder="Enter Email Address" required="">
                                        <button class="btn-one" type="submit">
                                            <span class="txt">
                                                subscribe now
                                                <i class="icon-right"></i>
                                            </span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <div class="thm-social-link">
                                <ul class="clearfix">
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-linkedin"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End sidebar widget content -->

    <div class="page-wrapper boxed_wrapper">
        <!--Start breadcrumb Style1 - Clean Hero Section-->
        <section class="breadcrumb-style1 breadcrumb-style1--clean">
            <div class="breadcrumb-style1-bg" style="background-image: url({{ $service->image ? Storage::url($service->image) : asset('assets/images/breadcrumb/breadcrumb-1.jpg') }});">
            </div>
            <div class="breadcrumb-style1__shape1 wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                <img class="float-bob-y" src="{{ asset('assets/images/shapes/breadcrumb-style1__shape1.png') }}" alt="">
            </div>
            <div class="breadcrumb-style1__shape2 wow slideInUp" data-wow-delay="100ms" data-wow-duration="2500ms">
                <img class="float-bob-x" src="{{ asset('assets/images/shapes/breadcrumb-style1__shape2.png') }}" alt="">
            </div>
            <div class="breadcrumb-style1__shape3 wow slideInUp" data-wow-delay="100ms" data-wow-duration="2500ms">
                <img class="rotatescale" src="{{ asset('assets/images/shapes/breadcrumb-style1__shape3.png') }}" alt="">
            </div>
            <div class="breadcrumb-style1__shape4 wow slideInDown" data-wow-delay="100ms" data-wow-duration="2500ms">
                <img class="float-bob" src="{{ asset('assets/images/shapes/breadcrumb-style1__shape4.png') }}" alt="">
            </div>
            <div class="breadcrumb-style1__shape5 wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms">
                <img class="float-bob-right" src="{{ asset('assets/images/shapes/breadcrumb-style1__shape5.png') }}" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="inner-content">
                            <div class="title">
                                <h2>{{ $service->title }}</h2>
                            </div>
                            <div class="breadcrumb-menu">
                                <ul>
                                    <li><a href="{{ url('/') }}">Home</a></li>
                                    <li class="active">{{ $service->title }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End breadcrumb Style1-->

        <!--Start Service Details Page-->
        <section class="service-details-page">
            <div class="container">
                <div class="row">
                    <!--Start Service Details Page Content - Full Width-->
                    <div class="col-xl-12">
                        <div class="service-details-page__content">

                            <div class="service-details-page__text1">
                                <div class="top-title">
                                    @if($service->icon)
                                    <div class="icon-box">
                                        <span class="{{ $service->icon }}"></span>
                                        <div class="round-box"></div>
                                    </div>
                                    @endif
                                    <h2>{{ $service->title }}</h2>
                                </div>
                                
                                @if($service->description)
                                <p>{{ $service->description }}</p>
                                @endif
                                
                                @if($service->content)
                                <div class="service-content">
                                    {!! $service->content !!}
                                </div>
                                @endif
                            </div>

                            <!--Start Service Details Page Features-->
                            <div class="service-details-page__features">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="single-box">
                                            <div class="top">
                                                <div class="icon">
                                                    <div class="round-box"></div>
                                                    <span class="icon-consulting"></span>
                                                </div>
                                                <div class="text">
                                                    <h3>Service Details</h3>
                                                    <div class="service-meta">
                                                        <ul class="service-info-list">
                                                            <li>
                                                                <strong>Status:</strong>
                                                                <span class="{{ $service->is_active ? 'text-success' : 'text-danger' }}">
                                                                    {{ $service->is_active ? 'Available' : 'Not Available' }}
                                                                </span>
                                                            </li>
                                                            @if($service->featured)
                                                            <li>
                                                                <strong>Featured:</strong>
                                                                <span>Yes</span>
                                                            </li>
                                                            @endif
                                                            @if($service->sort_order)
                                                           
                                                            @endif
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            
                                                <!--End Progress Box-->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="single-box">
                                            <div class="top">
                                                <div class="icon">
                                                    <div class="round-box"></div>
                                                    <span class="icon-largest-consulting"></span>
                                                </div>
                                                <div class="text">
                                                    <h3>Get Started</h3>
                                                    <p>
                                                        Ready to benefit from this service? Contact us today to discuss 
                                                        your specific requirements and how we can help your business grow.
                                                    </p>
                                                </div>
                                            </div>

                                            <!-- CTA Section -->
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End Service Details Page Features-->

                        </div>
                    </div>
                    <!--End Service Details Page Content-->
                </div>
            </div>
        </section>
        <!--End Service Details Page-->
    </div>
    <!-- /.page-wrapper -->

    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler">
                <i class="fa fa-times-circle"></i>
            </span>
            <div class="logo-box">
                <a href="{{ url('/') }}" aria-label="logo image">
                    <img src="{{ asset('assets/images/resources/mobile-nav-logo.png') }}" alt="" />
                </a>
            </div>
            <div class="mobile-nav-search-box">
                <form class="search-form" action="#" method="GET">
                    <input placeholder="Search..." type="text" name="q" />
                    <button type="submit">
                        <i class="fa fa-search"></i>
                    </button>
                </form>
            </div>
            <div class="mobile-nav__container">
                <!-- Mobile navigation will be populated by JavaScript -->
            </div>
            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:info@rtcagency.com">info@rtcagency.com</a>
                </li>
                <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="tel:+1234567890">+1 234 567 890</a>
                </li>
            </ul>
            <div class="mobile-nav__social">
                <a href="#" class="fab fa-facebook-square"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>
    </div>

    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <div class="search-popup__content">
            <form action="#" method="GET">
                <label for="search" class="sr-only">search here</label>
                <input type="text" id="search" name="q" placeholder="Search Here..." />
                <button type="submit" aria-label="search submit" class="thm-btn">
                    <i class="icon-magnifying-glass"></i>
                </button>
            </form>
        </div>
    </div>

    <!--Scroll to top-->
    <div class="scroll-to-top">
        <div>
            <div class="scroll-top-inner">
                <div class="scroll-bar">
                    <div class="bar-inner"></div>
                </div>
                <div class="scroll-bar-text">Go To Top</div>
            </div>
        </div>
    </div>
    <!-- Scroll to top End -->
@endsection

<style>
/* Remove blue overlay from breadcrumb/hero section */
.breadcrumb-style1-bg::before {
    background: transparent !important;
}

.breadcrumb-style1-bg {
    background-size: cover !important;
    background-position: center !important;
    background-repeat: no-repeat !important;
}

.breadcrumb-style1--clean .breadcrumb-style1-bg {
    filter: none !important;
    -webkit-filter: none !important;
}

.service-info-list {
    list-style: none;
    padding: 0;
    margin: 0;
}

.service-info-list li {
    margin-bottom: 8px;
    padding-bottom: 8px;
    border-bottom: 1px solid #eee;
}

.service-info-list li:last-child {
    border-bottom: none;
    margin-bottom: 0;
    padding-bottom: 0;
}

.service-info-list strong {
    color: #333;
    font-weight: 600;
}

.service-info-list span {
    float: right;
}

.service-content {
    margin-top: 20px;
}

.service-content p {
    margin-bottom: 15px;
    line-height: 1.6;
}

.service-cta-box {
    background: #f8f9fa;
    padding: 20px;
    border-radius: 8px;
    margin-top: 20px;
}

.service-cta-box h4 {
    margin-bottom: 10px;
    color: #333;
}

.service-cta-box p {
    margin-bottom: 15px;
    color: #666;
}
</style>