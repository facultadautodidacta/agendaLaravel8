@extends('layouts/agenda')

@section('tituloPagina', 'Editar contacto')

@section('contenido')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <h2>Editar contacto</h2>
                        
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <form action="{{ route('contactos.update', $contacto->id_contacto) }}" method="POST">
                                @csrf
                                @method('PUT')

                                <label for="categoria">Categoria</label>
                                <select name="categoria" id="categoria" class="form-select">
                                    @foreach ($categorias as $item)
                                        @if ($item->id_categoria == $contacto->id_categoria)
                                            <option selected value="{{ $item->id_categoria }}">{{ $item->nombre }}</option>  
                                        @else 
                                            <option value="{{ $item->id_categoria }}">{{ $item->nombre }}</option>  
                                        @endif
                                    @endforeach
                                </select>
                                
                                <label for="paterno">Apellido paterno</label>
                                <input type="text" class="form-control" id="paterno" name="paterno" 
                                required value="{{ $contacto->paterno }}">

                                <label for="materno">Apellido materno</label>
                                <input type="text" class="form-control" id="materno" name="materno" 
                                required value="{{ $contacto->materno }}">

                                <label for="nombre">Nombre</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" 
                                required value="{{ $contacto->nombre }}">

                                <label for="telefono">Telefono</label>
                                <input type="text" class="form-control" id="telefono" name="telefono" 
                                required value="{{ $contacto->telefono }}">

                                <label for="correo">Correo electronico</label>
                                <input type="text" class="form-control" id="correo" name="correo" 
                                required value="{{ $contacto->email }}">
                                <br>
                                <button class="btn btn-warning">Actualizar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection