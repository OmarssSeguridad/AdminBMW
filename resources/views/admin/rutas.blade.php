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
                          <th scope="col" colspan="2">Accion</th>
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
                          <td>
                             <form action="{{'/admin/editaRuta/'.$rutas->id}}" method="PUT">
                                {{ csrf_field() }}
                                {{ method_field('PUT') }}

                                <button type="submit"class="btn btn-info btn-fill pull-right"><i class="fa fa-edit"></i></button>
                            </form>
                            </td>
                            <td>
                           <form action="{{'/admin/bajaRuta/'.$rutas->id.'/'.$rutas->idruta }}" method="post"> 
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}

                                <button type="submit" class="btn btn-danger btn-fill pull-right"><i class="fa fa-trash-o" aria-hidden="true"></i> </button>
                            </form> 

                          </td>
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
