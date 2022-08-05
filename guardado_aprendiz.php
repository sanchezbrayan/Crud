<?php
include('funciones.php');   
  $vtipoid=$_POST['tipoid'];
  $vnumid=$_POST['numid'];
  $vnombres=$_POST['nombres'];
  $vapellidos=$_POST['apellidos'];
  $vdireccion=$_POST['direccion'];
  $vtelefono=$_POST['telefono'];
  $vficha=$_POST['fic'];

  $miconexion=conectar_bd('', 'cbc1');
  $resultado=consulta($miconexion,"insert into aprendices (apre_idtipo,apre_numid,apre_nombre,apre_apellidos,apre_direccion,apre_telefono,apre_ficha) values ('{$vtipoid}','{$vnumid}','{$vnombres}','{$vapellidos}','{$vdireccion}','{$vtelefono}','{$vficha}')");

  if ($resultado)
    {
      echo '<script language="javascript">';
      echo 'alert("Aprendiz Creado Correctamente");';
      echo 'window.location="menu.php";';
      echo '</script>';
    }
    else{ 
      echo '<script language="javascript">';
      echo 'alert("  Error al Crear a Aprendiz");';
      echo 'window.location="menu.php";';
      echo '</script>';
  }
  ?>