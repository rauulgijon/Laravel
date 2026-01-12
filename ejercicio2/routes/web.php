<?php

use App\Http\Controllers\BibliotecaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

Route::get("/", [BibliotecaController::class, "index"]);