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

                                <table class="table table-sm table-bordered">
                                    <thead>
                                        <th>Apellido paterno</th>
                                        <th>Apellido materno</th>
                                        <th>Nombre</th>
                                        <th>Telefono</th>
                                        <th>Email</th>
                                        <th>Categoria</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>{{ $contacto->paterno }}</td>
                                            <td>{{ $contacto->materno }}</td>
                                            <td>{{ $contacto->nombre }}</td>
                                            <td>{{ $contacto->telefono }}</td>
                                            <td>{{ $contacto->email }}</td>
                                            <td>{{ $contacto->nombre_categoria }}</td>
                                        </tr>
                                    </tbody>
                                </table>

                                <form action="{{ route('contactos.destroy', $contacto->id_contacto) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger">
                                    <span class="fas fa-user-times"></span> Eliminar
                                    </button>
                                </form>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection