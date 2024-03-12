@extends('plantillas.form')

@section('titulo', 'Editar Autor')

@section('volver')
<a href="{{route('autores')}}">&#11013; Volver</a>
@endsection

@section('form')
<form method="post" action="{{route('editAutor')}}">
    @csrf
    <input type="hidden" value="{{$autor->id}}" name="id">

    <div class="form-row">
        <div class="form-element">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" class="inputMod form-input" value="{{$autor->nombre}}">
        </div>
        <div class="form-element">
            <label for="apellidos">Apellidos</label>
            <input type="text" name="apellidos" id="apellidos" class="inputMod form-input" value="{{$autor->apellidos}}">
        </div>
    </div>

    <div class="form-row">
        <div class="form-element">
            <label for="nacionalidad">Nacionalidad</label>
            <input type="text" name="nacionalidad" id="nacionalidad" class="inputMod form-input" value="{{$autor->nacionalidad}}">
        </div>
    </div>

    <div class="form-row">
        <div class="form-element">
            <label for="sexo">Sexo</label>
            <input type="text" name="sexo" id="sexo" class="inputMod form-input" value="{{$autor->sexo}}">
        </div>
        <div class="form-element">
            <label for="edad">Edad</label>
            <input type="number" name="edad" id="edad" class="inputMod form-input" value="{{$autor->edad}}">
        </div>
    </div>

    <div class="form-row">
        <div class="form-element">
            <input type="submit" value="Guardar cambios" class="botonMod">
        </div>
    </div>
    
</form>
@endsection