@extends('layout/plantilla')

@section('tituloPagina', 'Actualizar registro')

@section('contenido')
    <div class="row">
        <div class="col mt-5">
            <div class="card">
                <h5 class="card-header">Actualizar persona</h5>
                <div class="card-body">
                    <p class="card-text">
                        <form action="{{route('personas.update', $personas->id)}}" method="POST">
                            @csrf
                            @method("PUT")
                            <label for="">Apellido Paterno</label>
                            <input type="text" name="apellido_paterno" class="form-control" required value="{{$personas->apellido_paterno}}">
                            <label for="">Apellido Materno</label>
                            <input type="text" name="apellido_materno" class="form-control" required value="{{$personas->apellido_materno}}">
                            <label for="">Nombre</label>
                            <input type="text" name="nombre" class="form-control" required value="{{$personas->nombre}}">
                            <label for="">Fecha de Nacimiento</label>
                            <input type="date" name="fecha_nacimiento" class="form-control" required value="{{$personas->fecha_nacimiento}}">
                            <br>
                            <a href="{{route('personas.index')}}" class="btn btn-outline-warning"><i class="fa-solid fa-person-walking-arrow-loop-left me-2"></i>Regresar</a>
                            <button class="btn btn-outline-info"><i class="fa-solid fa-user-pen me-2"></i>Actualizar</button>
                        </form>
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection