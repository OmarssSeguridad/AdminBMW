<!DOCTYPE html>
<html>
<head>
  <title>BMW Club Motorrad Metepec | Galería</title>
  <link rel="shortcut icon" type="image/x-icon" href="img/bmwlogo.png" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="css/estilosOmi.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/smoke.css">
  <link rel="stylesheet" type="text/css" href="css/Slider.css">
  <link rel="stylesheet" type="text/css" href="css/jquery.fancybox-1.3.4.css" media="screen" />
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/smoke.js"></script>
  <script type="text/javascript" src="lang/es.js"></script>
  <!--Galeria -->
  <script type="text/javascript" src="js/jqueryGal.js"></script>
  <script type="text/javascript" src="js/jquery.mousewheel-3.0.4.pack.js"></script>
  <script type="text/javascript" src="js/jquery.fancybox-1.3.4.pack.js"></script>

</head>
<body class="body">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">
    <img src="img/logos/logoBMWMotorrad.jpg" alt="logo" style="width:100px;"> 
    </a>  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <h5 class="h5" style="color: white;">BMW Club Motorrad Metepec</h5>
 <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="/">Inicio</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/nosotros">Quienes Somos</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/rutas">Rutas</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/galeria">Galería</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/unete">Únete</a>
    </li>
        <li class="nav-item">
      @if (Route::has('login'))
          <div class="top-right links">
              @auth
                  <a class="nav-link" href="{{ url('/home') }}">Home</a>
              @else
                  <a class="nav-link" href="{{ route('login') }}">Ingresar</a>

              @endauth
          </div>
      @endif
    </li>
  </ul>
  </div>
</nav>

  <div class="container-fluid" style="margin-top:80px">
    <div class="container">
      <h2 class="h2">Galería</h2>
      <p>En este apartado se encuentran las fotos de las salidas programadas por el motoclub</p>
    </div>
    <br/>
    <div class="container">
      <h5  class="h5" style="color: black;">
        Salida 9 de Febrero<br />
        <a rel="example_group" href="img/galeria/01.jpg" title="Lorem ipsum dolor sit amet"><img class="img"alt="" src="img/galeria/01.jpg" /></a>
        <a rel="example_group" href="img/galeria/03.jpg" title=""><img alt="" class="img" src="img/galeria/03.jpg" /></a>
        <a rel="example_group" href="img/galeria/04.jpg" title=""><img alt="" class="img" src="img/galeria/04.jpg" /></a>
        <a rel="example_group" href="img/galeria/05.jpg" title=""><img class="img" class="last" alt="" src="img/galeria/05.jpg" /></a>
      </h5>
          </div>
    <div class="container">
       <h5  class="h5" style="color: black;">
        Salida 16 de Febrero<br />
        <a rel="example_group" href="img/galeria/02.jpg" title="Lorem ipsum dolor sit amet"><img class="img" alt="" src="img/galeria/02.jpg" /></a>
        <a rel="example_group" href="img/galeria/06.jpg" title=""><img class="img"alt="" src="img/galeria/06.jpg" /></a>
        <a rel="example_group" href="img/galeria/07.jpg" title=""><img class="img" alt="" src="img/galeria/07.jpg" /></a>
        <a rel="example_group" href="img/galeria/08.jpg" title=""><img class="img" alt="" src="img/galeria/08.jpg" /></a>
      </h5>
    </div>
    <div class="container">
      <h5  class="h5" style="color: black;">
        Salida 23 de Febrero<br />
        <a rel="example_group" href="img/galeria/09.jpg" title="Lorem ipsum dolor sit amet"><img class="img" alt="" src="img/galeria/09.jpg" /></a>
        <a rel="example_group" href="img/galeria/10.jpg" title=""><img class="img" alt="" src="img/galeria/10.jpg" /></a>
        <a rel="example_group" href="img/galeria/11.jpg" title=""><img class="img" alt="" src="img/galeria/11.jpg" /></a>
        <a rel="example_group" href="img/galeria/12.jpg" title=""><img class="img" alt="" src="img/galeria/12.jpg" /></a>
      </h5>
    </div>
  </div>
  <br/>  
  <!-- Footer -->
  <footer class="section footer-classic context-dark bg-image" >
    <div class="container">
      <div class="row row-30">
        <div class="col-md-4 col-xl-5">
          <div class="pr-xl-4"><a class="brand" href="index.html"><img class="brand-logo-light" src="images/agency/logo-inverse-140x37.png" alt="" width="140" height="37" srcset="images/agency/logo-retina-inverse-280x74.png 2x"></a>
            <p style="color: white;"><img src="img/logoBMWMotorrad.jpg" alt="logo" style="width:250px;"></p>
            <!-- Rights-->
            <p class="rights" style="color: white;"><span>©  </span><span class="copyright-year">2019</span><span> </span><span>BMW</span><span>. </span><span>All Rights Reserved.</span></p>
          </div>
        </div>

          <div class="col-md-4">
            <h5 class="h5">Contacto</h5>
            <dl class="contact-list">
              <dt class="dt">Dirección:</dt>
              <dd>Metepec, Estado de Mexico</dd>
            </dl>
            <dl class="contact-list">
              <dt class="dt">Correo:</dt>
              <dd><a href="mailto:#">contacto@motorradmetepec.mx</a></dd>
            </dl>
            <dl class="contact-list">
              <dt>Teléfono:</dt>
              <dd><a href="tel:#">+91 7568543012</a> <span>or</span> <a href="tel:#">+91 9571195353</a>
              </dd>
            </dl>
          </div>
          <div class="col-md-4 col-xl-3">
            <h5>Links</h5>
            <ul class="nav-list">
              <li><a href="index.html">Inicio</a></li>
              <li><a href="nosotros.html">Quienes Somos</a></li>
              <li><a href="rutas.html">Ruta</a></li>
              <li><a href="galeria.html">Galería</a></li>
              <li><a href="unete.html">Únete</a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/valbut.js"></script>
<script type="text/javascript" src="js/slider.js"></script>
</html>
