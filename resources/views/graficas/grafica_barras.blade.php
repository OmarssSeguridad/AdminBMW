@extends('admin.layout.main')

	@section('content')
	<!-- Gráficas con Highcharts.js -->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="{!! asset('code/highcharts.js') !!}"></script>
    <script src="{!! asset('code/highcharts-3d.js') !!}"></script>
    <script src="{!! asset('code/modules/exporting.js') !!}"></script>
    <script src="{!! asset('code/modules/export-data.js') !!}"></script>
    
    
    
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                	<h1 class="page-header">Gráfica de Barras</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        	<a class="btn btn-outline btn-primary btn-lg  pull-right" href="graficas">Regresar a las Gŕaficas</a>
                            <h4>Índice de Aprobación .....</h4>
                            <br />
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">


<div id="container_g"></div>
<div id="sliders_g">
    <table>
        <tr>
            <td>Alpha Angle</td>
            <td><input id="alpha" type="range" min="0" max="45" value="15"/> <span id="alpha-value" class="value"></span></td>
        </tr>
        <tr>
            <td>Beta Angle</td>
            <td><input id="beta" type="range" min="-45" max="45" value="15"/> <span id="beta-value" class="value"></span></td>
        </tr>
        <tr>
            <td>Profundidad</td>
            <td><input id="depth" type="range" min="20" max="100" value="50"/> <span id="depth-value" class="value"></span></td>
        </tr>
    </table>
</div>
                           
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

// Set up the chart
var chart = new Highcharts.Chart({
    chart: {
        renderTo: 'container_g',
        type: 'column',
        options3d: {
            enabled: true,
            alpha: 15,
            beta: 15,
            depth: 50,
            viewDistance: 25
        }
    },
    title: {
        text: 'Número de alumnos aprobados'
    },
    subtitle: {
        text: 'Por semestre'
    },
    plotOptions: {
        column: {
            depth: 25
        }
    },
    series: [{
        data: [309.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4]
    }]
});

function showValues() {
    $('#alpha-value').html(chart.options.chart.options3d.alpha);
    $('#beta-value').html(chart.options.chart.options3d.beta);
    $('#depth-value').html(chart.options.chart.options3d.depth);
}

// Activate the sliders
$('#sliders_g input').on('input change', function () {
    chart.options.chart.options3d[this.id] = parseFloat(this.value);
    showValues();
    chart.redraw(false);
});

showValues();
        </script>

    @endsection()