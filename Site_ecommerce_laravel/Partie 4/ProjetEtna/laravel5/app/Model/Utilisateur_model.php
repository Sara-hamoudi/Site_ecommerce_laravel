<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Utilisateur_model extends Model
{
    protected $table = 'Utilisateur_model';
    
    public function Utilisateur_Panier() 
    	{
	return $this->hasOne('App\Models\Panier_model');
	}
}
