<!DOCTYPE html>
<html>
<head>

</head>
<body>


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

                        </tr>
                        @endforeach
                      </tbody>
                    </table>
            
                </div>
            </div>
        </div>
    </div>
</div>
<p align="center">BMW MOTORRAD CLUB METEPEC A.C.</p>
  </div>



</body>
</html>
