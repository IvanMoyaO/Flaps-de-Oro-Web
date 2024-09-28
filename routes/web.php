<?php

use App\Http\Controllers\CursoController;
use App\Http\Controllers\ProfesorController;
use App\Http\Controllers\TitulacionController;
use App\Http\Controllers\VoteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name("index");

Route::get('/admin', function () {
    return view('admin');
})->name("admin");

Route::get('/ver/{abreviatura}', [VoteController::class, 'show'])->name('ver');
Route::get('/votar/{id}', [VoteController::class, 'vote'])->name('votar');

Route::get('/borrar/titulacion/{id}', [TitulacionController::class, 'borrar_titulacion']);
Route::get('/borrar/curso/{id}', [CursoController::class, 'borrar_curso']);
Route::get('/borrar/profesor/{id}', [ProfesorController::class, 'borrar_profesor']);

Route::get('/actualizar/profesor/{id}', [ProfesorController::class, 'actualizar_profesor']);
