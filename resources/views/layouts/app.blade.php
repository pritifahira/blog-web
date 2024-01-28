<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('tittle')</title>
    <link href="{{ asset('bootstrap-5/css/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"></link>
    <script src="{{ asset('bootstrap-5/js/bootstrap.min.js') }}" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <style>
        .blog {
            padding: 5px;
            border-bottom: 1px solid lightgrey;
        }
    </style>
</head>
<body>
    @include('layouts.app.header')
    <div class="container">

    @yield('content')

    @include('layouts.app.footer')

    </div>
</body>
</html>