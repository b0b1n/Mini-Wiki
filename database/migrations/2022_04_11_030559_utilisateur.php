<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Utilisateur extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Utilisateur', function (Blueprint $collection) {
            $collection->id();
            $collection->string('username');
           $collection->string('email');
           $collection->string('mot de pass');
           $collection->boolean('estConnecté');
           $collection->boolean('estAdmin');
           $collection->array('Consultations');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Utilisateurs');
    }
}
