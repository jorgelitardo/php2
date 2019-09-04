<?php require_once('conexiones/conexion.php');
$cn=  Conectarse();
$listado=  mysql_query("SELECT * FROM postulantes where anio_lectivo=2017",$cn);
//echo $usuario;

//include("contador.php");
//onClick="MM_openBrWindow('reportePrueba.php','consulta','width=300,height=500');MM_popupMsg('rhfghhgfghfgh')"
// ?>