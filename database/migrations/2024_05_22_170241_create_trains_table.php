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
            $table->string('Codice Treno', 10);
            $table->string('Stazione di partenza', 50);
            $table->string('Stazione di arrivo', 50);
            $table->string('orario di partenza', 10);
            $table->string('orario di arrivo', 10);
            $table->smallInteger('numero di carrozze')->unsigned();
            $table->tinyInteger('in orario')->unsigned()->default(1);
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