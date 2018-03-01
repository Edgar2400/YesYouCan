<?php
	require_once("validacion.php");
	if (!isset($_SESSION["correo"])){
	     header("location:index.php?nologin=false");    
	}
	$usuario=$_SESSION["correo"];
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
<h3 class="w3l_head w3l_head1">Modificar noticia</h3>
<br><br>
<center>
	<p style="color: #111;"><a href="noticias.php">Noticias</a> &raquo; Modificar Noticia:
	<?php
		$id=$_GET["id"];
		require_once("conexion.php");

		$consulta=mysqli_query($conexion, "SELECT * FROM noticias  INNER JOIN fotonoticia ON noticias.id=fotonoticia.idNoticia INNER JOIN videos ON noticias.id=videos.idNoticia WHERE id='$id'");
		$fila=mysqli_fetch_array($consulta);

		printf('
			<form action="noticia-modificada.php" method="post">
				<table>
					<tr>
						<td><label>Título:</label></td>
						<td><input type="text" name="tituloNoticia" value="%s" /></td>
					</tr>
					<tr>
						<td><label>Descripción:</label></td>
						<td><textarea  name="detallesNoticia">%s</textarea></td>
					</tr>
					<tr>
						<td><label>Foto:</label></td>
						<td><img src="images/foto-noticia/%s" width="50" height="50" /></td>
					</tr>
					<tr>
						<td><label>Video:</label></td>
						<td><video width="300" controls><source src="../videos/%s" type="video/mp4">Your browser does not support HTML5 video.</video></td>
					</tr>
					<tr>
						<td><input type="hidden" name="id" value="%s" /></td>
						<td><input type="submit" value="Modificar" name="enviar" /></td>
					</tr>
				</table>
			</form>
		',$fila["tituloNoticia"], $fila["detallesNoticia"], $fila["nombreFoto"], $fila["nombreVideo"], $fila["id"]);
	?>
</center>
<br><br><br>
<!-- //Cuerpo -->

<!-- Pie -->
<?php include "pie.php"; ?>
<!-- //Pie -->

<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
</body>
</html>