<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use App\Models\Jugador;
use Illuminate\Http\Request;

class JugadorController extends Controller
{
    public function index()
    {
        $jugadores = Jugador::with('equipo')->orderBy('id_jugador')->get();
        return view('jugadores.index', compact('jugadores'));
    }

    public function create()
    {
        $equipos = Equipo::orderBy('nombre')->get();
        return view('jugadores.create', compact('equipos'));
    }

    public function store(Request $request)
    {
        $datos = $request->validate([
            'nombre' => 'required|string|max:255',
            'dorsal' => 'required|integer|min:1',
            'id_equipo' => 'required|exists:equipo,id_equipo',
        ]);

        Jugador::create($datos);

        return redirect()->route('jugadores.index');
    }

    public function show(string $id)
    {
        $jugador = Jugador::with(['equipo', 'portero', 'delantero'])->findOrFail($id);
        return view('jugadores.show', compact('jugador'));
    }

    public function edit(string $id)
    {
        $jugador = Jugador::findOrFail($id);
        $equipos = Equipo::orderBy('nombre')->get();

        return view('jugadores.edit', compact('jugador', 'equipos'));
    }

    public function update(Request $request, string $id)
    {
        $jugador = Jugador::findOrFail($id);

        $datos = $request->validate([
            'nombre' => 'required|string|max:255',
            'dorsal' => 'required|integer|min:1',
            'id_equipo' => 'required|exists:equipo,id_equipo',
        ]);

        $jugador->update($datos);

        return redirect()->route('jugadores.index');
    }

    public function destroy(string $id)
    {
        $jugador = Jugador::findOrFail($id);
        $jugador->delete();

        return redirect()->route('jugadores.index');
    }
}
