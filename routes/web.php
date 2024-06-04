<?php

use App\Http\Controllers\InicioController;
use App\Http\Controllers\ProgramasController;
use App\Http\Controllers\TalleresController;
use App\Http\Controllers\AsesoramientoController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\DanzaController;
use App\Http\Controllers\BaileController;
use App\Http\Controllers\OratoriaController;
use App\Http\Controllers\LiderazgoController;

Route::get('/', [InicioController::class, 'index'])->name('inicio');
Route::get('/programas', [ProgramasController::class, 'index'])->name('programas');
Route::get('/talleres', [TalleresController::class, 'index'])->name('talleres');
Route::get('/asesoramiento', [AsesoramientoController::class, 'index'])->name('asesoramiento');
Route::get('/contacto', [ContactoController::class, 'index'])->name('contacto');
Route::get('/talleres/danza', [DanzaController::class, 'index'])->name('danza');
Route::get('/talleres/baile', [BaileController::class, 'index'])->name('baile');
Route::get('/talleres/oratoria', [OratoriaController::class, 'index'])->name('oratoria');
Route::get('/talleres/liderazgo', [LiderazgoController::class, 'index'])->name('liderazgo');
