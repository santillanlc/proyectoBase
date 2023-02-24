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
        <table class ="table table-striped table-bordered table-sm" cellspacing="0">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Carrera</th>
                    <th>Generación</th>
                    <th>Turno</th>
                    <th>Semestre</th>
                    <th>Grupo</th>
                    <th style="width: 10px;">Número de control</th>
                    <th>Nombre</th>
                    <th>Apellido paterno</th>
                    <th>Apellido materno</th>
                    <th>Nombre completo</th>
                    <th>CURP</th>
                    <th>Sexo</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($alumnos as $a)
                <tr>
                    <td>{{ $a->id }}</td>
                    <td>{{ $a->carrera }}</td>
                    <td>{{ $a->generacion }}</td>
                    <td>{{ $a->turno }}</td>
                    <td>{{ $a->semestre }}</td>
                    <td>{{ $a->grupo }}</td>
                    <td style="width:100px;">{{ $a->numero_control }}</td>
                    <td>{{ $a->nombre }}</td>
                    <td>{{ $a->paterno }}</td>
                    <td>{{ $a->materno }}</td>
                    <td>{{ $a->nombre_completo }}</td>
                    <td>{{ $a->CURP }}</td>
                    <td>{{ $a->sexo }}</td>
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
