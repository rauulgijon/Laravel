<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InstitutoController extends Controller
{
    public function index()
    {
        $nombreVisitante = 'Juan Pérez';
        return view('bienvenida', compact('nombreVisitante'));
    }
}