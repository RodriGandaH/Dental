<?php

namespace App\Http\Controllers;

use App\Models\Pago;
use App\Models\Patient;
use App\Models\Tratamiento;

class DashboardController extends Controller
{
 public function index()
 {

  $tratamientos          = Tratamiento::all();
  $total_cobrado         = 0;
  $total_saldo_pendiente = 0;
  $costo_total           = 0;

  $total_pacientes = Patient::count();

  $total_tratamientos = Tratamiento::count();

  $total_tratamientos_finalizados = Tratamiento::where('estado', '1')->count();

  $total_tratamientos_pendientes = Tratamiento::where('estado', '0')->count();

  foreach ($tratamientos as $tratamiento) {
   $pagos = Pago::where('tratamiento_id', $tratamiento->id)->get();
   foreach ($pagos as $pago) {
    if ($pago->saldo_pendiente == 0) {
     $total_cobrado += $pago->abono;
    } else {
     $total_cobrado += $pago->abono;
    }

   }
   $costo_total += $tratamiento->costo;
  }
  $total_saldo_pendiente = $costo_total - $total_cobrado;

  return view('dashboard', compact('total_cobrado', 'total_saldo_pendiente', 'total_pacientes', 'total_tratamientos', 'total_tratamientos_finalizados', 'total_tratamientos_pendientes'));
 }
}
