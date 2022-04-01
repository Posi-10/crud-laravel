@extends('layout/plantilla')

@section('tituloPagina', 'Eliminar registro')

@section('contenido')
    <div class="row">
        <div class="col mt-5">
            <div class="card">
                <h5 class="card-header">Eliminar una persona</h5>
                <div class="card-body">
                  <p class="card-text">
                    <div class="alert alert-danger" role="alert">
                        Estas seguro de eliminar este registro!!!
                        <table class="table table-sm table-hover mt-2 table-bordered">
                            <thead>
                                <th>Apellido Paterno</th>
                                <th>Apellido Materno</th>
                                <th>Nombre</th>
                                <th>Fecha de Nacimienro</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{$personas->apellido_paterno}}</td>
                                    <td>{{$personas->apellido_materno}}</td>
                                    <td>{{$personas->nombre}}</td>
                                    <td>{{$personas->fecha_nacimiento}}</td>
                                </tr>
                            </tbody>
                        </table>
                        <hr>
                        <form action="{{route('personas.destroy', $personas->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <a href="{{route('personas.index')}}" class="btn btn-outline-warning"><i class="fa-solid fa-person-walking-arrow-loop-left me-2"></i>Regresar</a>
                            <button class="btn btn-outline-danger"><i class="fa-solid fa-user-xmark me-2"></i>Eliminar</button>
                        </form>
                    </div>
                  </p>
                </div>
            </div>
        </div>
    </div>
@endsection