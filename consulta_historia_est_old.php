	<?php
	require_once('conexiones/conexion.php');
	$cn=  Conectarse();
	//$id = $_GET['id'];
	$cod = $_GET['codigo'];
	$listado=  mysql_query("SELECT * FROM postulantes where reg=$cod and anio_lectivo=2017",$cn);
	  while($reg=  mysql_fetch_array($listado))
	    {
$id_emp = $reg['reg'];
$nombres_estudiante =$reg['nombres_estudiante'];
$apellidos_estudiante =$reg['apellidos_estudiante'];
$cedula_estudiante=$reg['cedula_estudiante'];
$curso_estudiante=$reg['curso_estudiante'];
$jornada_estudiante =$reg['jornada_estudiante'];
$fecha_dece_estudiante=$reg['fecha_dece_estudiante'];
$fecha_nacimiento_estudiante =$reg['fecha_nacimiento_estudiante'];
$lugar_nacimiento_estudiante =$reg['lugar_nacimiento_estudiante'];
$coleg_procedencia_estudiante=$reg['coleg_procedencia_estudiante'];
$correo_estudiante=$reg['correo_estudiante'];
$direcc_estudiante =$reg['direcc_estudiante'];
$parent_representante =$reg['parent_representante'];
$nombre_representante =$reg['nombre_representante'];
$apellido_representante =$reg['apellido_representante'];
$cedula_representante =$reg['cedula_representante'];
$edad_representante=$reg['edad_representante'];
$estado_representante =$reg['estado_representante'];
$nacion_representante=$reg['nacion_representante'];
$domicilio_representante=$reg['domicilio_representante'];
$titulo_representante =$reg['titulo_representante'];
$empresa_representante =$reg['empresa_representante'];
$direccion_representante =$reg['direccion_representante'];
$cargo_representante =$reg['cargo_representante'];
$telef_representante =$reg['telef_representante'];
$celul_representante =$reg['celul_representante'];
$email_representante =$reg['email_representante'];
$nombres_madre =$reg['nombres_madre'];
$apellidos_madre =$reg['apellidos_madre'];
$cedula_madre=$reg['cedula_madre'];
$edad_madre=$reg['edad_madre'];
$estado_madre=$reg['estado_madre'];
$nacion_madre=$reg['nacion_madre'];
$domicilio_madre =$reg['domicilio_madre'];
$titulo_madre=$reg['titulo_madre'];
$empresa_madre =$reg['empresa_madre'];
$direccion_madre=$reg['direccion_madre'];
$cargo_madre=$reg['cargo_madre'];
$telef_madre=$reg['telef_madre'];
$celul_madre=$reg['celul_madre'];
$email_madre=$reg['email_madre'];
$nombres_padre=$reg['nombres_padre'];
$apellidos_padre=$reg['apellidos_padre'];
$cedula_padre=$reg['cedula_padre'];
$edad_padre=$reg['edad_padre'];
$estado_padre=$reg['estado_padre'];
$nacion_padre=$reg['nacion_padre'];
$domicilio_padre=$reg['domicilio_padre'];
$titulo_padre=$reg['titulo_padre'];
$empresa_padre=$reg['empresa_padre'];
$direccion_padre=$reg['direccion_padre'];
$cargo_padre=$reg['cargo_padre'];
$telefono_padre=$reg['telefono_padre'];
$celul_padre =$reg['celul_padre'];
$email_padre=$reg['email_padre'];
$lib_calificaciones=$reg['lib_calificaciones'];
$ced_representante=$reg['ced_representante'];
$ced_estudiante=$reg['ced_estudiante'];
$planilla_servicio=$reg['planilla_servicio'];
$no_deuda=$reg['no_deuda'];
	      
		  
	    }
?>