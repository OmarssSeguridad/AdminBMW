@extends('admin.layout.main')

@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                    <h4 class="card-title" style="font-family: 'Montserrat';">Registrar Pagos</h4>
                    </div>
                    <div class="card-body">
                     <form class="form-horizontal" role="form" method="POST" action="{{ route('altaPago') }}">

                    {{ csrf_field() }}
                            <div class="row">
                                 <div class="col-md-4 px-1">
                                    <div class="form-group{{ $errors->has('fecha') ? ' has-error' : '' }}">
                                        <label class="label">Fecha</label>
                                        <input type="date" class="form-control" placeholder="1" maxlength="50" name="fecha" value="{{ old('fecha') }}" autofocus >

                                            @if ($errors->has('fecha'))
                                                <span class="alert alert-danger">
                                                    <strong>{{ $errors->first('fecha') }}</strong>
                                                </span>
                                            @endif
                                    </div>
                                </div>
                                <div class="col-md-4 px-1">
                                    <div class="form-group{{ $errors->has('id_motociclista') ? ' has-error' : '' }}">
                                        <label class="label">Motociclista</label>
                                        <select name="id_motociclista" class="form-control" placeholder="Seleciona">
                                            @foreach($motociclista as $motociclistas)
                                            <option value="{{$motociclistas->id_motociclista}}">{{$motociclistas->name}} {{$motociclistas->ap}} {{$motociclistas->am}}</option>
                                            @endforeach
                                        </select>
                                            @if ($errors->has('id_motociclista'))
                                                <span class="alert alert-danger">
                                                    <strong>{{ $errors->first('id_motociclista') }}</strong>
                                                </span>
                                            @endif
                                    </div>
                                </div>
                                <div class="col-md-4 px-1">
                                    <div class="form-group{{ $errors->has('id_producto') ? ' has-error' : '' }}">
                                        <label class="label">Productos</label>
                                        <select id="id_producto" name="id_producto" class="form-control" placeholder="Seleciona">
                                            @foreach($producto as $productos)
                                            <option value="{{$productos->id_producto}}">{{$productos->name}}</option>
                                            @endforeach
                                        </select>
                                            @if ($errors->has('id_producto'))
                                                <span class="alert alert-danger">
                                                    <strong>{{ $errors->first('id_producto') }}</strong>
                                                </span>
                                            @endif
                                    </div>
                                </div>
                                <div class="col-md-4 px-1">
                                    <div class="form-group{{ $errors->has('cantidad') ? ' has-error' : '' }}">
                                        <label class="label">Cantidad</label>
                                        <input id="cantidad" type="number" class="form-control" placeholder="1" maxlength="50" name="cantidad" value="{{ old('cantidad') }}" autofocus >
                                            @if ($errors->has('cantidad'))
                                                <span class="alert alert-danger">
                                                    <strong>{{ $errors->first('cantidad') }}</strong>
                                                </span>
                                            @endif
                                          
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <div class="form-group{{ $errors->has('cantidad') ? ' has-error' : '' }}">
                                        <label class="label">Agregar</label><br>
                                            <button id="adicionar" class="btn btn-success btn-fill pull-right" type="button"><i class="fa fa-shopping-cart" aria-hidden="true" type="submit"></i></button>
                                    </div>
                                </div>
                                </div>
                                <label class="label">Productos por comprar</label>
                                <div class="container">
                                    <table  id="mytable" class="table">
                                        <thead class="thead-dark">
                                            <tr>
                                              <th scope="col">Producto</th>
                                              <th scope="col">Cantidad</th>
                                              <th scope="col">Precio</th>
                                              <th scope="col">Accion</th>
                                            </tr>
                                        </thead>
                                    </table>
                                    <p>Elementos en la Tabla:<div id="adicionados"></div></p>
                                </div>
                                <button id="adicionar" type="submit" class="btn btn-info btn-fill pull-right">Crear Pago</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    
  $(document).ready(function() {
//obtenemos el valor de los input

    $('#adicionar').click(function() {
      var temp = document.getElementById("id_producto").value;
         pos=temp.indexOf("/"); //posicion del caracter
         id=temp.substring(0,pos); //value de id_producto
         p=temp.substring(pos+1,temp.length); //value de precio
      var id_producto = id;
      var nombre  =  $('select[name="id_producto"] option:selected').text();
      var cantidad = document.getElementById("cantidad").value;
      var precio = parseInt(cantidad)*parseInt(p);
      var i = 1; //contador para asignar id al boton que borrara la fila
      var fila = '<tr id="row' + i + '"><td>' + nombre + '</td><td>' + cantidad + '</td><td>' + precio + '</td><td><button type="button" name="remove" id="' + i + '" class="btn btn-danger btn_remove">Quitar</button></td></tr>'; //esto seria lo que contendria la fila

      i++;

      $('#mytable tr:first').after(fila);
        $("#adicionados").text(""); //esta instruccion limpia el div adicioandos para que no se vayan acumulando
        var nFilas = $("#mytable tr").length;
        $("#adicionados").append(nFilas - 1);
        //le resto 1 para no contar la fila del header
        document.getElementById("cantidad").value ="";
        /*
        document.getElementById("precio").value = "";
        document.getElementById("id_producto").value = "";
        document.getElementById("id_producto").focus();
        */
      });
    $(document).on('click', '.btn_remove', function() {
      var button_id = $(this).attr("id");
        //cuando da click obtenemos el id del boton
        $('#row' + button_id + '').remove(); //borra la fila
        //limpia el para que vuelva a contar las filas de la tabla
        $("#adicionados").text("");
        var nFilas = $("#mytable tr").length;
        $("#adicionados").append(nFilas - 1);
      });
});



</script>
@endsection
