<?php

use App\Http\Controllers\HeroeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

Route::get("/", [HeroeController::class, "index"]);