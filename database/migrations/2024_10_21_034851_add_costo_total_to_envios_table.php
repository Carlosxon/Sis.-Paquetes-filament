<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCostoTotalToEnviosTable extends Migration
{
    public function up()
    {
        Schema::table('envios', function (Blueprint $table) {
            $table->decimal('costo_total', 10, 2)->nullable(); // Agrega la columna costo_total
        });
    }

    public function down()
    {
        Schema::table('envios', function (Blueprint $table) {
            $table->dropColumn('costo_total'); // Elimina la columna si es necesario
        });
    }
}
