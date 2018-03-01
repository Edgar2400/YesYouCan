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
<h3 class="w3l_head w3l_head1">Noticias</h3>
	<form action="" method="post" id="buscador">
		<input type="search" name="buscar" placeholder="Buscar..." />
	</form>

	<?php
		if (isset($_POST["buscar"])) {
			require_once("conexion.php");
			$buscar=$_POST["buscar"];

			$consulta=mysqli_query($conexion, "SELECT * FROM noticias INNER JOIN fotonoticia ON noticias.id=fotonoticia.idNoticia INNER JOIN videos ON noticias.id=videos.idNoticia WHERE (tituloNoticia LIKE '%$buscar%' OR detallesNoticia LIKE '%$buscar%')");

			echo '
				<table class="tablaAlumnos">
					<thead>
						<tr>
							<th>Foto</th>
							<th>Título</th>
							<th>Descripción</th>
						</tr>
					</thead>
					<tbody>
			';
			while ($fila=mysqli_fetch_array($consulta)) {
				printf('
					<tr>
						<td><a href="detalles.php?id=%s"><img src="imagenes/foto-alumno/%s" width="200"/></a></td>
						<td>%s</td>
						<td>%s</td>
					</tr>
					',$fila["id"], $fila["nombreFoto"], $fila["tituloNoticia"], $fila["detallesNoticia"]);
				}
			echo '
				</tbody>
			</table>
			';
		} else {
	?>
	<table class="tablaNoticias">
		<thead>
			<tr>
				<th>Foto</th>
				<th>Título</th>
				<th>Descripción</th>
			</tr>
		</thead>
		<tbody>
			<?php
				require_once("conexion.php");

				$consulta=mysqli_query($conexion, "SELECT * FROM noticias INNER JOIN fotonoticia ON noticias.id=fotonoticia.idFoto");

				while ($fila=mysqli_fetch_array($consulta)) {
					printf('
						<tr>
							<td><a href="detalles.php?id=%s"><img src="images/foto-noticia/%s" width="200"/><a></td>
							<td style="font-weight: bolder;">%s</td>
							<td>%s</td>
						</tr>
						', $fila["id"], $fila["nombreFoto"], $fila["tituloNoticia"], $fila["detallesNoticia"]);
				}
			?>
		</tbody>
	</table>
	<?php } ?>
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