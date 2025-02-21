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
        Schema::create('personas', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->id();
            $table->bigInteger('condiciones_id')->unsigned();
            $table->string('nombre');
            $table->string('apellidos');
            $table->string('dni');
            $table->integer('telefono');
            $table->string('direccion');
            $table->timestamps();
            $table->foreign('condiciones_id')->references('id')->on('condiciones')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personas');
    }
};
