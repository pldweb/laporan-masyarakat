<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Poppins" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('bootstrap/dist/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/style-custom.css')}}">
    <script src="{{asset('js/jquery-3.7.1.min.js')}}"></script>
    <script src="{{asset('bootstrap/dist/css/bootstrap.js')}}"></script>

</head>
<body>

    @include('components.header')

    <div id="app-section">
        <main class="py-4">
            @yield('content')
        </main>
    </div>

    @include('components.footer')

</body>
</html>
