<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
 /**
  * Run the migrations.
  *
  * @return void
  */
 public function up()
 {
  Schema::create('pagos', function (Blueprint $table) {
   $table->id();
   $table->unsignedBigInteger('tratamiento_id')->nullable();
   $table->foreign('tratamiento_id')->references('id')->on('tratamientos')->onDelete('cascade');
   $table->decimal('costo');
   $table->decimal('abono');
   $table->decimal('saldo_pendiente');
   $table->date('fecha_pago');
   $table->timestamps();
  });
 }

 /**
  * Reverse the migrations.
  *
  * @return void
  */
 public function down()
 {
  Schema::dropIfExists('pagos');
 }
};