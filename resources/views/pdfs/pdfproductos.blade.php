<!DOCTYPE html>
<html>
<head>

</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Productos</div>

                <div class="card-body">
                    <table class="table">
                      <thead class="thead-dark">
                        <tr>
                          <th scope="col">ID</th>
                          <th scope="col">Nombre </th>
                          <th scope="col">Precio</th>
                          <th scope="col">Stock</th>
                          <th scope="col">Categoria</th>
                          <th scope="col">Detalle</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($productos as $producto)
                        <tr>
                          <th scope="row">{{$producto->id_producto}}</th>
                          <td>{{$producto->name}} </td>
                          <td>{{$producto->precio}}</td>
                          <td>{{$producto->stock}}</td>
                          <td>{{$producto->categoria}}</td>
                          <td>{{$producto->detalle}}</td>

                        </tr>
                        @endforeach

                      </tbody>
                    </table>
            
                </div>
            </div>
        </div>
    </div>
    <p align="center">BMW MOTORRAD CLUB METEPEC A.C.</p>

</div>



</body>
</html>
