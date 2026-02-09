<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Partido;
use App\Models\Liga;
use App\Models\Club;

class PartidoController extends Controller
{
    // 1. LISTAR (Aquí usamos las relaciones que acabamos de crear)
    public function index()
    {
        // 'with' carga los datos relacionados para no tener solo números
        $partidos = Partido::with(['liga', 'equipoLocal', 'equipoVisitante'])->get();
        return view('partidos.index', ['partidos' => $partidos]);
    }

    // 2. CREAR
    public function create()
    {
        $ligas = Liga::all();
        $clubs = Club::all();
        return view('partidos.create', ['ligas' => $ligas, 'clubs' => $clubs]);
    }

    // 3. GUARDAR
    public function store(Request $request)
    {
        $datos = $request->validate([
            'liga_id' => 'required|exists:ligas,id',
            'club_local_id' => 'required|exists:clubs,id',
            'club_visitante_id' => 'required|exists:clubs,id|different:club_local_id',
            'fecha' => 'required|date',
            'resultado' => 'nullable|string|max:10',
        ]);

        Partido::create($datos);
        return redirect()->route('partidos.index')->with('success', 'Partido creado correctamente');
    }

    // 4. EDITAR (Necesitamos pasarle las ligas y clubes para los desplegables)
    public function edit($id)
    {
        $partido = Partido::findOrFail($id);
        $ligas = Liga::all();
        $clubs = Club::all();
        
        return view('partidos.edit', [
            'partido' => $partido,
            'ligas' => $ligas,
            'clubs' => $clubs
        ]);
    }

    // 5. ACTUALIZAR
    public function update(Request $request, $id)
    {
        $datos = $request->validate([
            'liga_id' => 'required|exists:ligas,id',
            'club_local_id' => 'required|exists:clubs,id',
            'club_visitante_id' => 'required|exists:clubs,id|different:club_local_id',
            'fecha' => 'required|date',
            'resultado' => 'nullable|string|max:10',
        ]);

        $partido = Partido::findOrFail($id);
        $partido->update($datos);

        return redirect()->route('partidos.index')->with('success', 'Partido actualizado');
    }

    // 6. ELIMINAR
    public function destroy($id)
    {
        $partido = Partido::findOrFail($id);
        $partido->delete();
        return redirect()->route('partidos.index')->with('success', 'Partido eliminado');
    }
}