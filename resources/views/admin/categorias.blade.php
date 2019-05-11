@extends('admin.layout.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Categorias</div>

                <div class="card-body">
                    <table class="table">
                      <thead class="thead-dark">
                        <tr>
                          <th scope="col">ID</th>
                          <th scope="col">Nombre </th>
                          <th scope="col">Detalle</th>
                          <th scope="col">Acciones</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($categorias as $categoria)
                        <tr>
                          <th scope="row">{{$categoria->id_categoria}}</th>
                          <td>{{$categoria->name}}</td>
                          <td>{{$categoria->detalle}}</td>
                          <td>
                            <form action="{{ route('Categoria.destroy', $categoria->id_categoria)}}" method="post">
                              @csrf
                              @method('PUT')
                              <a href="{{ route('Categoria.edit',  $categoria->id_categoria) }}" class="edit" title="Editar" data-toggle="tooltip"><i class=" material-icons">&#xE254;</i></a>
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
