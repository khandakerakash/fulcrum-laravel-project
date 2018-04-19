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
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('css')
</head>
<body>

<div id="wrapper">
    @yield('content')
    <!-- /#wrapper -->
</div>
<!-- /#wrapper -->

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
@yield('app-scripts')

</body>
</html>