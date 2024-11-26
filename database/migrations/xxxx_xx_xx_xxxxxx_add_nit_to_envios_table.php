<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNitToEnviosTable extends Migration
{
    public function up()
    {
        Schema::table('envios', function (Blueprint $table) {
            $table->string('remitente_nit')->after('remitente_direccion'); // Agregar NIT del remitente
            $table->string('destinatario_nit')->after('destinatario_direccion'); // Agregar NIT del destinatario
        });
    }

    public function down()
    {
        Schema::table('envios', function (Blueprint $table) {
            $table->dropColumn('remitente_nit');
            $table->dropColumn('destinatario_nit');
        });
    }
}
