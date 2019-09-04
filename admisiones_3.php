<!DOCTYPE html>
<head>
	<html lang="es">
	<title>Sistema de Admisiones ANG</title>
	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]
	<link href='http://fonts.googleapis.com/css?family=Patua+One' rel='stylesheet' type='text/css'>-->
	<link href="css/jquerysctipttop.css" rel="stylesheet" type="text/css">
	<link href="css/admisiones.css" rel="stylesheet" type="text/css" media="all"> 
	<link rel="stylesheet" href="css/jquery-ui.css" />
	<script src="css/jquery-1.9.1.js"></script>
	<script src="css/jquery-ui.js"></script>
    <script type="text/javascript" src="js/admisiones.js"></script>
	
</head>
<body>
	<section id="wrapper" style="margin-right:20px; margin-top:10px;">
		<form name="admision"  class="" method="POST" action="" enctype="multipart/form-data">
		<!--<form class="testform" id="testform" method="post">-->
			<fieldset class="datos_estudiante">
		<legend align="left"><h3>Datos personales del Aspirante</h3></legend>
        	  <table width="1067" border="0" cellpadding="3">
  <tr>
  
    <td width="1" ><label>Registro:</label></td>
	<td><input type="text" name="registro" disabled id = "registro" value = "<?php echo $id_emp;?>" /></td>
	<td width="1" >&nbsp;</td>
	
   </tr>
	<td width="142"><label>Nombres:</label></td>
    <td width="203">
    <input type="text" name="nombres_estudiante" disabled id = "nom_estud" value = "<?php echo $nombres_estudiante; ?>" />
    </td>
    <td width="1" >&nbsp;</td>
    <td width="145" ><label>Apellidos:</label></td>
    <td width="202">
    <input type="text" name = "apellidos_estudiante" disabled id = "ape_estud" value = "<?php echo $apellidos_estudiante; ?>" />
    </td>
    <td width="1">&nbsp;</td>
    <td width="161"><label>Cedula Identidad:</label></td>
    <td width="210">
	<input type="text" name="cedula_estudiante" disabled value = "<?php echo $cedula_estudiante; ?>" id = "ced_estud" maxlength= "10" onKeyPress="return valida(event)" onChange="ced_validador1(this)"/>
	</td>
	<td><div id="comp1"></div></td>
    </tr>
 <tr>
 <tr>
  
    <td><label>Grado/Año:</label></td>
    <td>
	<!--<select name="curso_estudiante" id="curso_estudiante" required="required">-->
    <input type="text" name = "curso_estudiante" disabled id = "curso_estudiante" value = "<?php echo $curso_estudiante; ?>" />
      </td>
    <td >&nbsp;</td>
	<td><label>Jornada:</label></td>
    <td>
	<!--<select name="curso_estudiante" id="curso_estudiante" required="required">-->
    <input type="text" name = "jornada_estudiante" disabled id = "jornada_estudiante" value = "<?php echo $jornada_estudiante; ?>" />
      </td>

    <td>&nbsp;</td>
    <td><label>Fecha para examen:</label></td>
	<td>
    <input type="input" value= "<?php echo $fecha_dece_estudiante; ?>" name="fecha_dece_estudiante" disabled id = "fecha_dec" >
    </td>
    <td></td>
	</tr> 
	
	</table>
    </fieldset>
   	<?php 
		//echo $curso_estudiante;
		//echo $jornada_estudiante;
		require_once("conexion2.php");
		//echo $curso_estudiante;
		//echo $jornada_estudiante;
		$clavebuscada2=  mysql_query("SELECT * FROM tbl_psicologos WHERE jornada = '$jornada_estudiante' and curso = '$curso_estudiante'");
		while($row2 = mysql_fetch_array($clavebuscada2))
			{   
			$psicologo= $row2['psicologo'];	
			}
	//echo $psicologo;
	$_SESSION['cod_est']= $id_emp;
	$_SESSION['psicologo']= $psicologo;
    $_SESSION['fecha_dece_estudiante'] = $fecha_dece_estudiante;
	//echo $psicologo;	
	include('calendario.php');
	?>
	</form>
		
	
	
	
    <script src="js/jquery.min.js"></script>
	<script src="js/jquery.validate.min.js"></script>
	<script type="text/javascript" src="js/simpleform.min.js"></script>
	
	<script type="text/javascript">
		$(".testform").simpleform({
			speed : 500,
			transition : 'fade',
			progressBar : true,
			showProgressText : true,
			validate: true
		});

		$("#testform2").simpleform({
			speed : 500,
			transition : 'slide',
			progressBar : true,
			showProgressText : true,
			validate: true
		});

		$("#testform3").simpleform({
			speed : 500,
			transition : 'none',
			progressBar : true,
			showProgressText : true,
			validate: false
		});

		function validateForm(formID, Obj){

			switch(formID){
				case 'testform' :
					Obj.validate({
						rules: {
							email: {
								required: true,
								email: true
							},
							name: {
								required: true
							},
							street: {
								required: true
							}
						},
						messages: {
							email: {
								required: "Por favor ingrese un mail",
								email: "Direccion email no valida"
							},
							name: {
							 	required: "Please enter your name"
							},
							street: {
								required: "Please enter street name"
							}
						}
					});
				return Obj.valid();
				break;

				case 'testform2' :
					Obj.validate({
						rules: {
							email: {
								required: true,
								email: true
							},
							name: {
								required: true
							},
							spouse_email: {
								required: true,
								email: true
							},
							spouse_name: {
								required: true
							},
							street: {
								required: true
							}
						},
						messages: {
							email: {
								required: "Por favor ingrese un mail",
								email: "Not a valid email address"
							},
							name: {
							 	required: "Please enter your name"
							},
							spouse_email: {
								required: "Por favor ingrese un mail",
								email: "Not a valid email address"
							},
							spouse_name: {
							 	required: "Please enter your spouses name"
							},
							street: {
								required: "Please enter street name"
							}
						}
					});
				return Obj.valid();
				break;
			}
		}
		</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</body>
</html>
