<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Alquiler;
use App\Models\Usuario;
use App\Models\Libro;

class AlquilerController extends Controller
{
    /* Añade un alquiler a la BBDD
        @param $request Datos del alquiler a añadir */
    function add(Request $request) {
        
        $validated = $request->validate([
            'libro' => 'required',
            'usuario' => 'required',
            'fechprestamo' => 'required',
            'fechdevolucion' => 'required',
        ]);

        if($validated){
            $alquiler = new Alquiler();
            $alquiler->libro_id = $request->input('libro');
            $alquiler->usuario_id = $request->input('usuario');
            $alquiler->fechprestamo = $request->input('fechprestamo');
            $alquiler->fechdevolucion = $request->input('fechdevolucion');
            $alquiler->save();
        }
        
        return redirect()->route('alquileres');
    }
    
    /* Elimina el alquiler especificado
        @param $id ID del alquiler a eliminar */
    function remove(string $id) {
        $alquiler = Alquiler::find($id);
        $alquiler->delete();
        return redirect()->route('alquileres');
    }

    /* Muestra el formulario de editar alquiler
        @param $id ID del alquiler a modificar */
    function editForm(string $id) {
        $alquiler = Alquiler::find($id);
        $usuarios = Usuario::all();
        $libros = Libro::all();
        return view('paginas.edit.editalquiler', ['alquiler' => $alquiler, 'usuarios' => $usuarios, 'libros' => $libros]);
    }

    /* Edita los datos del alquiler en la BBDD
        @param $request Nuevos datos para el alquiler */
    function edit(Request $request) {
        $alquiler = Alquiler::find($request->input('id'));
        $alquiler->libro_id = $request->input('libro');
        $alquiler->usuario_id = $request->input('usuario');
        $alquiler->fechprestamo = $request->input('fechprestamo');
        $alquiler->fechdevolucion = $request->input('fechdevolucion');
        $alquiler->save();
        
        return redirect()->route('alquileres');
    }

    /* Busca un Alquiler
        @param $request Termino a buscar */
    function buscar(Request $request) {
        $alquileres = [];
        // Buscamos por usuario y libro
        $busqueda = '%'.$request->input('busqueda').'%';
        $usuario = Usuario::where('nombreusuario', 'LIKE', $busqueda)->first();
        if(is_null($usuario))
            $id_usuario = "-1";
        else
            $id_usuario = $usuario->id;
        $libro = Libro::where('titulo', 'LIKE', $busqueda)->first();
        if(is_null($libro))
            $id_libro = "-1";
        else
            $id_libro = $libro->id;

        $alquileres = Alquiler::where('usuario_id', '=', $id_usuario)
                            ->orwhere('libro_id', '=', $id_libro)
                          ->get();

        $usuarios = Usuario::all();
        $libros = Libro::all();
        return view('paginas.alquileres', ['alquileres' => $alquileres, 'usuarios' => $usuarios, 'libros' => $libros]);
    }
}
