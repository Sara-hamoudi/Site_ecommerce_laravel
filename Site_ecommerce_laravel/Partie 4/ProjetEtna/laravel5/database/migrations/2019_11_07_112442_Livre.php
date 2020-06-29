<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class Livre extends Migration {

    public function up()
    {
     Schema::create('Livre', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Titre');
            $table->binary('Image')->nullable();
            $table->string('Description')->nullable();
            $table->integer('Prix');
            $table->integer('Nombre_disponible')->nullable();
            $table->integer('Catalogue_id')->default(2);
            
            $table->timestamps();
            });

            Schema::table('Livre', function(Blueprint $table) {
            $table->foreign('catalogue_id')->references('id')->on('catalogue');
           
        
            });
            }
    
    public function down()
    {
        Schema::dropIfExists('Livre');
    }
}
