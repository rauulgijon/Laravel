<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LigaController extends Controller
{
    public function create()
    {
        // Busca el archivo en la carpeta resources/views/ligas/create.blade.php
        return view('ligas.create');
    }

    public function store(Request $request)
    {
        // Validamos los datos. Si falla aquí, Laravel te devuelve al formulario automáticamente.
        $datos = $request->validate([
            'nombre'    => ['required', 'string', 'max:50'],
            'pais'      => ['required', 'string', 'max:30'],
            'temporada' => ['required', 'string', 'max:15'],
            'equipos'   => ['required', 'integer', 'min:2', 'max:100'],
        ]);

        // Si pasa la validación, muestra la vista de éxito
        return view('ligas.exito', ['liga' => $datos]);
    }
}