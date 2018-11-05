<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <!--  Google font -->
        <link href="https://fonts.googleapis.com/css?family=Mukta+Mahee" rel="stylesheet">
        <title>LaraCarte</title>

        <style type="text/css">
            body{
                font-family: 'Mukta Mahee', sans-serif;
            }
            footer{
                margin: 4em 0;
            }
        </style>
    </head>
    <body>
        @include('layouts.partials._nav')
        @yield('content')
        @include('layouts.partials._footer')

        <script src="/bootstrap/js/jquery-3.3.1.slim.min.js"></script>
        <script src="/bootstrap/js/popper.min.js"></script>
        <script src="/bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>
