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
        <h1 id="mesAnnonces">Modifier mon Profile</h1>
        <form method="POST" action="{{route("update")}}">
            @csrf
            <label for="nom">Nom</label>
            <input type="text" name="nom" id="nom">
            <label for="email">Email</label>
            <input type="email" name="email" id="email">
            <label for="password">Nouveau mot de passe</label>
            <input type="password" name="password" id="password">
            <button class="more" type="submit">Enregistrer les Modifications</button>
    </div>
    </div>
</body>
</html>