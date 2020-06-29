@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Liberty commerce</title>
        <link rel="stylesheet" href="style.css"/>
    </head>
    <body>
<div class="fluid-container">

    <div class="fluid">
    <form method="POST" action="Achat">
    @CSRF
    <?php 
        $produits = \App\Model\livre::all();
    ?>
    @foreach($produits as $unProduit)
    <div class="produit">
                <img src="../images/{{ $unProduit->Image }}" height="250px" width="150px">
                </br>
                
                <p>{{ $unProduit->Titre }}</p>
                <input type="button" value="Lien">
                <input type="submit" value="Achat Direct">
            </div>
     @endforeach
    </form>
    </div>
</div>
</div>
        

 </body>
 </html>

@endsection