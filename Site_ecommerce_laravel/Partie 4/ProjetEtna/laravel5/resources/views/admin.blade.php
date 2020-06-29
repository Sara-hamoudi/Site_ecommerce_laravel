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
                
               
                <img id="imageF" src="fond.jpeg" width="250px" height="250px"> <br /> <br />
                <form method="POST" action="/Addproduct">
                @CSRF
                <div>
                Titre du livre : <input type="titre" placeholder="Titre du livre" name="Titre" required> 
                <span class="validity"></span>
                </div> <br />

                Image du produit : <input type='file' name="Image" accept="image/jpg image/png"> <br /> <br />

              //  Catégorie : <SELECT name="Catégorie">
                        <OPTION name="1" value="1">manga</OPTION>
                        <OPTION name="2" value="2"> jeunesse</OPTION>
                        <OPTION name="3" value="3">pour enfant</OPTION>
                        <OPTION name="4" value="4">BD</OPTION>
                        <OPTION name="5" value="5">religion</OPTION>
                        <OPTION name="6" value="6">éducative</OPTION>
                </SELECT> <br />  <br />

                Description : <textarea name="Description" id="Description"></textarea> <br /> <br />

                Prix de l'article : <input class="champ" type="number" name="prix" value="0" min="0" step="0.01">€ <br /> <br />
                
                Nombre disponible : <input class="champ" type="number" name= "NombreDisponible" value="1" min="1"> <br /> <br />
                <input type="submit" value="Validé">
</form>



        </body>
</html>

@endsection