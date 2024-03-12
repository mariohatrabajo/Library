@extends('plantillas.base')

@section('titulo', 'Autores')

@section('btn-busqueda')
<form class="busqueda" action="{{route('buscarAutor')}}" method="get">
    <input type="text" class="inputMod inputBusqueda" name="busqueda">
    <button type="submit" class='boton buscar'><span class="rotate45">&#9906;</span></button>
</form>
@endsection

@section('tabla')
<form method="get" action="{{route('addAutor')}}">
    <table>
        <thead>
            <tr>
                <th class='w200'>Nombre</th>
                <th class='w200'>Apellidos</th>
                <th class='w200'>Nacionalidad</th>
                <th class='w200'>Sexo</th>
                <th class='w150'>Edad</th>
                <th class='acciones'>Acciones</th>
            </tr>
        </thead>
        <tbody class="scroll">
            @foreach($autores as $autor)
                <tr>
                <td class='w200'>{{$autor->nombre}}</td>
                <td class='w200'>{{$autor->apellidos}}</td>
                <td class='w200'>{{$autor->nacionalidad}}</td>
                <td class='w200'>{{$autor->sexo}}</td>
                <td class='w150'>{{$autor->edad}}</td>
                <td class='acciones'>
                    <div>
                        <a href="{{route('removeAutor', $autor->id)}}" class='boton eliminar'>&#10008;</a>
                        <a href="{{route('editAutorForm', $autor->id)}}" class='boton editar'>&#128393;</a>
                    </div>
                </td>
                </tr>
            @endforeach
        </tbody>
        <tbody>
            <tr class="nuevoLibro">
                <td class='w200'><input class="input" type='text' name="nombre" placeholder="Nombre"></td>
                <td class='w200'><input class="input" type='text' name="apellidos" placeholder="Apellidos"></td>
                <td class='w200'><input class="input" type='text' name="nacionalidad" placeholder="Nacionalidad"></td>
                <td class='w200'><input class="input" type='text' name="sexo" placeholder="Sexo"></td>
                <td class='w150'><input class="input" type='number' name="edad" placeholder="Edad"></td>
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