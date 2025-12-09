@extends('layouts.app')

@section('title', 'Call-Center Services | RTC Agency')

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
                            <h2>Call-Center Services</h2>
                        </div>
                        <div class="breadcrumb-menu">
                            <ul>
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li><a>Services</a></li>
                                <li class="active">Call-Center Services</li>
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
                                <h2>Call-Center Services</h2>
                            </div>
                            <p>
                                Our multilingual call-center team handles inbound and outbound communication with professionalism, trained in CRM tools and customer engagement.
                            </p>
                            <p>
                                We provide professional call-center support with agents who can communicate in multiple languages. Our team is trained to handle various types of customer interactions while maintaining high standards of service and professionalism.
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
                                                <h3>Multilingual Support</h3>
                                                <p>
                                                    Our agents can communicate in multiple languages to serve diverse customer bases and international clients.
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
                                                <h3>CRM Trained Agents</h3>
                                                <p>
                                                    All agents are trained in customer relationship management tools and professional communication techniques.
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
                                        <img src="{{ asset('assets/images/cc.jpg') }}" alt="Call-Center Services">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="text-box">
                                        <h2>Our Call-Center Solutions</h2>
                                        <p>We provide comprehensive call-center support with trained professionals who understand customer service best practices and communication standards.</p>
                                    </div>
                                    <div class="features-box">
                                        <ul>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-check-1"></span>
                                                </div>
                                                <strong>Inbound Support:</strong> Customer service and inquiry handling
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-check-1"></span>
                                                </div>
                                                <strong>Outbound Support:</strong> Customer outreach and follow-up
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-check-1"></span>
                                                </div>
                                                <strong>Technical Support:</strong> Assistance with products or services
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-check-1"></span>
                                                </div>
                                                <strong>Appointment Setting:</strong> Scheduling and coordination
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-check-1"></span>
                                                </div>
                                                <strong>Multilingual Agents:</strong> Communication in various languages
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
                                <p>Answers to frequently asked questions about our call-center services.</p>
                            </div>

                            <ul class="accordion-box-style1 clearfix">
                                <li class="accordion accordion-block">
                                    <div class="accord-btn">
                                        <h4>What languages do your call-center agents speak?</h4>
                                    </div>
                                    <div class="accord-content">
                                        <p>
                                            Our multilingual agents can communicate in several languages commonly used in business communication. We can match agents with language skills appropriate for your specific customer base and requirements.
                                        </p>
                                    </div>
                                </li>
                                <li class="accordion accordion-block">
                                    <div class="accord-btn active">
                                        <h4>What types of call-center services do you offer?</h4>
                                    </div>
                                    <div class="accord-content collapsed">
                                        <p>
                                            We offer both inbound services (customer support, technical assistance, appointment scheduling) and outbound services (customer outreach, lead generation, follow-up calls). Our agents are trained to handle various types of customer interactions professionally.
                                        </p>
                                    </div>
                                </li>
                                <li class="accordion accordion-block">
                                    <div class="accord-btn">
                                        <h4>How are your call-center agents trained?</h4>
                                    </div>
                                    <div class="accord-content">
                                        <p>
                                            Our agents receive training in customer service techniques, communication skills, CRM tool usage, and specific industry knowledge when required. We focus on professional communication and effective customer engagement in all interactions.
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