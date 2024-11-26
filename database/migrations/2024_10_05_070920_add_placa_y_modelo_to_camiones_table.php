<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPlacaYModeloToCamionesTable extends Migration
{
    public function up()
    {
        Schema::table('camiones', function (Blueprint $table) {
            $table->string('placa')->nullable(); 
            $table->string('modelo')->nullable(); 
        });
    }

    public function down()
    {
        Schema::table('camiones', function (Blueprint $table) {
            $table->dropColumn(['placa', 'modelo']);
        });
    }
}
