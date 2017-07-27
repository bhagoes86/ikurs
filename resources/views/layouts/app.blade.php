<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- Font -->
    <link href="{{ asset('css/vendor/fa/css/font-awesome.css') }}" rel="stylesheet">
</head>
<body>
    <div class="pen-title">
    <a href="{{ url('/')}}" style="text-decoration: none;"><h1>i<span class="color">K</span>urs</h1></a><span class="desc">(Sistem Informasi Kursus)</span>
    </div>
    <!-- Form Module-->
    <div class="module form-module">
      <div class="toggle"><i class="fa fa-times fa-pencil"></i></div>
        @yield('content')
      <div class="cta"><a href="{{ route('password.request') }}">Forgot your password?</a></div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/login.js') }}"></script>

</body>
</html>
