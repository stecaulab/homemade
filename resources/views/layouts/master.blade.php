<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Stefano Cauzzi">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@yield('title')-FF-Homemade Blog</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- fonts -->

    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,500;1,100;1,200;1,300;1,500&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/app.css') }}">
    <link rel="stylesheet" href="{{asset('css/base.css') }}">
    <link rel="stylesheet" type="text/css" href="{!! asset('css/fontawesome/css/all.min.css') !!}">

</head>

<body id="myBody">

    <x-main-menu :categories="$categories" :CurrentCategory="$currentCategory ?? ''">

    </x-main-menu>


    <x-subheading :categories="$categories" :CurrentCategory="$currentCategory ?? ''">

    </x-subheading>


     <!-- Content -->

    <div id="app">
        @yield('content')
    </div>

      <!-- Footer -->
<x-footer></x-footer>

<!-- Scripts -->
<script src="{{asset('js/app.js') }}" defer></script>
<script src="{{asset('js/function.js')}}" defer></script>
</body>
</html>
