<footer class="footer-style1">
    <div class="footer-style1__shape1 wow slideInDown" data-wow-delay="100ms" data-wow-duration="2500ms">
        <img class="float-bob-x" src="{{ asset('assets/images/shapes/footer_shape1.png') }}" alt="">
    </div>
    <div class="footer-style1__shape2 wow slideInUp" data-wow-delay="300ms" data-wow-duration="2500ms">
        <img class="float-bob-y" src="{{ asset('assets/images/shapes/footer_shape2.png') }}" alt="">
    </div>
    <div class="footer-style1__shape3 wow slideInUp" data-wow-delay="100ms" data-wow-duration="2500ms">
        <img class="rotatescale" src="{{ asset('assets/images/shapes/footer_shape3.png') }}" alt="">
    </div>
    <div class="footer-style1__shape4 wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms">
        <img class="float-bob-right" src="{{ asset('assets/images/shapes/footer_shape4.png') }}" alt="">
    </div>
    <div class="footer-style1__shape5 wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms">
        <img class="float-bob-x" src="{{ asset('assets/images/shapes/footer_shape5.png') }}" alt="">
    </div>
    
    <!--Start Footer Main-->
    <div class="footer-main">
        <div class="container">
            <div class="row">
                <!-- Footer widgets here (same as your HTML) -->
                <!-- You can further break these into separate partials if needed -->
                @include('partials.footer-widgets')
            </div>
        </div>
    </div>
    <!--End Footer Main-->

    <!--Start Footer Bottom-->
    <div class="footer-bottom">
        <div class="container">
            <div class="bottom-inner">
                <div class="copyright-text">
                    <p>
                        &copy; Copyright {{ date('Y') }}
                        <a href="{{ route('home') }}">DIV Group</a>
                        - All Rights Reserved.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!--End Footer Bottom-->
</footer>