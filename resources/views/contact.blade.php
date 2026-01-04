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

<!--Start Main Contact Form Area-->
<section class="main-contact-form-area">
    <div class="container">
        <div class="inner-title">
            <h2>Leave a Comment</h2>
        </div><!-- /.inner-title -->
        
        <!-- Success/Error Messages -->
        @if(session('success'))
        <div class="alert alert-success" style="background-color: #d4edda; color: #155724; padding: 15px; border-radius: 5px; margin-bottom: 30px; border: 1px solid #c3e6cb; display: flex; align-items: center;">
            <svg style="width: 20px; height: 20px; margin-right: 10px;" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
            </svg>
            {{ session('success') }}
        </div>
        @endif

        @if(session('error'))
        <div class="alert alert-danger" style="background-color: #f8d7da; color: #721c24; padding: 15px; border-radius: 5px; margin-bottom: 30px; border: 1px solid #f5c6cb; display: flex; align-items: center;">
            <svg style="width: 20px; height: 20px; margin-right: 10px;" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
            </svg>
            {{ session('error') }}
        </div>
        @endif

        @if($errors->any())
        <div class="alert alert-danger" style="background-color: #f8d7da; color: #721c24; padding: 15px; border-radius: 5px; margin-bottom: 30px; border: 1px solid #f5c6cb;">
            <div style="display: flex; align-items: center; margin-bottom: 10px;">
                <svg style="width: 20px; height: 20px; margin-right: 10px;" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                </svg>
                <strong>Please fix the following errors:</strong>
            </div>
            <ul style="margin: 0; padding-left: 20px;">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        
        <div class="row">
            <div class="col-xl-8">
                <div class="contact-form">
                    <form id="contact-form" name="contact_form" class="default-form2"
                        method="POST" action="{{ route('contact.store') }}">
                        @csrf
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="form-group">
                                    <div class="input-box">
                                        <input type="text" name="form_name" id="formName"
                                            placeholder="Your Name" required value="{{ old('form_name') }}">
                                        @error('form_name')
                                            <span class="text-danger" style="font-size: 14px; margin-top: 5px; display: block;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="form-group">
                                    <div class="input-box">
                                        <input type="email" name="form_email" id="formEmail"
                                            placeholder="Your Email" required value="{{ old('form_email') }}">
                                        @error('form_email')
                                            <span class="text-danger" style="font-size: 14px; margin-top: 5px; display: block;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xl-12">
                                <div class="form-group">
                                    <div class="input-box">
                                        <input type="text" name="form_phone" id="formPhone"
                                            placeholder="Phone Number" value="{{ old('form_phone') }}">
                                        @error('form_phone')
                                            <span class="text-danger" style="font-size: 14px; margin-top: 5px; display: block;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="form-group">
                                    <div class="input-box">
                                        <input type="text" name="form_subject" id="formSubject"
                                            placeholder="Subject" value="{{ old('form_subject') }}">
                                        @error('form_subject')
                                            <span class="text-danger" style="font-size: 14px; margin-top: 5px; display: block;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xl-12">
                                <div class="form-group">
                                    <div class="input-box">
                                        <textarea name="form_message" id="formMessage" placeholder="Message"
                                            required>{{ old('form_message') }}</textarea>
                                        @error('form_message')
                                            <span class="text-danger" style="font-size: 14px; margin-top: 5px; display: block;">{{ $message }}</span>
                                        @enderror
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
            
            <!-- Optional: Contact Information Sidebar -->
            <div class="col-xl-4">
                <div class="contact-info-box" style="background: #f8f9fa; padding: 30px; border-radius: 10px; margin-top: 30px;">
                    <h3 style="margin-bottom: 20px; color: #333;">Contact Information</h3>
                    <div class="contact-details" style="color: #666;">
                        <p style="margin-bottom: 15px;">
                            <strong>Email:</strong><br>
                            <a href="mailto:cooperation@rtelecommunication.com" style="color: #007bff;">cooperation@rtelecommunication.com</a>
                        </p>
                        <p style="margin-bottom: 15px;">
                            <strong>Phone:</strong><br>
                            <a href="tel:+38343873054" style="color: #007bff;">+383 43 873 054</a>
                        </p>
                    </div>
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