<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Catalogue_model extends Model
{
    protected $table = 'Catalogue_model';


    public function Livre_Catalogue() 
    	{
	return $this->hasMany('App\Models\Livre_model');
	}
}
