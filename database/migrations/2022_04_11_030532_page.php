<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Utilisateur;
use App\Models\Thematique;

class Page extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Page', function (Blueprint $collection) {
            $collection->id();
            $collection->string('Titre');
            $collection->string('Description');
            $collection->integer('Rating');
            $collection->array('Sommaire');
            $collection->string('Contenu');
            
            $collection->string('libellé');
            $collection->array('Media');
            $collection->string('lien');
            $collection->string('type');
            $collection->timestamps();    
            $collection->foreignIdFor(Utilisateur::class);
            $collection->foreignIdFor(Thematique::class);


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Pages');
    }
}
