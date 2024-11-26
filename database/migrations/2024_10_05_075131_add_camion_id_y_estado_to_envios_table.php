<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCamionIdYEstadoToEnviosTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('envios', function (Blueprint $table) {
            $table->unsignedBigInteger('camion_id')->nullable(); // Agregar columna para camion_id
            $table->string('estado')->nullable(); // Agregar columna para estado
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('envios', function (Blueprint $table) {
            $table->dropColumn('camion_id'); // Eliminar columna camion_id
            $table->dropColumn('estado'); // Eliminar columna estado
        });
    }
}
