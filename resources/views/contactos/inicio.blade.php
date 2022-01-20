@extends('layouts/agenda')

@section('tituloPagina', 'Contactos')

@section('contenido')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <h2>Contactos</h2>
                            <a href="{{ route('contactos.create') }}" class="btn btn-primary">
                                Agregar nuevo contacto
                            </a>
                            <hr>
                        </div>
                    </div>
                    <div class="row text-center">
                        <div class="col-sm-12">
                            <table class="table table-sm table-bordered">
                                <thead>
                                    <th>Apellido paterno</th>
                                    <th>Apellido materno</th>
                                    <th>Nombre</th>
                                    <th>Telefono</th>
                                    <th>Email</th>
                                    <th>Categoria</th>
                                    <th>Editar</th>
                                    <th>Eliminar</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
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