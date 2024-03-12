@extends('plantillas.base')

@section('titulo', 'Alquileres')

@section('btn-busqueda')
<form class="busqueda" action="{{route('buscarAlquiler')}}" method="get">
    <input type="text" class="inputMod inputBusqueda" name="busqueda">
    <button type="submit" class='boton buscar'><span class="rotate45">&#9906;</span></button>
</form>
@endsection

@section('tabla')
<form method="get" action="{{route('addAlquiler')}}">
    <table>
        <thead>
            <tr>
                <th class='w300'>Usuario</th>
                <th class='w300'>Libro</th>
                <th class='w150'>Fecha de Préstamo</th>
                <th class='w150'>Fecha de Devolución</th>
                <th class='acciones'>Acciones</th>
            </tr>
        </thead>
        <tbody class="scroll">
            @foreach($alquileres as $alquiler)
                <tr>
                <td class='w300'>{{$alquiler->usuario->nombreusuario}}</td>
                <td class='w300'>{{$alquiler->libro->titulo}}</td>
                <td class='w150'>{{$alquiler->fechprestamo}}</td>
                <td class='w150'>{{$alquiler->fechdevolucion}}</td>
                <td class='acciones'>
                    <div>
                        <a href="{{route('removeAlquiler', $alquiler->id)}}" class='boton eliminar'>&#10008;</a>
                        <a href="{{route('editAlquilerForm', $alquiler->id)}}" class='boton editar'>&#128393;</a>
                    </div>
                </td>
                </tr>
            @endforeach
        </tbody>
        <tbody>
            <tr class="nuevoLibro">
                <td class='w300'><select class="input inputAutor" name="usuario">
                    <option value="-1">Elige el usuario</option>
                    @foreach($usuarios as $usuario)
                        <option value="{{$usuario->id}}">{{$usuario->nombreusuario}}</option>
                    @endforeach
                </select></td>
                <td class='w300'><select class="input inputAutor" name="libro">
                    <option value="-1">Elige el libro</option>
                    @foreach($libros as $libro)
                        <option value="{{$libro->id}}">{{$libro->titulo}}</option>
                    @endforeach
                </select></td>
                <td class='w150'><input class="input" type='date' name="fechprestamo"></td>
                <td class='w150'><input class="input" type='date' name="fechdevolucion"></td>
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