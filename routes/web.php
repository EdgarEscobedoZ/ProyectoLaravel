<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Rutas individuales para controlador
Route::get('/',[diarioController::class,'metodoInicio'])->name('apodoInicio');
Route::get('/form',[diarioController::class,'metodoFormulario'])->name('apodoFormulario');
Route::get('/loquequieroolvidar',[diarioController::class,'metodoRecuerdos'])->name('apodoOlvidar');

// Rutas para el request post del recuerdo
Route::post('/guardarRecuerdo',[diarioController::class,'guardarRecuerdo'])->name('guardar');

