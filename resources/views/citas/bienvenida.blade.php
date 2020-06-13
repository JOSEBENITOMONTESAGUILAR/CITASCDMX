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
                <div class="row">
                    <div class="col-md-4">
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Registrar Cita</a>
                            <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Consulta o cancela tu cita</a>
                          </div>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                <div class="row">
                                    <div class="col-4">
                                      <div class="list-group" id="list-tab" role="tablist">
                                        <a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Licencias</a>
                                        <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Vehicular</a>
                                      </div>
                                    </div>
                                    <div class="col-8">
                                      <div class="tab-content" id="nav-tabContent">
                                        <div class="tab-pane fade" id="list-home" role="tabpanel" aria-labelledby="list-home-list"></div>
                                        <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list"></div>
                                      </div>
                                    </div>
                                  </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
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
                                    <button type="submit" class="btn btn-lg btn-secondary">Consultar/Cancelar cita</button>
                                </form>
                            </div>
                          </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@stop
