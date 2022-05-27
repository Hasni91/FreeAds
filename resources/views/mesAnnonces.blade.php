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
        <h1 id="mesAnnonces">Mes annonces</h1>
        @foreach ($annonceByID as $annonce)
        <div class="annonce">
            <img src="{{$annonce->image}}" alt="image de l'annonce">
            <div>
                <h1>{{$annonce->titre}}</h1>
                <p>{{$annonce->prix}}€</p>
                <form method="POST" action="{{route("updateAnnonce")}}">
                    @csrf
                    <input type="hidden" name="id" value="{{$annonce->id}}">
                    <button class="more" type="submit">Modifier l'annonce</button>
                </form>
                <form method="POST" action="{{route("deleteAnnonce")}}">
                    @csrf
                    <input type="hidden" name="id" value="{{$annonce->id}}">
                    <button class="delete" type="submit">Supprimer mon annonce</button>
                </form>
            </div>
        </div>
        @endforeach
    </div>
</body>
</html>