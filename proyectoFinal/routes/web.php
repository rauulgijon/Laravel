<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LigaController;
use App\Http\Controllers\ClubController;
use App\Http\Controllers\JugadorController;

// --- MENÚ PRINCIPAL ---
Route::get('/', function () {
    return view('welcome');
})->name('menu');

// --- 1. LIGAS ---
Route::get('/ligas', [LigaController::class, 'index'])->name('ligas.index');
Route::get('/ligas/crear', [LigaController::class, 'create'])->name('ligas.create');
Route::post('/ligas', [LigaController::class, 'store'])->name('ligas.store');
Route::get('/ligas/{id}/editar', [LigaController::class, 'edit'])->name('ligas.edit');
Route::put('/ligas/{id}', [LigaController::class, 'update'])->name('ligas.update');
Route::delete('/ligas/{id}', [LigaController::class, 'destroy'])->name('ligas.destroy');

// --- 2. CLUBES ---
Route::get('/clubs', [ClubController::class, 'index'])->name('clubs.index');
Route::get('/clubs/crear', [ClubController::class, 'create'])->name('clubs.create');
Route::post('/clubs', [ClubController::class, 'store'])->name('clubs.store');
Route::get('/clubs/{id}/editar', [ClubController::class, 'edit'])->name('clubs.edit');
Route::put('/clubs/{id}', [ClubController::class, 'update'])->name('clubs.update');
Route::delete('/clubs/{id}', [ClubController::class, 'destroy'])->name('clubs.destroy');

// --- 3. JUGADORES ---
Route::get('/jugadores', [JugadorController::class, 'index'])->name('jugadores.index');
Route::get('/jugadores/crear', [JugadorController::class, 'create'])->name('jugadores.create');
Route::post('/jugadores', [JugadorController::class, 'store'])->name('jugadores.store');
Route::get('/jugadores/{id}/editar', [JugadorController::class, 'edit'])->name('jugadores.edit');
Route::put('/jugadores/{id}', [JugadorController::class, 'update'])->name('jugadores.update');
Route::delete('/jugadores/{id}', [JugadorController::class, 'destroy'])->name('jugadores.destroy');