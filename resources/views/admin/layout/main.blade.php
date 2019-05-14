<!DOCTYPE html>
<html>
<head>
  <title>BMW Club Motorrad Metepec | Inicio</title>
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
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Altas
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="/admin/AltaUsuario">Alta Usuarios</a>
        <a class="dropdown-item" href="/admin/AltaMotociclista">Alta Motociclista</a>
        <a class="dropdown-item" href="/admin/AltaPago">Alta Pagos</a>
        <a class="dropdown-item" href="/admin/AltaRuta">Alta Rutas</a>
        <a class="dropdown-item" href="/admin/AltaProducto">Alta Productos</a>
        <a class="dropdown-item" href="/admin/AltaCategoria">Alta Categorias</a>
        <a class="dropdown-item" href="/admin/AltaModoPago">Alta Modo de pago</a>
      </div>
    </li>

        <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Bajas
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Bajas Usuarios</a>
        <a class="dropdown-item" href="#">Bajas Motociclista</a>
        <a class="dropdown-item" href="#">Bajas Pagos</a>
        <a class="dropdown-item" href="#">Bajas Rutas</a>
        <a class="dropdown-item" href="#">Bajas Productos</a>
        <a class="dropdown-item" href="#">Bajas Categorias</a>
        <a class="dropdown-item" href="#">Bajas Modo de pago</a>
      </div>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Consultas
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="/admin/Usuarios">Consultar Usuarios</a>
        <a class="dropdown-item" href="/admin/motociclista">Consultar Motociclista</a>
        <a class="dropdown-item" href="/admin/Pagos">Consultar Pagos</a>
        <a class="dropdown-item" href="/admin/Rutas">Consultar Rutas</a>
        <a class="dropdown-item" href="/admin/producto">Consultar Productos</a>
        <a class="dropdown-item" href="/admin/Categoria">Consultar Categorias</a>
        <a class="dropdown-item" href="/admin/ModoPago">Consultar Modo de pago</a>
      </div>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Modificaciones
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Modificar Usuarios</a>
        <a class="dropdown-item" href="#">Modificar Motociclista</a>
        <a class="dropdown-item" href="#">Modificar Pagos</a>
        <a class="dropdown-item" href="#">Modificar Rutas</a>
        <a class="dropdown-item" href="#">Modificar Productos</a>
        <a class="dropdown-item" href="#">Modificar Categorias</a>
        <a class="dropdown-item" href="#">Modificar Modo de pago</a>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('logout') }}"
         onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();">
          {{ __('Logout') }}
      </a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
      </form>


    </li>
    <li class="nav-item" style=" align-content: right">
     
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
<!-- Footer -->
      <footer class="section footer-classic context-dark bg-image">
        <div class="container">
          <div class="row row-30">
            <div class="col-md-4 col-xl-5">
              <div class="pr-xl-4"><a class="brand" href="index.html"><img class="brand-logo-light" src="images/agency/logo-inverse-140x37.png" alt="" width="140" height="37" srcset="images/agency/logo-retina-inverse-280x74.png 2x"></a>
                <p style="color: white;"><img src="{{asset('img/logoBMWMotorrad.jpg')}}" alt="logo" style="width:250px;"></p>
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
<script type="text/javascript" src="{{ asset('/js/valbut.js') }}"></script>
<script type="text/javascript" src="{{ asset('/js/slider.js') }}"></script>
</html>