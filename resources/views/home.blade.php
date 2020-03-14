<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <main class="container">
            
            <div style="text-align: center">
                <img width="300" src="{{ asset('img/profil.jpg') }}" alt="Andrzej Nogala Picture" />
                <h3 style="margin-top: 1em;">Andrzej Nogala</h3>
                <p>
                    Witaj na mojej stronie.
                    To miejsce jest jeszcze w budowie, ale niedługo powinno wyglądać lepiej :)
                </p>
            </div>

        </main>
    </div>
</body>
</html>
