<header class="main-header main-header-style1" data-aos="fade-down" data-aos-easing="linear"
    data-aos-duration="1500">
    <div class="main-header-style1__logo-box">
        <a href="{{ route('home') }}">
            <img src="{{ asset('assets/images/logo-white.png') }}" alt="Awesome Logo" title="" />
        </a>
    </div>
    <div class="main-header-style1__top">
        <div class="container">
            <div class="main-header-style1__top-inner">
                <div class="header-contact-info-style1">
                    <ul>
                        <li>
                            <div class="icon">
                                <span class="icon-phone"></span>
                            </div>
                            Call Me: <a href="tel:2512353256">(1)245-45678</a>
                        </li>
                        <li>
                            <div class="icon">
                                <span class="icon-envelop"></span>
                            </div>
                            Mail Me: <a href="mailto:help.info@gmail.com">Help.info@gmail.com</a>
                        </li>
                    </ul>
                </div><!-- /.header-contact-info-style1 -->
               <div class="header-menu-style1">
    <ul>
        <li><a href="#">{{ __('menu.privacy') }}</a></li>
        <li><a href="{{ route('contact') }}">{{ __('menu.contact') }}</a></li>
    </ul>
</div>
            </div><!-- /.main-header-style1__top-inner -->
        </div><!-- /.container -->
    </div>

    <!--Start Main Menu Style1-->
    <nav class="main-menu main-menu-style1">
        <div class="main-menu__wrapper clearfix">
            <div class="container">
                <div class="main-menu__wrapper-inner">

                    <div class="main-menu-style1__left">
                        <div class="logo-box-style1">
                            <a href="{{ route('home') }}">
                                <img src="{{ asset('assets/images/logo-white.png') }}" alt="Awesome Logo" title="" />
                            </a>
                        </div>
                    </div>

                    <div class="main-menu-style1__right">
                        <div class="main-menu-box">
                            <a href="#" class="mobile-nav__toggler">
                                <i class="fa fa-bars"></i>
                            </a>
                            <ul class="main-menu__list">
    <li>
        <a href="{{ route('home') }}">{{ __('menu.home') }}</a>
    </li>

    <li>
        <a href="{{ route('home') }}#about-us">{{ __('menu.about') }}</a>
    </li>

    <li class="dropdown">
        <a href="{{ route('services.allServices') }}">{{ __('menu.services') }}</a>
        <ul>
            <li><a href="{{ route('services.allServices') }}">{{ __('menu.all_services') }}</a></li>
            <li>
                <a href="{{ route('services.translation') }}">
                    {{ __('menu.translation') }}
                </a>
            </li>
            <li>
                <a href="{{ route('services.editing-proofreading') }}">
                    {{ __('menu.editing') }}
                </a>
            </li>
            <li>
                <a href="{{ route('services.tep-workflow') }}">
                    {{ __('menu.tep') }}
                </a>
            </li>
            <li>
                <a href="{{ route('services.industry-solutions') }}">
                    {{ __('menu.industry') }}
                </a>
            </li>
            <li>
                <a href="{{ route('services.call-center') }}">
                    {{ __('menu.call_center') }}
                </a>
            </li>
            <li>
                <a href="{{ route('services.programming-support') }}">
                    {{ __('menu.programming') }}
                </a>
            </li>
        </ul>
    </li>

    <li>
        <a href="{{ route('contact') }}">{{ __('menu.contact') }}</a>
    </li>
</ul>
                        </div>
                    </div>

                    <div class="header-btn-style1">
                        <div class="header-btn-style1">
                            <div class="dropdown">
                                <button class="btn-one dropdown-toggle" type="button" id="languageDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="txt">
                                        @php
                                            $currentLocale = session('locale', 'en');
                                            $languageNames = [
                                                'en' => 'English',
                                                'de' => 'Deutsch',
                                                'fr' => 'Français'
                                            ];
                                        @endphp
                                        {{ $languageNames[$currentLocale] ?? 'English' }}
                                        <span class="dropdown-icon">▼</span>
                                    </span>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="languageDropdown">
                                    <li>
                                        <a class="dropdown-item" href="{{ route('language.switch', 'en') }}">
                                            English
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('language.switch', 'de') }}">
                                            Deutsch
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('language.switch', 'fr') }}">
                                            Français
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <style>
                        .dropdown-icon {
                            font-size: 0.8em;
                            margin-left: 8px;
                            display: inline-block;
                            transition: transform 0.3s ease;
                            vertical-align: middle;
                        }

                        .dropdown.show .dropdown-icon {
                            transform: rotate(180deg);
                        }

                        /* If you're using Bootstrap 5 */
                        .dropdown-toggle::after {
                            display: none !important;
                        }
                        </style>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!--End Main Menu Style1-->
</header>

<div class="stricky-header stricky-header--style1 stricked-menu main-menu">
    <div class="sticky-header__content"></div>
    <!-- /.sticky-header__content -->
</div>
<!-- /.stricky-header -->