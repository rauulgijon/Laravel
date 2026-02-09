<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Jugador;
use App\Models\Club;

class JugadorController extends Controller {
    public function index() {
        // Traemos jugadores con su club para mostrar el nombre del equipo
        return view('jugadores.index', ['jugadores' => Jugador::with('club')->get()]);
    }
    public function create() {
        return view('jugadores.create', ['clubs' => Club::all()]);
    }
    public function store(Request $request) {
        $datos = $request->validate(['nombre' => 'required', 'posicion' => 'required', 'dorsal' => 'required', 'club_id' => 'required']);
        Jugador::create($datos);
        return redirect()->route('jugadores.index')->with('success', 'Jugador creado');
    }
    public function edit($id) {
        return view('jugadores.edit', ['jugador' => Jugador::findOrFail($id), 'clubs' => Club::all()]);
    }
    public function update(Request $request, $id) {
        $datos = $request->validate(['nombre' => 'required', 'posicion' => 'required', 'dorsal' => 'required', 'club_id' => 'required']);
        Jugador::findOrFail($id)->update($datos);
        return redirect()->route('jugadores.index')->with('success', 'Jugador actualizado');
    }
    public function destroy($id) {
        Jugador::findOrFail($id)->delete();
        return redirect()->route('jugadores.index')->with('success', 'Jugador eliminado');
    }
}