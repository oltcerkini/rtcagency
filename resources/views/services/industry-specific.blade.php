@extends('layouts.app')

@section('title', 'Industry-Specific Linguistic Solutions | RTC Agency')

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
                            <h2>Industry-Specific Linguistic Solutions</h2>
                        </div>
                        <div class="breadcrumb-menu">
                            <ul>
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li><a>Services</a></li>
                                <li class="active">Industry-Specific Solutions</li>
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
                                <h2>Industry-Specific Linguistic Solutions</h2>
                            </div>
                            <p>
                                We offer specialized language support for general, financial, medical, technical, and legal sectors, ensuring correct terminology and compliance.
                            </p>
                            <p>
                                Different industries have unique language requirements, terminology, and compliance standards. Our specialized linguists understand these differences and provide language solutions tailored to each sector's specific needs.
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
                                                <h3>Sector-Specific Expertise</h3>
                                                <p>
                                                    Our linguists have knowledge and experience in specific industry sectors to ensure accurate terminology and understanding.
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
                                                <h3>Compliance Focus</h3>
                                                <p>
                                                    We ensure language solutions meet industry regulations and compliance requirements specific to each sector.
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
                                        <img src="{{ asset('assets/images/workflow.jpg') }}" alt="Industry-Specific Linguistic Solutions">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="text-box">
                                        <h2>Our Industry Specializations</h2>
                                        <p>We provide language solutions tailored to the specific requirements of different sectors, with linguists who understand industry terminology and standards.</p>
                                    </div>
                                    <div class="features-box">
                                        <ul>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-check-1"></span>
                                                </div>
                                                <strong>General Business:</strong> Marketing, corporate communications, website content
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-check-1"></span>
                                                </div>
                                                <strong>Financial:</strong> Reports, audits, banking documentation
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-check-1"></span>
                                                </div>
                                                <strong>Medical:</strong> Clinical research, pharmaceutical documents
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-check-1"></span>
                                                </div>
                                                <strong>Technical:</strong> Manuals, engineering documentation, IT guides
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-check-1"></span>
                                                </div>
                                                <strong>Legal:</strong> Contracts, agreements, regulatory texts
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
                                <p>Answers to frequently asked questions about our industry-specific language solutions.</p>
                            </div>

                            <ul class="accordion-box-style1 clearfix">
                                <li class="accordion accordion-block">
                                    <div class="accord-btn">
                                        <h4>Why do I need industry-specific language solutions?</h4>
                                    </div>
                                    <div class="accord-content">
                                        <p>
                                            Different industries have specialized terminology, compliance requirements, and communication standards. Industry-specific linguists ensure accurate terminology usage and understanding of sector-specific context, which is crucial for professional communication and regulatory compliance.
                                        </p>
                                    </div>
                                </li>
                                <li class="accordion accordion-block">
                                    <div class="accord-btn active">
                                        <h4>What industries do you specialize in?</h4>
                                    </div>
                                    <div class="accord-content collapsed">
                                        <p>
                                            We provide specialized language support for general business, financial, medical, technical, and legal sectors. Each sector has linguists with relevant background knowledge and understanding of industry-specific terminology and requirements.
                                        </p>
                                    </div>
                                </li>
                                <li class="accordion accordion-block">
                                    <div class="accord-btn">
                                        <h4>How do you ensure industry expertise?</h4>
                                    </div>
                                    <div class="accord-content">
                                        <p>
                                            We work with linguists who have background knowledge or experience in specific industries, and we maintain terminology databases and reference materials for each sector. This ensures our language solutions are accurate and appropriate for each industry's requirements.
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