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
                    <h3 class="card-title font-weight-bold">Seleccionar horario</h3>
                </div>

                <div class="card-body">
                    <p class="card-text">Ingrese los datos indicados.
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Modulos disponibles</label>
                                <select class="form-control" name="modulo" id="modulo">
                                    <option disabled value="default" selected>Seleccionar modulo</option>
                                    @if(isset($modulos))
                                        @foreach($modulos as $modulo)
                                            <option data-direccion='{{$modulo->direccion}}' value="{{ $modulo->id_modulo }}" onclick="cargarModulo()">{{ $modulo->nombre }}</option>
                                        @endforeach
                                    @endif
                                </select>
                                <label id="llenarDireccion"></label>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="row" id="llenarFechas"></div>
                        </div>
                    </div>
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

@section('js')
    <script>
        $('#modulo').on("change", function () {
            var modulo = $(this).val();
            var divFechas = $('#llenarFechas');
            var moduloDireccion = $('#llenarDireccion');
            moduloDireccion.text($('#modulo option:selected').data('direccion'))
            divFechas.html("");
            url = '/api/fecha/' + modulo;
            axios.get(url)
                .then(horarios => {
                    html = ''
                    $.each(horarios.data, function (index, horario) {
                        moment.locale('es');
                        f = moment(horario.dia);
                        dia = f.format('dddd', 'es').toUpperCase();
                        ff = f.format('DD-MM-YYYY');
                        html = html +
                            '<div class="card text-center">'+
                            '<div class="card-header">'+
                            '<h5>' + dia + '</h5>'+
                            '</div>'+
                            '<div class="card-body">'+
                            '<h5 class="card-title">' + horario.dia + '</h5>'+
                            '<p class="card-text">Disponibles: <code>' + horario.disponibilidad + '</code></p>'+
                            '</div>'+
                            '</div>';
                    });
                    divFechas.html(html)
                });
        });

    </script>
@stop
