<?php

// database/migrations/xxxx_xx_xx_create_metodos_pagos_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMetodosPagosTable extends Migration
{
    public function up()
    {
        Schema::create('metodos_pagos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('metodos_pagos');
    }
}
