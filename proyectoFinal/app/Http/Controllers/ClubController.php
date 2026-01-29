<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Club; 

class ClubController extends Controller
{
    public function create()
    {
        return view('clubs.create');
    }

    public function store(Request $request)
    {
        // 1. Validación
        $datos = $request->validate([
            'nombre'    => ['required', 'string', 'max:50'],
            'ciudad'    => ['required', 'string', 'max:50'],
            'categoria' => ['required', 'string', 'max:50'],
        ]);

        // 2. Guardar en BD
        Club::create($datos);

        // 3. Vista de éxito
        return view('clubs.exito', ['club' => $datos]);
    }
}