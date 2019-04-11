<!DOCTYPE html>
<html>
<head>
  <title>BMW Club Motorrad Metepec | Únete</title>
  <link rel="shortcut icon" type="image/x-icon" href="img/bmwlogo.png" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="css/estilosOmi.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/smoke.css">
  <link rel="stylesheet" type="text/css" href="css/Slider.css">
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/smoke.js"></script>
</head>
<body>
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
        <a class="nav-link" href="index.html">Inicio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="nosotros.html">Quienes Somos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="rutas.html">Rutas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="galeria.html">Galería</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="unete.html">Únete</a>
      </li>
    </ul>
    </div>
  </nav>
  <div class="container-fluid" style="margin-top:80px">
    <div class="container">
    <center><h3 class="h3">Intégrate, mándanos tus datos</h3></center>
      <form method="post" action="formulario2.php" data-smk-icon="glyphicon-remove-sign">
        <div class="form-group">
          <label class="label">Nombre:</label>
          <input type="text" name="nombre" size="50" maxlength="10" minlength="2" 
            class="form-control" required>
        </div>
        <div class="form-group">
          <label class="label">Apellido Paterno:</label>
          <input type="text" name="ap" 
          class="form-control" required>
        </div>

        <div class="form-group">
          <label class="label">Apellido Materno:</label>
          <input name="text" name="am" class="form-control" required></input>
        </div>

        <div class="form-group">
          <label class="label">Edad:</label>
          <input type="number" name="edad" 
          class="form-control" required>
        </div>

        <div class="form-group">
          <label class="label">Género:
          <br />
          <input type="radio" checked="checked" name="genero" value="H" >Hombre 
          <input type="radio" name="genero" value="M" >
          Mujer</label>
        </div>
        <div class="form-group">
          <label class="label">Cuéntanos tu experencia en motos:</label>
          <textarea name="text" name="experiencia" class="form-control" required></textarea>
        </div>
          <br/>
        <div class="text-center">
          <button type="button" class="btn btn-success" id="btnClear center">Borrar</button>
          <button type="submit" class="btn btn-primary" id="btnSubmit">Enviar Datos</button>
        </div>
      </form>
    </div>
  </div>
  <br/>
  <!-- Footer -->
  <footer class="section footer-classic context-dark bg-image">
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
</html>