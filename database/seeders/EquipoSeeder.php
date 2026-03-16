<?php

namespace Database\Seeders;

use App\Models\Equipo;
use Illuminate\Database\Seeder;

class EquipoSeeder extends Seeder
{
    public function run(): void
    {
        Equipo::create([
            'nombre' => 'Atletico Centro',
            'ciudad' => 'Madrid',
        ]);

        Equipo::create([
            'nombre' => 'Deportivo Norte',
            'ciudad' => 'Bilbao',
        ]);
    }
}
