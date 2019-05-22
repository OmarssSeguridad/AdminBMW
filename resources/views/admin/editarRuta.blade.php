@extends('admin.layout.main')

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                    <h4 class="card-title" style="font-family: 'Montserrat';">Registrar Ruta</h4>
                    </div>
                    <div class="card-body">
                     <form class="form-horizontal" role="form" method="post" action="{{'/admin/editarRuta/'.$detalleRuta->id_detalleruta}}">

                    {{ csrf_field() }}
                    {{ method_field('PUT') }}

                            <div class="row">
                                <div class="col-md-4 px-1">
                                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                        <label class="label">Nombre de Ruta</label>
                                        <input type="text" class="form-control" placeholder="Nombre" maxlength="50" name="name" value="{{ old('name', $ruta->name) }}" autofocus >
                                            @if ($errors->has('name'))
                                                <span class="alert alert-danger">
                                                    <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                            @endif
                                    </div>
                                </div>
                                <div class="col-md-4 px-1">
                                    <div class="form-group{{ $errors->has('detalle') ? ' has-error' : '' }}">
                                        <label class="label">Detalle de Ruta</label>
                                        <input type="text" class="form-control" placeholder="Chiltepec-Toluca" maxlength="70" name="detalle" value="{{ old('detalle', $ruta->detalle) }}" autofocus >
                                            @if ($errors->has('detalle'))
                                                <span class="alert alert-danger">
                                                    <strong>{{ $errors->first('detalle') }}</strong>
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
                                    <div class="form-group">
                                        <label class="label">Evidencia</label>
                                        <input type="file" class="form-control-file" value="{{old('evidencia',$ruta->evidencia)}}" name="evidencia" class="form-control" >
                                        </br>
                                    </div>
                                </div>


                        </div>

                                <button type="submit" class="btn btn-info btn-fill pull-right" >Editar Ruta</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
