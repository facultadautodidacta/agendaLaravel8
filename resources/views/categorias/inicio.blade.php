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
                                <span class="fas fa-plus-square"></span> Agregar nueva categoria
                            </a>
                            <hr>
                            @if ($mensaje = Session::get('success'))
                                <div class="alert alert-success" role="alert">
                                    {{ $mensaje }}
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-sm table-bordered" id="tablaCategorias">
                                <thead>
                                    <th>Nombre</th>
                                    <th>Descripcion</th>
                                    <th>Editar</th>
                                    <th>Eliminar</th>
                                </thead>
                                <tbody>
                                @foreach ($categorias as $item)
                                    <tr>
                                        <td>{{ $item->nombre }}</td>
                                        <td>{{ $item->descripcion }}</td>
                                        <td class="text-center">
                                            <a href="{{ route('categorias.edit', $item->id_categoria) }}" 
                                                class="btn btn-warning btn-sm"> 
                                                <span class="fas fa-edit"></span> 
                                            </a>
                                        </td>
                                        <td class="text-center">
                                            <a href="{{ route('categorias.show', $item->id_categoria) }}" 
                                                class="btn btn-danger btn-sm"> <span class="fas fa-trash-alt"></span>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('dataTable')
    <script>
        $(document).ready(function(){
            $('#tablaCategorias').DataTable();
        });
    </script>
@endsection