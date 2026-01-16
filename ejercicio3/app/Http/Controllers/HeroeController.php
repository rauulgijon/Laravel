<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HeroeController extends Controller
{
    // Muestra el formulario para registrar un nuevo héroe
    public function create()
    {
        return view('heroes.create'); // Retorna la vista del formulario
    }
    // Recibe el envio y valida los datos del formulario
    public function store(Request $request)
    {
        $datos = $request-> validate([
            'nombre' => ['required', 'string', 'max:20'],
            'poder' => ['required', 'string', 'max:30'],
            'nivel' => ['required', 'integer', 'between:1,100'],
            'email' => ['nullable', 'email', 'max:50'],
        ]);
        // Almacenar los datos en la base de datos (lógica de almacenamiento no implementada aquí)

    // Corrected code in HeroeController.php
    return view('heroes.exito', ['heroe' => $datos]);
    }
}
