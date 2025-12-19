<!--Start Single Footer Widget-->
<div class="col-xl-2 col-lg-6 col-md-6 single-widget wow fadeInUp" data-wow-delay="100ms"
    data-wow-duration="1500ms">
    <div class="single-footer-widget marbtm">
        <div class="title">
            <h3>{{ __('footer.about_us') }}</h3>
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
            <h3>{{ __('footer.useful_links') }}</h3>
        </div>
        <div class="footer-widget-links">
            <ul>
                <li>
                    <a href="{{ route('home') }}">
                        <span class="icon-right-arrow"></span>
                        {{ __('footer.home') }}
                    </a>
                </li>
                <li>
                    <a href="#about-us">
                        <span class="icon-right-arrow"></span>
                        {{ __('footer.about_us') }}
                    </a>
                </li>
                
                <li>
                    <a href="{{ route('contact') }}">
                        <span class="icon-right-arrow"></span>
                        {{ __('footer.contact_us') }}
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon-right-arrow"></span>
                        {{ __('footer.privacy_policy') }}
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
            <h3>{{ __('footer.our_services') }}</h3>
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
                {{ $service->translated_title }}
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
            <h3>{{ __('footer.information') }}</h3>
        </div>
        <div class="footer-widget-contact-info">
            <ul>
                <li><a href="mailto:{{ __('footer.email') }}">{{ __('footer.email') }}</a></li>
                <li><a href="tel:{{ str_replace(' ', '', __('footer.phone_number')) }}">{{ __('footer.call_me') }} {{ __('footer.phone_number') }}</a></li>
            </ul>
            @if(!empty(trim(__('footer.address'))))
            <div class="text">
                <p>{!! __('footer.address') !!}</p>
            </div>
            @endif
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
                        <a href="{{ route('contact') }}">{{ __('footer.contact_us') }}</a>
                    </li>
                    <li>
                        <a href="#">{{ __('footer.privacy_policy') }}</a>
                    </li>
                </ul>
            </div>

            <div class="footer-social-link">
                <ul class="clearfix">
                    <li>
                        <a href="https://www.facebook.com/share/1WhmRgcviv/" target="_blank" rel="noopener noreferrer" title="Facebook">
                            <i class="icon-facebook"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.linkedin.com/company/rtc-telecommunications/" target="_blank" rel="noopener noreferrer" title="LinkedIn">
                            <i class="icon-linkedin"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/rtelecommunication?igsh=MWJkbmFqcHZrcDZobg==" target="_blank" rel="noopener noreferrer" title="Instagram">
                            <i class="icon-instagram-1"></i>
                        </a>
                    </li>
                </ul>
            </div>

        </div>
    </div>
</div>
<!--End single footer widget-->