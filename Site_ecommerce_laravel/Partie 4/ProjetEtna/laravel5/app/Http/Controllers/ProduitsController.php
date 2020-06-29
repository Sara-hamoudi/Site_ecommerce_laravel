<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\livre;

class ProduitsController extends Controller
{
    public function Produit()
    {
        return view('produit');
    }
    public function Produit2()
    {
        return view('produit2');
    }
    public function Produit3()
    {
        return view('produit3');
    }
    public function Produit4()
    {
        return view('produit4');
    }
    public function Produit5()
    {
        return view('produit5');
    }
    public function Produit6()
    {
        return view('produit6');

    }

    public function Ajoutproduit(Request $request)
    {
        $produit = new livre();
        
        $produit->Prix = $request->get('prix');
        $produit->Titre = $request->get('Titre');
        $produit->Description = $request->get('Description');
        $produit->Image= $request->get('Image');
        $produit->Nombre_disponible= $request->get('NombreDisponible');

      // $produit->Catégorie_id = $request->get('Catégorie');
        
    
        
       $produit->save();
       //dd($produit);


        return view('/admin', ['produit' => $produit]);
       
    }




}
