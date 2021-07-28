<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <title>@yield('title')</title>
        @include('includes.header')

    </head>
    <body>

        {{-- navbar --}}
        @include('includes.navbarAuth')

        {{-- content --}}
        @yield('content')

        {{-- script --}}
        @include('includes.footer')
    </body>
</html>
