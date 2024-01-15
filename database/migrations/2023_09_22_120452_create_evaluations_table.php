<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvaluationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluations', function (Blueprint $table) {
            $table->id();
            $table->string('marque');
            $table->string('modele');
            $table->bigInteger('annee');
            $table->string('type_carburant');
            $table->string('boite');
            $table->bigInteger('kilometrage');
            $table->bigInteger('prix');
            $table->float('estimationKm',8,5)->nullable();
            $table->bigInteger('estimationTransmission')->nullable();
            $table->bigInteger('estimationCarburant')->nullable();
            $table->bigInteger('prix_conteur_0km');
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
        Schema::dropIfExists('evaluations');
    }
}
