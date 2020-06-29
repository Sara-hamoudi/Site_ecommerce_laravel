<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class Livre extends Migration {

    public function up()
    {
     Schema::create('Livre', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Titre',45);
            $table->string('Image',45);
            $table->string('Catégorie',45);
            $table->string('Description',2000);
            $table->integer('Prix');
            $table->integer('Nombre_disponible');
            $table->integer('Catalogue_id')->unsigned();
            $table->timestamps();
            });

            Schema::table('Livre', function(Blueprint $table) {
            $table->foreign('Catalogue_id')->references('id')->on('Catalogue');
            });
            }
    
    public function down()
    {
        Schema::dropIfExists('Livre');
    }
}
