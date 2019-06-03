<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
  <link rel="stylesheet" type="text/css" href="{{ asset('/css/estilosOmi.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.min.css') }}">
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">
    <img src="{{asset('/img/logos/logoBMWMotorrad.jpg')}}" alt="logo" style="width:100px;"> 
    </a>  
	<div class="collapse navbar-collapse" id="navbarNavDropdown">
	    <h5 class="h5" style="color: white;">BMW Club Motorrad Metepec</h5>
	</div>
	</nav>
	<h4> Estimado Ingeniero:</h4>

	<p>Nuestro equipo de atencion al usuario a creado un Ticket con el Folio: <font style="color:blue";>#{{ $folio }}</font>, con los siguientes datos y Resumen:</p>
	<p><b>Nombre del Motociclista:</b>&nbsp;{{ $motociclista->name }} {{ $motociclista->ap }} {{ $motociclista->am }}</p>
	<p><b>Producto Adquirido:</b>&nbsp;{{ $producto->name }}</p>
	<p><b>Asunto:</b>&nbsp;{{ $asunto }}</p>

	<p>Esperamos que sea resuelto a la brevedad, saludos.</p>
	<p align="center">BMW MOTORRAD CLUB METEPEC A.C.</p>
	</div>
	<p>Respuesta generada automaticamente, por favor no responder ni enviar correos a esta cuenta de correo.</p>

	<p>AVISO IMPORTANTE: Este correo electrónico y/o el material adjunto es para uso exclusivo de la persona o la entidad a la que expresamente se le ha enviado, el cual contiene información confidencial. Si no es el destinatario legítimo del mismo, por favor repórtelo inmediatamente con el administrador y elimínelo. Cualquier revisión, almacenamiento, retransmisión, difusión o cualquier otro uso de este correo, por personas o entidades distintas a las del destinatario legítimo, queda expresamente prohibida. Este correo electrónico no pretende ni debe ser considerado como constitutivo de ninguna relación legal, contractual o de otra índole similar. </p>
</body>
</html>
