@extends('layouts.app')

@section('title', 'TEP Workflow | RTC Agency')

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
                            <h2>TEP Workflow</h2>
                        </div>
                        <div class="breadcrumb-menu">
                            <ul>
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li><a>Services</a></li>
                                <li class="active">TEP Workflow</li>
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
                                    <span class="icon-design"></span>
                                    <div class="round-box"></div>
                                </div>
                                <h2>TEP Workflow Services</h2>
                            </div>
                            <p>
                                For high-accuracy documents, we provide a full Translation–Editing–Proofreading cycle with multiple linguists to ensure flawless quality.
                            </p>
                            <p>
                                The TEP workflow is our comprehensive quality assurance process designed for documents that require the highest level of accuracy. This three-step approach involves different linguists at each stage to provide thorough review and verification.
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
                                                <h3>Three-Step Process</h3>
                                                <p>
                                                    Each document goes through Translation, Editing, and Proofreading by different qualified linguists for maximum accuracy.
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
                                                <h3>Multiple Reviewers</h3>
                                                <p>
                                                    Different linguists handle each stage, providing fresh perspectives and thorough quality checks throughout the process.
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
                                        <img src="{{ asset('assets/images/tep.jpg') }}" alt="TEP Workflow Process">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="text-box">
                                        <h2>The TEP Process</h2>
                                        <p>Our three-stage workflow ensures thorough review and quality control for documents where accuracy is critical. Each stage is handled by specialized linguists.</p>
                                    </div>
                                    <div class="features-box">
                                        <ul>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-check-1"></span>
                                                </div>
                                                <strong>Translation:</strong> Initial translation by native linguist
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-check-1"></span>
                                                </div>
                                                <strong>Editing:</strong> Review by second linguist for accuracy
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-check-1"></span>
                                                </div>
                                                <strong>Proofreading:</strong> Final check for errors and consistency
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-check-1"></span>
                                                </div>
                                                Different linguists for each stage
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
                                <p>Answers to frequently asked questions about our TEP workflow services.</p>
                            </div>

                            <ul class="accordion-box-style1 clearfix">
                                <li class="accordion accordion-block">
                                    <div class="accord-btn">
                                        <h4>What is the TEP workflow?</h4>
                                    </div>
                                    <div class="accord-content">
                                        <p>
                                            TEP stands for Translation–Editing–Proofreading. It's a three-stage quality assurance process where different linguists handle each stage: translation by a native speaker, editing by a second linguist for accuracy, and proofreading for final error checking and consistency.
                                        </p>
                                    </div>
                                </li>
                                <li class="accordion accordion-block">
                                    <div class="accord-btn active">
                                        <h4>When should I use the TEP workflow?</h4>
                                    </div>
                                    <div class="accord-content collapsed">
                                        <p>
                                            The TEP workflow is recommended for documents where accuracy is critical, such as legal contracts, medical documents, technical manuals, marketing materials, and any content where errors could have significant consequences.
                                        </p>
                                    </div>
                                </li>
                                <li class="accordion accordion-block">
                                    <div class="accord-btn">
                                        <h4>How does TEP differ from regular translation?</h4>
                                    </div>
                                    <div class="accord-content">
                                        <p>
                                            Regular translation typically involves one linguist, while TEP involves three separate professionals: a translator, an editor, and a proofreader. This provides multiple layers of review and quality assurance for higher accuracy requirements.
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