<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Club; // Importamos el Modelo

class ClubSeeder extends Seeder
{
    public function run(): void
    {
        Club::create([
            'nombre' => 'Real Madrid',
            'ciudad' => 'Madrid',
            'categoria' => 'Primera'
        ]);

        Club::create([
            'nombre' => 'FC Barcelona',
            'ciudad' => 'Barcelona',
            'categoria' => 'Primera'
        ]);

        Club::create([
            'nombre' => 'Valencia CF',
            'ciudad' => 'Valencia',
            'categoria' => 'Primera'
        ]);
    }
}