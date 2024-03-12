<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Autor;
use App\Models\Libro;

class AutorController extends Controller
{
    /* Añade un autor a la BBDD
        @param $request Datos del autor a añadir */
    function add(Request $request) {
        
        $validated = $request->validate([
            'nombre' => 'required',
            'apellidos' => 'required',
            'nacionalidad' => 'required',
            'sexo' => 'required|size:1',
            'edad' => 'required|integer|min:1',
        ]);

        if($validated) {
            $autor = new Autor();
            $autor->nombre = $request->input('nombre');
            $autor->apellidos = $request->input('apellidos');
            $autor->nacionalidad = $request->input('nacionalidad');
            $autor->sexo = $request->input('sexo');
            $autor->edad = $request->input('edad');
            $autor->save();
        }
        return redirect()->route('autores');
    }
    
    /* Elimina el autor especificado, así como sus libros
        @param $id ID del autor a eliminar */
    function remove(string $id) {
        $autor = Autor::find($id);

        // Eliminamos los libros del autor
        foreach($autor->libros as $libro){
            $libro->delete();
        }

        // Eliminamos al autor
        $autor->delete();
        
        return redirect()->route('autores');
    }

    /* Muestra el formulario de editar autor
        @param $id ID del autor a modificar */
    function editForm(string $id) {
        $autor = Autor::find($id);
        return view('paginas.edit.editAutor', ['autor' => $autor]);
    }

    /* Edita los datos del autor en la BBDD
        @param $request Nuevos datos para el autor */
    function edit(Request $request) {
        $autor = Autor::find($request->input('id'));
        $autor->nombre = $request->input('nombre');
        $autor->apellidos = $request->input('apellidos');
        $autor->nacionalidad = $request->input('nacionalidad');
        $autor->sexo = $request->input('sexo');
        $autor->edad = $request->input('edad');
        $autor->save();
        
        return redirect()->route('autores');
    }

    /* Busca un autor
        @param $request Termino a buscar */
    function buscar(Request $request) {
        $autores = [];
        // Buscamos por nombre y apellidos por separado
        $busqueda = '%'.$request->input('busqueda').'%';
        $autores = Autor::where('nombre', 'LIKE', $busqueda)
                        ->orWhere('apellidos', 'LIKE', $busqueda)
                        ->get();

        // Buscamos por nombre y apellidos juntos
        $todos = Autor::all();
        foreach($todos as $autor){
            $nombreCompleto = $autor->nombre.' '.$autor->apellidos;
            if(str_contains($nombreCompleto, $request->input('busqueda'))){
                // Si el autor no está ya en el resultado
                if(!$autores->contains($autor))
                    $autores->push($autor);
            }
        }

        return view('paginas.autores', ['autores' => $autores]);
    }
}
