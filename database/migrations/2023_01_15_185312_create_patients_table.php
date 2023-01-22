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
  Schema::create('patients', function (Blueprint $table) {
   $table->id();
   $table->unsignedBigInteger('user_id')->nullable()->foreign()->references('id')->on('users');
   $table->string('nombre');
   $table->string('lugar_nacimiento');
   $table->date('fecha_nacimiento');
   $table->string('ocupacion');
   $table->string('sexo');
   $table->integer('cedula')->unique();
   $table->string('estado_civil');
   $table->integer('telefono')->unique();
   $table->string('direccion');
   $table->string('nombre_contacto');
   $table->integer('telefono_contacto');
   $table->string('nombre_telefono_doctor');
   $table->string('tratamiento_medico');
   $table->string('tratamiento_medico_descp');
   $table->string('alergias');
   $table->string('alergias_descp');
   $table->string('medicamentos_que_toma');
   $table->string('medicamentos_que_toma_descp');
   $table->string('antibioticos');
   $table->string('antibioticos_descp');
   $table->string('enfermo_del_corazon');
   $table->string('enfermo_del_corazon_descp');
   $table->string('hepatitis');
   $table->string('hepatitis_descp');
   $table->string('diabetes');
   $table->string('diabetes_descp');
   $table->string('sifilis');
   $table->string('sifilis_descp');
   $table->string('desmayos');
   $table->string('desmayos_descp');
   $table->string('sangra_mucho');
   $table->string('sangra_mucho_descp');
   $table->string('cicratizar_heridas');
   $table->string('cicratizar_heridas_descp');
   $table->string('sida');
   $table->string('sida_descp');
   $table->string('comentarios');
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
  Schema::dropIfExists('patients');
 }
};