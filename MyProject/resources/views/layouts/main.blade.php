<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <title>Molisana</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    </head>
    <body>

        {{-- HEADER INCLUDE --}}
        @include('partials.header')


        {{-- side bar --}}
        <aside>
            <h3>Blog</h3>
            <h3>Why me?</h3>
        </aside>

        <main>
            {{-- content main --}}
            @yield('content')
        </main>

        {{-- FOOTER INCLUDE --}}
        @include('partials.footer')
    </body>
</html>