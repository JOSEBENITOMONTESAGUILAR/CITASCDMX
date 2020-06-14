@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

@stop

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-center"><i class="fas fa-list-ul"></i> Citas</div>

                    <div class="card-body text-center">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="container text-center">
                            <table class="table text-center">
                                <thead class="thead-light text-center">
                                <tr role="row" class="text-center">
                                    <th scope="col">#</th>
                                    <th scope="col">NOMBRE</th>
                                    <th scope="col">CURP</th>
                                    <th scope="col">ACCION</th>
                                </tr>
                                </thead>
                                <tbody class="text-center">
                                <tr>
                                    <th scope="row">1</th>
                                    <td>JOSE BENITO</td>
                                    <td>MOAB941212HMCNGN04</td>
                                    <td>
                                        <a href="{{url('panel/informacion/'.'1')}}" class="btn btn-outline-dark btn-block">VER INFORMACION</a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
