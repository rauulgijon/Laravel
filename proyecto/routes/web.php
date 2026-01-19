<?php

use App\Http\Controllers\ClubController;
use App\Http\Controllers\ligaController;
use App\Http\Controllers\JugadorController;
use Illuminate\Support\Facades\Route;



Route::get('/', [LigaController::class, 'create'])->name('liga.create '); 

Route::post('/liga', [LigaController::class, 'store'])->name('liga.store');


