@extends('layouts.app')

@section('content')

    <div class="content">
        <a class="btn-nuevo" href="{{ url('/nuevo') }}">Agregar nuevo</a>
        @if (isset($contactos)) 
            <table aria-colspan="0">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Sexo</th>
                        <th>Telefono</th>
                        <th>Correo Electronico</th>
                        <th>Casado</th>
                        <th>Fecha de Nacimiento</th>
                        <th colspan="2">Acciones</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($contactos as $contacto )
                        <tr>
                            <td>{{ $contacto->nombre }}</td>
                            <td>{{ $contacto->apellido }}</td>
                            <td>{{ $contacto->sexo }}</td>
                            <td>{{ $contacto->telefono }}</td>
                            <td>{{ $contacto->correo }}</td>
                            <td>{{ $contacto->estado_civil }}</td>
                            <td>{{ $contacto->fecha_de_nacimiento }}</td>
                            <td class="btn-editar"><a href="{{ route('contactos.edit', $contacto->id) }}">Editar</a></td>
                            <td class="btn-eliminar">
                                <form action="{{ route('contactos.destroy', $contacto->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button class="btn-eliminar" type="submit">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
                @else
                    <p class="none">Usted no tiene contactos</p>
                @endif
    </div>

@endsection