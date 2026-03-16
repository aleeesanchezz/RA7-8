<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Jugador;
use Illuminate\Http\Request;

class JugadorApiController extends Controller
{
    public function index()
    {
        $jugadores = Jugador::with(['equipo', 'portero', 'delantero'])->orderBy('id_jugador')->get();
        return response()->json($jugadores);
    }

    public function store(Request $request)
    {
        $datos = $request->validate([
            'nombre' => 'required|string|max:255',
            'dorsal' => 'required|integer|min:1',
            'id_equipo' => 'required|exists:equipo,id_equipo',
        ]);

        $jugador = Jugador::create($datos);

        return response()->json($jugador, 201);
    }

    public function show(string $id)
    {
        $jugador = Jugador::with(['equipo', 'portero', 'delantero'])->find($id);

        if (!$jugador) {
            return response()->json(['message' => 'Jugador no encontrado'], 404);
        }

        return response()->json($jugador);
    }

    public function update(Request $request, string $id)
    {
        $jugador = Jugador::find($id);

        if (!$jugador) {
            return response()->json(['message' => 'Jugador no encontrado'], 404);
        }

        $datos = $request->validate([
            'nombre' => 'required|string|max:255',
            'dorsal' => 'required|integer|min:1',
            'id_equipo' => 'required|exists:equipo,id_equipo',
        ]);

        $jugador->update($datos);

        return response()->json($jugador);
    }

    public function destroy(string $id)
    {
        $jugador = Jugador::find($id);

        if (!$jugador) {
            return response()->json(['message' => 'Jugador no encontrado'], 404);
        }

        $jugador->delete();

        return response()->json(['message' => 'Jugador eliminado']);
    }
}
