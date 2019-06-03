@extends('admin.layout.main')

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                    <h4 class="card-title" style="font-family: 'Montserrat';">Seleccionar Articulos</h4>
                    </div>
                    <div class="card-body">

                            <div class="row">
                                 

                                <div class="card-body">
                                    <table class="table">
                                      <thead class="thead-dark">
                                        <tr>
                                          <th scope="col">ID</th>
                                          <th scope="col">Nombre </th>
                                          <th scope="col">Precio</th>
                                          <th scope="col">Categoria</th>
                                          <th scope="col">Acciones</th> 
                                        </tr>
                                      </thead>
                                      <tbody>
                                        @foreach($productos as $producto)
                                        <tr>
                                          <th scope="row">{{$producto->id_producto}}</th>
                                          <td>{{$producto->name}}</td>
                                          <td>{{$producto->precio}}</td>
                                          <td>{{$producto->categoria}}</td>
                                         <td>
                                            <a class="btn btn-success" href="{{ route('cart-add', $producto->id_producto) }}">
                                            <i class="fa fa-cart-plus"></i>
                                        </tr>
                                        @endforeach
                                      </tbody>
                                    </table>
                                </div>

                                </div>                            

                                <button type="submit" class="btn btn-info btn-fill pull-right" >Crear Pago</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
