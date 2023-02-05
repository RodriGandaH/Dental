<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\TratamientoFormRequest;
use App\Models\Patient;
use App\Models\Tratamiento;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TratamientoController extends Controller
{
 /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
 public function index(Request $request, Patient $patient)
 {
  $tratamientos = $patient->tratamientos()->paginate(10);
  foreach ($tratamientos as $tratamiento) {
   $abonado         = 0;
   $saldo_pendiente = $tratamiento->costo;

   if ($tratamiento->pagos->count() > 0) {
    foreach ($tratamiento->pagos as $pago) {
     $abonado += $pago->abono;
     $saldo_pendiente -= $pago->abono;
    }
   }

   $tratamiento->abonado         = $abonado;
   $tratamiento->saldo_pendiente = $saldo_pendiente;
  }

  return view('tratamiento.index', compact('tratamientos', 'patient'));

 }

 /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
 public function create(Patient $patient)
 {
  return view('tratamiento.create', compact('patient'));
 }

 /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
 public function store(TratamientoFormRequest $request, Patient $patient)
 {
  $data = $request->validated();
  $rx   = request()->has('rx') ? 1 : 0;

  $tratamiento = Tratamiento::create([
   'diente'        => $data['diente'],
   'diagnostico'   => $data['diagnostico'],
   'rx'            => $rx,
   'tratamiento'   => $data['tratamiento'],
   'costo'         => $data['costo'],
   'fecha_inicio'  => $data['fecha_inicio'],
   'fecha_fin'     => $data['fecha_fin'] ?? null,
   'observaciones' => $data['observaciones' ?? null],
   //'estado'        => $data['estado' ?? 0],
  ]);
  $patient->tratamientos()->save($tratamiento);

  return redirect()->route('tratamiento.index', $patient->id)->with('success', 'Tratamiento creado correctamente');

  //return redirect()->route('tratamiento.index', $patient->id)->with('success', 'Tratamiento creado correctamente');

 }

 /**
  * Display the specified resource.
  *
  * @param  \App\Models\Tratamiento  $tratamiento
  * @return \Illuminate\Http\Response
  */
 public function show(Request $request, $patient, $tratamiento)
 {
  $tratamiento = Tratamiento::where('patient_id', $patient)->where('id', $tratamiento)->first();
  $patient     = Patient::find($patient);
  $pagos       = $tratamiento->pagos()->where('patient_id', $patient->id)->get();
  return view('tratamiento.show', compact('pagos', 'patient', 'tratamiento'));
 }

 /**
  * Show the form for editing the specified resource.
  *
  * @param  \App\Models\Tratamiento  $tratamiento
  * @return \Illuminate\Http\Response
  */
 public function edit(Tratamiento $tratamiento)
 {
  //
 }

 /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  \App\Models\Tratamiento  $tratamiento
  * @return \Illuminate\Http\Response
  */
 public function update(Request $request, Tratamiento $tratamiento)
 {
  //
 }

 /**
  * Remove the specified resource from storage.
  *
  * @param  \App\Models\Tratamiento  $tratamiento
  * @return \Illuminate\Http\Response
  */

 public function finalizarTratamiento($patientId, $tratamientoId)
 {
  $tratamiento            = Tratamiento::find($tratamientoId);
  $tratamiento->estado    = 1;
  $tratamiento->fecha_fin = Carbon::now();
  $tratamiento->save();
  return redirect()->route('tratamiento.index', [$patientId, $tratamientoId]);
 }

 public function destroy(Tratamiento $tratamiento)
 {
  //
 }
}