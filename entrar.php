<?php
	require_once("validacion.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>H. Ayuntamiento de Degollado Jalisco - Trabajamos para ti</title>

<!-- for-mobile-apps -->
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); }</script>
<!-- //for-mobile-apps -->

	<link href="css/bootstrap_index.css" rel="stylesheet" type="text/css" media="all"/>
	<link href="css/style-index.css" rel="stylesheet" type="text/css" media="all"/>
	<link rel="stylesheet" type="text/css" href="css/estilo.css" />

<!-- js -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->

<!-- Icono en el nombre de la pagina -->
	<link href='images/logo.ico' rel='shortcut icon'/>
	<link rel="icon" type="image/x-icon" href="images/logo.ico"/>
<!-- //Icono en el nombre de la pagina -->

<!-- font-awesome icons -->
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
<!-- //font-awesome icons
<link href="//fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
-->
</head>
<body>
<!-- Google Analytics -->
<?php include_once("analyticstracking.php"); ?>

<!-- Encabezado / Menu -->
<?php include 'encabezado.php'; ?>
<!-- //Encabezado / Menu -->

<!-- Cuerpo -->
<div id="principal">
	<h3 class="w3l_head w3l_head1">Sistema de Registro de Noticias</h3>
	<form action="" method="post" id="login">
		<fieldset>
			<legend>Inicio de Sesión</legend>
			<table class="tablaLogin">
				<tr>
					<td><label>Usuario:</label></td>
					<td><input type="email" name="correo" required /></td>
				</tr>
				<tr>
					<td><label>Contraseña:</label></td>
					<td><input type="password" name="contrasena" required /></td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td><input type="submit" value="Iniciar sesión" name="entrar" /></td>
				</tr>
				<tr>
						<?php 
			                if ($valido==false) {
			                  echo '
			                    <td><strong><em>Datos incorrectos</em></strong></td>
			                    <td><a href="entrar.php">Intente de nuevo</a></td>
			                    ';
			                }
			            ?>
				</tr>
			</table>
		</fieldset>
	</form>
</div>
<!-- //Cuerpo -->

<!-- Pie -->
<?php include "pie.php"; ?>
<!-- //Pie -->

<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
</body>
</html>