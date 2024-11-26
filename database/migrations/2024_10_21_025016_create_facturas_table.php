<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
  // database/migrations/xxxx_xx_xx_create_facturas_table.php

public function up()
{
    Schema::create('facturas', function (Blueprint $table) {
        $table->id();
        $table->string('numero_autorizacion');
        $table->string('nombre_receptor');
        $table->string('nit_receptor');
        $table->decimal('total', 10, 2);
        $table->date('fecha_emision');
        $table->foreignId('envio_id')->constrained()->onDelete('cascade');
        $table->timestamps();
    });
}
    public function down(): void
    {
        Schema::dropIfExists('facturas');
    }
};
