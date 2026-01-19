<?php

use Illuminate\Support\Facades\Route;
// Importante: La 'L' de LigaController debe ser mayúscula
use App\Http\Controllers\LigaController; 

Route::get('/', function () {
    return view('ligas.create');
});

// Rutas corregidas: En plural ('ligas') y sin espacios al final
Route::get('/ligas', [LigaController::class, 'create'])->name('ligas.create');
Route::post('/ligas', [LigaController::class, 'store'])->name('ligas.store');