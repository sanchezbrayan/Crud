<?php
  include('funciones.php');
  session_start();
  $vide=$_SESSION['ide1'];
  $vnombre=$_POST['nombre'];
  $vtipo=$_POST['otipo'];


  $miconexion=conectar_bd('', 'cbc1');
  $resulado=consulta($miconexion,"update programa set nombrepro='{$vnombre}',progra_tipo='{$vtipo}'");

  if ($miconexion->affected_rows>0)
  {
    echo '<script language="javascript">';
    echo 'alert("Actualizacion Exitosa");';
    echo 'window.location="menu.php";';
    echo '</script>';
  }
?>

<input style="width: 30%;" class="btn btn-warning" type="button" onclick="location.href ='menu.php'" value="↺">
