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
                <p>Livre Labyrinthe :</p>
                <img src="labyrinthe.jpeg" alt="livre labyrinthe" height="470px" width="300px">
        
                <p>Catégorie livre jeunesse <br />
                Thomas se retouve enfermé avec plusieurs jeunes garçons dans un labyrinthe contenant des monstres nommés Griffeurs. <br />
                10€
                </p>
                
                <a href="panier.html" class="bouton">Mettre au panier</a> <br />
                <p>Il reste : 20 produits disponibles.</p>
        </body>
</html>
@endsection