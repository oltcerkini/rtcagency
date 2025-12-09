<!--Main Slider Start-->
<section class="main-slider main-slider-style1">
    <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
                "effect": "fade",
                "speed": 2000,
                "pagination": {
                "el": "#main-slider-pagination",
                "type": "bullets",
                "clickable": true
                },
                "navigation": {
                "nextEl": "#main-slider__swiper-button-next",
                "prevEl": "#main-slider__swiper-button-prev"
                },
                "autoplay": {
                "delay": 8000
            }
        }'>

        <div class="swiper-wrapper">

            <!--Start Single Swiper Slide-->
            <div class="swiper-slide">
                <div class="image-layer" style="background-image: url({{ asset('assets/images/headphones.jpg') }});">
                </div>
                <div class="main-slider-style1__gradient-bg"></div>
                <div class="shape1 wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                    <img class="float-bob-y" src="{{ asset('assets/images/headphones.jpg') }}" alt="">
                </div>
                <div class="shape2 wow slideInUp" data-wow-delay="100ms" data-wow-duration="2500ms">
                    <img class="float-bob-x" src="{{ asset('assets/images/headphones.jpg') }}" alt="">
                </div>
                <div class="shape3 wow slideInUp" data-wow-delay="100ms" data-wow-duration="2500ms">
                    <img class="float-bob" src="{{ asset('assets/images/headphones.jpg') }}" alt="">
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="main-slider-content">
                                <div class="main-slider-content__inner">
                                    <div class="big-title">
                                        <h2>
                                            <span>Global</span><br> Multilingual<br> Solutions
                                        </h2>
                                    </div>
                                    <div class="text">
                                        <p>
                                            Professional Translation, Call-Center Support & Technical Services
                                        </p>
                                    </div>
                                    <div class="btn-box">
                                        <a class="btn-one">
                                            <span class="txt">
                                                Discover More<i class="icon-plus"></i>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Single Swiper Slide-->

            <!--Start Single Swiper Slide-->
            <div class="swiper-slide">
                <div class="image-layer" style="background-image: url({{ asset('assets/images/youth-day-celebration-black-white.jpg') }});">
                </div>
                <div class="main-slider-style1__gradient-bg"></div>
                <div class="shape1 wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                    <img class="float-bob-y" src="{{ asset('assets/images/youth-day-celebration-black-white.jpg') }}" alt="">
                </div>
                <div class="shape2 wow slideInUp" data-wow-delay="100ms" data-wow-duration="2500ms">
                    <img class="float-bob-x" src="{{ asset('assets/images/youth-day-celebration-black-white.jpg') }}" alt="">
                </div>
                <div class="shape3 wow slideInUp" data-wow-delay="100ms" data-wow-duration="2500ms">
                    <img class="float-bob" src="{{ asset('assets/images/youth-day-celebration-black-white.jpg') }}" alt="">
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="main-slider-content">
                                <div class="main-slider-content__inner">
                                    <div class="big-title">
                                        <h2>
                                           Your <span>Language.</span><br>Our Expertise.<br>  Global Results.
                                        </h2>
                                    </div>
                                    <div class="text">
                                        <p>
                                            Professional Translation, Call-Center Support & Technical Services
                                        </p>
                                    </div>
                                    <div class="btn-box">
                                        <a class="btn-one">
                                            <span class="txt">
                                                Discover More<i class="icon-plus"></i>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Single Swiper Slide-->

            <!--Start Single Swiper Slide-->
            <div class="swiper-slide">
                <div class="image-layer" style="background-image: url({{ asset('assets/images/coworkers.jpg') }});">
                </div>
                <div class="main-slider-style1__gradient-bg"></div>
                <div class="shape1 wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                    <img class="float-bob-y" src="{{ asset('assets/images/coworkers.jpg') }}" alt="">
                </div>
                <div class="shape2 wow slideInUp" data-wow-delay="100ms" data-wow-duration="2500ms">
                    <img class="float-bob-x" src="{{ asset('assets/images/coworkers.jpg') }}" alt="">
                </div>
                <div class="shape3 wow slideInUp" data-wow-delay="100ms" data-wow-duration="2500ms">
                    <img class="float-bob" src="{{ asset('assets/images/coworkers.jpg') }}" alt="">
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="main-slider-content">
                                <div class="main-slider-content__inner">
                                    <div class="big-title">
                                        <h2>
                                            We manage the call.</span><br>You manage growth.
                                            
                                        </h2>
                                    </div>
                                    <div class="text">
                                        <p>
                                            Professional Translation, Call-Center Support & Technical Services

                                        </p>
                                    </div>
                                    <div class="btn-box">
                                        <a class="btn-one">
                                            <span class="txt">
                                                Discover More <i class="icon-plus"></i>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Single Swiper Slide-->
        </div>
        <!-- If we need navigation buttons -->
        <div class="swiper-pagination" id="main-slider-pagination"></div>
        <div class="main-slider__nav" style="display: none;">
            <div class="swiper-button-prev" id="main-slider__swiper-button-next">
                <i class="icon-left-arrow left"></i>
            </div>
            <div class="swiper-button-next" id="main-slider__swiper-button-prev">
                <i class="icon-next right"></i>
            </div>
        </div>

    </div>
</section>
<!--Main Slider End-->