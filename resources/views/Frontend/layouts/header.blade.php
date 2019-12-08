<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>{{ config('app.name', 'SuberJet') }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSRF Token -->
    <link rel = "icon" type = "image/png" href = "{{ asset('storage/'.setting('site.logo'))}}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- FONT CSS-->
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900">
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/font/font-icon/font-awesome/css/font-awesome.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/font/font-icon/font-flaticon/flaticon.css') }}">
    <!-- LIBRARY CSS-->
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/libs/bootstrap/css/bootstrap.min.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/libs/animate/animate.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/libs/slick-slider/slick.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/libs/slick-slider/slick-theme.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/libs/selectbox/css/jquery.selectbox.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/libs/please-wait/please-wait.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/libs/fancybox/css/jquery.fancybox8cbb.css?v=2.1.5') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/libs/fancybox/css/jquery.fancybox-buttons3447.css?v=1.0.5') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/libs/fancybox/css/jquery.fancybox-thumbsf2ad.css?v=1.0.7') }}">
    <!-- STYLE CSS-->
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/layout.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/components.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/color.css') }}">
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/css/select2.css" integrity="sha256-kalgQ55Pfy9YBkT+4yYYd5N8Iobe+iWeBuzP7LjVO0o=" crossorigin="anonymous" /> --}}
    <!--link(type="text/css", rel='stylesheet', href='assets/css/color-1/color-1.css', id="color-skins")-->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css">
      <!-- select2-bootstrap4-theme -->
    <link href="https://raw.githack.com/ttskch/select2-bootstrap4-theme/master/dist/select2-bootstrap4.css" rel="stylesheet"> <!-- for live demo page -->
    <link href="select2-bootstrap4.css" rel="stylesheet"> <!-- for local development env -->

    {{-- <link rel="stylesheet" href="https://select2.github.io/select2-bootstrap-theme/css/select2-bootstrap.css" integrity="sha256-Ju6812ufi1PkAvKVu7myA4uw5aYWyZoeL5GHNCn0AMk=" crossorigin="anonymous" /> --}}
    <link type="text/css" rel="stylesheet" href="#" id="color-skins">
    <script src="{{ asset('assets/libs/jquery/jquery-2.2.3.min.js') }}"></script>
    
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}">
    @if (Lang::locale() == 'ar')
    <link href="https://fonts.googleapis.com/css?family=Amiri:700&display=swap" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/style-rtl.css') }}">
    @endif

    @yield('style')

</head>