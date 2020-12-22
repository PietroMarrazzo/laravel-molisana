<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{-- <link rel="stylesheet" href="{{ asset(css/app.css) }}"> --}}
        <title>Molisana</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    </head>
    <body>
        <header>
            <a href="{{ asset('img/logo.png') }}"></a>
        </header>

        <main>
            <h1>HOMEPAGE</h1>

            <h3>Benvenuto {{ $user }}</h3>
        </main>

        <footer>
            <h2>Site La Molisana - Pietro Marrazzo</h2>
        </footer>
    </body>
</html>
