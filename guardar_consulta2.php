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
	require_once('conexiones/conexion.php');
	$cn=  Conectarse();
	$codigo_emp = $_GET['codigo_pac'];
	$nombres_pac = $_GET['nombres'];
	$apellidos_pac = $_GET['apellidos'];
	$jornada_est = $_GET['jornada'];
	$fecha_cita = date("Y-m-d");
	$hora_cita = date('H:i:s'); // 12:50:29
	/*$fecha_nac_pac = $_GET['fecha_nac_pac'];
	$anio_nac_pac = date("Y",strtotime($fecha_nac_pac));
	$anio_fecha_act = date("Y-m-d");
	$edad_pac = $anio_fecha_act - $anio_nac_pac;*/
	$fecha_novedad = $_GET['fecha_nov'];
	$hora_novedad = $_GET['hora_nov'];
	$tipo_documento_novedad = $_GET['tipo_doc_nov'];
	$norma_incumplida = $_GET['norma_incumplida'];
	$desmerito = $_GET['desmerito'];
	$autoridad_reporta = $_GET['autoridad_reporta'];
	$firma_est = $_GET['firma_est'];
	$firma_rep = $_GET['firma_rep'];
	$accion_novedad = $_GET['accion_nov'];
	$observaciones_novedad = $_GET['observacion_nov'];


	/*if (!empty($_SERVER['HTTP_CLIENT_IP']))
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
	}*/

	$fecha_actual = date("d-m-Y H:i:s");
	$dispositivo = $info["os"]." ".$info["browser"];

	/*echo $codigo_emp;
	echo "**";
	echo $fecha_novedad;
	echo "**";
	echo $hora_novedad;
	echo "**";
	echo $causa_novedad;
	echo "**";
	echo $tipo_novedad;
	echo "**";
	echo $accion_novedad;
	echo "**";
	echo $observaciones_novedad;
	echo "**";
	echo $ip;
	echo "**";
	echo $fecha_actual;
	echo "**";
	echo $dispositivo;
	echo "**";
	//echo $ult_usuario_mod;
	//echo "**";
	//echo $ult_jornada_mod;
	//echo "**";*/
	
	/*$codigo_emp = $_GET['codigo'];
	echo $codigo_emp;
	echo $diagnostico;
	echo $historia_clinica;
	echo $examen;
	echo $permiso;
	echo $observaciones;
	echo $fecha_cita;
	echo $hora_cita;
	echo $cantidad;
	echo $dosis;
	echo $edad_pac;
	//echo $nombres_pac;
	//echo $apellidos_pac;*/
	//echo " -*//*-".$codigo_receta;
	//
	$query = 'INSERT INTO tbl_novedades_est (codigo_est_nov, jornada_est_nov,fecha_nov, hora_nov, tipo_doc,cod_norma_convivencia_inc, desmerito, autoridad_reporta,firma_estudiante,firma_representante,accion_nov,observacion_nov,ip,dispositivo,fecha_mod,ult_usuario_mod,ult_jornada_mod,estado_nov) VALUES (\''.$codigo_emp.'\',\''.$jornada_est.'\',\''.$fecha_novedad.'\',\''.$hora_novedad.'\',\''.$tipo_documento_novedad.'\',\''.$norma_incumplida.'\',\''.$desmerito.'\',\''.$autoridad_reporta.'\',\''.$firma_est.'\',\''.$firma_rep.'\',\''.$accion_novedad.'\',\''.$observaciones_novedad.'\',\''.$ip.'\',\''.$dispositivo.'\',\''.$fecha_cita.'\',\''.$usuario.'\',\''.$jornada.'\',\''$jornada.'\')';
	mysql_query($query) or die(mysql_error());
	echo '<script language = javascript>
			alert("Guardado con éxito")
			self.location = "historia_clinica_est.php"
			</script>';
?>