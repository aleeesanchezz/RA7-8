<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('jugador', function (Blueprint $table) {
            $table->increments('id_jugador');
            $table->string('nombre');
            $table->integer('dorsal');
            $table->unsignedInteger('id_equipo');
            $table->timestamps();

            $table->foreign('id_equipo')->references('id_equipo')->on('equipo')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('jugador');
    }
};
