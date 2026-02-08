<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Partido;
use App\Models\Liga;
use App\Models\Club;

class PartidoController extends Controller
{
    public function create()
    {
        $ligas = Liga::all();
        $clubs = Club::all();
        return view('partidos.create', ['ligas' => $ligas, 'clubs' => $clubs]);
    }

    public function store(Request $request)
    {
        $datos = $request->validate([
            'liga_id'           => 'required|exists:ligas,id',
            'club_local_id'     => 'required|exists:clubs,id|different:club_visitante_id',
            'club_visitante_id' => 'required|exists:clubs,id',
            'fecha'             => 'required|date',
            'resultado'         => 'nullable|string|max:10',
        ]);

        Partido::create($datos);

        return view('partidos.exito', ['partido' => $datos]);
    }
}