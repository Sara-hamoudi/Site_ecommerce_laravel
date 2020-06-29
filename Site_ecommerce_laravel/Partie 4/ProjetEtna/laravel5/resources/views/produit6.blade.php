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
            <p>Livre Petit Ours Brun :</p>
            <img src="petit_ours_brun.jpeg" alt="livre petit ours brun" height="470px" width="300px">
            
            <p>Catégorie livre pour enfant <br />
            Histoire d'un petit ours brun qui vit des aventures ordinaires. <br />
            2€
            </p>
            
            <a href="panier.html" class="bouton">Mettre au panier</a> <br />
            <p>Il reste : 34 produits disponibles.</p>
    </body>
</html>

@endsection