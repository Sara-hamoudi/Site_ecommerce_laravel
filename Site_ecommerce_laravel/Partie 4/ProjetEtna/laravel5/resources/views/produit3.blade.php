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
                <p>Livre Astérix :</p>
                <img src="astérix.jpeg" alt="livre astérix" height="470px" width="350px">

                <p>Catégorie BD <br />
                Nous sommes en 50 avant Jésus-Christ. Toute la Gaule est occupée par les Romains... Toutes? Non! Un petit village d'irréductibles Gaulois résiste encore et toujours à l'envahisseur. <br />
                8€
                </p>
                        
                <a href="panier.html" class="bouton">Mettre au panier</a> <br />
                <p>Il reste : 30 produits disponibles.</p>
   
        </body>
</html>

@endsection