<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InstitutoController extends Controller
{
    public function index()
    {
        $nombreVisistante = 'Juan Pérez';
        return view('bienvenido ', compact('nombreVisistante'));
    }
}