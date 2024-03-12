<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Libro;
use App\Models\Autor;
use App\Models\Usuario;
use App\Models\Alquiler;

class PaginaController extends Controller
{
    public function libros() {
        $libros = Libro::all();
        $autores = Autor::all();
        return view('paginas.libros', ['libros' => $libros, 'autores' => $autores]);
    }
    public function autores() {
        $autores = Autor::all();
        return view('paginas.autores', ['autores' => $autores]);
    }
    public function usuarios() {
        $usuarios = Usuario::all();
        return view('paginas.usuarios', ['usuarios' => $usuarios]);
    }
    public function alquileres() {
        $alquileres = Alquiler::all();
        $libros = Libro::all();
        $usuarios = Usuario::all();
        return view('paginas.alquileres', ['alquileres' => $alquileres, 
                                           'libros' => $libros, 
                                           'usuarios' => $usuarios]);
    }
}
