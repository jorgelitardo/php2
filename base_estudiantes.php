<?php require_once('conexiones/conexion.php');
$cn=  Conectarse();
$listado=  mysql_query("SELECT * FROM postulantes where estado2='A' and estado <> 'MATRICULADO'",$cn);
//echo $usuario;

//include("contador.php");
//onClick="MM_openBrWindow('reportePrueba.php','consulta','width=300,height=500');MM_popupMsg('rhfghhgfghfgh')"
// ?>