@extends('admin.layout.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Motociclistas</div>

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
                          <th scope="col" colspan="2">Acciones</th> 

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
                             <form action="{{ route('motociclista.edit',  $motociclista->id_motociclista) }}" method="PUT">
                                {{ csrf_field() }}
                                {{ method_field('PUT') }}
                                <button type="submit"class="btn btn-info btn-fill pull-right"><i class="fa fa-edit"></i></button>
                            </form>
                            </td>
                            <td>
                           <form action="{{'/admin/bajaMotociclista/'.$motociclista->id_motociclista}}" method="post"> 
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
