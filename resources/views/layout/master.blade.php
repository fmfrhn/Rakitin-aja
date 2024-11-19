<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title>Rakitin-Aja</title>
    {{-- ReCaptcha --}}
    <script src="https://www.google.com/recaptcha/enterprise.js?render=6LcUjXAqAAAAAMDPdC5e6DFEtlmzx88ltSi2qp18"></script>
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('img/logo/Rakitin-aja.png') }}" sizes="16x16">
    <link rel="apple-touch-icon" href="{{ asset('img/logo/Rakitin-aja.png') }}">
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
    <link href="{{ asset('assets/mono/plugins/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/mono/plugins/owl-carousel/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/mono/plugins/owl-carousel/owl.theme.default.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/mono/plugins/magnific-popup/magnific-popup.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/mono/plugins/scrollcue/scrollcue.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/mono/plugins/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/mono/css/theme.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/mono/css/theme-colors/theme-color-turquiose.css') }}" rel="stylesheet">
    <!-- Fonts/Icons -->
    <link href="{{ asset('assets/mono/plugins/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/mono/plugins/font-awesome/css/all.css') }}" rel="stylesheet">
</head>


<body class="theme-color-turquiose preloader-theme" data-preloader="1">

    <!-- Header -->
    @include('layout.header')
    <!-- end Header -->
    @yield('container')

    @include('layout.footer')

    <!-- Scroll to top button -->
    <div class="scrolltotop icon-lg">
        <a class="button-circle button-circle-md button-circle-dark" href="#"><i
                class="bi bi-arrow-up-short"></i></a>
    </div>
    <!-- end Scroll to top button -->

    <!-- ***** JAVASCRIPTS ***** -->
    <script src="{{ asset('assets/mono/plugins/jquery.min.js') }}"></script>
    {{-- <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY"></script> --}}
    <script src="{{ asset('assets/mono/plugins/plugins.js') }}"></script>
    <script src="{{ asset('assets/mono/js/functions.js') }}"></script>
    <script src="{{ asset('assets/script.js') }}"></script>
</body>

</html>
