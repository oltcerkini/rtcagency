@extends('layouts.app')

@section('title', 'Home | RTC Agency')

@section('content')
    <!--Main Slider Start-->
    @include('sections.slider')
    <!--Main Slider End-->

    <!--Start About style1-->
    @include('sections.about')
    <!--End About style1-->

    <!--Start Service Style1-->
    @include('sections.services')
    <!--End Service Style1-->

    <!--Start Scrolling Text Style1-->
    @include('sections.scrolling-text')
    <!--End Scrolling Text Style1-->

    <!--Start Features Style1-->
    @include('sections.features')
    <!--End Features Style1-->

    @include('sections.projects')
@endsection