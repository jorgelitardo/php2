	<?php
	require_once('conexiones/conexion.php');
	$cn=  Conectarse();
	$id = $_GET['id'];	
	$cod = $_GET['codigo'];
	$jornada = $_GET['jornada'];
	//$numero = $_GET['numero'];
	$listado=  mysql_query("SELECT * FROM tbl_estudiantes where codigo_est='$cod' and jornada_est = '$jornada'",$cn);
	  while($reg=  mysql_fetch_array($listado))
	    {
	      $id_emp = $reg['id'];
	      $codigo_emp = $reg['codigo_est'];
	      $cedula_emp = "";
	      $nombres_emp = $reg['nombres_est'];
	      $apellidos_emp = $reg['apellidos_est'];
	      $union = $apellidos_emp." ".$nombres_emp;
	      $direccion_emp = $reg['direccion_est'];
	      $telefono_emp = $reg['telefono_est'];
	      $area_emp = $reg['curso_est'];
	      $fechanac_emp = $reg['fechanac_est'];
	      $jornada_est = $reg['jornada_est'];
	      $fecha_actual = date('Y');
	      $anio_act = date('Y');
	      $edad = $anio_act - $fechanac_emp;
	      $representante_l = $reg['representante1'];
	      $representante_l_conv = $reg['repre1_tel_con'];
	      $representante_l_cel = $reg['repre1_tel_cel'];
	      $representante_2 = $reg['representante2'];
	      $representante_2_conv = $reg['repre2_tel_con'];
	      $representante_2_cel = $reg['repre2_tel_cel'];
		  $correo_est = $reg['correo_est'];
		  $correo_pad = $reg['email_padre'];
		  $correo_mad = $reg['email_madre'];
	      $sexo_emp = $reg['sexo_est'];
	      if ($sexo_emp == 'F') {
	        $sexo_emp = 'FEMENINO';
	      }else{
	        $sexo_emp = 'MASCULINO';
	      }
	      $estado_emp = $reg['estado_est'];
	    }
	//$listado2=  mysql_query("SELECT * FROM tbl_consultas_medicas_emp where codigo_pac=$'LITA-JOR'",$cn);
	    //echo $cod;
	    

	    
?>