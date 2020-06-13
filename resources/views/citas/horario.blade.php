@extends('layouts.cita')

@section('title', 'Inicio')

@section('content_header')
    <h1>Inicio</h1>
@stop

@section('content')
    <div class="container">

        <form action="" method="post">

            <div class="card">
                <div class="card-header">
                    <h1 class="card-title font-weight-bold">Solicitud de citas</h1>
                </div>

                <div class="card-body">
                    <p class="card-text">Ingrese los datos indicados.
                </div>

                <div class="card card-footer">
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <a href="{{ url('/') }}" class="btn btn-secondary">Regresar</a>
                        <button type="button" class="btn btn-success">Agendar</button>
                    </div>
                </div>

            </div>

        </form>

    </div>
@stop
