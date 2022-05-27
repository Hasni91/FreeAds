<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <title>FreeAds</title>
</head>
<body>
    @include('layouts.navigation')
    <div class="content">
        <a href="{{route("DepotAnnonce")}}"><button class="more">Déposer une annonce</button></a>
        <div class="search">
            <h2>Recherche une annonce</h2>
            <form method="POST" action="{{route("search")}}">
                @csrf
                <input type="text" name="search" id="search" placeholder="Rechercher">
                <button type="submit" class="more">Rechercher</button>
            </form>
        </div>
        @foreach ($annonces as $annonce)
        <div class="annonce">
            <img src="{{$annonce->image}}" alt="image de l'annonce">
            <div>
                <h1>{{$annonce->titre}}</h1>
                <p>{{$annonce->prix}}€</p>
                <h4>{{$annonce->description}}</h4>
            </div>
        </div>
        @endforeach
    </div>
</body>
</html>