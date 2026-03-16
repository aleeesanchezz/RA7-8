<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use Illuminate\Http\Request;

class EquipoController extends Controller
{
    public function index()
    {
        $equipos = Equipo::orderBy('id_equipo')->get();
        return view('equipos.index', compact('equipos'));
    }

    public function create()
    {
        return view('equipos.create');
    }

    public function store(Request $request)
    {
        $datos = $request->validate([
            'nombre' => 'required|string|max:255',
            'ciudad' => 'required|string|max:255',
        ]);

        Equipo::create($datos);

        return redirect()->route('equipos.index');
    }

    public function show(string $id)
    {
        $equipo = Equipo::with('jugadores')->findOrFail($id);
        return view('equipos.show', compact('equipo'));
    }

    public function edit(string $id)
    {
        $equipo = Equipo::findOrFail($id);
        return view('equipos.edit', compact('equipo'));
    }

    public function update(Request $request, string $id)
    {
        $equipo = Equipo::findOrFail($id);

        $datos = $request->validate([
            'nombre' => 'required|string|max:255',
            'ciudad' => 'required|string|max:255',
        ]);

        $equipo->update($datos);

        return redirect()->route('equipos.index');
    }

    public function destroy(string $id)
    {
        $equipo = Equipo::findOrFail($id);
        $equipo->delete();

        return redirect()->route('equipos.index');
    }
}
