<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>  
        <link href="/css/app.css" rel="stylesheet">
    </head>
    <body>
        @include('partials.header')
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>