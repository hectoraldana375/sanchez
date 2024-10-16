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
        Schema::create('reconstructoras', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Título del servicio
            $table->string('image'); // Imagen de la tarjeta
            $table->string('background_image'); // Imagen de fondo
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reconstructoras');
    }
};
