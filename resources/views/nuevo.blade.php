@extends('layouts.app')

@section('content')

    <h2>Agregar contacto</h2>
    <div class="form-container">
        <form action="" method="post">
            @csrf
            <input type="text" name="nombre" value="">
            <input type="text" name="apellido" value="">
            <input type="radio" name="sexo" id="m" value="m">
            <label for="m">Masculino</label>
            <input type="radio" name="sexo" id="f" value="f">
            <label for="f">Femenino</label>
            <input type="text" name="telefono" id="telefono" value="">
            <input type="email" name="correo" id="correo">
            <input type="radio" name="estado_civil" id="si" value="si">
            <label for="si">Si</label>
            <input type="radio" name="estado_civil" id="no" value="no">
            <label for="no">No</label>
            <input type="date" name="fecha_nacimiento" id="fecha_nacimiento">
            <button type="submit">Guardar</button>
            <a class="btn-cancelar" href="{{ url('/') }}">Cancelar</a>
        </form>
    </div>
@endsection