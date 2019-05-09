@extends('admin.layout.main')

@section('content')
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                <h4 class="card-title" style="font-family: 'Montserrat';">Editar Usuario</h4>
                                </div>
                                <div class="card-body">
                                 <form class="form-horizontal" role="form" method="POST" action="{{ route('altaUsuario') }}">

                                {{ csrf_field() }}
                                        <div class="row">
                                            <div class="col-md-4 px-1">
                                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                                    <label class="label">Nombre Completo</label>
                                                    <input type="text" class="form-control" placeholder="Nombre" maxlength="50" name="name" value="{{ old('name') }}" autofocus >
                                                        @if ($errors->has('name'))
                                                            <span class="alert alert-danger">
                                                                <strong>{{ $errors->first('name') }}</strong>
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
                                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                                    <label class="label">Contraseña</label>
                                                    <input type="password" class="form-control" placeholder="***" maxlength="50" name="password" value="{{ old('password') }}" autofocus >
                                                        @if ($errors->has('password'))
                                                            <span class="alert alert-danger">
                                                                <strong>{{ $errors->first('password') }}</strong>
                                                            </span>
                                                        @endif
                                                </div>
                                            </div>
                                            <div class="col-md-4 px-1">
                                                <div class="form-group{{ $errors->has('tipoUser') ? ' has-error' : '' }}">
                                                <label class="label">Tipo Usario</label>
                                                <select name="tipoUser" class="form-control" placeholder="Seleciona">
                                                    <option value="admin">Administrador</option>
                                                    <option value="user">Usuario</option>
                                                </select>
                                                @if ($errors->has('tipoUser'))
                                                    <span class="alert alert-danger">
                                                        <strong>{{ $errors->first('tipoUser') }}</strong>
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
