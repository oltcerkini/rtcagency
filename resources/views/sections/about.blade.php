<!--Start About style1-->
@php
    $aboutUs = \App\Models\AboutUs::where('is_active', true)->orderBy('sort_order')->first();
@endphp

<section class="about-style1" id="about-us">
    <div class="about-style1__shape1 wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
        <img class="float-bob-y" src="{{ asset('assets/images/shapes/about-style-1-shape-1.png') }}" alt="">
    </div>
    <div class="about-style1__shape2 wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms">
        <img class="float-bob-x" src="{{ asset('assets/images/shapes/about-style-1-shape-3.png') }}" alt="">
    </div>
    <div class="container">
        <div class="row">

            <div class="col-xl-6">
                <div class="about-style1__img">
                    <div class="about-style1__shape3">
                        <img class="float-bob-y" src="{{ asset('assets/images/shapes/about-style-1-shape-2.png') }}" alt="">
                    </div>

                    <div class="main-img-box">
                        @if($aboutUs && $aboutUs->image1)
                            <img src="{{ Storage::url($aboutUs->image1) }}" alt="{{ $aboutUs->title ?? 'About Us' }}">
                        @else
                            <img src="{{ asset('assets/images/shakehands.jpg') }}" alt="About Us">
                        @endif
                    </div>
                    <div class="overlay-img-box">
                        @if($aboutUs && $aboutUs->image2)
                            <img src="{{ Storage::url($aboutUs->image2) }}" alt="{{ $aboutUs->title ?? 'About Us' }}">
                        @else
                            <img src="{{ asset('assets/images/agent.jpg') }}" alt="About Us">
                        @endif
                        <div class="shape">
                            <img src="{{ asset('assets/images/logo-black.png') }}" alt="">
                        </div><!-- /.shape -->
                    </div>
                </div>
            </div>

            <div class="col-xl-6">
                <div class="about-style1__content">
                    <div class="top-title">
                        <h2>
                            @if($aboutUs && $aboutUs->title)
                                {{ $aboutUs->title }}
                            @else
                                Get to Know About Us
                            @endif
                        </h2>
                    </div>
                    <div class="top-text">
                        <h3>
                            @if($aboutUs && $aboutUs->description1)
                                {!! $aboutUs->description1 !!}
                            @else
                                We are a multilingual service provider specializing in professional translation, editing, 
                                proofreading, TEP (Translation–Editing–Proofreading), and specialized call-center support. 
                                Our mission is to deliver high-quality linguistic and operational solutions across a wide 
                                range of industries, ensuring accuracy, cultural relevance, and exceptional customer care.
                            @endif
                        </h3>
                    </div>
                    <div class="text">
                        <p>
                            @if($aboutUs && $aboutUs->description2)
                                {!! $aboutUs->description2 !!}
                            @else
                                Our team is composed of certified translators, subject-matter experts, native linguists, 
                                trained call-center agents, and qualified technical specialists. Whether you're expanding 
                                into new markets, launching global products, or managing high-volume communication 
                                operations, we offer reliable services tailored to your needs.
                            @endif
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!--End About style1-->