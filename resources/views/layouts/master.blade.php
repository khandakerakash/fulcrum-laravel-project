<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Home | @yield('title')</title>

    <!-- Google Raleway Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet">
    <!-- ICON-FONT -->
    <link rel="stylesheet" href="{{ asset('css/icon-font.css') }}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <!-- FONT AWESOME CDN -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('css')
</head>
<body>

<div id="app">
    @include('partials/utility/preloader')
    @include('partials/header')
    @include('partials/nav')
    @yield('content')
</div>
<!-- /#app -->

<!-- Scripts -->
<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script src="{{ asset('js/wow.min.js') }}"></script>
<script src="{{ asset('js/custom_jquery_scripts.js') }}"></script>
@yield('app-scripts')

</body>
</html>