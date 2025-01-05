<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Favicon -->
    <link href="{{asset('assets/img/favicon.png')}}" rel="icon">
    <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Poppins" rel="stylesheet">
    <link href="https://fonts.bunny.net/css?family=plus-jakarta-sans:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i" rel="stylesheet" />

    <!-- CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="{{asset('assets/bootstrap/dist/css/bootstrap.css')}}">
    <link href="{{asset('assets/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('assets/aos/aos.css')}}" rel="stylesheet">
    <link href="{{asset('assets/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/style-custom.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

    <!-- JS -->
    <script src="{{asset('assets/js/jquery-3.7.1.min.js')}}"></script>
    <script src="{{asset('assets/bootstrap/dist/js/bootstrap.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

</head>
<body>

    @include('components.header')

    <div id="app-section">
        <main class="">
            @yield('content')
        </main>
    </div>

    @include('components.footer')

    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center">
        <i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{asset('assets/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/php-email-form/validate.js')}}"></script>
    <script src="{{asset('assets/aos/aos.js')}}"></script>
    <script src="{{asset('assets/glightbox/js/glightbox.min.js')}}"></script>
    <script src="{{asset('assets/swiper/swiper-bundle.min.js')}}"></script>

    <!-- Main JS File -->
    <script src="{{asset('assets/js/main.js')}}"></script>

</body>
</html>
