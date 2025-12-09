@extends('layouts.app')

@section('title', 'Contact | RTC Agency')

@section('content')
    
<!--Start breadcrumb Style1-->
<section class="breadcrumb-style1">
    <div class="breadcrumb-style1-bg" style="background-image: url({{ asset('assets/images/contact.jpg') }});">
    </div>
    <div class="breadcrumb-style1__shape1 wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
        <img class="float-bob-y" src="{{ asset('assets/images/contact.jpg') }}" alt="">
    </div>
    <div class="breadcrumb-style1__shape2 wow slideInUp" data-wow-delay="100ms" data-wow-duration="2500ms">
        <img class="float-bob-y" src="{{ asset('assets/images/contact.jpg') }}" alt="">
    </div>
    <div class="breadcrumb-style1__shape3 wow slideInUp" data-wow-delay="100ms" data-wow-duration="2500ms">
        <img class="float-bob-y" src="{{ asset('assets/images/contact.jpg') }}" alt="">
    </div>
    <div class="breadcrumb-style1__shape4 wow slideInDown" data-wow-delay="100ms" data-wow-duration="2500ms">
        <img class="float-bob-y" src="{{ asset('assets/images/contact.jpg') }}" alt="">
    </div>
    <div class="breadcrumb-style1__shape5 wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms">
        <img class="float-bob-y" src="{{ asset('assets/images/contact.jpg') }}" alt="">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="inner-content">
                    <div class="title">
                        <h2>Contact Page.</h2>
                    </div>
                    <div class="breadcrumb-menu">
                        <ul>
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li class="active">Contact</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End breadcrumb Style1-->

<!--Start Google map 1-->
<section class="google-map1">
    <div class="container">
        <div class="contact-page-map-outer-box">
            <!--Google Map Start-->
            <div class="google-map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d-118.80123790098536!3d34.152323469614075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619%3A0xba03efb7998eef6d!2sCostco+Wholesale!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd"
                    class="google-map__one" allowfullscreen></iframe>
            </div>
            <!--Google Map End-->

            <div class="contact-info-style2__inner">
                <ul class="clearfix">
                    <li class="single-contact-info-style2">
                        <div class="icon-box">
                            <div class="round-box"></div>
                            <span class="icon-phone"></span>
                        </div>
                        <div class="phone-number">
                            <h3><a href="tel:2512353256">+55 (9900) 666 22</a></h3>
                        </div>
                        <div class="text-box">
                            <h4>Contact Phone</h4>
                        </div>
                    </li>
                    <li class="single-contact-info-style2">
                        <div class="icon-box">
                            <div class="round-box"></div>
                            <span class="icon-comment"></span>
                        </div>
                        <div class="phone-number">
                            <h3><a href="mailto:contact@vertox.com">contact@manha.com</a></h3>
                        </div>
                        <div class="text-box">
                            <h4>Contact Email</h4>
                        </div>
                    </li>
                    <li class="single-contact-info-style2">
                        <div class="icon-box">
                            <div class="round-box"></div>
                            <span class="icon-consulting"></span>
                        </div>
                        <div class="phone-number">
                            <h3>14/4, Bonosri, Road A, USA.</h3>
                        </div>
                        <div class="text-box">
                            <h4>Contact Location</h4>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--Start Google map 1-->

<!--Start Main Contact Form Area-->
<section class="main-contact-form-area">
    <div class="container">
        <div class="inner-title">
            <h2>Leave a Comment</h2>
        </div><!-- /.inner-title -->
        <div class="row">
            <div class="col-xl-8">
                <div class="contact-form">
                    <form id="contact-form" name="contact_form" class="default-form2"
                        method="post">
                        @csrf
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="form-group">
                                    <div class="input-box">
                                        <input type="text" name="form_name" id="formName"
                                            placeholder="Your Name" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="form-group">
                                    <div class="input-box">
                                        <input type="email" name="form_email" id="formEmail"
                                            placeholder="Your Email" required>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xl-12">
                                <div class="form-group">
                                    <div class="input-box">
                                        <input type="text" name="form_phone" value="" id="formPhone"
                                            placeholder="Phone Number">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="form-group">
                                    <div class="input-box">
                                        <input type="text" name="form_subject" value="" id="formSubject"
                                            placeholder="Subject">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xl-12">
                                <div class="form-group">
                                    <div class="input-box">
                                        <textarea name="form_message" id="formMessage" placeholder="Message"
                                            required></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xl-12">
                                <div class="button-box">
                                    <input id="form_botcheck" name="form_botcheck" class="form-control"
                                        type="hidden" value="">
                                    <button class="btn-one" type="submit" data-loading-text="Please wait...">
                                        <span class="txt">
                                            submit now
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Main Contact Form Area-->

<!--Start slogan Style1-->
<section class="slogan-style1">
    <div class="slogan-style1__left"></div>
    <div class="slogan-style1__left-box"></div>
    <div class="slogan-style1__right"></div>
    <div class="slogan-style1__right-box"></div>
    <div class="slogan-style1__shape1  wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
        <img class="float-bob" src="{{ asset('assets/images/shapes/slogan-style1-shape1.png') }}" alt="">
    </div>
    <div class="slogan-style1__shape2 wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms">
        <img class="float-bob-right" src="{{ asset('assets/images/shapes/slogan-style1-shape2.png') }}" alt="">
    </div>
    <div class="slogan-style1__shape3 wow slideInDown" data-wow-delay="100ms" data-wow-duration="2500ms">
        <img class="float-bob-y" src="{{ asset('assets/images/shapes/slogan-style1-shape3.png') }}" alt="">
    </div>
    <div class="slogan-style1__shape5 wow slideInUp" data-wow-delay="100ms" data-wow-duration="2500ms">
        <img class="float-bob-x" src="{{ asset('assets/images/shapes/slogan-style1-shape5.png') }}" alt="">
    </div>
</section>
<!--End slogan Style1-->

@endsection