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
            $table->string('Azienda');
            $table->string('Stazione_Partenza');
            $table->string('Stazione_arrivo');
            $table->string('Orario_di_partenza');
            $table->string('Orario_di_arrivo');
            $table->string('Codice_Treno');
            $table->string('Numero_Carozze');
            $table->string('In_orario');
            $table->string('Cancellato');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('Trains');
    }
};
