<?php

use App\Http\Controllers\CamioneroController;
use App\Http\Controllers\MascotaController;
use App\Http\Controllers\ProfesorController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// CRUD de profesors
// Crear. Leer. Actualizar. Borrar. Editar. Listar. Mostrar Individual
Route::get('profesors/listar',[ProfesorController::class,'index'])->name('profesor.index');
Route::get('profesor/create',[ProfesorController::class,'create'])->name('profesor.create');
Route::post('profesor/store',[ProfesorController::class,'store'])->name('profesor.store');
Route::get('profesor/{profesor}',[ProfesorController::class,'show'])->name('profesor.show');
Route::put('profesor/{profesor}',[ProfesorController::class,'update'])->name('profesor.update');
Route::delete('profesor/{profesor}',[ProfesorController::class,'destroy'])->name('profesor.destroy');
Route::get('profesor/{profesor}/editar',[ProfesorController::class,'edit'])->name('profesor.edit');


// CRUD de camioneros
Route::get('camioneros/listar',[CamioneroController::class,'index'])->name('camionero.index');
Route::get('camionero/create',[CamioneroController::class,'create'])->name('camionero.create');
Route::post('camionero/store',[CamioneroController::class,'store'])->name('camionero.store');
Route::get('camionero/{camionero}',[CamioneroController::class,'show'])->name('camionero.show');
Route::put('camionero/{camionero}',[CamioneroController::class,'update'])->name('camionero.update');
Route::delete('camionero/{camionero}',[CamioneroController::class,'destroy'])->name('camionero.destroy');
Route::get('camionero/{camionero}/editar',[CamioneroController::class,'edit'])->name('camionero.edit');
