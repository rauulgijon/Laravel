<?php

use App\Http\Controllers\InstitutoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

Route::get("/", [InstitutoController::class, "index"]);