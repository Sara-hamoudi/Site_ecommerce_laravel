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
                <p>Livre la Torah :</p>
                <img src="torah.jpeg" alt="livre torah" height="400px" width="400px">
                
                <p>Catégorie religion <br />
                Le livre religieux des Juifs. <br />
                15€
                </p>
                
                <a href="panier.html" class="bouton">Mettre au panier</a> <br />
                <p>Il reste : 200 produits disponibles.</p>
        </body>
</html>

@endsection