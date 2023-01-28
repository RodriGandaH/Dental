<?php

namespace App\Models;

use App\Models\Pago;
use App\Models\Patient;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tratamiento extends Model
{
 use HasFactory;

 protected $table = 'tratamientos';

 protected $fillable = [
  'paciente_id',
  'diente',
  'diagnostico',
  'rx',
  'tratamiento',
  'costo',
  'fecha_inicio',
  'fecha_fin',
  'observaciones',

 ];

 public function patient()
 {
  return $this->belongsTo(Patient::class);
 }
 public function pagos()
 {
  return $this->hasMany(Pago::class);
 }

}