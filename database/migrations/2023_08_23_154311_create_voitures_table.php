<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVoituresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voitures', function (Blueprint $table) {
            $table->id();
            $table->string("marque");
            $table->string("modele");
            $table->string("annee");
            $table->string("kilometrage");
            $table->string("etat");
            $table->string("moteur");
            $table->string("boite");
            $table->text("caracteristique");
            $table->bigInteger("prix");
            $table->string("image");
        
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('voitures');
    }
}
