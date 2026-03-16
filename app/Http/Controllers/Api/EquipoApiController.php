<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Equipo;
use Illuminate\Http\Request;

class EquipoApiController extends Controller
{
    public function index()
    {
        $equipos = Equipo::with('jugadores')->orderBy('id_equipo')->get();
        return response()->json($equipos);
    }

    public function store(Request $request)
    {
        $datos = $request->validate([
            'nombre' => 'required|string|max:255',
            'ciudad' => 'required|string|max:255',
        ]);

        $equipo = Equipo::create($datos);

        return response()->json($equipo, 201);
    }

    public function show(string $id)
    {
        $equipo = Equipo::with('jugadores')->find($id);

        if (!$equipo) {
            return response()->json(['message' => 'Equipo no encontrado'], 404);
        }

        return response()->json($equipo);
    }

    public function update(Request $request, string $id)
    {
        $equipo = Equipo::find($id);

        if (!$equipo) {
            return response()->json(['message' => 'Equipo no encontrado'], 404);
        }

        $datos = $request->validate([
            'nombre' => 'required|string|max:255',
            'ciudad' => 'required|string|max:255',
        ]);

        $equipo->update($datos);

        return response()->json($equipo);
    }

    public function destroy(string $id)
    {
        $equipo = Equipo::find($id);

        if (!$equipo) {
            return response()->json(['message' => 'Equipo no encontrado'], 404);
        }

        $equipo->delete();

        return response()->json(['message' => 'Equipo eliminado']);
    }
}
