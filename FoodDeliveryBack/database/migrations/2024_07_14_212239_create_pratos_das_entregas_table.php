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
        Schema::create('pratos_das_entregas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('pratoId');
            $table->foreign('pratoId')->references('id')->on('pratos');
            $table->unsignedBigInteger('entregaId');
            $table->foreign('entregaId')->references('id')->on('entregas');
            $table->decimal('price',total:5,places:2);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pratos_das_entregas');
    }
};
