<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BibliotecaController extends Controller
{
    public function index()
    {
        $nombreBiblioteca = 'Biblioteca Central';
        $edad = 19;
        $libros = [
        'El Quijote',
        'Cien Años de Soledad',
        '1984'
        ];

        if ($edad >= 18) {
            echo "<script>console.log('Adelante.');</script>";
            #for($i = 0; $i < count($libros); $i++) {
            #    echo "Libro: " . $libros[$i] . "<br>";
            #}
            $i = 0;
            while ($i < count($libros)) {

                echo"Libro " . $i++ . ": " . $libros[$i -1] . "<br>";

            }
            return view('bienvenida', data: compact('nombreBiblioteca', 'libros'));
        } else {
            echo "<script>console.log('No puedes entrar, eres menor de edad.');</script>";
        }

    }
}