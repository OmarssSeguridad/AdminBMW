<!DOCTYPE html>
<html>
<head>
  <title>BMW Club Motorrad Metepec | PDF</title>
  <link rel="shortcut icon" type="image/x-icon" href="{{asset('img/bmwlogo.png')}}" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <!--icons -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
  <link rel="stylesheet" type="text/css" href="{{ asset('/css/estilosOmi.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('/css/smoke.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('/css/Slider.css') }}">
  <script type="text/javascript" src="{{ asset('/js/jquery.js') }}"></script>
<!--  <script type="text/javascript" src="js/bootstrap.min.js"></script>-->
  <script type="text/javascript" src="{{ asset('/js/smoke.js') }}"></script>
  <script type="text/javascript" src="{{ asset('/lang/es.js') }}"></script>
</head>
<body class="body">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  
    <a class="navbar-brand" href="#">
    <img src="{{asset('/img/logos/logoBMWMotorrad.jpg')}}" alt="logo" style="width:100px;"> 
    </a>  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <h5 class="h5" style="color: white;">BMW Club Motorrad Metepec</h5>
 <ul class="navbar-nav">

    </li>
  </ul>
  </div>
</nav>
  <div class="container-fluid" style="margin-top:80px">
    <div class="container">
          @yield('content')
    </div>
  </div>

  <br/>

</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="{{ asset('/js/valbut.js') }}"></script>
<script type="text/javascript" src="{{ asset('/js/slider.js') }}"></script>
</html>