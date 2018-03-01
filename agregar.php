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
<h3 class="w3l_head w3l_head1">Agregar Noticia</h3>
<br><br>
<center>
	<p style="color: #111;"><a href="noticias.php">Noticias</a> &raquo; Agregar Noticias</p>
	<?php
		if (isset($_POST["enviar"])) {
			require_once("conexion.php");
			$tituloNoticia=$_POST["tituloNoticia"];
			$detallesNoticia=$_POST["detallesNoticia"];
			
			$insertar=mysqli_query($conexion, "INSERT INTO noticias VALUES(NULL, '$tituloNoticia', '$detallesNoticia')");

			if(isset($_FILES['imagen'])) {
				$errors= array();
				foreach($_FILES['imagen']['tmp_name'] as $key => $tmp_name ) {
					$nombreFoto= $key.$_FILES['imagen']['name'][$key];
					$tamanio =$_FILES['imagen']['size'][$key];
					$file_tmp =$_FILES['imagen']['tmp_name'][$key];
					$tipo=$_FILES['imagen']['type'][$key];  


					$consulta=mysqli_query($conexion, "SELECT * FROM noticias WHERE detallesNoticia='$detallesNoticia'");
					$fila=mysqli_fetch_array($consulta);
					$idNoticia=$fila["id"];

					$nombreFoto=sanear_string($nombreFoto);

					$insertarFotoNoticia="INSERT INTO fotonoticia (idFoto, idNoticia, nombreFoto, tamanio, tipo) VALUES (NULL, '$idNoticia', '$nombreFoto', '$tamanio', '$tipo')";

			        $desired_dir="foto-noticia";
			        if(empty($errors)==true){
			             if(is_dir($desired_dir)==false){
							    mkdir("$desired_dir", 0700);
							}
							if(is_dir("$desired_dir/".$nombreFoto)==false){
							    move_uploaded_file($file_tmp,"images/foto-noticia/".$nombreFoto);
							} else {
							    $new_dir="images/foto-noticia/".$nombreFoto.time();
							     rename($file_tmp,$new_dir) ;               
							}
			            mysqli_query($conexion, $insertarFotoNoticia);            
			        } else {
			            print_r($errors);
			        }
			   	} if(empty($error)){ }

			   	if(isset($_FILES['video'])) {
					$errors= array();
					foreach($_FILES['video']['tmp_name'] as $key => $tmp_name ) {
						$nombreVideo= $key.$_FILES['video']['name'][$key];
						$tamanio =$_FILES['video']['size'][$key];
						$file_tmp =$_FILES['video']['tmp_name'][$key];
						$tipo=$_FILES['video']['type'][$key];

						$consulta=mysqli_query($conexion, "SELECT * FROM noticias WHERE detallesNoticia='$detallesNoticia'");
						$fila=mysqli_fetch_array($consulta);
						$idNoticia=$fila["id"];

						$nombreVideo=sanear_string($nombreVideo);

						$insertarVideoNoticia="INSERT INTO videos (idVideo, idNoticia, nombreVideo, tamanio, tipo) VALUES (NULL, '$idNoticia', '$nombreVideo', '$tamanio', '$tipo')";

				        $desired_dir="videos";
				        if(empty($errors)==true){
				             if(is_dir($desired_dir)==false){
								    mkdir("$desired_dir", 0700);
								}
								if(is_dir("$desired_dir/".$nombreVideo)==false){
								    move_uploaded_file($file_tmp,"../videos/".$nombreVideo);
								} else {
								    $new_dir="../videos/".$nombreVideo.time();
								     rename($file_tmp,$new_dir) ;               
								}
				            mysqli_query($conexion, $insertarVideoNoticia);            
				        } else {
				            print_r($errors);
				        }
				   	} if(empty($error)){ }
				}
			}
			echo "<h3 style='background:#693; color:#fff;'>Noticia registrada con éxito</h3>";
		}
	?>
	<form action="#" method="post" enctype="multipart/form-data">
		<table>
			<tr>
				<td><label>Título:</label></td>
				<td><input type="text" name="tituloNoticia" /></td>
			</tr>
			<tr>
				<td><label>Descripción:</label></td>
				<td><textarea  name="detallesNoticia"></textarea></td>
			</tr>
			<tr>
				<td><label>Foto:</label></td>
				<td><input type="file" name="imagen[]" /></td>
			</tr>
			<tr>
				<td><label>Video:</label></td>
				<td><input type="file" name="video[]" /></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td><input type="submit" value="Registrar" name="enviar" /></td>
			</tr>
		</table>
	</form>
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