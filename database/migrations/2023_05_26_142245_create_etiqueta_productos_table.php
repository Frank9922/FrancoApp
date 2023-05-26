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
        Schema::create('etiqueta_productos', function (Blueprint $table) {
            $table->id();

            //relacion a tabla productos
            $table->foreignId('id_producto')
                ->nullable()
                ->constrained('productos')
                ->cascadeOnUpdate()
                ->nullOnDelete();

            //relacion a tabla etiqueta
            $table->foreignId('id_etiqueta')
                ->nullable()
                ->constrained('etiquetas')
                ->cascadeOnUpdate()
                ->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('etiqueta_productos');
    }
};
