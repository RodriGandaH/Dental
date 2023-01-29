<?php

namespace App\Models;

use App\Models\Patient;
use App\Models\Tratamiento;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
 use HasFactory;
 protected $table = 'pagos';

 protected $fillable = [
  'patient_id',
  'tratamiento_id',
  'costo',
  'abono',
  'saldo_pendiente',
  'fecha_pago',
 ];

 public function tratamiento()
 {
  return $this->belongsTo(Tratamiento::class);
 }

 public function patient()
 {
  return $this->belongsTo(Patient::class);
 }

}