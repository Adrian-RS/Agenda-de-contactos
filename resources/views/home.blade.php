@extends('layouts.app')

@section('content')

    <div class="content">
        <a class="btn-nuevo" href="#">Agregar nuevo</a>
        
        <table aria-colspan="0">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Sexo</th>
                    <th>Telefono</th>
                    <th>Correo Electronico</th>
                    <th>Estado Civil</th>
                    <th>Fecha de Nacimiento</th>
                    <th colspan="2">Acciones</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>Adrian</td>
                    <td>Reyes</td>
                    <td>M</td>
                    <td>8299999999</td>
                    <td>correo@dominio.com</td>
                    <td>Soltero</td>
                    <td>7/5/97</td>
                    <td class="btn-editar"><a href="{{ url('/editar') }}">Editar</a></td>
                    <td class="btn-eliminar"><a href="{{ url('eliminar') }}">Eliminar</a></td>
                </tr>
            </tbody>
        </table>
    </div>

@endsection