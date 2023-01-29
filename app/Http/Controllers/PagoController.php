<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\PagoFormRequest;
use App\Models\Pago;
use App\Models\Patient;
use App\Models\Tratamiento;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PagoController extends Controller
{
 /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
 public function index(Request $request, Patient $patient, Tratamiento $tratamiento)
 {
  $pagos = $tratamiento->pagos()->where('patient_id', $patient->id)->paginate(10);
  return view('pago.index', compact('pagos', 'patient', 'tratamiento'));
 }

 /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
 public function create(Request $request, $patient, $tratamiento)
 {

  // Aquí podrías validar que el paciente y el tratamiento existan en la base de datos antes de continuar
  $patient         = Patient::findOrFail($patient);
  $tratamiento     = Tratamiento::findOrFail($tratamiento);
  $pagos           = Pago::where('patient_id', $patient->id)->where('tratamiento_id', $tratamiento->id)->get();
  $cantidad_pagada = $pagos->sum('abono');
  $saldo_pendiente = $tratamiento->costo - $cantidad_pagada;

  // Luego podrías retornar la vista para crear un nuevo pago, pasando el paciente y tratamiento como parámetros
  return view('pago.create', compact('patient', 'tratamiento', 'pagos', 'cantidad_pagada', 'saldo_pendiente'));
 }

 /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
 public function store(PagoFormRequest $request, Patient $patient, Tratamiento $tratamiento)
 {
  $data = $request->validated();

  $costo = $tratamiento->costo;
  $saldo = $costo - $data['abono'];

  $pago = Pago::create([
   'patient_id'      => $patient->id,
   'tratamiento_id'  => $tratamiento->id,
   'costo'           => $costo,
   'abono'           => $data['abono'],
   'saldo_pendiente' => $saldo,
   'fecha_pago'      => Carbon::now(),
  ]);

  return redirect()->route('tratamiento.show', [$patient->id, $tratamiento->id])->with('success', 'Pago creado correctamente');
 }

 /**
  * Display the specified resource.
  *
  * @param  \App\Models\Pago  $pago
  * @return \Illuminate\Http\Response
  */
 public function show(Pago $pago)
 {
  //
 }

 /**
  * Show the form for editing the specified resource.
  *
  * @param  \App\Models\Pago  $pago
  * @return \Illuminate\Http\Response
  */
 public function edit(Pago $pago)
 {
  //
 }

 /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  \App\Models\Pago  $pago
  * @return \Illuminate\Http\Response
  */
 public function update(Request $request, Pago $pago)
 {
  //
 }

 /**
  * Remove the specified resource from storage.
  *
  * @param  \App\Models\Pago  $pago
  * @return \Illuminate\Http\Response
  */
 public function destroy(Pago $pago)
 {
  //
 }
}