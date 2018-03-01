<?php
session_start();
  $valido=true;
  require_once("conexion.php");

  if(isset($_POST['entrar'])) {
    $correo=$_POST['correo'];
    $contrasena=$_POST['contrasena'];
    $consulta="SELECT idUsuario, nombreUsuario, correo, contrasena, perfil, estatus FROM usuarios WHERE correo='$correo' AND contrasena='$contrasena'";
    $resultados=mysqli_query($conexion, $consulta) or die (mysqli_error());
    
    $fila=mysqli_fetch_array($resultados);
    if ($fila["estatus"]=="inactivo") {
          header("Location:cuenta-inactiva");
    } else {
      $filasn=mysqli_num_rows($resultados);
      if ($filasn<=0 || isset($_GET['nologin']) ) {
          $valido=false;
      }
      
      else {
          $_SESSION["correo"]=$fila["idUsuario"];
          $valido=true;
          $_SESSION["correo"]=$correo;
          if($fila["perfil"]=="alumno") {
            header("location:agregar.php");
          } elseif ($fila["perfil"]=="administrador") {
            header("location:agregar.php");
          }
        }
      }
    }
  ?>