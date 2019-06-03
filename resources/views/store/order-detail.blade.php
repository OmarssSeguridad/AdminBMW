@extends('admin.layout.main')

@section('content')

	<div class="container text-center">
		<div class="page-header">
			<h1><i class="fa fa-shopping-cart"></i> Detalle del pedido</h1>
		</div>
		<form class="form-horizontal" role="form" method="POST" action="{{ route('altaPago') }}">
		{{ csrf_field() }}
		<div class="page">
			<div class="table-responsive">
				<h3>Datos del usuario</h3>
				<table class="table table-striped table-hover table-bordered">
					<tr>
						<td>Fecha:</td>
						<td>
							<input type="date" id="fecha" name="fecha" class="form-control" value="<?php echo date("yyyy-MM-dd"); ?>"required/> 
						</td>
					</tr>
					<tr>
						<td>Nombre:</td>
						<td><select  name="id_motociclista" class="form-control" placeholder="Seleciona" onchange="cambiar_combo(this.value);">
                            @foreach($motociclista as $motociclistas)
                            <option value="{{$motociclistas->id_motociclista}}">{{$motociclistas->name}} {{$motociclistas->ap}} {{$motociclistas->am}}</option>
                            @endforeach
                        </select>
						</td>
					</tr>
					<tr><td>Correo:</td>
						<td><input name="correo" class="form-control" value="" id="correo"></td>
					</tr>
					<tr>
						<td>Modo de Pago:</td>
						<td><select name="modoPagos" class="form-control" placeholder="Seleciona" >
                            @foreach($modoPago as $modoPagos)
                            <option value="{{$modoPagos->id}}">{{$modoPagos->name}}</option>
                            @endforeach
                        </select>
                        </td>
					</tr>
				</table>
			</div>
			<div class="table-responsive">
				<h3>Datos del pedido</h3>
				<table class="table table-striped table-hover table-bordered">
					<tr>
						<th>Producto</th>
						<th>Precio</th>
						<th>Cantidad</th>
						<th>Subtotal</th>
					</tr>
					@foreach($cart as $item)
						<tr>
							<td>{{ $item->name }}</td>
							<td>${{ number_format($item->precio,2) }}</td>
							<td>{{ $item->cantidad }}</td>
							<td>${{ number_format($item->precio * $item->cantidad,2) }}</td>
						</tr>
					@endforeach
				</table><hr>
				<h3>
					<span class="label label-success">
						Total: ${{ number_format($total, 2) }}
					</span>
				</h3><hr>
				<p>
					<a href="{{ route('cart-show') }}" class="btn btn-primary">

						<i class="fa fa-chevron-circle-left"></i> Regresar
					</a>
					<a href="" class="btn btn-warning">
						Proceder <i class="fa fa-cc-paypal fa-2x"></i>
					</a>
				</p>
			</div>
		</div>
	</form>

	</div>

@stop