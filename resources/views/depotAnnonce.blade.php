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
        <h1>Déposer une annonces</h1>
        <div class="formulaire">
            <form method="POST" action="{{route("Annonce.create")}}" enctype="multipart/form-data">
                @csrf
                <label for="titre">Titre de l'annonce</label>
                <input type="text" id="titre" name="titre" required >
                <label for="description">Description</label>
                <textarea type="textArea" id="description" name="description" required ></textarea>
                <label for="prix">Prix</label>
                <input type="number" id="prix" name="prix" min="10" required>
                <label for="file">Choisissez une image</label>
                <input type="file" id="file" name="file" accept="image/png, image/jpeg">
                <input id="submit" type="submit" value="Poster l'annonce">
            </form>
        </div>
    </div>
</body>
</html>