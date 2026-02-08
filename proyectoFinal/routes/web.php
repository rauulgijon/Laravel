<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LigaController;
use App\Http\Controllers\ClubController;
use App\Http\Controllers\JugadorController; // Nuevo
use App\Http\Controllers\PartidoController; // Nuevo

// MENÚ PRINCIPAL
Route::get('/', function () {
    return view('welcome');
})->name('menu');

// LIGAS
Route::get('/ligas/crear', [LigaController::class, 'create'])->name('ligas.create');
Route::post('/ligas', [LigaController::class, 'store'])->name('ligas.store');

// CLUBES
Route::get('/clubs/crear', [ClubController::class, 'create'])->name('clubs.create');
Route::post('/clubs', [ClubController::class, 'store'])->name('clubs.store');

// JUGADORES
Route::get('/jugadores/crear', [JugadorController::class, 'create'])->name('jugadores.create');
Route::post('/jugadores', [JugadorController::class, 'store'])->name('jugadores.store');

// PARTIDOS
Route::get('/partidos/crear', [PartidoController::class, 'create'])->name('partidos.create');
Route::post('/partidos', [PartidoController::class, 'store'])->name('partidos.store');