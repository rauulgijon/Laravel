<?php

namespace Database\Seeders;

use App\Models\Estudiante;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
class EstudiantesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Estudiante::create([
            'nombre' => 'Juan Pérez',
            'email' => 'jp@gmail.com',
            'curso' => 'Ingeniería',
            'anio' => 2025
        ]);
        Estudiante::create([
            'nombre' => 'María Gómez',
            'email' => 'mg@gmail.com',
            'curso' => 'Ingeniería',
            'anio' => 2025
        ]);
        Estudiante::create([
            'nombre' => 'Luis Rodríguez',
            'email' => 'lr@gmail.com',
            'curso' => 'Ingeniería',
            'anio' => 2025
        ]);
        Estudiante::create([
            'nombre' => 'Ana Martínez',
            'email' => 'am@gmail.com',
            'curso' => 'Ingeniería',
            'anio' => 2025
        ]);
        Estudiante::create([
            'nombre' => 'Carlos Sánchez',
            'email' => 'cs@gmail.com',
            'curso' => 'Ingeniería',
            'anio' => 2025
        ]);
    }
}
