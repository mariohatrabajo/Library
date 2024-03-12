<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Usuario;

class UsuarioController extends Controller
{
    /* Añade un usuario a la BBDD
        @param $request Datos del usuario a añadir */
    function add(Request $request) {
        
        $validated = $request->validate([
            'nombreusuario' => 'required',
            'password' => 'required',
            'telefono' => 'required',
            'fechaentrega' => 'required',
        ]);

        if($validated){
            $usuario = new Usuario();
            $usuario->nombreusuario = $request->input('nombreusuario');
            $usuario->password = $request->input('password');
            $usuario->telefono = $request->input('telefono');
            $usuario->fechaentrega = $request->input('fechaentrega');
            $usuario->save();
        }
        
        return redirect()->route('usuarios');
    }
    
    /* Elimina el usuario especificado, así como sus alquileres
        @param $id ID del usuario a eliminar */
    function remove(string $id) {
        $usuario = Usuario::find($id);

        // Eliminamos los alquileres del usuario
        foreach($usuario->alquileres as $alquiler){
            $alquiler->delete();
        }

        // Eliminamos el usuario
        $usuario->delete();

        return redirect()->route('usuarios');
    }

    /* Muestra el formulario de editar usuario
        @param $id ID del usuario a modificar */
    function editForm(string $id) {
        $usuario = Usuario::find($id);
        return view('paginas.edit.editUsuario', ['usuario' => $usuario]);
    }

    /* Edita los datos del usuario en la BBDD
        @param $request Nuevos datos para el usuario */
    function edit(Request $request) {
        $usuario = Usuario::find($request->input('id'));
        $usuario->nombreusuario = $request->input('nombreusuario');
        $usuario->password = $request->input('password');
        $usuario->telefono = $request->input('telefono');
        $usuario->fechaentrega = $request->input('fechaentrega');
        $usuario->save();
        
        return redirect()->route('usuarios');
    }

    /* Busca un Usuario
        @param $request Termino a buscar */
    function buscar(Request $request) {
        $usuarios = [];
        // Buscamos por username y telefono
        $busqueda = '%'.$request->input('busqueda').'%';
        $usuarios = Usuario::where('nombreusuario', 'LIKE', $busqueda)
                          ->orWhere('telefono', 'LIKE', $busqueda)
                          ->get();

        return view('paginas.usuarios', ['usuarios' => $usuarios]);
    }
}
