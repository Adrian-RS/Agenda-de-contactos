@extends('layouts.app')

@section('content')

    <h2>Editar contacto</h2>
    <div class="form-container">
        <form action="{{ route('contactos.update', $contacto )}}" method="POST">
            @csrf
            @method('put')

            @error('nombre')
                <span class="error">*{{ $message }}</span>
            @enderror
            <input type="text" name="nombre" value="{{ old('nombre', $contacto->nombre) }}" placeholder="Nombre">

            @error('apellido')
                <span class="error">*{{ $message }}</span>
            @enderror
            <input type="text" name="apellido" value="{{ old('apellido', $contacto->apellido) }}" placeholder="Apellido">

            @error('sexo')
                <span class="error">*{{ $message }}</span>
            @enderror
            @if ($contacto->sexo == 'M')
                <span>Sexo: </span>
                <input type="radio" name="sexo" id="m" checked value="M">
                <label for="m">Masculino</label>
                <input type="radio" name="sexo" id="f" value="F">
                <label for="f">Femenino</label>
            @else
                <span>Sexo: </span>
                <input type="radio" name="sexo" id="m" value="M">
                <label for="m">Masculino</label>
                <input type="radio" name="sexo" checked id="f" value="F">
                <label for="f">Femenino</label>
            @endif

            @error('telefono')
                <span class="error">*{{ $message }}</span>
            @enderror
            <input type="text" name="telefono" id="telefono" value="{{ old('telefono', $contacto->telefono) }}" placeholder="Telefono">
            <input type="email" name="correo" id="correo" value="{{ old('correo', $contacto->correo) }}" placeholder="Correo Electronico">
            
            @error('estado_civil')
                <span class="error">*{{ $message }}</span>
            @enderror
            @if ($contacto->estado_civil == 'Si')
                <span >Casad@: </span>
                <input type="radio" name="estado_civil" checked id="si" value="si">
                <label for="si">Si</label>
                <input type="radio" name="estado_civil" id="no" value="no">
                <label for="no">No</label>
            @else
                <span >Casad@: </span>
                <input type="radio" name="estado_civil" id="si" value="si">
                <label for="si">Si</label>
                <input type="radio" name="estado_civil" checked id="no" value="no">
                <label for="no">No</label>
            @endif
            
            @error('fecha_de_nacimiento')
                <span class="error">*{{ $message }}</span>
            @enderror
            <input type="date" name="fecha_de_nacimiento" value="{{ old('fecha_de_nacimiento', $contacto->fecha_de_nacimiento) }}" id="fecha_de_nacimiento">
            <button class="btn-guardar" type="submit">Guardar</button>
            <a class="btn-cancelar" href="{{ route('contactos.index') }}">Cancelar</a>
        </form>
    </div>
@endsection