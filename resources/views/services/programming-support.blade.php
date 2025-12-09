@extends('layouts.app')

@section('title', 'Programming & Technical Support | RTC Agency')

@section('content')
    <!--Start breadcrumb Style1-->
    <section class="breadcrumb-style1">
        <div class="breadcrumb-style1-bg" style="background-image: url({{ asset('assets/images/background.jpg') }});">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="inner-content">
                        <div class="title">
                            <h2>Programming & Technical Support</h2>
                        </div>
                        <div class="breadcrumb-menu">
                            <ul>
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li><a>Services</a></li>
                                <li class="active">Programming & Technical Support</li>
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
                                    <span class="icon-digital"></span>
                                    <div class="round-box"></div>
                                </div>
                                <h2>Programming & Technical Support</h2>
                            </div>
                            <p>
                                We provide web development, software assistance, troubleshooting, and multilingual integration to help businesses operate smoothly.
                            </p>
                            <p>
                                Our technical support services help businesses maintain and improve their digital operations. We combine programming expertise with practical problem-solving to address technical challenges and support business continuity.
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
                                                <h3>Web Development & Support</h3>
                                                <p>
                                                    Assistance with website development, maintenance, and improvement to support your online presence and business operations.
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
                                                <h3>Software Assistance</h3>
                                                <p>
                                                    Help with software setup, configuration, and troubleshooting to ensure your tools work effectively for your business needs.
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
                                        <img src="{{ asset('assets/images/programing.jpg') }}" alt="Programming & Technical Support">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="text-box">
                                        <h2>Our Technical Services</h2>
                                        <p>We offer practical technical support and programming assistance to help businesses manage their digital operations and address technical challenges.</p>
                                    </div>
                                    <div class="features-box">
                                        <ul>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-check-1"></span>
                                                </div>
                                                <strong>Web Development:</strong> Website creation and maintenance
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-check-1"></span>
                                                </div>
                                                <strong>Software Assistance:</strong> Setup and configuration help
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-check-1"></span>
                                                </div>
                                                <strong>Troubleshooting:</strong> Problem diagnosis and resolution
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-check-1"></span>
                                                </div>
                                                <strong>Multilingual Integration:</strong> Language feature implementation
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-check-1"></span>
                                                </div>
                                                <strong>Technical Support:</strong> Ongoing assistance and maintenance
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
                                <p>Answers to frequently asked questions about our programming and technical support services.</p>
                            </div>

                            <ul class="accordion-box-style1 clearfix">
                                <li class="accordion accordion-block">
                                    <div class="accord-btn">
                                        <h4>What types of programming and technical support do you provide?</h4>
                                    </div>
                                    <div class="accord-content">
                                        <p>
                                            We provide web development assistance, software setup and configuration help, troubleshooting for technical issues, and implementation of multilingual features in websites and applications. Our focus is on practical solutions that help businesses operate smoothly.
                                        </p>
                                    </div>
                                </li>
                                <li class="accordion accordion-block">
                                    <div class="accord-btn active">
                                        <h4>What is multilingual integration in technical support?</h4>
                                    </div>
                                    <div class="accord-content collapsed">
                                        <p>
                                            Multilingual integration involves adding language support features to websites and applications. This can include implementing language selection options, ensuring proper character encoding for different languages, and setting up content management systems to handle multiple language versions effectively.
                                        </p>
                                    </div>
                                </li>
                                <li class="accordion accordion-block">
                                    <div class="accord-btn">
                                        <h4>Do you provide ongoing technical support?</h4>
                                    </div>
                                    <div class="accord-content">
                                        <p>
                                            Yes, we offer ongoing technical support for the solutions we implement. This can include maintenance, updates, troubleshooting, and assistance with technical challenges as they arise. We work with businesses to provide appropriate support based on their specific needs and requirements.
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