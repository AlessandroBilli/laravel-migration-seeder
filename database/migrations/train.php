<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('Trains', function (Blueprint $table) {
            $table->id();
            $table->string('Azienda', 50);
            $table->string('Stazione_Partenza', 50);
            $table->string('Stazione_arrivo', 50);
            $table->string('Orario_di_partenza',);
            $table->string('Orario_di_arrivo');
            $table->string('Codice_Treno');
            $table->string('Numero_Carozze');
            $table->string('In_orario')->default(false);
            $table->string('Cancellato')->default(false);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('Trains');
    }
};
