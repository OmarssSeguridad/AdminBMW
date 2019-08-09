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
                          <th scope="col" colspan="2">Acciones</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($categorias as $categoria)
                        <tr>
                          <th scope="row">{{$categoria->id_categoria}}</th>
                          <td>{{$categoria->name}}</td>
                          <td>{{$categoria->detalle}}</td>

                          <td>
                              <form action="{{ route('Categoria.edit',  $categoria->id_categoria) }}" method="PUT">
                                {{ csrf_field() }}
                                {{ method_field('PUT') }}
                                <button type="submit"class="btn btn-info btn-fill pull-right"><i class="fa fa-edit"></i></button>
                            </form>
                            </td>
                            <td>
                           <form action="{{ route('Categoria.destroy', $categoria->id_categoria)}}" method="post"> 
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
