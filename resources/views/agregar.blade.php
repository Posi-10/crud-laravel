@extends('layout/plantilla')

@section('tituloPagina', 'Crear un nuevo registro')

@section('contenido')
    <div class="row">
        <div class="col mt-5">
            <div class="card">
                <h5 class="card-header">Agregar nueva persona</h5>
                <div class="card-body">
                  <p class="card-text">
                      <form action="{{route('personas.store')}}" method="POST">
                            @csrf
                            <label for="">Apellido Paterno</label>
                            <input type="text" name="apellido_paterno" class="form-control" required>
                            <label for="">Apellido Materno</label>
                            <input type="text" name="apellido_materno" class="form-control" required>
                            <label for="">Nombre</label>
                            <input type="text" name="nombre" class="form-control" required>
                            <label for="">Fecha de Nacimiento</label>
                            <input type="date" name="fecha_nacimiento" class="form-control" required>
                            <br>
                            <a href="{{route('personas.index')}}" class="btn btn-outline-warning"><i class="fa-solid fa-person-walking-arrow-loop-left me-2"></i>Regresar</a>
                            <button class="btn btn-outline-success"><i class="fa-solid fa-user-plus me-2"></i>Agregar</button>
                      </form>
                  </p>
                </div>
            </div>
        </div>
    </div>
@endsection