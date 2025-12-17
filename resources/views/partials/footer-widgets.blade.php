<!--Start Single Footer Widget-->
<div class="col-xl-2 col-lg-6 col-md-6 single-widget wow fadeInUp" data-wow-delay="100ms"
    data-wow-duration="1500ms">
    <div class="single-footer-widget marbtm">
        <div class="title">
            <h3>About us</h3>
        </div>
        <div class="our-company-info">
            <div class="footer-logo-style1">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('assets/images/logo-white.png') }}" alt="Awesome Logo"
                        title="">
                </a>
            </div>
        </div>
    </div>
</div>
<!--End Single Footer Widget-->

<!--Start Single Footer Widget-->
<div class="col-xl-2 col-lg-6 col-md-6 single-widget wow fadeInUp" data-wow-delay="200ms"
    data-wow-duration="1500ms">
    <div class="single-footer-widget marbtm single-footer-widget--link-box">
        <div class="title">
            <h3>Useful Links</h3>
        </div>
        <div class="footer-widget-links">
            <ul>
                <li>
                    <a href="{{ route('home') }}">
                        <span class="icon-right-arrow"></span>
                        Home
                    </a>
                </li>
                <li>
                    <a href="#about-us">
                        <span class="icon-right-arrow"></span>
                        About Us
                    </a>
                </li>
                
                <li>
                    <a href="{{ route('contact') }}">
                        <span class="icon-right-arrow"></span>
                        Contact Us
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon-right-arrow"></span>
                        Privacy Policy
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!--End Single Footer Widget-->

<!--Start single footer widget-->
<div class="col-xl-2 col-lg-6 col-md-6 single-widget wow fadeInUp" data-wow-delay="300ms"
    data-wow-duration="1500ms">
    <div class="single-footer-widget single-footer-widget--link-box margin-left-minus">
        <div class="title">
            <h3>Our Services</h3>
        </div>
        <div class="footer-widget-links">
            <ul>
    @php
        // Fetch active services from the database, ordered correctly
        $dynamicServices = \App\Models\Service::where('is_active', true)
            ->orderBy('sort_order')
            ->get();
    @endphp
    
    @foreach($dynamicServices as $service)
        <li>
            <a href="{{ route('service.show', $service->id) }}">
                <span class="icon-right-arrow"></span>
                {{ $service->title }}
            </a>
        </li>
    @endforeach
</ul>
        </div>
    </div>
</div>
<!--End single footer widget-->

<!--Start single footer widget-->
<div class="col-xl-3 col-lg-6 col-md-6 single-widget wow fadeInUp" data-wow-delay="400ms"
    data-wow-duration="1500ms">
    <div class="single-footer-widget martop">
        <div class="title">
            <h3>Information</h3>
        </div>
        <div class="footer-widget-contact-info">
            <ul>
                <li><a href="mailto:info.moscot@gmail.com">info.Moscot@gmail.com</a></li>
                <li><a href="tel:2512353256">Call Me (+55) -66 99 88</a></li>
            </ul>
            <div class="text">
                <p>Sydney Harbor Bridge Circular City<br> of Sydney, Australia.</p>
            </div>
        </div>
    </div>
</div>
<!--End single footer widget-->

<!--Start single footer widget-->
<div class="col-xl-3 col-lg-12 col-md-12 wow fadeInUp" data-wow-delay="500ms"
    data-wow-duration="1500ms">
    <div class="single-footer-widget single-footer-widget-middle">
        <div class="single-footer-widget__box-inner">

            <div class="footer-menu">
                <ul>
                   
                    <li>
                        <a href="{{ route('contact') }}">Contact Us</a>
                    </li>
                    <li>
                        <a href="#">Privacy Policy</a>
                    </li>
                </ul>
            </div>

            <div class="footer-social-link">
                <ul class="clearfix">
                    <li>
                        <a href="#">
                            <i class="icon-facebook"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="icon-linkedin"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="icon-instagram-1"></i>
                        </a>
                    </li>
                </ul>
            </div>

        </div>
    </div>
</div>
<!--End single footer widget-->