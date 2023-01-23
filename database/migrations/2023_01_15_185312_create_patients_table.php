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
   $table->string('tratamiento_medico_descp')->nullable();
   $table->string('alergias');
   $table->string('alergias_descp')->nullable();;
   $table->string('medicamentos_que_toma');
   $table->string('medicamentos_que_toma_descp')->nullable();;
   $table->string('antibioticos');
   $table->string('antibioticos_descp')->nullable();;
   $table->string('enfermo_del_corazon');
   $table->string('enfermo_del_corazon_descp')->nullable();;
   $table->string('hepatitis');
   $table->string('hepatitis_descp')->nullable();;
   $table->string('diabetes');
   $table->string('diabetes_descp')->nullable();;
   $table->string('sifilis');
   $table->string('sifilis_descp')->nullable();;
   $table->string('desmayos');
   $table->string('desmayos_descp')->nullable();;
   $table->string('sangra_mucho');
   $table->string('sangra_mucho_descp')->nullable();;
   $table->string('cicatrizar_heridas');
   $table->string('cicatrizar_heridas_descp')->nullable();;
   $table->string('sida');
   $table->string('sida_descp')->nullable();;
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