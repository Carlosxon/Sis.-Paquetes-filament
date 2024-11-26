<?php

// database/migrations/xxxx_xx_xx_create_tipos_envios_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTiposEnviosTable extends Migration
{
    public function up()
    {
        Schema::create('tipos_envios', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tipos_envios');
    }
}
