<!--Main Slider Start-->
@php
    // Fetch active slides from database, ordered by 'order' column
    $slides = \App\Models\Slider::active()->ordered()->get();
@endphp

@if($slides->count() > 0)
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
            @foreach($slides as $slide)
            <!--Start Single Swiper Slide-->
            <div class="swiper-slide">
                <div class="image-layer" style="background-image: url({{ Storage::url($slide->image) }});">
                </div>
                <div class="main-slider-style1__gradient-bg"></div>
                <div class="shape1 wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                    <img class="float-bob-y" src="{{ Storage::url($slide->image) }}" alt="{{ $slide->translated_title }}">
                </div>
                <div class="shape2 wow slideInUp" data-wow-delay="100ms" data-wow-duration="2500ms">
                    <img class="float-bob-x" src="{{ Storage::url($slide->image) }}" alt="{{ $slide->translated_title }}">
                </div>
                <div class="shape3 wow slideInUp" data-wow-delay="100ms" data-wow-duration="2500ms">
                    <img class="float-bob" src="{{ Storage::url($slide->image) }}" alt="{{ $slide->translated_title }}">
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="main-slider-content">
                                <div class="main-slider-content__inner">
                                    <div class="big-title">
                                        <h2>
                                            {!! nl2br(e($slide->translated_title)) !!}
                                        </h2>
                                    </div>
                                    <div class="text">
                                        <p>
                                            {{ $slide->translated_subtitle }}
                                        </p>
                                    </div>
                                    @if($slide->button_text && $slide->button_link)
                                    <div class="btn-box">
                                        <a href="{{ $slide->button_link }}" class="btn-one">
                                            <span class="txt">
                                                {{ $slide->button_text }}<i class="icon-plus"></i>
                                            </span>
                                        </a>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Single Swiper Slide-->
            @endforeach
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
@else
<!-- Fallback if no slides exist -->
<section class="main-slider main-slider-style1">
    <div class="swiper-container thm-swiper__slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="image-layer" style="background-image: url({{ asset('assets/images/headphones.jpg') }});">
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="main-slider-content">
                                <div class="main-slider-content__inner">
                                    <div class="big-title">
                                        <h2>
                                            @if(session('locale') === 'de')
                                                Folien vom Admin-Panel hinzufügen
                                            @elseif(session('locale') === 'fr')
                                                Ajouter des diapositives depuis le panneau d'administration
                                            @else
                                                Add slides from admin panel
                                            @endif
                                        </h2>
                                    </div>
                                    <div class="text">
                                        <p>
                                            @if(session('locale') === 'de')
                                                Gehen Sie zum Filament-Admin, um Slider-Inhalte hinzuzufügen
                                            @elseif(session('locale') === 'fr')
                                                Allez dans l'admin Filament pour ajouter du contenu de diaporama
                                            @else
                                                Go to Filament admin to add slider content
                                            @endif
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endif
<!--Main Slider End-->