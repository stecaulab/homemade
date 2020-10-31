<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSRF Token protection in all our frontend -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script>

        window.Laravel = {csrfToken:'csrf_token()'}

    </script>

    <title>Pannello di Controllo Admin </title>

    <!-- Styles -->
    <link rel="stylesheet" href="{!! asset('css/app.css') !!}">
    <link rel="stylesheet" href="{!! asset('css/clean-blog.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('css/fontawesome/css/all.min.css') !!}">


     <style>
            html, body {
                    background-color: #202b33;
                    color:#738491;
                    font-family: "Open Sans";
                    overflow:hidden;
            }
     </style>

</head>
<body>

    <div id="app">
        <homepage-component :user-name='@json(auth()->user()->name)' :user-id='@json(auth()->user()->id)' >

        </homepage-component>


    </div>


    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

