@extends('admin.layout.main')

@section('content')
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
                                        <select name="id_producto" class="form-control" placeholder="Seleciona">
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
                                        <input type="number" class="form-control" placeholder="1" maxlength="50" name="cantidad" value="{{ old('cantidad') }}" autofocus >
                                            @if ($errors->has('cantidad'))
                                                <span class="alert alert-danger">
                                                    <strong>{{ $errors->first('cantidad') }}</strong>
                                                </span>
                                            @endif
                                    </div>
                                </div>
                                <div class="col-md-4 px-1">
                                    <div class="form-group{{ $errors->has('precio') ? ' has-error' : '' }}">
                                        <label class="label">Precio</label>
                                        <input type="number" class="form-control" placeholder="1" maxlength="50" name="precio" value="{{ old('precio') }}" autofocus >
                                            @if ($errors->has('precio'))
                                                <span class="alert alert-danger">
                                                    <strong>{{ $errors->first('precio') }}</strong>
                                                </span>
                                            @endif
                                    </div>
                                </div>
                                <div class="col-md-4 px-1">
                                    <div class="form-group{{ $errors->has('id_modoPago') ? ' has-error' : '' }}">
                                        <label class="label">Modo Pago</label>
                                        <select name="id_modoPago" class="form-control" placeholder="Seleciona">
                                            @foreach($modoPago as $modoPagos)
                                            <option value="{{$modoPagos->id_modoPago}}">{{$modoPagos->name}}</option>
                                            @endforeach
                                        </select>
                                            @if ($errors->has('id_modoPago'))
                                                <span class="alert alert-danger">
                                                    <strong>{{ $errors->first('id_modoPago') }}</strong>
                                                </span>
                                            @endif
                                    </div>
                                </div>
                                </div>                            

                                <button type="submit" class="btn btn-info btn-fill pull-right" >Crear Usuario</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
