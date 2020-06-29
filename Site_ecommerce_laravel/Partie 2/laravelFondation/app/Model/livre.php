<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class livre extends Model
{
    protected $table = 'livre';

    public function Produit_Panier() 
    	{
	return $this->belongsToMany('App\Model\Panier_model');
    }
}
