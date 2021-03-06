@extends('admin.layout.main')

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                    <h4 class="card-title" style="font-family: 'Montserrat';">Registrar Categoria</h4>
                    </div>
                    <div class="card-body">
                     <form class="form-horizontal" role="form" method="POST" action="{{ route('altaCategoria') }}">

                    {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-4 px-1">
                                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                        <label class="label">Categoria</label>
                                        <input type="text" class="form-control" placeholder="Anualidad" maxlength="50" name="name" value="{{ old('name') }}" autofocus >
                                            @if ($errors->has('name'))
                                                <span class="alert alert-danger">
                                                    <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                            @endif
                                    </div>
                                </div>
                                <div class="col-md-4 px-1">
                                    <div class="form-group{{ $errors->has('detalle') ? ' has-error' : '' }}">
                                        <label class="label">Detalle</label>
                                        <input type="text" class="form-control" placeholder="Pagos" maxlength="50" name="detalle" value="{{ old('detalle') }}" autofocus >
                                            @if ($errors->has('detalle'))
                                                <span class="alert alert-danger">
                                                    <strong>{{ $errors->first('detalle') }}</strong>
                                                </span>
                                            @endif
                                    </div>
                                </div>                              
                                
                            </div>
                                <button type="submit" class="btn btn-info btn-fill pull-right" >Crear Categoria</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
