@extends('appAdmin')

@section('titulo')
    <h1>Consultar Alumnos</h1>
@stop

@section('breadcrum')
    <li class="breadcrumb-item"><a href="{{ url('/home') }}">Inicio</a></li>
    <li class="breadcrumb-item active">Consultar Alumnos</li>
@stop

@section('contenido')
    <div class="responsive-table">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Edad</th>
                    <th>CURP</th>
                    <th>Direccion</th>
                    <th>Nombre del tutor</th>
                    <th>Número del tutor</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($alumnos as $a)
                <tr>
                    <td>{{ $a->id }}</td>
                    <td>{{ $a->nombre }}</td>
                    <td>{{ $a->edad }}</td>
                    <td>{{ $a->curp }}</td>
                    <td>{{ $a->direccion }}</td>
                    <td>{{ $a->nombre_tutor }}</td>
                    <td>{{ $a->numero_tutor }}</td>
                    <td>
                        <a href="" class="btn btn-danger btn-sm">
                            <i class="fas fa-times"></i>
                        </a>
                        <a href="{{ url('reporte/pdf') }}/{{ $a->id }}" class="btn btn-success btn-sm">
                            <i class="far fa-file-pdf"></i>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@stop
