@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html>
        <head>
                <meta charset="utf-8" />
                <title>Liberty commerce</title>
                <link rel="stylesheet" type="text/css" href="style2.css">  
        </head>
        <body>
                <img id="imageF" src="fond.jpeg" width="250px" height="250px">
                <p>Livre Anglais pour les Nuls :</p>
                <img src="anglais_pour_les_nuls.jpeg" alt="livre anglais pour les nuls" height="470px" width="300px">
                
                <p>Catégorie éducative <br />
                Nul en anglais ? Reprenez les bases et avancez pas à pas avec humour dans cette langue merveilleuse qu'est l'anglais. <br />
                12€
                </p>
                
                <a href="panier.html" class="bouton">Mettre au panier</a> <br />
                <p>Il reste : 10 produits disponible.</p>
        </body>
</html>

@endsection