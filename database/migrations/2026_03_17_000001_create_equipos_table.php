<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('equipo', function (Blueprint $table) {
            $table->increments('id_equipo');
            $table->string('nombre');
            $table->string('ciudad');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('equipo');
    }
};
