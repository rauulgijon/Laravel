<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Liga; 

class LigaController extends Controller
{
    public function create()
    {
        return view('ligas.create');
    }

    public function store(Request $request)
    {
        $datos = $request->validate([
            'nombre'    => ['required', 'string', 'max:50'],
            'deporte'   => ['required', 'string', 'max:30'],
            'temporada' => ['required', 'string', 'max:15'],
        ]);

        Liga::create($datos);

        return view('ligas.exito', ['liga' => $datos]);
    }
}