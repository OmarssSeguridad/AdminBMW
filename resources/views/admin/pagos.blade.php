@extends('admin.layout.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
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
                          <th scope="col">Accion</th>
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
                        <tr>
                        @endforeach

                      </tbody>
                    </table>
            
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
