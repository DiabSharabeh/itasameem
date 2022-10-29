<!DOCTYPE html>
<html>

<head>
    <title> Itasameem</title>

    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <!-- tailwind  CSS -->    
<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.css" rel="stylesheet">

    {{-- swiper slider --}}
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    {{-- animation --}}
    <link href="/css/aos.css" rel="stylesheet">
    <link href="/css/animate.min.css" rel="stylesheet">

    {{-- awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    {{-- main css --}}
    <link rel="stylesheet" type="text/css" href="/css/main.css?v={{ time() }}" />
    <link rel="stylesheet" type="text/css" href="/css/respo.css?v={{ time() }}" />

    {{-- popup --}}
    <link rel="stylesheet" href="{{ asset('popup/magnific-popup.css') }}">




</head>

<body>
    {{-- Header Area Start --}}
    @include('layouts.header')

    {{-- Page content --}}
    @yield('content')

    {{-- Footer Area Start --}}
    @include('layouts.footer')




</body>

</html>
