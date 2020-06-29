<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LivreEtPanier extends Migration
{
 public function up()
    {
    schema::create('Livre_has_Panier',function(Blueprint $table){
    $table->integer('Livre_id')->unsigned();
    $table->integer('Panier_id')->unsigned();
    $table->timestamps();
    });

    schema::table('Livre_has_Panier',function(Blueprint $table){
    $table->foreign('Livre_id')->references('id')->on('Livre');
    $table->foreign('Panier_id')->references('id')->on('Panier');
    });
    }


    public function down()
    {
        Schema::dropIfExists('Livre_has_Panier');
    }

}
