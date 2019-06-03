@extends('admin.layout.main')

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                    <h4 class="card-title" style="font-family: 'Montserrat';">Registrar Motociclista</h4>
                    </div>
                    <div class="card-body">
                     <form class="form-horizontal" role="form" method="POST" action="{{ route('altaMotociclista') }}">

                    {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-4 px-1">
                                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                        <label class="label">Nombre</label>
                                        <input type="text" class="form-control" placeholder="Nombre" maxlength="50" name="name" value="{{ old('name') }}" autofocus >
                                            @if ($errors->has('name'))
                                                <span class="alert alert-danger">
                                                    <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                            @endif
                                    </div>
                                </div>
                                <div class="col-md-4 px-1">
                                    <div class="form-group{{ $errors->has('ap') ? ' has-error' : '' }}">
                                        <label class="label">Apellido Paterno</label>
                                        <input type="text" class="form-control" placeholder="Apellido Paterno" maxlength="50" name="ap" value="{{ old('ap') }}" autofocus >
                                            @if ($errors->has('ap'))
                                                <span class="alert alert-danger">
                                                    <strong>{{ $errors->first('ap') }}</strong>
                                                </span>
                                            @endif
                                    </div>
                                </div>
                                <div class="col-md-4 px-1">
                                    <div class="form-group{{ $errors->has('am') ? ' has-error' : '' }}">
                                        <label class="label">Apellido Materno</label>
                                        <input type="text" class="form-control" placeholder="Apellido Materno" maxlength="50" name="am" value="{{ old('am') }}" autofocus >
                                            @if ($errors->has('am'))
                                                <span class="alert alert-danger">
                                                    <strong>{{ $errors->first('am') }}</strong>
                                                </span>
                                            @endif
                                    </div>
                                </div>
                                <div class="col-md-4 px-1">
                                    <div class="form-group{{ $errors->has('fecNac') ? ' has-error' : '' }}">
                                        <label class="label">Fecha de Nacimiento</label>
                                        <input type="date" class="form-control" name="fecNac" value="{{ old('fecNac') }}" autofocus >
                                            @if ($errors->has('fecNac'))
                                                <span class="alert alert-danger">
                                                    <strong>{{ $errors->first('fecNac') }}</strong>
                                                </span>
                                            @endif
                                    </div>
                                </div>                                
                                <div class="col-md-4 px-1">
                                    <div class="form-group{{ $errors->has('direccion') ? ' has-error' : '' }}">
                                        <label class="label">Direccion</label>
                                        <input type="text" class="form-control" placeholder="Direccion" maxlength="50" name="direccion" value="{{ old('direccion') }}" autofocus >
                                            @if ($errors->has('direccion'))
                                                <span class="alert alert-danger">
                                                    <strong>{{ $errors->first('direccion') }}</strong>
                                                </span>
                                            @endif
                                    </div>
                                </div>
                                <div class="col-md-4 px-1">
                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                        <label class="label" for="email">Correo Electronico</label>
                                        <input type="email" maxlength="50" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}">
                                            @if ($errors->has('email'))
                                                <span class="alert alert-danger">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                    </div>
                                </div>                                          
                                <div class="col-md-4 px-1">
                                    <div class="form-group{{ $errors->has('telefono') ? ' has-error' : '' }}">
                                        <label class="label">Telefono</label>
                                        <input type="number" class="form-control" placeholder="000-0000000" maxlength="10" name="telefono" value="{{ old('telefono') }}" autofocus >
                                            @if ($errors->has('telefono'))
                                                <span class="alert alert-danger">
                                                    <strong>{{ $errors->first('telefono') }}</strong>
                                                </span>
                                            @endif
                                    </div>
                                </div>
                            </div>
                                <button type="submit" class="btn btn-info btn-fill pull-right" >Crear Motociclista</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
