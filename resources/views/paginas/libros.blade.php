@extends('plantillas.base')

@section('titulo', 'Libros')

@section('btn-busqueda')
<form class="busqueda" action="{{route('buscarLibro')}}" method="get">
    <input type="text" class="inputMod inputBusqueda" name="busqueda">
    <button type="submit" class='boton buscar'><span class="rotate45">&#9906;</span></button>
</form>
@endsection

@section('tabla')
<form method="get" action="{{route('addLibro')}}">
    <table>
        <thead>
            <tr>
                <th class='w200'>Título</th>
                <th class='w300'>Descripción</th>
                <th class='w200'>Género</th>
                <th class='w200'>Autor</th>
                <th class='w150'>Precio</th>
                <th class='acciones'>Acciones</th>
            </tr>
        </thead>
        <tbody class="scroll">
            @foreach($libros as $libro)
                <tr>
                    <td class='w200'>{{$libro->titulo}}</td>
                    <td class='w300'>{{$libro->descripcion}}</td>
                    <td class='w200'>{{$libro->categoria}}</td>
                    <td class='w200'>{{$libro->autor->nombre}} {{$libro->autor->apellidos}}</td>
                    <td class='w150'>{{$libro->precio}}€</td>
                    <td class='acciones'>
                        <div>
                            <a href="{{route('removeLibro', $libro->id)}}" class='boton eliminar'>&#10008;</a>
                            <a href="{{route('editLibroForm', $libro->id)}}" class='boton editar'>&#128393;</a>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
        <tbody>
            <tr class="nuevoLibro">
                <td class='w200'><input class="input" type='text' name="titulo" placeholder="Título"></td>
                <td class='w300'><input class="input" type='text' name="descripcion" placeholder="Descripción"></td>
                <td class='w200'><input class="input" type='text' name="categoria" placeholder="Categoría"></td>
                <td class='w200'><select class="input inputAutor" name="autor">
                    <option value="-1">Elige el autor</option>
                    @foreach($autores as $autor)
                        <option value="{{$autor->id}}">{{$autor->nombre}} {{$autor->apellidos}}</option>
                    @endforeach
                </select></td>
                <td class='w150'><input class="input" type='number' name="precio" step="any" min="0" placeholder="Precio"></td>
                <td class="acciones">
                    <div>
                        <input type="submit" value="🞥" class='boton anadir'>
                    <div>
                </td>
            </tr>
        </tbody>
    </table>
</form>
@endsection