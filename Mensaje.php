<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Confirmación Pago</title>
	<link rel="stylesheet" type="text/css" href="icons/foundation-icons.css">
    <link rel="stylesheet" href="css/foundation.min.css">
	<link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet">
    <link rel="stylesheet" href="css/app.css">
</head>
<body>
<div class="row ">
	<div class="large-3 medium-3 columns"></div>
	<div class="large-6 medium-6 columns table">
		<div class="row text-center">	
			<div class="large-12 medium-12 columns">
				<h3>Pago Aceptado</h3>
			</div>
		</div>
		<div class="row text-justify">
			<div class="large-12 medium-12 columns">
				<span>El pago se ha realizado correctamente. Su transacción ha finalizado. Puede acceder a la consulta privada del <a href="http://www.sunedu.gob.pe/registro-nacional-de-grados-y-titulos/" >Registro Nacional de Grados y Títulos</a>, para ver los detalles de esta transacción.
				</span>
			</div>
		</div>
		<div class="row">
			<div class="large-12 medium-12 columns">
				<img src="img/logo_Sunedu.png" width="60%">
			</div>
		</div>
	</div>
	<div class="large-3 medium-3 columns"></div>
</div>
	<script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.min.js"></script>
    <script src="js/app.js"></script>

<?php
if(isset($_POST['submit'])) 
   {
      echo("Parametro 1: " . $_POST['Param1'] . "<br />\n");
      echo("Parametro 2: " . $_POST['Param2'] . "<br />\n");
   }
header('refresh:3; url=http://www.sunedu.gob.pe/registro-nacional-de-grados-y-titulos/');
?>

</body>
</html>