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
        Schema::create('producto_pedido', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_pedido')
                    ->nullable()
                    ->constrained('pedido');
            $table->foreignId('idprod')
                    ->nullable()
                    ->constrained('productos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('producto_pedido');
    }
};
