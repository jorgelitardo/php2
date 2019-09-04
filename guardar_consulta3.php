<?php 
	session_start();
	if (!$_SESSION){
			echo '<script language = javascript>
			alert("usuario no autenticado")
			self.location = "AccesoSistema.php"
			</script>';
	}
	date_default_timezone_set('America/Guayaquil');
	//header("Location: principal.php");
	$usuario= $_SESSION['nombres_usu'];
	$jornada = $_GET['jornada'];
	$id = $_GET['id'];
	require_once('conexiones/conexion.php');
	$cn=  Conectarse();
	$numero = $_GET['numero'];
	$codigo_emp = $_GET['codigo_pac'];
	$nombres_pac = $_GET['nombres'];
	$apellidos_pac = $_GET['apellidos'];
	$jornada_est = $_GET['jornada'];
	$correo = $_GET['correo_est'];
	$representante_1 = $_GET['representante_1'];
	$representante_2 = $_GET['representante_2'];
	$fecha_cita =$_GET['fecha_cita'];
	$hora_cita = $_GET['hora_cita']; // 12:50:29
	/*$fecha_nac_pac = $_GET['fecha_nac_pac'];
	$anio_nac_pac = date("Y",strtotime($fecha_nac_pac));
	$anio_fecha_act = date("Y-m-d");
	$edad_pac = $anio_fecha_act - $anio_nac_pac;*/
	$fecha_novedad = $_GET['fecha_nov'];
	$hora_novedad = date('H:i:s');
	$tipo_documento_novedad = $_GET['tipo_doc_nov'];
	$norma_incumplida2 = $_GET['norma_incumplida'];
	$desmerito = $_GET['desmerito'];
	$autoridad_reporta = $_GET['autoridad_reporta'];
	$firma_est = $_GET['firma_est'];
	$firma_rep = $_GET['firma_rep'];
	$accion_novedad = $_GET['accion_nov'];
	$observaciones_novedad = $_GET['observacion_nov'];
    $clavebuscadah=  mysql_query("SELECT * FROM tbl_normas_convivencias where estatus_norm='A' and cod_nor=$norma_incumplida2",$cn);
    while($row = mysql_fetch_array($clavebuscadah))
    {
    $norma_incumplida = $row['norma_convicencia_nor'];
    $nivel_norma_incumplida =  $row['nivel_falta'];
	}
	$clavebuscadah=  mysql_query("SELECT * FROM tbl_empleados where estado_emp='A' and codigo_emp = '$autoridad_reporta'",$cn);
    while($row = mysql_fetch_array($clavebuscadah))
                {
                $B=" ";
				$autoridad_reporta = $row['apellidos_emp'].$B.$row['nombres_emp'];
			    };
	

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
	$fecha_actual = date("d-m-Y H:i:s");
	$dispositivo = $info["os"]." ".$info["browser"];
	require_once ('mail.php');
	
?>