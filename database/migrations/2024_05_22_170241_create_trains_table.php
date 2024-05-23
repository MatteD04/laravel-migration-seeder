<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('Azienda', 120);
            $table->string('Codice_Treno', 10);
            $table->string('Stazione_di_partenza', 50);
            $table->string('Stazione_di_arrivo', 50);
            $table->string('orario_di_partenza', 10);
            $table->string('orario_di_arrivo', 10);
            $table->smallInteger('numero_di_carrozze')->unsigned();
            $table->tinyInteger('in_orario')->unsigned()->default(1);
            $table->tinyInteger('cancellato')->unsigned()->default(1);
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
        Schema::dropIfExists('trains');
    }
};