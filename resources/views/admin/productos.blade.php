@extends('admin.layout.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Productos</div>

                <div class="card-body">
                    <table class="table">
                      <thead class="thead-dark">
                        <tr>
                          <th scope="col">ID</th>
                          <th scope="col">Nombre </th>
                          <th scope="col">Precio</th>
                          <th scope="col">Stock</th>
                          <th scope="col">Categoria</th>
                          <th scope="col">Acciones</th> 

                        </tr>
                      </thead>
                      <tbody>
                        @foreach($productos as $producto)
                        <tr>
                          <th scope="row">{{$producto->id_producto}}</th>
                          <td>{{$producto->name}} </td>
                          <td>{{$producto->precio}}</td>
                          <td>{{$producto->stock}}</td>
                          <td>{{$producto->categoria}}</td>
                          <td>
                            <form action="{{ route('producto.destroy', $producto->id_producto)}}" method="post">
                              @csrf
                              @method('PUT')
                              <a href="{{ route('producto.edit',  $producto->id_producto) }}" class="edit" title="Editar" data-toggle="tooltip"><i class=" material-icons">&#xE254;</i></a>
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
