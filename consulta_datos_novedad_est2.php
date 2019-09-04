	<?php
	require_once('conexiones/conexion.php');
	$cn=  Conectarse();
	//$id = $_GET['id'];
	$cod = $_GET['codigo_est'];
	$cod_nov=$_GET['codigo'];
	$jornada = $_GET['jornada'];
	//echo $jornada;
	//echo $cod;
	$listado=  mysql_query("SELECT * FROM tbl_estudiantes where codigo_est='$cod' and jornada_est = '$jornada'",$cn);
	echo $listado;
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
	      $sexo_emp = $reg['sexo_est'];
	      if ($sexo_emp == 'F') {
	        $sexo_emp = 'FEMENINO';
	      }else{
	        $sexo_emp = 'MASCULINO';
	      }
	      $estado_emp = $reg['estado_est'];
	    }
	    $listado2= mysql_query("select n.fecha_nov,n.tipo_doc,c.norma_convicencia_nor,n.desmerito,e.apellidos_emp,e.nombres_emp,n.firma_estudiante,n.firma_representante,n.fecha_nov FROM tbl_novedades_est n,tbl_normas_convivencias c, tbl_empleados e where n.id_nov='$cod_nov' and n.cod_norma_convivencia_inc=c.cod_nor and n.autoridad_reporta=e.codigo_emp",$cn);
	  while($reg2=  mysql_fetch_array($listado2))
	    {
	      //$id_emp = $reg['id'];
	      $codigo_emp2 = $reg2['tipo_doc'];
	      //$cedula_emp = "";
	      //$nombres_emp = $reg2['cod_norma_convivencia_inc'];
	      $fecha_nov2 = $reg2['fecha_nov'];
	      $desmerito2 = $reg2['desmerito'];
	      $apellidos2 = $reg2['apellidos_emp'];
	      $nombres2 = $reg2['nombres_emp'];
	      $norma2 = $reg2['norma_convicencia_nor'];
	      $autoridad2 = $reg2['apellidos_emp']." ".$reg2['nombres_emp'];
	      $firm_est2 = $reg2['firma_estudiante'];
	      $firm_rep2 = $reg2['firma_representante'];
	    }
	    echo $codigo_emp2;
	    echo $apellidos2;
	//$listado2=  mysql_query("SELECT * FROM tbl_consultas_medicas_emp where codigo_pac=$'LITA-JOR'",$cn);
	    //echo $cod;
	    

	    
?>