<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RubrosController;
use App\Http\Controllers\BusquedasController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InscripcionesController;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('rubros', [RubrosController::class, 'index'])->name('rubros.index');
//Route::get('rubros/create', [RubrosController::class, 'create'])->name('rubros.create');
Route::get('rubros/{rubro}', [RubrosController::class, 'show'])->name('rubros.show');


Route::get('busquedas', [BusquedasController::class, 'index'])->name('busquedas.index');
Route::get('busquedas/{busqueda}', [BusquedasController::class, 'show'])->name('busquedas.show');


Route::get('inscripciones', [InscripcionesController::class, 'index'])->name('inscripciones.index');
Route::get('inscripciones/create/{idBusqueda}', [InscripcionesController::class, 'create'])->name('inscripciones.create');
Route::post('inscripciones', [InscripcionesController::class, 'store'])->name('inscripciones.store');
Route::get('inscripciones/{inscripcion}', [InscripcionesController::class, 'show'])->name('inscripciones.show');
