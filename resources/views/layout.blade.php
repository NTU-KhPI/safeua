<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--Jquery CDN-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- Scripts and Styles-->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    {{-- Icons --}}
    <link rel="icon" type="image/x-icon" sizes="32x32" href="{{ asset('img/logo.ico') }}">
    <link rel="icon" type="image/x-icon" sizes="16x16" href="{{ asset('img/logo.ico') }}">
    <title>@yield('title')</title>
    {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}
</head>

<body>

    @include('layouts.footer')

    @yield('content')

    @include('layouts.footer')
</body>

</html>
