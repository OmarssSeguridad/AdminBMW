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
                          <th scope="col">Tipo Pago </th>
                          <th scope="col">Descripcion</th>
                          <th scope="col" colspan="2">Accion</th>

                        </tr>
                      </thead>
                      <tbody>
                        @foreach($modoPagos as $modoPago)
                        <tr>
                          <th scope="row">{{$modoPago->id_modopago}}</th>
                          <td>{{$modoPago->name}}</td>
                          <td>{{$modoPago->detalle}}</td>
                          <td>
                             <form method="PUT" action="{{'/admin/editaModoPago/'.$modoPago->id_modopago }}">
                                {{ csrf_field() }}
                                {{ method_field('PUT') }}

                                <button type="submit"class="btn btn-info btn-fill pull-right"><i class="fa fa-edit"></i></button>
                            </form>
                            </td>
                            <td>
                            <form  method="post" action="{{'bajaModoPago/'.$modoPago->id_modopago}}"> 
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
