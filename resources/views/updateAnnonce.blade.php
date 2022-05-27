<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/depotAnnonce.css') }}">
    <title>FreeAds</title>
</head>
<body>
    @include('layouts.navigation')
    <div class="content">
        <h1 id="mesAnnonces">Modifier mon annonce</h1>
        <div class="formulaire">
        <form method="POST" action="{{route("stepTwo")}}" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{$annonce->id}}">
                <label for="titre">Titre</label>
                <input type="text" name="titre" id="titre" value="{{$annonce->titre}}">
                <label for="description">Description</label>
                <textarea name="description" id="description" cols="30" rows="10">{{$annonce->description}}</textarea>
                <label for="prix">Prix</label>
                <input type="number" name="prix" id="prix" value="{{$annonce->prix}}">
                <label for="image">Image</label>
                <input type="file" name="image" id="image">
            <button class="more" type="submit">Enregistrer les Modifications</button>
        </form>
    </div>
    </div>
</body>
</html>