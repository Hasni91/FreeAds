<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet">
    <title>FreeAds</title>
</head>
<body>
    <div class="menu">
        <h1>FreeAds</h1>
@if (Route::has('login'))
    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
        @auth
            <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
        @else
            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Se connecter</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">S'inscrire</a>
            @endif
        @endauth
    </div>
@endif
    </div>
    <div class="content">
        <h1>Des petites annonces et autant d’occasions de se faire plaisir sur</h1>
        <h1 id="title">FreeAds 🚀</h1>
        <a href="{{route("register")}}"><button>Découvrir</button></a>
    </div>
</body>
</html>