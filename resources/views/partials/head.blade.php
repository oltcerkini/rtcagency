<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<title>{{ $title ?? config('app.name') }}</title>

<link rel="icon" href="{{ asset('assets/images/logo-white.png') }}" sizes="any">
<link rel="icon" href="{{ asset('assets/images/logo-white.png') }}" type="image/svg+xml">
<link rel="apple-touch-icon" href="{{ asset('assets/images/logo-white.png') }}">

<!-- Load Open Sans from Bunny Fonts -->
<link rel="preconnect" href="https://fonts.bunny.net">
<link href="https://fonts.bunny.net/css?family=open-sans:300,400,500,600,700&display=swap" rel="stylesheet" />
<!-- In your HTML head, add this with other font links -->
<link href="https://fonts.googleapis.com/css2?family=Recoleta:wght@300;400;500;600;700&display=swap" rel="stylesheet">

@vite(['resources/css/app.css', 'resources/js/app.js'])
@fluxAppearance