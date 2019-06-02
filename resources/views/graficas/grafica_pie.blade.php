@extends('admin.layout.main')
	@section('content')
	<!-- Gráficas con Highcharts.js -->
    <script src="{!! asset('code/highcharts-3d.js') !!}"></script>
    <script src="{!! asset('code/highcharts.js') !!}"></script>
    <script src="{!! asset('code/modules/exporting.js') !!}"></script>
    <script src="{!! asset('code/modules/export-data.js') !!}"></script>


        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                	<h1 class="page-header">Gráfica de Pie</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        	<a class="btn btn-outline btn-primary btn-lg  pull-right" href="graficas">Regresar a las Gŕaficas</a>
                            <h4>Esta gráfica las ventas del mes de Junio</h4>
                            <br />
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">

                            <div id="container" style="height: 400px"></div>
                           
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div> 

        <script type="text/javascript">

Highcharts.chart('container', {
    chart: {
        type: 'pie',
        options3d: {
            enabled: true,
            alpha: 45,
            beta: 0
        }
    },
    title: {
        text: 'Porcentaje de ventas del autos en el mes de Junio por marca'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            depth: 35,
            dataLabels: {
                enabled: true,
                format: '{point.name}'
            }
        }
    },
    series: [{
        type: 'pie',
        name: 'Porcentaje',
        data: [
            ['Nissan', 45.0],
            ['VW', 26.8],
            {
                name: 'Mazda',
                y: 12.8,
                sliced: true,
                selected: true
            },
            ['Chevrolette', 8.5],
            ['Ford', 6.2],
            ['Toyota', 0.7]
        ]
    }]
});
        </script>

    @endsection()