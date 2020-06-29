<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Panier extends Migration {

public function up()
{
    Schema::create('Panier',function(blueprint $table) {
     $table->increments('id');
     $table->timestamps();
     
    });
    }

       public function down()
    {
        Schema::dropIfExists('Panier');
    }
}
