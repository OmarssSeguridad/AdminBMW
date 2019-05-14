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
                          <th scope="col" colspan="2">Acciones</th> 

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
                             <form action="{{ route('producto.edit',  $producto->id_producto) }}" method="PUT">
                                {{ csrf_field() }}
                                {{ method_field('PUT') }}
                                <button type="submit"class="btn btn-info btn-fill pull-right"><i class="fa fa-edit"></i></button>
                            </form>
                            </td>
                            <td>
                            <form  method="DELETE"> 
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}

                                <button type="submit" class="btn btn-danger btn-fill pull-right"><i class="fa fa-trash-o" aria-hidden="true"></i> </button>
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
