@extends('layouts.app')

@section('content')

    <h2>Agregar contacto</h2>
    <div class="form-container">
        <form action="{{ route('contactos.store') }}" method="POST">
            @csrf

            @error('nombre')
                <span class="error">*{{ $message }}</span>
            @enderror
            <input type="text" name="nombre" value="{{ old('nombre') }}" placeholder="Nombre">
            
            @error('apellido')
                <span class="error">*{{ $message }}</span>
            @enderror
            <input type="text" name="apellido" value="{{ old('apellido') }}" placeholder="Apellido">

            @error('sexo')
                <span class="error">*{{ $message }}</span>
            @enderror
            <span>Sexo: </span>
            <input type="radio" name="sexo" id="m" value="M">
            <label for="m">Masculino</label>
            <input type="radio" name="sexo" id="f" value="M">
            <label for="f">Femenino</label>

            @error('telefono')
                <span class="error">*{{ $message }}</span>
            @enderror
            <input type="text" name="telefono" id="telefono" value="{{ old('telefono') }}" placeholder="Telefono">

            @error('correo')
                <span class="error">*{{ $message }}</span>
            @enderror
            <input type="email" name="correo" id="correo" value="{{ old('correo') }}" placeholder="Correo Electronico">

            @error('estado_civil')
                <span class="error">*{{ $message }}</span>
            @enderror
            <span >Casad@: </span>
            <input type="radio" name="estado_civil" id="si" value="Si">
            <label for="si">Si</label>
            <input type="radio" name="estado_civil" id="no" value="No">
            <label for="no">No</label>

            @error('fecha_de_nacimiento')
                <span class="error">*{{ $message }}</span>
            @enderror
            <input type="date" name="fecha_de_nacimiento" value="{{ old('fecha_de_nacimiento') }}" id="fecha_nacimiento">

            <button  class="btn-guardar" type="submit">Guardar</button>
            <a class="btn-cancelar" href="{{ route('contactos.index') }}">Cancelar</a>
        </form>
    </div>
@endsection