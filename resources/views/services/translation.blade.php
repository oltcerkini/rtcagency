@extends('layouts.app')

@section('title', 'Home | RTC Agency')

@section('content')
   <!--Start breadcrumb Style1-->
        <section class="breadcrumb-style1">
            <div class="breadcrumb-style1-bg" style="background-image: url(assets/images/background.jpg);">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="inner-content">
                            <div class="title">
                                <h2>Translation Services</h2>
                            </div>
                            <div class="breadcrumb-menu">
                                <ul>
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="services.html">Services</a></li>
                                    <li class="active">Translation Services</li>
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
                    <div class="col-xl-12">
                        <div class="service-details-page__content">
                            <div class="service-details-page__text1">
                                <div class="top-title">
                                    <div class="icon-box">
                                        <span class="icon-web-development"></span>
                                        <div class="round-box"></div>
                                    </div>
                                    <h2>Professional Translation Services</h2>
                                </div>
                                <p>
                                    We deliver accurate, culturally correct translations handled by native linguists. Every project is clear, precise, and adapted to your industry needs.
                                </p>
                                <p>
                                    Our team of native-speaking translators ensures that your content maintains its original meaning while being perfectly adapted for your target audience. We work with various document types and specialize in multiple industry sectors.
                                </p>
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
                                                    <h3>Native Linguists</h3>
                                                    <p>
                                                        All translations are handled by native speakers who understand cultural nuances and language specifics.
                                                    </p>
                                                </div>
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
                                                    <h3>Industry Adaptation</h3>
                                                    <p>
                                                        Your content is adapted to match industry terminology and standards for maximum relevance.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End Service Details Page Features-->

                            <!--Start Service Details page Text2 -->
                            <div class="service-details-page__text2">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="img-box">
                                            <img src="assets/images/translate.jpg" alt="Translation Services">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="text-box">
                                            <h2>Our Approach</h2>
                                            <p>We focus on delivering clear, precise translations that respect cultural differences while maintaining your original message. Our process ensures quality and consistency across all projects.</p>
                                        </div>
                                        <div class="features-box">
                                            <ul>
                                                <li>
                                                    <div class="icon">
                                                        <span class="icon-check-1"></span>
                                                    </div>
                                                    Native linguists for authentic translations
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <span class="icon-check-1"></span>
                                                    </div>
                                                    Industry-specific terminology adaptation
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <span class="icon-check-1"></span>
                                                    </div>
                                                    Cultural accuracy and sensitivity
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <span class="icon-check-1"></span>
                                                    </div>
                                                    Clear communication throughout the process
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End Service Details page Text2 -->

                            <div class="service-details-page__faq-content">
                                <div class="top-title">
                                    <h2>Common Questions</h2>
                                    <p>Answers to frequently asked questions about our translation services.</p>
                                </div>

                                <ul class="accordion-box-style1 clearfix">
                                    <li class="accordion accordion-block">
                                        <div class="accord-btn">
                                            <h4>Who handles the translations?</h4>
                                        </div>
                                        <div class="accord-content">
                                            <p>
                                                All translations are handled by native speakers who are fluent in both source and target languages, ensuring authentic and accurate results.
                                            </p>
                                        </div>
                                    </li>
                                    <li class="accordion accordion-block">
                                        <div class="accord-btn active">
                                            <h4>What industries do you work with?</h4>
                                        </div>
                                        <div class="accord-content collapsed">
                                            <p>
                                                We work with various industries including general business, legal, medical, technical, and financial sectors, adapting terminology as needed.
                                            </p>
                                        </div>
                                    </li>
                                    <li class="accordion accordion-block">
                                        <div class="accord-btn">
                                            <h4>How do you ensure quality?</h4>
                                        </div>
                                        <div class="accord-content">
                                            <p>
                                                We work with qualified native linguists and follow a review process to ensure translations are accurate, clear, and culturally appropriate.
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Service Details Page-->

@endsection