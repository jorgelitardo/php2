<?php
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
$curso=$_POST['curso'];
$jornada=$_POST['jornada'];
$pre_1=$_POST['pre_1'];
$pre_2=$_POST['pre_2'];
$pre_3=$_POST['pre_3'];
$pre_4=$_POST['pre_4'];
$pre_5=$_POST['pre_5'];
$pre_6=$_POST['pre_6'];
$pre_7=$_POST['pre_7'];
$pre_8=$_POST['pre_8'];
$pre_9=$_POST['pre_9'];
$pre_10=$_POST['pre_10'];
$pre_11=$_POST['pre_11'];
$pre_12=$_POST['pre_12'];
$pre_13=$_POST['pre_13'];
$pre_14=$_POST['pre_14'];
$pre_15=$_POST['pre_15'];
$pre_16=$_POST['pre_16'];
$pre_17=$_POST['pre_17'];
$pre_18=$_POST['pre_18'];
$pre_19=$_POST['pre_19'];
$pre_20=$_POST['pre_20'];
$pre_21=$_POST['pre_21'];
$pre_22=$_POST['pre_22'];
$pre_23=$_POST['pre_23'];
$pre_24=$_POST['pre_24'];
$pre_25=$_POST['pre_25'];
$pre_26=$_POST['pre_26'];
$pre_27=$_POST['pre_27'];
$pre_28=$_POST['pre_28'];
$pre_29=$_POST['pre_29'];
$pre_30=$_POST['pre_30'];
$pre_31=$_POST['pre_31'];
$pre_32=$_POST['pre_32'];
$pre_33=$_POST['pre_33'];
$pre_34=$_POST['pre_34'];
$pre_35=$_POST['pre_35'];
$pre_36a=$_POST['pre_36'];
$pre_36 = implode (', ', $pre_36a);
$pre_37a=$_POST['pre_37'];
$pre_37 = implode (', ', $pre_37a);
$fecha_actual = date("d-m-Y H:i:s");
$dispositivo = $info["os"]." ".$info["browser"];
include("conexion2.php"); 
$graba1 = "INSERT INTO estudiantes (ip, fecha, dispositivo, curso, jornada, pre_1, pre_2, pre_3, pre_4, pre_5, pre_6, pre_7, pre_8, pre_9, pre_10, pre_11, pre_12, pre_13, pre_14, pre_15, pre_16, pre_17, pre_18, pre_19, pre_20, pre_21, pre_22, pre_23, pre_24, pre_25, pre_26, pre_27, pre_28, pre_29, pre_30, pre_31, pre_32, pre_33, pre_34, pre_35, pre_36, pre_37) VALUES ('$ip', '$fecha_actual', '$dispositivo', '$curso', '$jornada', '$pre_1', '$pre_2', '$pre_3', '$pre_4', '$pre_5', '$pre_6', '$pre_7', '$pre_8', '$pre_9', '$pre_10', '$pre_11', '$pre_12', '$pre_13', '$pre_14', '$pre_15', '$pre_16', '$pre_17', '$pre_18', '$pre_19', '$pre_20', '$pre_21', '$pre_22', '$pre_23', '$pre_24', '$pre_25', '$pre_26', '$pre_27', '$pre_28', '$pre_29', '$pre_30', '$pre_31','$pre_32', '$pre_33', '$pre_34', '$pre_35', '$pre_36', '$pre_37')";
$result1 = mysql_query($graba1);
echo "Usted ha completado el formulario con exito, muchas gracias por su atencion.";
?> 