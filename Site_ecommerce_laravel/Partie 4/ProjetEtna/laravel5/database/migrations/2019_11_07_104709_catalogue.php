<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Catalogue extends Migration
{
      public function up ()
      {
      Schema::create('Catalogue', function(Blueprint $table) {
      $table->increments('id');
      $table->timestamps();
      });
      }

    public function down()
    {
        Schema::dropIfExists('Catalogue');
    }

}
