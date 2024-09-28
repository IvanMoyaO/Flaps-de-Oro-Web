<?php

use App\Http\Controllers\VoteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/votar', [VoteController::class, 'show'])->name('votar');
Route::get('/votar/{id}', [VoteController::class, 'vote'])->name('votar');
