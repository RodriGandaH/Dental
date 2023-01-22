<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
 use HasFactory;

 protected $table = 'patients';

 protected $fillable = [
  'user_id',
  'nombre',
  'lugar_nacimiento',
  'fecha_nacimiento',
  'ocupacion',
  'sexo',
  'cedula',
  'estado_civil',
  'telefono',
  'direccion',
  'nombre_contacto',
  'telefono_contacto',
  'nombre_telefono_doctor',
  'tratamiento_medico',
  'tratamiento_medico_descp',
  'alergias',
  'alergias_descp',
  'medicamentos_que_toma',
  'medicamentos_que_toma_descp',
  'antibioticos',
  'antibioticos_descp',
  'enfermo_del_corazon',
  'enfermo_del_corazon_descp',
  'hepatitis',
  'hepatitis_descp',
  'diabetes',
  'diabetes_descp',
  'sifilis',
  'sifilis_descp',
  'desmayos',
  'desmayos_descp',
  'sangra_mucho',
  'sangra_mucho_descp',
  'cicratizar_heridas',
  'cicratizar_heridas_descp',
  'sida',
  'sida_descp',
  'comentarios',

 ];

 public function user()
 {
  return $this->belongsTo(User::class);
 }
}