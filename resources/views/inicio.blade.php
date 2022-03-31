@extends('layout/plantilla')

@section('tituloPagina', 'Crud con laravel 8')

@section('contenido')
    <div class="row">
        <div class="col mt-5">
            <div class="card">
                <h5 class="card-header">CRUD con Laravel 8 y MySQL</h5>
                <div class="card-body">
                  <h5 class="card-title text-center">Listado de personas en el sistema</h5>
                  <p>
                      <a href="{{route("personas.create")}}" class="btn btn-outline-info">Agregar nueva persona</a>
                  </p>
                  <hr>
                  <p class="card-text">
                      <div class="table table-responsive">
                          <table class="table table-sm table-bordered">
                              <thead>
                                  <th>Apellido Paterno</th>
                                  <th>Apellido Materno</th>
                                  <th>Nombre</th>
                                  <th>Fecha de Nacimiento</th>
                                  <th>Editar</th>
                                  <th>Eliminar</th>
                              </thead>
                              <tbody>
                                    @foreach ($datos as $item)  
                                        <tr>
                                            <th>{{$item->apellido_paterno}}</th>
                                            <th>{{$item->apellido_materno}}</th>
                                            <th>{{$item->nombre}}</th>
                                            <th>{{$item->fecha_nacimiento}}</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    @endforeach
                              </tbody>
                          </table>
                      </div>
                  </p>
                </div>
            </div>
        </div>
    </div>
@endsection