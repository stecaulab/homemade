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

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/app.css') }}">
    <link rel="stylesheet" href="{{asset('css/clean-blog.css') }}">
    <link rel="stylesheet" type="text/css" href="{!! asset('css/fontawesome/css/all.min.css') !!}">

</head>
<body>
    <x-main-menu :categories="$categories" :CurrentCategory="$currentCategory">

    </x-main-menu>
    <x-subheading></x-subheading>
<div>

    @yield('catContent')

</div>



<x-footer></x-footer>

<!-- Scripts -->
<script src="{{asset('js/app.js') }}" defer></script>
<script src="{{asset('js/clean-blog.js')}}"></script>
</body>
</html>
