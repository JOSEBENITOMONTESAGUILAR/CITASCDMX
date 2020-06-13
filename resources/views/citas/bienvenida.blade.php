@extends('layouts.cita')

@section('title', 'Inicio')

@section('content_header')
    <h1>Inicio</h1>
@stop

@section('content')
    <div class="container">

        <div class="card text-justify">
            <div class="card-header">
                <h1 class="card-title text-success font-weight-bold">Solicitud de citas</h1>
            </div>
            <div class="card-body">
                <p class="card-text">Bienvenido al sistema de <strong>citas en Linea</strong>.
            </div>

            <div class="card-body">
                <ul class="nav nav-pills mb-3 nav-justified" id="pills-tab" role="tablist">
                    <li class="nav-item bg-secondary text-white">
                      <a class="nav-link" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Registrar Cita</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Consulta o cancela tu cita</a>
                    </li>
                  </ul>
                  <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Cras justo odio</li>
                            <li class="list-group-item">Dapibus ac facilisis in</li>
                            <li class="list-group-item">Morbi leo risus</li>
                            <li class="list-group-item">Porta ac consectetur ac</li>
                            <li class="list-group-item">Vestibulum at eros</li>
                          </ul>
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <form action="{{ url('consultar.show') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Número de cita</label>
                                <input type="text" class="form-control" name="numeroCita" placeholder="Ingresa aquí" required>
                            </div>
                            <div class="form-group">
                                <label>Número de confirmación</label>
                                <input type="text" class="form-control" name="confirmacionCita" placeholder="Ingresa aquí" required>
                            </div>
                            <button type="submit" class="btn btn-lg btn-success">Consultar/Cancelar cita</button>
                        </form>
                    </div>
                  </div>
            </div>
        </div>

    </div>
@stop
