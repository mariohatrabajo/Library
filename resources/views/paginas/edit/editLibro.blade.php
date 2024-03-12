@extends('plantillas.form')

@section('titulo', 'Editar Libro')

@section('volver')
<a href="{{route('libros')}}">&#11013; Volver</a>
@endsection

@section('form')
<form method="post" action="{{route('editLibro')}}">
    @csrf
    <input type="hidden" value="{{$libro->id}}" name="id">

    <div class="form-row">
        <div class="form-element">
            <label for="titulo">Título</label>
            <input type="text" name="titulo" id="titulo" class="inputMod form-input" value="{{$libro->titulo}}">
        </div>
    </div>

    <div class="form-row">
        <div class="form-element">
            <label for="descripcion">Descripción</label>
            <textarea name="descripcion" id="descripcion" class="inputMod form-input" rows="3">{{$libro->descripcion}}</textarea>
        </div>
    </div>

    <div class="form-row">
        <div class="form-element">
            <label for="autor">Autor</label>
            <select class="inputMod form-input" name="autor" id="autor">
                @foreach($autores as $autor)
                    <option value="{{$autor->id}}" <?php if($libro->autor->id == $autor->id) echo 'selected' ?>>{{$autor->nombre}} {{$autor->apellidos}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-element">
            <label for="categoria">Género</label>
            <input type="text" name="categoria" id="categoria" class="inputMod form-input" value="{{$libro->categoria}}">
        </div>
    </div>

    <div class="form-row">
        <div class="form-element">
            <label for="precio">Precio</label>
            <input type='number' name="precio" id="precio" class="inputMod form-input" value="{{$libro->precio}}" step="any" min="0" placeholder="Precio">
        </div>
    </div>

    <div class="form-row">
        <div class="form-element">
            <input type="submit" value="Guardar cambios" class="botonMod">
        </div>
    </div>
    
</form>
@endsection