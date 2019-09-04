<?php
if ($jornada == 'MATUTINA')
{
$copia = "carlos_sanlucas@ang.edu.ec";
}
else{
$copia = "wilfrido_recalde@ang.edu.ec";
}
$correo_usu =$_SESSION['correo'];
//echo $correo_usu;
$copia2 = "daniel_r_2001@hotmail.com";
$union = $apellidos_pac." ".$nombres_pac;
$oculto = "departamento_sistemas@ang.edu.ec";
$titulo = "Academia Naval Guayaquil, Sistema de Control de Faltas Disciplinarias.";
$comentario = "<?php
<head>
<title>Sistema de Control de Faltas Disciplinarias - Academia Naval Guayaquil</title>
<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
<style type='text/css'>
<!--
.fuentes {
	font-size: 10px;
}
.fuentes {
	font-size: 12px;
}
.fuente2 {
	font-size: 16px;
}
.fuentes {
	font-weight: bold;
}
-->
</style>
</head>
<body>
  <div align='center'><img src='http://www.ang.edu.ec/img/logo_ang.gif' width='142' height='60'></div>
  
<p class='fuente2'>Estimado Sr.(a) $representante_1 // $representante_2</p></div>
<div align='left'><p>Su representado el(la) cadete: $union.</p></div>
<div align='left'><p>A cometido una falta $nivel_norma_incumplida segun se detalla a continuacion: </p></div>
<p><div><h3></h3></div></p>
<div><h3>FECHA: $fecha_novedad</h3></div>
<div><h4>NORMA DE CONVICENCIA INCUMPLIDA: $norma_incumplida</h4></div>
<div><h4>DEMERITO: $desmerito</h4></div>
<div><h4>DOCENTE: $autoridad_reporta</h4></div>
<div><h4>EN CONOCIMIENTO DEL ESTUDIANTE: $firma_est</h4></div>
<div><h4>ACCIONES TOMADAS:</h4></div>
<div><h4>$accion_novedad</h4></div>
<div><h4>OBSERVACIONES:</h4></div>
<div><h4>$observaciones_novedad</h4></div>
<div><h4>INSPECTOR QUE REPORTA:</h4></div>
<div><h4>$usuario</h4></div>
<p>&nbsp;</p>
<div align='center'>
<p class='fuentes'><span class='fuentes'>Todo el contenido es enviado a nuestros usuarios con el objetivo exclusivamente informativo.</span></p>
</div>
<div align='center'><span class='fuentes'><a href='www.ang.edu.ec' target='_blank'>www.ang.edu.ec</a></span></div>
<div align='center' class='fuentes'><span class='fuentes'>Si desea contactarse con nosotros:</span></div>
<div align='center' class='fuentes'><span class='fuentes'>Dirección : Av.Antonio Parra Velasco Mz.B Solar1–2</span></div>
<div align='center' class='fuentes'><span class='fuentes'>Telefono:(593-4) 2133 300</span></div>
<div align='center' class='fuentes'><span class='fuentes'>Email : academianavalguayaquil@ang.edu.ec </span></div>
</body>
</?>";
$comentario2 = "<?php
<head>
<title>Sistema de Control de Faltas Disciplinarias - Academia Naval Guayaquil</title>
<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
<style type='text/css'>
<!--
.fuentes {
  font-size: 10px;
}
.fuentes {
  font-size: 12px;
}
.fuente2 {
  font-size: 16px;
}
.fuentes {
  font-weight: bold;
}
-->
</style>
</head>
<body>
  <div align='center'><img src='http://www.ang.edu.ec/img/logo_ang.gif' width='142' height='60'></div>
  
<p class='fuente2'>Estimado Sr.(a) $representante_1 // $representante_2</p></div>
<div align='left'><p>Su representado el(la) cadete: $union.</p></div>
<div align='left'><p>A cometido una falta $nivel_norma_incumplida segun se detalla a continuacion: </p></div>
<p><div><h3></h3></div></p>
<div><h3>FECHA: $fecha_novedad</h3></div>
<div><h4>NORMA: $norma_incumplida</h4></div>
<div><h4>DEMERITO: $desmerito</h4></div>
<div><h4>DOCENTE: $autoridad_reporta</h4></div>
<div><h4>EN CONOCIMIENTO DEL ESTUDIANTE: $firma_est</h4></div>
<div><h4>ACCIONES TOMADAS:</h4></div>
<div><h4>$accion_novedad</h4></div>
<div><h4>OBSERVACIONES:</h4></div>
<div><h4>$observaciones_novedad</h4></div>
<p>&nbsp;</p>
<p>&nbsp;</p>
<div><h4>Motivo por el cual, le informamos que debe asistir a la institucion con el caracter de Urgente:</h4></div>
<div><h4>Día:</h4></div>
<div><h4>$fecha_cita</h4></div>
<div><h4>Hora:</h4></div>
<div><h4>$hora_cita</h4></div>
<div><h4>INSPECTOR QUE REPORTA:</h4></div>
<div><h4>$usuario</h4></div>
<p>&nbsp;</p>
<div align='center'>
<p class='fuentes'><span class='fuentes'>Todo el contenido es enviado a nuestros usuarios con el objetivo exclusivamente informativo.</span></p>
</div>
<div align='center'><span class='fuentes'><a href='www.ang.edu.ec' target='_blank'>www.ang.edu.ec</a></span></div>
<div align='center' class='fuentes'><span class='fuentes'>Si desea contactarse con nosotros:</span></div>
<div align='center' class='fuentes'><span class='fuentes'>Dirección : Av.Antonio Parra Velasco Mz.B Solar1–2</span></div>
<div align='center' class='fuentes'><span class='fuentes'>Telefono:(593-4) 2133 300</span></div>
<div align='center' class='fuentes'><span class='fuentes'>Email : academianavalguayaquil@ang.edu.ec </span></div>
</body>
</?>";
require 'phpmailer/PHPMailerAutoload.php';
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPDebug  = 0;
$mail->Host       = 'smtp.gmail.com';
$mail->Port       = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth   = true;
$mail->Username   = "inspectoria_general@ang.edu.ec";
$mail->Password   = "Inspectores12341";
$mail->SetFrom('inspectoria_general@ang.edu.ec', $titulo);
$mail->AddReplyTo($copia);
$mail->AddAddress($correo);
$mail->AddAddress($correo_usu);
$mail->AddCC($copia);
$mail->AddBCC($oculto);
$mail->Subject = 'Control Disciplinario ANG le informa ...';
$query = 'INSERT INTO tbl_novedades_est (num_reg,codigo_est_nov,jornada_est_nov,fecha_nov, hora_nov, tipo_doc,cod_norma_convivencia_inc,desmerito,autoridad_reporta,firma_estudiante,firma_representante,accion_nov,observacion_nov,ip,dispositivo,fecha_mod,ult_usuario_mod,ult_jornada_mod,estado_nov,estado_mail,correo_env,fecha_citacion,hora_citacion) VALUES (\''.$numero.'\',\''.$codigo_emp.'\',\''.$jornada_est.'\',\''.$fecha_novedad.'\',\''.$hora_novedad.'\',\''.$tipo_documento_novedad.'\',\''.$norma_incumplida2.'\',\''.$desmerito.'\',\''.$autoridad_reporta.'\',\''.$firma_est.'\',\''.$firma_rep.'\',\''.$accion_novedad.'\',\''.$observaciones_novedad.'\',\''.$ip.'\',\''.$dispositivo.'\',\''.$fecha_cita.'\',\''.$usuario.'\',\''.$jornada.'\',\''.'A'.'\',\''.'SI'.'\',\''.$correo.'\',\''.$fecha_cita.'\',\''.$hora_cita.'\')';
mysql_query($query) or die(mysql_error());
echo '<script language = javascript>alert("Guardado con éxito")</script>';
if ($tipo_documento_novedad=='Citacion') {
  $comentario=$comentario2;
}
$mail ->MsgHTML($comentario);
//$mail->AltBody($comentario);
if(!$mail->Send()) {
  echo "Error: " . $mail->ErrorInfo;
} else {
  echo '<script language = javascript>
    alert("E-mail enviado correctamente")
    self.location = "principal2.php"
    </script>';
	}
?>	