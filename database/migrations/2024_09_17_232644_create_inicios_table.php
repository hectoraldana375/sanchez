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
        Schema::create('carousel_images', function (Blueprint $table) {
            $table->id();
            $table->string('image_path');
            $table->timestamps();
        });
    

        // Tabla para la sección de historia
        Schema::create('histories', function (Blueprint $table) {
            $table->id();
            $table->text('titulo');
            $table->text('descripcion');
            $table->timestamps();
        });

        // Tabla para la sección "Contamos con"
        Schema::create('features', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->text('description');
            $table->string('imagen');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */

};
