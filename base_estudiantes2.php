<?php require_once('conexiones/conexion.php');
$cn=  Conectarse();
$clavebuscadah=  mysql_query("SELECT estado FROM postulantes where anio_lectivo=2017 group by estado order by estado",$cn);
$listado=  mysql_query("SELECT * FROM tbl_psicologos where estado_psico = 'A' group by psicologo order by psicologo",$cn);
//echo $usuario;

//include("contador.php");
//onClick="MM_openBrWindow('reportePrueba.php','consulta','width=300,height=500');MM_popupMsg('rhfghhgfghfgh')"
// ?>