@extends('admin.layout.main')

	@section('content')
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                	<h1 class="page-header">Gŕaficas</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>


            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-support fa-5x"></i>
                                </div>
                            </div>
                        </div>
                        <a href="{!! asset('admin/grafica_3d') !!}">
                            <div class="panel-footer">
                                <span class="pull-left">Productos Vendidos</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-support fa-5x"></i>
                                </div>
                            </div>
                        </div>
                        <a href="{!! asset('admin/grafica_3ddin') !!}">
                            <div class="panel-footer">
                                <span class="pull-left">Dinero Total de Ventas</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                
            </div>
            <!-- /.row -->
            
            <!-- /.row -->
        </div> 
    @endsection()