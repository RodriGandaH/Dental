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
   $table->integer('user_id');
   $table->string('name');
   $table->date('birthdate');
   $table->integer('ci')->unique();
   $table->integer('phone')->unique();
   $table->string('address');
   $table->timestamps();
   $table->foreign('user_id')->references('id')->on('users');

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