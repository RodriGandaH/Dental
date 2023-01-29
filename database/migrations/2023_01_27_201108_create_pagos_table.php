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
   $table->unsignedBigInteger('patient_id')->nullable();
   $table->foreign('patient_id')->references('id')->on('patients')->onDelete('cascade');
   $table->unsignedBigInteger('tratamiento_id')->nullable();
   $table->foreign('tratamiento_id')->references('id')->on('tratamientos')->onDelete('cascade');
   $table->decimal('costo');
   $table->decimal('abono');
   $table->decimal('saldo_pendiente');
   $table->date('fecha_pago')->default(now());
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