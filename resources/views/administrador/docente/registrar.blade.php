@extends('appAdmin')

@section('titulo')
    <h1>Registrar Docente</h1>
@stop

@section('breadcrum')
    <li class="breadcrumb-item"><a href="{{ url('/home') }}">Inicio</a></li>
    <li class="breadcrumb-item active">Registrar Docente</li>
@stop

@section('contenido')
    <form action="{{url ('/homeAdministrador/docente/registrado')}}" method="POST"> 
    @csrf
        <div class="form-group">
            <label for="">Nombre:</label>
            <input type="text" class="form-control" name="nombre">
        </div>
        <div class="form-group">
            <label for="">Edad:</label>
            <input type="number" class="form-control" name="edad">
        </div>

        <div class="form-group">
            <label for="">Dirección:</label>
            <input type="text" class="form-control" name="direccion">
        </div>

        <div class="form-group">
            <label for="">Número telefónico:</label>
            <input type="number" class="form-control" name="numero">
        </div>

        <div class="form-group">
            <label for="">Semestre que impartirá:</label>
            <input type="text" class="form-control" name="semestre">
        </div>

        <div>
            <button type="submit" class="btn btn-primary">Registrar</button>
            <a href="{{ asset('/homeAdministrador') }}" class="btn btn-danger">Cancelar</a>
        </div>
    </form>
@stop
