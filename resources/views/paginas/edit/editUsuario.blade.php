@extends('plantillas.form')

@section('titulo', 'Editar Usuario')

@section('volver')
<a href="{{route('usuarios')}}">&#11013; Volver</a>
@endsection

@section('form')
<form method="post" action="{{route('editUsuario')}}">
    @csrf
    <input type="hidden" value="{{$usuario->id}}" name="id">

    <div class="form-row">
        <div class="form-element">
            <label for="nombreusuario">Nombre de Usuario</label>
            <input type="text" name="nombreusuario" id="nombreusuario" class="inputMod form-input" value="{{$usuario->nombreusuario}}">
        </div>
    </div>

    <div class="form-row">
        <div class="form-element">
            <label for="password">Contraseña</label>
            <input type="text" name="password" id="password" class="inputMod form-input" value="{{$usuario->password}}">
        </div>
    </div>

    <div class="form-row">
        <div class="form-element">
            <label for="telefono">Telefono</label>
            <input type="text" name="telefono" id="telefono" class="inputMod form-input" value="{{$usuario->telefono}}">
        </div>
        <div class="form-element">
            <label for="fechaentrega">Fecha de Entrega</label>
            <input type="date" name="fechaentrega" id="fechaentrega" class="inputMod form-input" value="{{$usuario->fechaentrega}}">
        </div>
    </div>

    <div class="form-row">
        <div class="form-element">
            <input type="submit" value="Guardar cambios" class="botonMod">
        </div>
    </div>
    
</form>
@endsection