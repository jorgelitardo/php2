<?php require_once('conexiones/conexion.php');
$cn=  Conectarse();
//$listado=  mysql_query("SELECT * FROM tbl_estudiantes",$cn);
$clavebuscadah=mysql_query("select * from tbl_empleados where estado_emp = 'A'",$cn);
?>