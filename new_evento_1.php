<?php
echo "<script type='text/javascript'>alert('$fecha_turno');</script>";
//echo "<script type='text/javascript'>alert('Viene de Ajax');</script>";
if (!empty($_SERVER['HTTP_CLIENT_IP']))
$ip = $_SERVER['HTTP_CLIENT_IP'];
if (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
$ip = $_SERVER['REMOTE_ADDR'];
$info=detect();
function detect()
{
	$browser=array("IE","OPERA","MOZILLA","NETSCAPE","FIREFOX","SAFARI","CHROME");
	$os=array("WINDOWS","MAC","LINUX");
	$info['browser'] = "OTHER";
	$info['os'] = "OTHER";
	foreach($browser as $parent)
	{
		$s = strpos(strtoupper($_SERVER['HTTP_USER_AGENT']), $parent);
		$f = $s + strlen($parent);
		$version = substr($_SERVER['HTTP_USER_AGENT'], $f, 15);
		$version = preg_replace('/[^0-9,.]/','',$version);
		if ($s)
		{
			$info['browser'] = $parent;
			$info['version'] = $version;
		}
	}
	foreach($os as $val)
	{
		if (strpos(strtoupper($_SERVER['HTTP_USER_AGENT']),$val)!==false)
			$info['os'] = $val;
	}
	return $info;
}
//require_once('validacion_sesion.php');
include ('conexion2.php');
session_start();
$usuario= $_SESSION['nombres_usu'];
$cod_est = $_POST['cod_est'];
$nombres_estudiante = $_POST['nombres_estudiante'];
$apellidos_estudiante = $_POST['apellidos_estudiante'];
$curso_estudiante = $_POST['curso_estudiante'];
$psicologo= $_POST['psicologo'];	
$cedula_estudiante = $_POST['cedula_estudiante'];
$email_representante = $_POST['email_representante'];
$curso_estudiante = $_POST['curso_estudiante'];
$jornada_estudiante = $_POST['jornada_estudiante'];
$fecha_turno = $_POST['fecha_turno'];
$turno_estudiante = $_POST['turno_estudiante'];
$fecha_actual = date("d-m-Y H:i:s");
$dispositivo = $info["os"]." ".$info["browser"];
$estado="A";
$clavebuscadah = mysql_query("SELECT * FROM tbl_turnos where codigo = '$turno_estudiante'");
  	  while($reg = mysql_fetch_array($clavebuscadah))
	    {
	      $turno_horario_detalle = $reg['detalle'];
	    }
$sql = "INSERT INTO tbl_calendario (fecha, turno, turno_horario, psicologo, reg, nom_est, ape_est, ced_est, cor_rep, cur_est, jor_est, estado, usuario, ip, fecha_mod, dispositivo) VALUES ('$fecha_turno', '$turno_estudiante', '$turno_horario_detalle', '$psicologo', '$cod_est', '$nombres_estudiante', '$apellidos_estudiante', '$cedula_estudiante', '$email_representante', '$curso_estudiante', '$jornada_estudiante', '$estado', '$usuario', '$ip', '$fecha_actual', '$dispositivo')";
mysql_query($sql) or die('Error. '.mysql_error());
$clavebuscada_1 = mysql_query("SELECT * FROM postulantes where codigo = '$turno_estudiante'");
while($reg_1 = mysql_fetch_array($clavebuscada_1))
{
	      $estad = $reg_1['estado'];
	    }
if $estad == 'DECE'
$actualiza="Update postulantes set fecha_dece_estudiante='$fecha_turno', psicologo = '$psicologo' where reg = '$cod_est'";
else
$actualiza="Update postulantes set fecha_dece_estudiante='$fecha_turno', estado='POR PAGAR', psicologo = '$psicologo' where reg = '$cod_est'";
mysql_query($actualiza) or die('Error. '.mysql_error());
//mysql_query($sql2) or die('Error. '.mysql_error());
header("Location: fecha_dece.php?codigo=$cod_est");
?>