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
                          <th scope="col">Nombre Ruta </th>
                          <th scope="col">Detalle Ruta</th>
                          <th scope="col">Nombre</th>
                          <th scope="col">Imagen</th>
                          <th scope="col">Accion</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($ruta as $rutas)
                        <tr>
                          <th scope="row">{{$rutas->id}}</th>
                          <td>{{$rutas->ruta}}</td>
                          <td>{{$rutas->detalle}}</td>
                          <td>{{$rutas->name}} {{$rutas->ap}} {{$rutas->am}}</td>
                          <td>{{$rutas->imagen}}</td>

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
