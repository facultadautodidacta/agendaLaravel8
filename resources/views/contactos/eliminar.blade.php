@extends('layouts/agenda')

@section('tituloPagina', 'Eliminar contacto')

@section('contenido')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <h2>Eliminar contacto</h2>
                        
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="alert alert-danger" role="alert">
                                ¿Estas seguro de eliminar este registro?
                                <p>Una vez eliminado no podra ser recuperado!</p>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection