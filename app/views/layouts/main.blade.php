<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="{{ url('assets/css/madewithlaravel.css')}}">
        <link rel="stylesheet" href="{{ url('font/font.css')}}">

        <style type="text/css">
        body {
            background-image: url('./img/pattern.jpg');
        }
        </style>
        @yield('styles')
    </head>
    <body>
        @include('layouts.nav')
        <div class="container">
            @yield('content')
        </div> <!-- /container -->

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
        <script src="{{ url('js/vendor/bootstrap.min.js')}}"></script>
        <script src="{{ url('js/main.js')}}"></script>
        @yield('scripts')

    </body>
</html>
