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
        Schema::create('tipo_seguimientos', function (Blueprint $table) {
            $table->id();
            $table->string("descripcion");
            $table->boolean("verifica_estado")->default(false);
            $table->string("prefijo");
            $table->string("numeracion");
            $table->string("año");
            $table->boolean('requiere_club')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tipo_seguimientos');
    }
};
