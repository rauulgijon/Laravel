<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Club;

class ClubController extends Controller {
    public function index() {
        return view('clubs.index', ['clubs' => Club::all()]);
    }
    public function create() { return view('clubs.create'); }
    
    public function store(Request $request) {
        $datos = $request->validate(['nombre' => 'required', 'ciudad' => 'required', 'categoria' => 'required']);
        Club::create($datos);
        return redirect()->route('clubs.index')->with('success', 'Club creado');
    }

    public function edit($id) {
        return view('clubs.edit', ['club' => Club::findOrFail($id)]);
    }

    public function update(Request $request, $id) {
        $datos = $request->validate(['nombre' => 'required', 'ciudad' => 'required', 'categoria' => 'required']);
        Club::findOrFail($id)->update($datos);
        return redirect()->route('clubs.index')->with('success', 'Club actualizado');
    }

    public function destroy($id) {
        Club::findOrFail($id)->delete();
        return redirect()->route('clubs.index')->with('success', 'Club eliminado');
    }
}