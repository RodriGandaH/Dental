<?php

namespace App\Http\Controllers;

use App\Models\Pago;
use App\Models\Patient;
use App\Models\Tratamiento;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
 public function index()
 {
  $user = Auth::user();

  $tratamientos = Tratamiento::whereHas('patient', function ($query) use ($user) {
   $query->where('user_id', $user->id);
  })->get();

  $total_cobrado         = 0;
  $total_saldo_pendiente = 0;
  $costo_total           = 0;

  $total_pacientes = Patient::where('user_id', $user->id)->count();

  $total_tratamientos = Tratamiento::whereHas('patient', function ($query) use ($user) {
   $query->where('user_id', $user->id);
  })->count();

  $total_tratamientos_finalizados = Tratamiento::whereHas('patient.user', function ($query) use ($user) {
   $query->where('id', $user->id);
  })->where('estado', '1')->count();

  $total_tratamientos_pendientes = Tratamiento::whereHas('patient.user', function ($query) use ($user) {
   $query->where('id', $user->id);
  })->where('estado', '0')->count();

  foreach ($tratamientos as $tratamiento) {
   $pagos = Pago::whereHas('tratamiento', function ($query) use ($user) {
    $query->whereHas('patient', function ($innerQuery) use ($user) {
     $innerQuery->where('user_id', $user->id);
    });
   })->get();

   foreach ($pagos as $pago) {
    if ($pago->tratamiento_id == $tratamiento->id) {
     $total_cobrado += $pago->abono;
    }

   }

   $costo_total += $tratamiento->costo;
  }

  $total_saldo_pendiente = $costo_total - $total_cobrado;

  return view('dashboard', compact('total_cobrado', 'total_saldo_pendiente', 'total_pacientes', 'total_tratamientos', 'total_tratamientos_finalizados', 'total_tratamientos_pendientes'));
 }
}
