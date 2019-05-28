@extends('admin.layout.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Pagos Registrados</div>

                <div class="card-body">
                    <table class="table">
                      <thead class="thead-dark">
                        <tr>
                          <th scope="col">ID</th>
                          <th scope="col">Motociclista </th>
                          <th scope="col">Fecha</th>
                          <th scope="col">Modo de Pago</th>
                          <th scope="col">Producto</th>
                          <th scope="col">Cantidad</th>
                          <th scope="col">Precio</th>
                          <th scope="col" colspan="3">Accion</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($pagos as $pago)
                        <tr>
                          <th scope="row">{{$pago->id}}</th>
                          <td>{{$pago->name}} {{$pago->ap}} {{$pago->am}}</td>
                          <td>{{$pago->fecha}}</td>
                          <td>{{$pago->modopago}}</td>
                          <td>{{$pago->producto}}</td>
                          <td>{{$pago->cantidad}}</td>
                          <td>{{$pago->precio}}</td>
                          <td>
                             
                                
                            <a href="{{ route('pago.edit',  $pago->id) }}"  class="btn btn-info btn-fill pull-right"><i class="fa fa-edit"></i></a>
                            
                          </td>
                          <td>
                            <form action="{{'/admin/bajaPago/'.$pago->id.'/'.$pago->pago }}" method="post"> 
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}

                                <button type="submit" class="btn btn-danger btn-fill pull-right"><i class="fa fa-trash-o" aria-hidden="true"></i> </button>
                            </form> 
                          </td>
                          <td>
                            <form action="{{'/admin/Pagos/imp/'.$pago->id }}" method="get"> 
                                {{ csrf_field() }}

                                <button type="submit" class="btn btn-success btn-fill pull-right"><i class="fa fa-download" aria-hidden="true"></i> </button>
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
