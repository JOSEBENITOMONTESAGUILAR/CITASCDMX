@extends('layouts.cita')

@section('title', 'Inicio')

@section('content_header')
    <h1>Inicio</h1>
@stop

@section('content')
    <div class="container">

        <div class="card">
            <div class="card-header">
                <h1 class="card-title font-weight-bold">Solicitud de citas</h1>
            </div>

            <div class="card-body">
                <p class="card-text">Bienvenido al sistema de <strong>citas en Linea</strong>.
            </div>

            <div class="card-body">
                <form action="{{ url('consultar.show') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label>Placa</label>
                        <input type="text" class="form-control" name="numeroCita" placeholder="Ingresa aquí" required>
                    </div>
                    <div class="form-group">
                        <label>Curp</label>
                        <input type="text" class="form-control" name="confirmacionCita" placeholder="Ingresa aquí" required>
                    </div>

                </form>
            </div>

            <div class="card card-footer">
                <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="{{ url('/') }}" class="btn btn-secondary">Regresar</a>
                    <button type="button" class="btn btn-success">Agendar</button>
                </div>
            </div>

        </div>

    </div>
@stop
