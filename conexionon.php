<?php
	$host="localhost";
	$user="degollad_EdRam24";
	$pass="=e9sRq1VfjFZ";
	$base="degollad_entradas";

	$conexion=mysqli_connect("$host","$user","$pass") or die(mysqli_error());
	mysqli_query($conexion, "SET NAMES 'utf8'");
	$base=mysqli_select_db($conexion, $base) or die(mysqli_error());

	include_once("funciones.php");
?>