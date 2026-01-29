<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LigaController; // <--- ¡Importante!

Route::get('/', function () {
    return view('welcome');
});

// Rutas de Ligas
Route::get('/ligas', [LigaController::class, 'create'])->name('ligas.create');
Route::post('/ligas', [LigaController::class, 'store'])->name('ligas.store');