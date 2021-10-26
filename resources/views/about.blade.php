<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel | About</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="csrf-param" content="_token" />
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="{{ asset('js/app.js') }}"></script>
    </head>
    <header class="flex-shrink-0">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ ('/') }}">Главная</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{ ('articles') }}">Статьи</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <body>
        <div class="container mt-4">
            <h1>О блоге</h1>
            <p>Эксперименты с Laravel на Хекслете</p>
        </div>
    </body>
</html>

