@extends('admin.layout.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Categorias</div>

                <div class="card-body">
                    <table class="table">
                      <thead class="thead-dark">
                        <tr>
                          <th scope="col">ID</th>
                          <th scope="col">Nombre </th>
                          <th scope="col">Dirección</th>
                          <th scope="col">Fecha N.</th>
                          <th scope="col">Teléfono</th>
                          <th scope="col">Correo</th>
                          <th scope="col">Acciones</th> 

                        </tr>
                      </thead>
                      <tbody>
                        @foreach($motociclistas as $motociclista)
                        <tr>
                          <th scope="row">{{$motociclista->id_motociclista}}</th>
                          <td>{{$motociclista->name}} {{$motociclista->ap}} {{$motociclista->am}}</td>
                          <td>{{$motociclista->direccion}}</td>
                          <td>{{$motociclista->fecNac}}</td>
                          <td>{{$motociclista->telefono}}</td>
                          <td>{{$motociclista->email}}</td>
                          <td>
                            <form action="{{ route('motociclista.destroy', $motociclista->id_motociclista)}}" method="post">
                              @csrf
                              @method('PUT')
                              <a href="{{ route('motociclista.edit',  $motociclista->id_motociclista) }}" class="edit" title="Editar" data-toggle="tooltip"><i class=" material-icons">&#xE254;</i></a>
                              <button type="submit" class="btn btn-link edit" title="Eliminar" data-toggle="tooltip"> <i class="material-icons">&#xE872;</i></button>
                            </form>
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
@endsection
