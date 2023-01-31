<?php

use App\Http\Controllers\PagoController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TratamientoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', function () {
  return view('welcome');
});

Route::get('/dashboard', function () {
  return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
  Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
  Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
  Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

  Route::controller(PatientController::class)->group(function () {
    Route::get('/pacientes', [PatientController::class, 'index'])->name('patient.index');
    Route::get('/nuevo-paciente', [PatientController::class, 'create'])->name('patient.create');
    Route::post('/nuevo-paciente', [PatientController::class, 'store'])->name('patient.store');

    /* Route::get('/patients/create', [PatientController::class, 'create'])->name('patients.create');*/

    Route::get('/paciente/{id}', [PatientController::class, 'show'])->name('patient.show');
/*Route::get('/patients/{patient}/edit', [PatientController::class, 'edit'])->name('patients.edit');
Route::patch('/patients/{patient}', [PatientController::class, 'update'])->name('patients.update');
Route::delete('/patients/{patient}', [PatientController::class, 'destroy'])->name('patients.destroy'); */
  });

  Route::controller(TratamientoController::class)->group(function () {
    Route::get('/pacientes/{patient}/tratamientos', [TratamientoController::class, 'index'])->name('tratamiento.index');
    Route::get('/pacientes/{patient}/tratamientos/nuevo', [TratamientoController::class, 'create'])->name('tratamiento.create');
    Route::post('/pacientes/{patient}/tratamientos/nuevo', [TratamientoController::class, 'store'])->name('tratamiento.store');
    Route::get('/pacientes/{patient}/tratamientos/{tratamiento}', [TratamientoController::class, 'show'])->name('tratamiento.show');
    Route::get('/pacientes/{patient}/tratamientos/{tratamiento}/finalizar', [TratamientoController::class, 'finalizarTratamiento'])->name('tratamiento.finalizar');

  });

  Route::controller(PagoController::class)->group(function () {
    Route::get('/pacientes/{patient}/tratamientos/{tratamiento}/pagos', [PagoController::class, 'index'])->name('pago.index');
    Route::get('/pacientes/{patient}/tratamientos/{tratamiento}/pagos/nuevo', [PagoController::class, 'create'])->name('pago.create');
    Route::post('/pacientes/{patient}/tratamientos/{tratamiento}/pagos/nuevo', [PagoController::class, 'store'])->name('pago.store');
    Route::get('/pacientes/{patient}/tratamientos/{tratamiento}/pago/{id}', [PagoController::class, 'show'])->name('pago.show');
    Route::get('/pacientes/{patient}/tratamientos/{tratamiento}/pago/{id}/edit', [PagoController::class, 'edit'])->name('pago.edit');
    Route::patch('/pacientes/{patient}/tratamientos/{tratamiento}/pago/{id}', [PagoController::class, 'update'])->name('pago.update');
    Route::delete('/pacientes/{patient}/tratamientos/{tratamiento}/pago/{id}', [PagoController::class, 'destroy'])->name('pago.destroy');
  });

});

require __DIR__ . '/auth.php';