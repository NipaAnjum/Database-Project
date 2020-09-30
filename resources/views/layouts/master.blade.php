<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ART GALLERY</title>
        @include('partials.link')
</head>
    @include('partials.nav')
    @yield('content') 
    @include('partials.footer')
</html>