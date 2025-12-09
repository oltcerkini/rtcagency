<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', 'Manha || Business Consulting HTML5 Template')</title>
    
    <!-- Favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/favicons/apple-touch-icon.png') }}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/favicons/favicon-32x32.png') }}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicons/favicon-16x16.png') }}" />
    <meta name="description" content="Manha HTML 5 Template" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">

    <!-- CSS Assets -->
    @include('partials.css-assets')

    <!-- Additional CSS -->
    @stack('styles')
</head>

<body>

    <!-- Preloader -->
    @include('partials.preloader')

    <div class="page-wrapper boxed_wrapper">
        
        <!-- Header -->
        @include('partials.header')

        <!-- Main Content -->
        <main>
            @yield('content')
        </main>

        <!-- Footer -->
        @include('partials.footer')

    </div>
    <!-- /.page-wrapper -->

    <!-- Mobile Navigation -->
    @include('partials.mobile-nav')

    <!-- Search Popup -->
    @include('partials.search-popup')

    <!-- JavaScript Assets -->
    @include('partials.js-assets')

    <!-- Additional Scripts -->
    @stack('scripts')
</body>
</html>