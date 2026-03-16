<?php

namespace Database\Seeders;

use App\Models\Delantero;
use App\Models\Jugador;
use App\Models\Portero;
use Illuminate\Database\Seeder;

class JugadorSeeder extends Seeder
{
    public function run(): void
    {
        $jugador1 = Jugador::create([
            'nombre' => 'Mario Gil',
            'dorsal' => 1,
            'id_equipo' => 1,
        ]);

        Portero::create([
            'id_jugador' => $jugador1->id_jugador,
            'goles_encajados' => 12,
            'paradas' => 45,
        ]);

        $jugador2 = Jugador::create([
            'nombre' => 'Ivan Rojas',
            'dorsal' => 9,
            'id_equipo' => 2,
        ]);

        Delantero::create([
            'id_jugador' => $jugador2->id_jugador,
            'goles_marcados' => 18,
            'asistencias' => 7,
        ]);
    }
}
