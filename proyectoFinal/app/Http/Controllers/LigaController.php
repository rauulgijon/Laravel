<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Liga;

class LigaController extends Controller
{
    // 1. LISTAR
    public function index() {
        $ligas = Liga::all();
        return view('ligas.index', ['ligas' => $ligas]);
    }

    // 2. FORMULARIO CREAR
    public function create() {
        return view('ligas.create');
    }

    // 3. GUARDAR
    public function store(Request $request) {
        $datos = $request->validate([
            'nombre' => 'required|string|max:50',
            'deporte' => 'required|string|max:30',
            'temporada' => 'required|string|max:15',
        ]);
        Liga::create($datos);
        return redirect()->route('ligas.index')->with('success', 'Liga creada correctamente');
    }

    // 4. FORMULARIO EDITAR
    public function edit($id) {
        $liga = Liga::findOrFail($id);
        return view('ligas.edit', ['liga' => $liga]);
    }

    // 5. ACTUALIZAR
    public function update(Request $request, $id) {
        $datos = $request->validate([
            'nombre' => 'required|string|max:50',
            'deporte' => 'required|string|max:30',
            'temporada' => 'required|string|max:15',
        ]);
        $liga = Liga::findOrFail($id);
        $liga->update($datos);
        return redirect()->route('ligas.index')->with('success', 'Liga actualizada');
    }

    // 6. ELIMINAR
    public function destroy($id) {
        $liga = Liga::findOrFail($id);
        $liga->delete();
        return redirect()->route('ligas.index')->with('success', 'Liga eliminada');
    }
}