<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Utilisateur extends Migration
{
    public function up()
    {
       Schema::create('Utilisateur', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Name',20);
            $table->string('Email',45)->unique();
            $table->string('Mot_de_passe',20);
            $table->string('Confirmation_mot_de_passe',20);
            $table->boolean('Admin');
            $table->integer('Panier_id')->unsigned();
            $table->timestamps();
            });

            Schema::table('Utilisateur', function(Blueprint $table) {
            $table->foreign('Panier_id')->references('id')->on('Panier');
            });
            }

    public function down()
    {
       Schema::dropIfExists('Utilisateur');
    }
}
