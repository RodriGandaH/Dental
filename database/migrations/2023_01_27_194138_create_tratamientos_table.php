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
  Schema::create('tratamientos', function (Blueprint $table) {
   $table->id();
   $table->unsignedBigInteger('patient_id')->nullable();
   $table->foreign('patient_id')->references('id')->on('patients')->onDelete('cascade');

   $table->string('diente');
   $table->string('diagnostico');
   $table->boolean("rx")->default(0)->nullable();
   $table->string("tratamiento");
   $table->decimal("costo");
   $table->date("fecha_inicio");
   $table->date("fecha_fin")->nullable();
   $table->string("observaciones")->nullable();
   $table->boolean("estado")->default(0)->nullable();
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
  Schema::dropIfExists('tratamientos');
 }
};