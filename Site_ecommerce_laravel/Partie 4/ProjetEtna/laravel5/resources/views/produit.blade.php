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
            <p>Livre black butler :</p>
            <img src="black_butler.jpg" alt="livre black butler" height="470px" width="300px">
            
            <p>Catégorie manga <br />
            Ciel Fantomhive, 12 ans et chien de garde de la reine doit élucider des crimes après la mort de ses parents. À l'aide d'un démon il décide de se venger. <br />
            7€
            </p>
            
            <a href="panier.html" class="bouton">Mettre au panier</a> <br />
            <p>Il reste : 5 produits disponibles.</p>
    </body>
</html>

@endsection