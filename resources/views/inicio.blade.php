@extends('layout/plantilla')

@section('tituloPagina', 'Crud con laravel 8')

@section('contenido')
    <div class="row">
        <div class="col mt-5">
            <div class="card">
                <h5 class="card-header">CRUD con Laravel 8 y MySQL</h5>
                <div class="card-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                @if ($mensaje = Session::get('success'))
                                    <div class="alert alert-success" role="alert">
                                        {{$mensaje}}
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                  <h5 class="card-title text-center">Listado de personas en el sistema</h5>
                  <p>
                      <a href="{{route("personas.create")}}" class="btn btn-outline-info"><i class="fa-solid fa-user-plus me-2"></i>Agregar nueva persona</a>
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
                                            <td>{{$item->apellido_paterno}}</td>
                                            <td>{{$item->apellido_materno}}</td>
                                            <td>{{$item->nombre}}</td>
                                            <td>{{$item->fecha_nacimiento}}</td>
                                            <td>
                                                <form action="{{route('personas.edit', $item->id)}}" method="GET">
                                                    <button class="btn btn-outline-warning btn-sm">
                                                        <i class="fa-solid fa-user-pen"></i>
                                                    </button>
                                                </form>
                                            </td>
                                            <td>
                                                <form action="{{route('personas.show', $item->id)}}" method="GET">
                                                    <button class="btn btn-outline-danger btn-sm">
                                                        <i class="fa-solid fa-user-xmark"></i>
                                                    </button>
                                                </form>
                                            </td>
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