@extends('admin.layout.main')


	@section('content')
	<!-- Gráficas con Highcharts.js -->
    <script src="{!! asset('code/highcharts.js') !!}"></script>
    <script src="{!! asset('code/modules/exporting.js') !!}"></script>
    <script src="{!! asset('code/modules/export-data.js') !!}"></script>


        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                	<h1 class="page-header">Ventas</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        	<a class="btn btn-outline btn-primary btn-lg  pull-right" href="graficas">Regresar a las Gŕaficas</a>
                            <h4>Total de ventas de </h4>
                            <br />
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">

        
        <?php
        $campos = "";
        /*foreach($carreras as $carrera){
        $campos = $campos."[ '".$carrera->nombre."' , ".$carrera->tot_alumnos."],";  
        }
        */
        foreach($ventas as $venta){
        $campos = $campos."[ '".$venta->name."' , ".$venta->total."],";  
        }
        ?>

        <?= $campos ?>

<div id="container" style="min-width: 300px; height: 400px; margin: 0 auto"></div>

                           
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
        type: 'column'
    },
    title: {
        text: 'Total de ventas'
    },
    subtitle: {
        text: 'Fecha...'
    },
    xAxis: {
        type: 'category',
        labels: {
            rotation: -45,
            style: {
                fontSize: '13px',
                fontFamily: 'Verdana, sans-serif'
            }
        }
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Total de Ventas'
        }
    },
    legend: {
        enabled: false
    },
    tooltip: {
        pointFormat: 'Total de Ventas: <b>{point.y:.0f} </b>'
    },
    series: [{
        name: 'Population',
        data: [

            <?= $campos ?>
        ],
        dataLabels: {
            enabled: true,
            rotation: -90,
            color: '#FFFFFF',
            align: 'right',
            format: '{point.y:.0f}', // one decimal
            y: 10, // 10 pixels down from the top
            style: {
                fontSize: '13px',
                fontFamily: 'Verdana, sans-serif'
            }
        }
    }]
});
        </script>

    @endsection()