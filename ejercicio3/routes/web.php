<?php

use App\Http\Controllers\HeroeController;
use Illuminate\Support\Facades\Route;



Route::get('/', [HeroeController::class, 'create'])->name('heroes.create '); // 

Route::post('/heroes', [HeroeController::class, 'store'])->name('heroes.store');