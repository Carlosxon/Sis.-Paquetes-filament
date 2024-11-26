<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('envios', function (Blueprint $table) {
            $table->string('remitente_nombre')->nullable();
            $table->string('remitente_direccion')->nullable();
            $table->string('remitente_telefono')->nullable();
            $table->string('remitente_departamento')->nullable();
            $table->string('destinatario_nombre')->nullable();
            $table->string('destinatario_direccion')->nullable();
            $table->string('destinatario_telefono')->nullable();
            $table->string('destinatario_departamento')->nullable();
            
        });
    }

public function down()
{
    Schema::table('envios', function (Blueprint $table) {
        $table->dropColumn([
            'remitente_nombre',
            'remitente_direccion',
            'remitente_telefono',
            'remitente_departamento',
            'destinatario_nombre',
            'destinatario_direccion',
            'destinatario_telefono',
            'destinatario_departamento',
           
        ]);
    });
}
};
