<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jugador;
use App\Models\Club; // Necesitamos los clubes para el desplegable

class JugadorController extends Controller
{
    public function create()
    {
        // Cargamos todos los clubes para pasarlos a la vista
        $clubs = Club::all();
        return view('jugadores.create', ['clubs' => $clubs]);
    }

    public function store(Request $request)
    {
        $datos = $request->validate([
            'nombre'   => 'required|string|max:50',
            'posicion' => 'required|string|max:50',
            'dorsal'   => 'required|integer|min:1|max:99',
            'club_id'  => 'required|exists:clubs,id', // Valida que el club exista
        ]);

        Jugador::create($datos);

        // Recuperamos el nombre del club para mostrarlo en el mensaje de éxito
        $clubNombre = Club::find($datos['club_id'])->nombre;

        return view('jugadores.exito', ['jugador' => $datos, 'clubNombre' => $clubNombre]);
    }
}