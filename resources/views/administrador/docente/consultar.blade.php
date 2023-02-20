@extends('appAdmin')

@section('titulo')
    <h1>Consultar Docentes</h1>
@stop

@section('breadcrum')
    <li class="breadcrumb-item"><a href="{{ url('/home') }}">Inicio</a></li>
    <li class="breadcrumb-item active">Consultar Docentes</li>
@stop

@section('contenido')
<div class="responsive-table">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Edad</th>
                    <th>Dirección</th>
                    <th>Número telefónico</th>
                    <th>Semestres que imparte</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($docentes as $a)
                <tr>
                    <td>{{ $a->id }}</td>
                    <td>{{ $a->nombre }}</td>
                    <td>{{ $a->edad }}</td>
                    <td>{{ $a->direccion }}</td>
                    <td>{{ $a->numero }}</td>
                    <td>{{ $a->semestre }}</td>
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
