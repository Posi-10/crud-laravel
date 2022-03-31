@extends('layout/plantilla')

@section('tituloPagina', 'Crear un nuevo registro')

@section('contenido')
    <div class="row">
        <div class="col mt-5">
            <div class="card">
                <h5 class="card-header">Agregar nuevo</h5>
                <div class="card-body">
                  <p class="card-text">
                      <form action="">
                          <label for="">Apellido Paterno</label>
                          <input type="text" name="apellido_paterno" class="form-control" required>
                          <label for="">Apellido Materno</label>
                          <input type="text" name="apellido_materno" class="form-control" required>
                          <label for="">Nombre</label>
                          <input type="text" name="nombre" class="form-control" required>
                          <label for="">Fecha de Nacimiento</label>
                          <input type="date" name="fecha_nacimiento" class="form-control" required>
                          <br>
                          <a href="{{route('personas.index')}}" class="btn btn-outline-warning">Regresar</a>
                          <button class="btn btn-outline-success">Agregar</button>
                      </form>
                  </p>
                </div>
            </div>
        </div>
    </div>
@endsection