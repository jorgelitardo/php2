<!DOCTYPE html>
<head>
	<html lang="es">
	<title>Sistema de Admisiones ANG</title>
	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]
	<link href='http://fonts.googleapis.com/css?family=Patua+One' rel='stylesheet' type='text/css'>-->
	<link rel="stylesheet" type="text/css" href="css/simpleform.css" />
  
    <script type="text/javascript" src="js/admisiones.js"></script>
	
</head>
<body>
	<section id="wrapper" style="margin-right:20px; margin-top:30px;">
		<form name="admision"  class="testform" method="POST" action="php/actualiza.php" enctype="multipart/form-data">
		<!--<form class="testform" id="testform" method="post">-->
			<fieldset class="datos_estudiante">
		<legend align="left"><h3>Datos personales del Aspirante</h3></legend>
        	  <table width="1067" border="0" cellpadding="3">
  <tr>
  
  <td width="1" ><label>Registro:</label></td>
	 <td><input type="text" name="registro" id = "registro" value = "<?php echo $id_emp;?>" /></td>
	<td width="1" >&nbsp;</td>
	
   </tr>
	<td width="142"><label>Nombres:</label></td>
    <td width="203">
    <input type="text" name="nombres_estudiante" id = "nom_estud" value = "<?php echo $nombres_estudiante; ?>" />
    </td>
    <td width="1" >&nbsp;</td>
    <td width="145" ><label>Apellidos:</label></td>
    <td width="202">
    <input type="text" name = "apellidos_estudiante" id = "ape_estud" value = "<?php echo $apellidos_estudiante; ?>" />
    </td>
    <td width="1">&nbsp;</td>
    <td width="161"><label>Cedula Identidad:</label></td>
    <td width="210">
	<input type="text" name="cedula_estudiante" value = "<?php echo $cedula_estudiante; ?>" id = "ced_estud" maxlength= "10" onKeyPress="return valida(event)" onChange="ced_validador1(this)"/>
	</td>
	<td><div id="comp1"></div></td>
    </tr>
 <tr>
 <tr>
  
    <td><label>Grado/Año:</label></td>
    <td>
	<!--<select name="curso_estudiante" id="curso_estudiante" required="required">-->
	<select name="curso_estudiante" id="curso_estudiante">
    <option id="curso_estudiante" value="<?php echo $curso_estudiante; ?>"><?php echo $curso_estudiante; ?></option>
		  <?php
			    include("php/conexion2.php");
                $clavebuscadah = mysql_query("SELECT * FROM cursos");
                while($row = mysql_fetch_array($clavebuscadah))
                {
                echo'<OPTION id="curso_estudiante" VALUE="'.$row['cursos'].'">'.$row['cursos'].'</OPTION>';
                }                           
                echo '</select>';
	        ?>
     </td>
    <td >&nbsp;</td>
    <td ><label>Jornada:</label></td>
    <td>
      <select name="jornada_estudiante" id="jornada_estudiante">
		<option value="<?php echo $jornada_estudiante; ?>"><?php echo $jornada_estudiante; ?></option>
		<option value="Matutina">Matutina</option>
		<option value="Vespertina">Vespertina</option>
		</select>
      </td>  
    <td>&nbsp;</td>
    <td><label>Fecha para examen:</label></td>
	<td>
    <input type="text" value= "<?php echo $fecha_dece_estudiante; ?>" name="fecha_dece_estudiant" id = "fecha_dec" disabled>
    </td>
    <td></td>
	</tr> 
	<td><label>Fecha  Nacimiento:</label></td>
    <td><input type="text" value= "<?php echo $fecha_nacimiento_estudiante; ?>" name="fecha_nacimiento_estudiante" id = "fecha_nac"/></td>
    <td>&nbsp;</td>
    <td><label>Lugar Nacimiento:</label></td>
    <td><input type="input" value= "<?php echo $lugar_nacimiento_estudiante; ?>" name="lugar_nacimiento_estudiante" id = "lug_nac" /></td>
    <td>&nbsp;</td>
    <td><label>Colegio Procedencia:</label></td>
    <td><input type="input" value= "<?php echo $coleg_procedencia_estudiante; ?>" name="coleg_procedencia_estudiante" id = "col_pro"/></td>
    </tr>
    <td><label>Correo Electronico:</label></td>
    <td colspan="2"><input value= "<?php echo $correo_estudiante; ?>" type="email" name="correo_estudiante" id = "correo_est" size = "300" ></td>
	<td><label>Direccion Domicilio:</label></td>
    <td colspan="4"><input value= "<?php echo $direcc_estudiante; ?>" type="input" name="direcc_estudiante" id = "direc_est"></td>
	</table>
       	  </fieldset>
        <fieldset class = "datos_madre">
        <legend align="left"><h3>Datos de la Madre</h3></legend>
        
        <table width="1155" border="0" cellpadding="3">
    <tr>
    <td><label>Nombres:</label></td>
    <td><input type="text" value= "<?php echo $nombres_madre; ?>" name="nombres_madre" id = "nom_madre" /></td>
    <td><label>Apellidos</label></td>
    <td><input type="text" value= "<?php echo $apellidos_madre; ?>" name="apellidos_madre" id = "ape_madre" /></td>
    <td><label>No. Cedula:</label></td>
    <td><input type="text" value= "<?php echo $cedula_madre; ?>" name="cedula_madre" id = "ced_madre" maxlength= "10" onKeyPress="return valida(event)" onChange="ced_validador3(this)"/></td>
    <td><div id="comp3"></div></td>
  </tr>
  <tr>
    
    <td><label>Edad</label></td>
    <td><input type="text" value= "<?php echo $edad_madre; ?>" name="edad_madre" id = "edad_madre" onKeyPress="return valida(event)" /></td>
    <td><label>Estado Civil</label></td>
    <td><input type="text" value= "<?php echo $estado_madre; ?>" name="estado_madre" id = "est_madre"  /></td>
    <td><label>Nacionalidad</label></td>
    <td><select name="nacion_madre" id = "nac_madre" >
	<option id="nac_madre" value= "<?php echo $nacion_madre; ?>" value=""><?php echo $nacion_madre; ?></option>
		  <?php
			    include("php/conexion2.php");
                $clavebuscadah=  mysql_query("SELECT * FROM paises");
                while($row = mysql_fetch_array($clavebuscadah))
                {
                echo'<OPTION id="nac_madre" VALUE="'.$row['nombre'].'">'.$row['nombre'].'</OPTION>';
                }                           
                echo '</select>';
	        ?>
	
	
	</td>
  </tr>
  <tr>
    <td><label>Direccion del Domicilio</label></td>
    <td colspan="3"><input type="text"  value= "<?php echo $domicilio_madre; ?>" name="domicilio_madre" id = "dom_madre"  size = "62" ></td>

    <td><label>Profesion</label></td>
    <td><input type="text" name="titulo_madre"  value= "<?php echo $titulo_madre; ?>" id = "tit_madre"  size = "62" ></td>

  </tr>
  <tr>
    <td><label>Empresa donde trabaja</label></td>
    <td><input type="text" name="empresa_madre"  value= "<?php echo $empresa_madre; ?>" id = "emp_madre" /></td>
    <td><label>Direccion Trabajo</label></td>
    <td><input type="text" name="direccion_madre"  value= "<?php echo $direccion_madre; ?>" id = "dir_madre" /></td>
    <td><label>Cargo:</label></td>
    <td><input type="text" name="cargo_madre"  value= "<?php echo $cargo_madre; ?>" id = "car_madre" /></td>
    
  </tr>
  <tr>
    <td><label>Telefono:</label></td>
    <td><input type="text" name="telef_madre"  value= "<?php echo $telef_madre; ?>" id = "tel_madre" maxlength = "10" onKeyPress="return valida(event)" /></td>
	<td><label>Celular:</label></td>
    <td><input type="text" name="celul_madre"  value= "<?php echo $celul_madre; ?>" id = "cel_madre" maxlength = "10" onKeyPress="return valida(event)" /></td>
    <td><label>Email:</label></td>
    <td><input type="text" name="email_madre"  value= "<?php echo $email_madre; ?>" id = "email_madre"  /></td>
   
  </tr>
  </table>
        </fieldset>
    	
        <fieldset class = "datos_padre">
        <legend align="left"><h3>Datos del Padre</h3></legend>
        
        <table width="1155" border="0" cellpadding="3">
  
  		<tr>
    <td><label>Nombres:</label></td>
    <td><input type="text" name="nombres_padre"  value= "<?php echo $nombres_padre; ?>" id = "nom_padre" /></td>
    <td><label>Apellidos</label></td>
    <td><input type="text" name="apellidos_padre"  value= "<?php echo $apellidos_padre; ?>" id = "ape_padre" /></td>
   <td><label>No. Cedula:</label></td>
    <td><input type="text" name="cedula_padre"  value= "<?php echo $cedula_padre; ?>" id = "ced_padre" maxlength= "10" onKeyPress="return valida(event)" onChange="ced_validador4(this)"/></td>
    <td><div id="comp4"></div></td>
	</tr>
  <tr>
    <td><label>Edad</label></td>
    <td><input type="text" name="edad_padre"  value= "<?php echo $edad_padre; ?>" id = "edad_padre" onKeyPress="return valida(event)" /></td>
    <td><label>Estado Civil</label></td>
    <td><input type="text" name="estado_padre"  value= "<?php echo $estado_padre; ?>" id = "est_padre"  /></td>
    <td><label>Nacionalidad</label></td>
    <td><select name="nacion_padre" id = "nac_padre" >
	<option id="nac_padre"  value= "<?php echo $nacion_padre; ?>"><?php echo $nacion_padre; ?></option>
		  <?php
			    include("php/conexion2.php");
                $clavebuscadah=  mysql_query("SELECT * FROM paises");
                while($row = mysql_fetch_array($clavebuscadah))
                {
                echo'<OPTION id="nac_padre" VALUE="'.$row['nombre'].'">'.$row['nombre'].'</OPTION>';
                }                           
                echo '</select>';
	        ?>
  </td>
  </tr>
  <tr>
    <td><label>Direccion del Domicilio</label></td>
    <td colspan="3"><input type="text" value= "<?php echo $domicilio_padre; ?>" name="domicilio_padre" id = "dom_padre"  size = "64" ></td>
    <td><label>Profesion</label></td>
    <td><input type="text" value= "<?php echo $titulo_padre; ?>" name="titulo_padre" id = "tit_padre" /></td>
    
  </tr>
  <tr>
    <td><label>Empresa donde trabaja</label></td>
    <td><input type="text" value= "<?php echo $empresa_padre; ?>" name="empresa_padre" id = "emp_padre" /></td>
    <td><label>Direccion Trabajo</label></td>
    <td><input type="text" value= "<?php echo $direccion_padre; ?>" name="direccion_padre" id = "dir_padre" /></td>
    <td><label>Cargo:</label></td>
    <td><input type="text" value= "<?php echo $cargo_padre; ?>" name="cargo_padre" id = "car_padre" /></td>
   
  </tr>
  <tr>
    <td><label>Telefono:</label></td>
    <td><input type="text" value= "<?php echo $telefono_padre; ?>" name="telefono_padre" id = "tel_padre" maxlength = "10" onKeyPress="return valida(event)" /></td>
    <td><label>Celular:</label></td>
    <td><input type="text" value= "<?php echo $celul_padre; ?>" name="celul_padre" id = "cel_padre" maxlength = "10" onKeyPress="return valida(event)" /></td>
	<td><label>Email:</label></td>
    <td><input type="text" value= "<?php echo $email_padre; ?>" name="email_padre" id = "email_padre"  /></td>
    
  </tr>
  </table>
        
        </fieldset>
    <fieldset class = "datos_representante" >
        <legend align="left"><h3>Datos del Representante</h3></legend>
        <table width="1167" border="0" cellpadding="3">
		  <tr>
		    <td><label>Tipo de Representante</label></td>
		    <td><select name="tipo_representante" id="parent"  value= "" onChange="habilitar(this)">
		      <option value="<?php echo $parent_representante; ?>"><?php echo $parent_representante; ?></option>
		      <option value="Madre">Madre</option>
		      <option value="Padre">Padre</option>
		      <option value="Otros">Otros</option>
		      </select></td>
		    <td><label>Parentesco</label></td>
		    <td><input type="text" value= "<?php echo $parent_representante; ?>" name="parent_representante" id = "parentesco"></td>
		    <td>&nbsp;</td>
		    <td>&nbsp;</td>
	      </tr> <tr>
		    <td><label>Nombres:</label></td>
		    <td><input type="text" value= "<?php echo $nombre_representante; ?>" name="nombre_representante" id = "nom_repre" /></td>
		    <td><label>Apellidos</label></td>
		    <td><input type="text" value= "<?php echo $apellido_representante; ?>" name="apellido_representante" id = "ape_repre" /></td>
		    <td><label>No. Cedula:</label></td>
		    <td><input type="text" value= "<?php echo $cedula_representante; ?>" name="cedula_representante" id = "ced_repre" maxlength= "10" onKeyPress="return valida(event)" onChange=	"ced_validador2(this)"/></td>
		    <td width="3"><div id="comp2"></div></td>
	      </tr>
		<tr>
		    <td><label>Edad</label></td>
		    <td><input type="text" name="edad_representante" value= "<?php echo $edad_representante; ?>" id = "edad_repre" size="3" maxlength="2" onKeyPress="return valida(event)"></td>
		    <td><label>Estado Civil</label></td>
		    <td><input type="text" name="estado_representante" value= "<?php echo $estado_representante; ?>" id = "est_repre" /></td>
		    <td><label>Nacionalidad</label>
		      <label></label></td>
		    <td>
			<select name="nacion_representante" value= "<?php echo $nacion_representante; ?>" id = "nac_repre" >
			<option id="nac_repre" value= "<?php echo $nacion_representante; ?>"><?php echo $nacion_representante; ?></option>
		  <?php
			    include("php/conexion2.php");
                $clavebuscadah=  mysql_query("SELECT * FROM paises");
                while($row = mysql_fetch_array($clavebuscadah))
                {
                echo'<OPTION id="nac_repre" VALUE="'.$row['nombre'].'">'.$row['nombre'].'</OPTION>';
                }                           
                echo '</select>';
	        ?>
			</td>
	      </tr>
<tr>
		    <td><label>Direccion Domicilio</label></td>
		    <td colspan="3"><input type="text" value= "<?php echo $domicilio_representante; ?>" name="domicilio_representante" id = "dom_repre" size = "67" ></td>
		    <td><label>Profesion</label></td>
		    <td><input type="text" name="titulo_representante" value= "<?php echo $titulo_representante; ?>" id = "tit_repre" /></td>
	      </tr>
		  <tr>
		    <td><label>Lugar de trabajo</label></td>
		    <td><input type="text" name="empresa_representante" value= "<?php echo $empresa_representante; ?>" id = "emp_repre" /></td>
		    <td><label>Direccion Trabajo</label></td>
		    <td><input type="text" name="direccion_representante" value= "<?php echo $direccion_representante; ?>" id = "dir_repre" /></td>
		    <td><label>Cargo:</label></td>
		    <td><input type="text" name="cargo_representante" value= "<?php echo $cargo_representante; ?>" id = "car_repre" /></td>
	      </tr>
          <tr>
		    <td><label>Telefono:</label></td>
		    <td><input type="text" name="telef_representante" value= "<?php echo $telef_representante; ?>" id = "tel_repre" maxlength = "10" onKeyPress="return valida(event)" /></td>
		    <td><label>Celular:</label></td>
		    <td><input type="text" name="celul_representante" value= "<?php echo $celul_representante; ?>" id = "cel_repre" maxlength = "10" onKeyPress="return valida(event)" /></td>
		    <td><label>Email:</label></td>
		    <td>
            <input type="text" name="email_representante" value= "<?php echo $email_representante; ?>" id = "email_repre" />
             </td>
	      </tr>
					  
          
		</table>
        
        
        
        </fieldset>	
	
	
       	  <fieldset class="subir_archivos">
			<table width="620" border="0" cellpadding="3">
    <tr>
      <td colspan="3"><h4>Seleccione los documentos que puede presentar en el momento de la Entrevista</h4></td>
    
  <tr>
    <td width="222"><label>Libreta de Calificaciones</label></td>
    <td width="374"><input type="checkbox" name="lib_calificaciones" <?php if ($lib_calificaciones=="lib_calificaciones")echo 'checked="checked"'?> value="lib_calificaciones"/ ></td>
  </tr>
  <tr>
        <td><label>Cedula Representante</label></td>
    <td><input type="checkbox" name="ced_representante" <?php if ($ced_representante=="ced_representante")echo 'checked="checked"'?> value="ced_representante"/ ></td>
       
  </tr>
  <tr>
   <td><label>Cedula Estudiante</label></td>
    <td><input type="checkbox" name="ced_estudiante" <?php if ($ced_estudiante=="ced_estudiante")echo 'checked="checked"'?> value="ced_estudiante"/ ></td>
  </tr>
  
  <tr>
  <td><label>Planilla de Servicio Basico (Agua - Luz - Telefono)</label></td>
    <td><input type="checkbox" name="planilla_servicio" <?php if ($planilla_servicio=="planilla_servicio")echo 'checked="checked"'?> value="planilla_servicio"/ ></td>
  </tr>
    <tr>
  <td><label>Carta de no Deuda de la Unidad Educativa Anterior.</label></td>
    <td><input type="checkbox" name="no_deuda" <?php if ($no_deuda=="no_deuda")echo 'checked="checked"'?> value="no_deuda"/ ></td>
  </tr>
  </table>		
		  </fieldset>

       	  <div class="clear"></div>
		</form>
		
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.12.0/jquery.validate.min.js"></script>
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
