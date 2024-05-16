<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8">
    <title>Meninas e as TIC - @yield('titulo')</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="title" content="Portal Oficial das Meninas e as TIC" />
    <meta name="description" content="Portal Oficial das Meninas e as TIC" />
    <meta name="keywords" content="Portal Oficial das Meninas e as TIC" />

    <meta property="og:title" content="TIC, ICTAngola, ICT, TIC, Educação, Tecnologias, Meninas" />
    <meta property="og:site_name" content="Portal Oficial das Meninas e as TIC" />
    <meta property="og:description" content="Portal Oficial das Meninas e as TIC" />
    <meta property="og:type" content="article" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="/site/images/logo_tics.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/site/images/logo_tics.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/site/images/logo_tics.png">



    {{-- sweetalert --}}
    <link rel="stylesheet" href="/css/sweetalert2.css">
    <script src="/js/sweetalert2.all.min.js"></script>


    <link rel="stylesheet" type="text/css" href="/site/styles/bootstrap4/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="/site/plugins/font-awesome-4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="/site/plugins/OwlCarousel2-2.2.1/owl.carousel.css" />
    <link rel="stylesheet" type="text/css" href="/site/plugins/OwlCarousel2-2.2.1/owl.theme.default.css" />
    <link rel="stylesheet" type="text/css" href="/site/plugins/OwlCarousel2-2.2.1/animate.css" />
    <link rel="stylesheet" type="text/css" href="/site/styles/bootstrap4/bootstrap.min.css" />


    @yield('CSS')
</head>
<div class="super_container">
