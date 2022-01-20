@extends('layouts/agenda')

@section('tituloPagina', 'Categorias')

@section('contenido')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <h2>Categorias</h2>
                            <a href="{{ route('categorias.create') }}" class="btn btn-primary">
                                Agregar nueva categoria
                            </a>
                            <hr>
                        </div>
                    </div>
                    <div class="row text-center">
                        <div class="col-sm-12">
                            <table class="table table-sm table-bordered">
                                <thead>
                                    <th>Nombre</th>
                                    <th>Descripcion</th>
                                    <th>Editar</th>
                                    <th>Eliminar</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection