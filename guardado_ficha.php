<?php
include('funciones.php');   
  $vnombre=$_POST['nombre'];
  $vprograma=$_POST['progra'];
  
  
  $miconexion=conectar_bd('', 'cbc1');
  $resultado=consulta($miconexion,"insert into fichas (id_ficha	,fichapro) values ('{$vnombre}','{$vprograma}')");

  if ($resultado)
    {
      echo '<script language="javascript">';
      echo 'alert("Ficha Creada Correctamente");';
      echo 'window.location="menu.php";';
      echo '</script>';
    }
    else{ 
      echo '<script language="javascript">';
      echo 'alert("  Error al Crear Ficha");';
      echo 'window.location="crear_ficha.php";';
      echo '</script>';
  }
  ?>