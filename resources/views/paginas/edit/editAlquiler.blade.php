@extends('plantillas.form')

@section('titulo', 'Editar Alquiler')

@section('volver')
<a href="{{route('alquileres')}}">&#11013; Volver</a>
@endsection

@section('form')
<form method="post" action="{{route('editAlquiler')}}">
    @csrf
    <input type="hidden" value="{{$alquiler->id}}" name="id">

    <div class="form-row">
        <div class="form-element">
            <label for="usuario">Usuario</label>
            <select class="inputMod form-input" name="usuario" id="usuario">
                @foreach($usuarios as $usuario)
                    <option value="{{$usuario->id}}" <?php if($alquiler->usuario->id == $usuario->id) echo 'selected' ?>>{{$usuario->nombreusuario}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-element">
            <label for="libro">Libro</label>
            <select class="inputMod form-input" name="libro" id="libro">
                @foreach($libros as $libro)
                    <option value="{{$libro->id}}" <?php if($alquiler->libro->id == $libro->id) echo 'selected' ?>>{{$libro->titulo}}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="form-row">
        <div class="form-element">
            <label for="fechprestamo">Fecha de Préstamo</label>
            <input type="date" name="fechprestamo" id="fechprestamo" class="inputMod form-input" value="{{$alquiler->fechprestamo}}">
        </div>
        <div class="form-element">
            <label for="fechdevolucion">Fecha de Devolución</label>
            <input type="date" name="fechdevolucion" id="fechdevolucion" class="inputMod form-input" value="{{$alquiler->fechdevolucion}}">
        </div>
    </div>

    <div class="form-row">
        <div class="form-element">
            <input type="submit" value="Guardar cambios" class="botonMod">
        </div>
    </div>
    
</form>
@endsection