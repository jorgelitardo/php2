<?php
  session_start();
  if (!$_SESSION)
  {
    echo '<script language = javascript>
    alert("usuario no autenticado")
    self.location = "AccesoSistema.php"
    </script>';
  }
$usuario= $_SESSION['nombres_usu'];
$jornada =$_SESSION['jornada'];
date_default_timezone_set('America/Guayaquil');
?>