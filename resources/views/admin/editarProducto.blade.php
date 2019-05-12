@extends('admin.layout.main')

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                    <h4 class="card-title" style="font-family: 'Montserrat';">Registrar Producto</h4>
                    </div>
                    <div class="card-body">
                     <form action="{{ route('producto.update', $producto->id_producto) }}" method="POST" >
                        @csrf
                        @method('PUT')
                            <div class="row">
                                <div class="col-md-4 px-1">
                                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                        <label class="label">Producto</label>
                                        <input type="text" class="form-control" placeholder="Camisa" maxlength="50" name="name" value="{{ old('name',$producto->name) }}" autofocus >
                                            @if ($errors->has('name'))
                                                <span class="alert alert-danger">
                                                    <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                            @endif
                                    </div>
                                </div>
                                <div class="col-md-4 px-1">
                                    <div class="form-group{{ $errors->has('precio') ? ' has-error' : '' }}">
                                        <label class="label">Precio</label>
                                        <input type="number" class="form-control" placeholder="$123.00" maxlength="50" step="0.10" name="precio" value="{{ old('precio',$producto->precio) }}" autofocus >
                                            @if ($errors->has('precio'))
                                                <span class="alert alert-danger">
                                                    <strong>{{ $errors->first('precio') }}</strong>
                                                </span>
                                            @endif
                                    </div>
                                </div>
                                <div class="col-md-4 px-1">
                                    <div class="form-group{{ $errors->has('stock') ? ' has-error' : '' }}">
                                        <label class="label">Stock</label>
                                        <input type="number" class="form-control" placeholder="Stock" maxlength="50" name="stock" value="{{ old('stock',$producto->stock) }}" autofocus >
                                            @if ($errors->has('stock'))
                                                <span class="alert alert-danger">
                                                    <strong>{{ $errors->first('stock') }}</strong>
                                                </span>
                                            @endif
                                    </div>
                                </div>
                                <div class="col-md-4 px-1">
                                    <div class="form-group{{ $errors->has('id_categoria') ? ' has-error' : '' }}">
                                        <label class="label">Categoria</label>
                                        <!--MODIFICAR EN CUANTO ESTEN LAS CATEGORIAS "Agregar foreach para options"-->
                                            <select name="id_categoria" class="form-control" placeholder="Seleciona">
                                                <option value="{{$cselect->id_categoria}}">{{$cselect->name}}</option>
                                                @foreach($categorias as $categoria)
                                                <option value="{{$categoria->id_categoria}}">{{$categoria->name}}</option>
                                                @endforeach
                                            </select>
                                            @if ($errors->has('id_categoria'))
                                                <span class="alert alert-danger">
                                                    <strong>{{ $errors->first('id_categoria') }}</strong>
                                                </span>
                                            @endif
                                    </div>
                                </div>                                
                                
                            </div>
                                <button type="submit" class="btn btn-info btn-fill pull-right" >Editar producto</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
