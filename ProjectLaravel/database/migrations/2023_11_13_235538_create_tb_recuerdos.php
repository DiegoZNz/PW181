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
        Schema::create('tb_recuerdos', function (Blueprint $table) {
            $table->increments('id');//el id es el campo que se va a autoincrementar
            $table->string('titulo');
            $table->string('recuerdo');
            $table->string('fecha');
            $table->timestamps(); //los timestamps son las fechas de creacion y actualizacion de un registro
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_recuerdos');
    }
};
