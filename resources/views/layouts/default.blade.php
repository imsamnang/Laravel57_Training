<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
@yield('head')
<!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    @yield('css')
</head>
<body style="padding-top: 100px;padding-bottom: 50px;background: whitesmoke">
<nav class="navbar fixed-top navbar-expand-sm navbar-dark bg-info">
    <a class="navbar-brand" target="_blank" href="https://www.tinhtoday.com">TINHTODAY.COM</a>
    @yield('nav')
</nav>
@yield('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
@yield('js')
</body>
</html>