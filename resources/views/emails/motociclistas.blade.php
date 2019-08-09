<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
  <link rel="stylesheet" type="text/css" href="{{ asset('/css/estilosOmi.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.min.css') }}">
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">
    <img src="{{asset('/img/logos/logoBMWMotorrad.jpg')}}" alt="logo" style="width:100px;"> 
    </a>  
	<div class="collapse navbar-collapse" id="navbarNavDropdown">
	    <h5 class="h5" style="color: white;">BMW Club Motorrad Metepec</h5>
	</div>
	</nav>

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
</body>
</html>
