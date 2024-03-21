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
            $table->longText('message')->nullable();
            $table->string('type_carburant')->nullable();
            $table->string('boite')->nullable();
            $table->bigInteger('kilometrage')->nullable();
            $table->bigInteger('prix')->nullable();
            $table->string('image')->nullable();
            $table->float('estimationKm',8,5)->nullable();
            $table->bigInteger('estimationTransmission')->nullable();
            $table->bigInteger('estimationCarburant')->nullable();
            $table->bigInteger('prix_conteur_0km')->nullable();
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
