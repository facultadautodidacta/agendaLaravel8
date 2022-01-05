@extends('layouts/agenda')

@section('tituloPagina', 'Inicio')

@section('contenido')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <h2>Esta es una agenda sencilla con laravel 8</h2>
                        </div>
                    </div>
                    <div class="row text-center">
                        <div class="col-sm-12">
                            <img class="img-thumbnail" src="{{ asset('img/foto.png') }}" alt="" width="30%" >
                            <p style="font-family: 'The Nautigal', cursive;">
                                Este es mi primer agenda con laravel 
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection