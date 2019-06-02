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
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-comments fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">1</div>
                                    <div>Comentarios</div>
                                </div>
                            </div>
                        </div>
                        <a href="{!! asset('admin/grafica_areas') !!}">
                            <div class="panel-footer">
                                <span class="pull-left">Ver histórico de comentarios</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-tasks fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">2</div>
                                    <div>Indices de Aprobación</div>
                                </div>
                            </div>
                        </div>
                        <a href="{!! asset('admin/grafica_barras') !!}">
                            <div class="panel-footer">
                                <span class="pull-left">Comportamiento general</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-shopping-cart fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">3</div>
                                    <div>Ventas</div>
                                </div>
                            </div>
                        </div>
                        <a href="{!! asset('admin/grafica_pie') !!}">
                            <div class="panel-footer">
                                <span class="pull-left">Ventas mensuales </span>
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
                                <div class="col-xs-9 text-right">
                                    <div class="huge">4</div>
                                    <div>Base de Datos</div>
                                </div>
                            </div>
                        </div>
                        <a href="{!! asset('admin/grafica_3d') !!}">
                            <div class="panel-footer">
                                <span class="pull-left">Gráfica con datos DB</span>
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