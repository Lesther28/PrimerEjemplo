<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('peliculas', function (Blueprint $table) {
            $table->string("codigoPelicula")->primaryKey();
            $table->string("titulo")->unique();
            $table->integer("anyoDebut");
            $table->double("duracion");
            $table->integer("codigoGenero");
            $table->integer("codigoProductor");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peliculas');
    }
};