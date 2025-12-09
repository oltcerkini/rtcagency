@extends('layouts.app')

@section('title', 'Editing & Proofreading | RTC Agency')

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
                            <h2>Editing & Proofreading</h2>
                        </div>
                        <div class="breadcrumb-menu">
                            <ul>
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li><a>Services</a></li>
                                <li class="active">Editing & Proofreading</li>
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
                                    <span class="icon-consulting"></span>
                                    <div class="round-box"></div>
                                </div>
                                <h2>Editing & Proofreading Services</h2>
                            </div>
                            <p>
                                Our team reviews your text for grammar, flow, and consistency, ensuring your content is polished, professional, and ready for use.
                            </p>
                            <p>
                                We provide detailed editing and proofreading services to enhance the quality of your written content. Whether you have business documents, marketing materials, or any other text that needs refinement, we help ensure it communicates your message effectively.
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
                                                <h3>Grammar & Spelling</h3>
                                                <p>
                                                    We correct grammatical errors and spelling mistakes to ensure your text is error-free and professional.
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
                                                <h3>Flow & Consistency</h3>
                                                <p>
                                                    We improve the overall flow of your content and ensure consistency in tone, style, and terminology.
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
                                        <img src="{{ asset('assets/images/editing.jpg') }}" alt="Editing & Proofreading Services">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="text-box">
                                        <h2>Our Review Process</h2>
                                        <p>We carefully review your text to enhance clarity, correct errors, and improve overall quality. Our approach helps ensure your content makes the right impression.</p>
                                    </div>
                                    <div class="features-box">
                                        <ul>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-check-1"></span>
                                                </div>
                                                Grammar and spelling correction
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-check-1"></span>
                                                </div>
                                                Sentence structure improvement
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-check-1"></span>
                                                </div>
                                                Consistency in style and tone
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-check-1"></span>
                                                </div>
                                                Clarity and readability enhancement
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
                                <p>Answers to frequently asked questions about our editing and proofreading services.</p>
                            </div>

                            <ul class="accordion-box-style1 clearfix">
                                <li class="accordion accordion-block">
                                    <div class="accord-btn">
                                        <h4>What's the difference between editing and proofreading?</h4>
                                    </div>
                                    <div class="accord-content">
                                        <p>
                                            Editing focuses on improving content flow, structure, and clarity, while proofreading is the final check for grammar, spelling, and formatting errors. We offer both services to ensure your text is polished and professional.
                                        </p>
                                    </div>
                                </li>
                                <li class="accordion accordion-block">
                                    <div class="accord-btn active">
                                        <h4>What types of documents do you work with?</h4>
                                    </div>
                                    <div class="accord-content collapsed">
                                        <p>
                                            We work with various document types including business reports, marketing materials, website content, academic papers, and general correspondence. We adapt our approach based on your specific needs.
                                        </p>
                                    </div>
                                </li>
                                <li class="accordion accordion-block">
                                    <div class="accord-btn">
                                        <h4>How long does the process take?</h4>
                                    </div>
                                    <div class="accord-content">
                                        <p>
                                            Turnaround time depends on the length and complexity of your document. We provide estimated timelines when you submit your project and can accommodate urgent requests when possible.
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