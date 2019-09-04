<?php
require_once('conexiones/conexion.php');
$cn=  Conectarse();
	$id = $_POST['indice'];
	echo $id;

	$query = "delete from tbl_receta_temporal where id_rec =$id"; 
	$result = mysql_query($query);

?>