<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin-AyoDonasi</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('image/logoicon.png') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/styles.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://cdn.jsdelivr.net/npm/lightbox2@2.11.3/dist/css/lightbox.min.css" rel="stylesheet" />
    <meta name="robots" content="noindex, nofollow">
    @stack('css')
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <!-- Sidebar Start -->
            @include('partials.sidebar')
        <!--  Sidebar End -->

        <!--  Main wrapper -->
        <div class="body-wrapper">
            <!--  Header Start -->
           @include('partials.navbar')
            <!--  Header End -->

            <div class="body-wrapper-inner px-2">
               @yield('content')
            </div>

        </div>
    </div>
    <script src="{{ asset('assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/sidebarmenu.js') }}"></script>
    <script src="{{ asset('assets/js/app.min.js') }}"></script>
    <!-- solar icons -->
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/lightbox2@2.11.3/dist/js/lightbox.min.js"></script>
    <script>
        $(document).ready(function() {
            // Tambahkan atribut data-lightbox ke semua gambar dalam konten blog
            $('#blog-content img').each(function() {
                // Tambahkan data-lightbox dan id untuk galeri gambar
                $(this).attr('data-lightbox',
                'blog-gallery'); // Menambahkan ID 'blog-gallery' untuk semua gambar
                $(this).attr('alt', $(this).attr('alt') || 'Image'); // Pastikan atribut alt ada
            });
        });
    </script>
    @stack('js')
</body>

</html>
