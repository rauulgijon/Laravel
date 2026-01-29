<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Liga;

class LigaSeeder extends Seeder
{
    public function run(): void
    {
        Liga::create([
            'nombre' => 'La Liga 2024',
            'deporte' => 'Fútbol',
            'temporada' => '23/24'
        ]);
    }
}