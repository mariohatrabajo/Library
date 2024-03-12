@extends('plantillas.base')

@section('titulo', 'Usuarios')

@section('btn-busqueda')
<form class="busqueda" action="{{route('buscarUsuario')}}" method="get">
    <input type="text" class="inputMod inputBusqueda" name="busqueda">
    <button type="submit" class='boton buscar'><span class="rotate45">&#9906;</span></button>
</form>
@endsection

@section('tabla')
<form method="get" action="{{route('addUsuario')}}">
    <table>
        <thead>
            <tr>
                <th class='w300'>Nombre</th>
                <th class='w300'>Contraseña</th>
                <th class='w300'>Telefono</th>
                <th class='w300'>Fecha de Entrega</th>
                <th class='acciones'>Acciones</th>
            </tr>
        </thead>
        <tbody class="scroll">
            @foreach($usuarios as $usuario)
                <tr>
                <td class='w300'>{{$usuario->nombreusuario}}</td>
                <td class='w300'>{{$usuario->password}}</td>
                <td class='w300'>{{$usuario->telefono}}</td>
                <td class='w300'>{{$usuario->fechaentrega}}</td>
                <td class='acciones'>
                    <div>
                        <a href="{{route('removeUsuario', $usuario->id)}}" class='boton eliminar'>&#10008;</a>
                        <a href="{{route('editUsuarioForm', $usuario->id)}}" class='boton editar'>&#128393;</a>
                    </div>
                </td>
                </tr>
            @endforeach
        </tbody>
        <tbody>
            <tr class="nuevoLibro">
                <td class='w300'><input class="input" type='text' name="nombreusuario" placeholder="Nombre de usuario"></td>
                <td class='w300'><input class="input" type='text' name="password" placeholder="Contraseña"></td>
                <td class='w300'><input class="input" type='text' name="telefono" placeholder="Telefono"></td>
                <td class='w300'><input class="input" type='date' name="fechaentrega"></td>
                <td class="acciones">
                    <div>
                        <input type="submit" value="🞥" class='boton anadir'>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</form>
@endsection