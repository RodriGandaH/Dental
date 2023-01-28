<?php

namespace App\Models;

use App\Models\Tratamiento;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
 use HasFactory;
 protected $table = 'pagos';

 protected $fillable = [
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
}