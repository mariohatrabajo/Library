<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Libro;
use App\Models\Autor;

class LibroController extends Controller
{
    /* Añade un libro a la BBDD
        @param $request Datos del libro a añadir */
    function add(Request $request) {
        
        $validated = $request->validate([
            'titulo' => 'required',
            'categoria' => 'required',
            'descripcion' => 'required',
            'precio' => 'required|integer|min:1',
            'autor_id' => 'required',
        ]);

        if($validated){
            $libro = new Libro();
            $libro->titulo = $request->input('titulo');
            $libro->categoria = $request->input('categoria');
            $libro->descripcion = $request->input('descripcion');
            $libro->precio = $request->input('precio');
            $libro->autor_id = $request->input('autor');
            $libro->save();
        }
        
        return redirect()->route('libros');
    }
    
    /* Elimina el libro especificado, así como sus alquileres
        @param $id ID del libro a eliminar */
    function remove(string $id) {
        $libro = Libro::find($id);

        // Eliminamos los alquileres del libro
        foreach($libro->alquileres as $alquiler){
            $alquiler->delete();
        }

        // Eliminamos el libro
        $libro->delete();

        return redirect()->route('libros');
    }

    /* Muestra el formulario de editar libro
        @param $id ID del libro a modificar */
    function editForm(string $id) {
        $libro = Libro::find($id);
        $autores = Autor::all();
        return view('paginas.edit.editLibro', ['libro' => $libro, 'autores' => $autores]);
    }

    /* Edita los datos del libro en la BBDD
        @param $request Nuevos datos para el libro */
    function edit(Request $request) {
        $libro = Libro::find($request->input('id'));
        $libro->titulo = $request->input('titulo');
        $libro->categoria = $request->input('categoria');
        $libro->descripcion = $request->input('descripcion');
        $libro->autor_id = $request->input('autor');
        $libro->precio = $request->input('precio');
        $libro->save();
        
        return redirect()->route('libros');
    }

    /* Busca un Libro
        @param $request Termino a buscar */
    function buscar(Request $request) {
        $libros = [];
        // Buscamos por titulo y genero
        $busqueda = '%'.$request->input('busqueda').'%';
        $libros = Libro::where('titulo', 'LIKE', $busqueda)
                          ->orWhere('categoria', 'LIKE', $busqueda)
                          ->get();

        $autores = Autor::all();

        return view('paginas.libros', ['libros' => $libros, 'autores' => $autores]);
    }
}
