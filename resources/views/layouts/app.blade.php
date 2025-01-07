<!doctype html>
<html lang="en" data-theme="light">

<head>
    <meta charset="utf-8">
    <link rel="shortcut icon" type="image/png" href="{{ asset('image/logoicon.png') }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide/dist/css/splide.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide/dist/js/splide.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    {{-- @vite('resources/js/app.js') --}}
</head>

<body>
    {{-- Navbar --}}
    {{-- <header class=""> --}}
    @include('components.navbar')
    {{-- </header> --}}
    {{-- Navbar End --}}

    <main class="container mx-auto lg:p-4 p-0 mb-36">
        @yield('content')
    </main>


    {{-- Footer --}}
    @include('partials.footer')
    {{-- Footer End --}}
    @stack('js')
</body>

</html>
