<script>
function activar() {
    document.getElementById("fecha_cita").disabled = false;
	document.getElementById("hora_cita").disabled = false;
}

function desactivar() {
    document.getElementById("fecha_cita").disabled = true;
	document.getElementById("hora_cita").disabled = true;
}

function desactivar_tipo() {
	document.getElementById("tipo_doc_nov").value = "Citacion";
    document.getElementById("tipo_doc_nov").disabled = true;
	alert("Guardado con éxito");
}

</script>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Inspectoria
        <small>Novedades Estudiantes</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <!--div class="col-md-12"-->
        <div class="box box-primary col-md-6">
          <!--div class="col-md-6"-->
          <div class="box-header with-border col-md-12">
            <h3 class="box-title">Datos Estudiante</h3>
          </div>
          <!-- form start -->
          <form role="form">
            <div class="box-body col-md-4">
              <div class="form-group">
                <label for="cedula">Cedula:</label>
                <input type="text" class="form-control" id="cedula" value="<?php echo $cedula_emp;?>">
                <label for="apellidos">Apellidos:</label>
                <input type="text" class="form-control" id="apellidos" name="apellidos" value="<?php echo $apellidos_emp;?>">
                <label for="jornada">Jornada:</label>
                <input type="text" class="form-control" id="jornada" name="jornada" value="<?php echo $jornada_est;?>">
                <label for="representante_1">Representante Legal:</label>
                <input type="text" class="form-control" id="representante_1" name="representante_1b" value="<?php echo $representante_l;?>">
                <label for="representante_2">Representante Academico:</label>
                <input type="text" class="form-control" id="representante_2" name="representante_2" value="<?php echo $representante_2;?>">
                
              </div>
                <!--div class="form-group">
                <label for="codigo">Codigo Empleado</label>
                <input type="text" class="form-control" id="codigo" value="<?php //echo $codigo_emp;?>"-->
            </div>
            <div class="box-body col-md-4">
              <div class="form-group">
                <label for="codigo">Codigo Empleado:</label>
                <input type="text" class="form-control" id="codigo" value="<?php echo $codigo_emp;?>">
                <label for="nombres">Nombres:</label>
                <input type="text" class="form-control" id="nombres" value="<?php echo $nombres_emp;?>">
                <label for="sexo">Sexo:</label>
                <input type="text" class="form-control" id="sexo" value="<?php echo $sexo_emp;?>">
                <label for="repre1_conv">Telefono Convencional:</label>
                <input type="text" class="form-control" id="repre1_conv" name="repre1_conv" value="<?php echo $representante_l_conv;?>">
                <label for="repre2_conv">Telefono Convencional:</label>
                <input type="text" class="form-control" id="repre2_conv" name="repre2_conv" value="<?php echo $representante_2_conv;?>">
              </div>
            </div>
            <div class="box-body col-md-4">
              <div class="form-group">
                <label for="area_labores">Curso:</label>
                <input type="text" class="form-control" id="area" value="<?php echo $area_emp;?>">
                <label for="fecha_nac">Fecha Nacimiento:</label>
                <input type="text" class="form-control" id="fecha_nac" value="<?php echo $fechanac_emp;?>">
                <label for="edad">Edad:</label>
                <input type="text" class="form-control" id="edad" value="<?php echo $edad;?>">
                <label for="repre1_cel">Telefono Celular:</label>
                <input type="text" class="form-control" id="repre1_cel" name="repre1_cel" value="<?php echo $representante_l_cel;?>">
                <label for="repre2_cel">Telefono Celular:</label>
                <input type="text" class="form-control" id="repre2_cel" name="repre2_cel" value="<?php echo $representante_2_cel;?>">
                
              </div>
                <!--div class="form-group">
                <label for="codigo">Codigo Empleado</label>
                <input type="text" class="form-control" id="codigo" value="<?php //echo $codigo_emp;?>"-->
            </div>  
          </form>        
        </div> 
      <!--/div-->
      <div class="col-md-12">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Novedad Detalle</h3>
          </div>
		  	  <?php
			  $numero = 0;
						$listado2=  mysql_query("select id_nov,num_reg,codigo_est_nov,fecha_nov,norma_convicencia_nor,autoridad_reporta,estado_mail
                        FROM tbl_novedades_est INNER JOIN tbl_normas_convivencias WHERE tbl_novedades_est.cod_norma_convivencia_inc = tbl_normas_convivencias.cod_nor
                        and tbl_novedades_est.codigo_est_nov = '".$cod."' and tbl_normas_convivencias.cod_nor = tbl_novedades_est.cod_norma_convivencia_inc and tbl_novedades_est.jornada_est_nov='".$jornada_est."'",$cn);
                        while($reg2=  mysql_fetch_array($listado2))
                          {
                            $numero=$reg2['num_reg'];
                          }
						  $numero=$numero+1;
//						  echo $numero;
       		 
			  
			
		  ?>
          <form role="form" action="guardar_consulta3.php" method="GET" name="Form">
            <div class="box-body">
              <div class="form-group">
                <label>Fecha:</label>
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="date" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask id="fecha_nov" name="fecha_nov">
                </div>
                <label for="tipo">Tipo Documento:</label>
                <!--input type="text" class="form-control" id="examen" name="examen"-->
				<?php 
				if ($numero == '4')
					$numero = 1;
				
		        if ($numero == '3')
				{
				echo '<input type="input" class="form-control" id="tipo_doc_nov" name="tipo_doc_no" value = "Citacion" disabled>';
				echo '<input type="hidden" id = "tipo_doc_nov" name="tipo_doc_nov" value="Citacion">';
				echo '<label for="fecha_cita">Fecha Cita:</label>';
                echo '<input type="date" class="form-control" id="fecha_cita" name="fecha_cita" >';
                echo '<label for="hora">Hora Cita:</label>';
                echo '<input type="time" class="form-control" id="hora_cita" name="hora_cita" >';
               	}
				else
				{
				?>	
				<select class="form-control" id="tipo_doc_nov" name="tipo_doc_nov" onChange="if(this.options[1].selected) {alert('Has seleccionado Notificacion'); desactivar();}
				else if(this.options[2].selected) {alert('Has seleccionado Citacion, recuerde que debe colocar Hora y Fecha de Citacion'); activar();}" required>
                <?php
				echo '<option value="">Selecciona una opcion</option>';
                echo '<option value="Notificacion">Notificación</option>';
                echo '<option value="Citacion">Citación</option>';
                echo '</select>';
				echo '<label for="fecha_cita">Fecha Cita:</label>';
                echo '<input type="date" class="form-control" id="fecha_cita" name="fecha_cita" disabled>';
                echo '<label for="hora">Hora Cita:</label>';
                echo '<input type="time" class="form-control" id="hora_cita" name="hora_cita" disabled>';
				}
				?>
			
                <label for="norma_incumplida">Norma Convivencia Incumplida:</label>
                <select  class = "form-control" id="norma_incumplida" name="norma_incumplida" required>
                <option value="">Selecciona una opcion</option>
                <?php
                $clavebuscadah=  mysql_query("SELECT * FROM tbl_normas_convivencias where estatus_norm='A'",$cn);
                while($row = mysql_fetch_array($clavebuscadah))
                {
                //echo $row['nombres_emp'];
                  $B=" ";
                echo'<OPTION VALUE="'.$row['cod_nor'].'">'.$row['norma_convicencia_nor'].'</OPTION>';
                } ;                           
                echo '</select>';
				//$norma_convivencia = $row['norma_convicencia_nor'];
                ?>
                <label for="desmerito">Desméritos:</label>
                <textarea type="textarea" class="form-control" cols="40" rows="2" id="desmerito" name="desmerito" required></textarea>
                <label for="autoridad_reporta">Autoridad que reporta:</label>
                <select  class = "form-control" id="autoridad_reporta" name="autoridad_reporta" required>
                <option value="">Selecciona una opcion</option>
                <?php
                $clavebuscadah=  mysql_query("SELECT * FROM tbl_empleados where estado_emp='A'",$cn);
                while($row = mysql_fetch_array($clavebuscadah))
                {
                //echo $row['nombres_emp'];
                  $B=" ";
                echo'<OPTION VALUE="'.$row['codigo_emp'].'">'.$row['apellidos_emp'].$B.$row['nombres_emp'].'</OPTION>';
                } ;                           
                echo '</select>';
                ?>
                <label for="firma_est">Firma Estudiante:</label>
                <!--input type="text" class="form-control" id="examen" name="examen"-->
                <select class="form-control" id="firma_est" name="firma_est" required>
                  <option value="">Selecciona una opcion</option>
                  <option value="si">si</option>
                  <option value="no">no</option>
                  <option value="no firmo">no quiso firmar</option>          
                </select>
                <label for="firma_rep">Firma Representante:</label>
                <!--input type="text" class="form-control" id="examen" name="examen"-->
                <select class="form-control" id="firma_rep" name="firma_rep" required>
                  <option value="">Selecciona una opcion</option>
                  <option value="si">si</option>
                  <option value="no">no</option>
                  <option value="no asistio">no asistió</option>
                  <option value="no firmo">no quiso firmar</option>         
                </select>
                <label for="accion">Acciones Tomadas:</label>
                <textarea type="textarea" class="form-control" cols="40" rows="2" id="accion_nov" name="accion_nov"></textarea>
                <label for="observacio">Observaciones:</label>
                <textarea type="textarea" class="form-control" cols="30" rows="2" id="observacion_nov" name="observacion_nov"></textarea>
                <input type="hidden" id="codigo_pac" name="codigo_pac" value="<?php echo $codigo_emp;?>">
                <input type="hidden" id="id" name="id" value="<?php echo $id_emp;?>">
                <input type="hidden" id = "nombres" name="nombres" value="<?php echo $nombres_emp;?>">
                <input type="hidden" id = "apellidos" name="apellidos" value="<?php echo $apellidos_emp;?>">
                <input type="hidden" id = "jornada" name="jornada" value="<?php echo $jornada_est;?>">-->
							    
				<input type="hidden" id = "representante_1" name="representante_1" value="<?php echo $representante_l;?>">
           		
				<input type="hidden" id = "representante_2" name="representante_2" value="<?php echo $representante_2;?>">
				<input type="hidden" id = "correo_est" name="correo_est" value="<?php echo $correo_est;?>">
				<input type="hidden" id = "numero" name="numero" value="<?php echo $numero;?>">
				<!--label for="fecha_cita">Fecha Cita:</label>
                <input type="text" class="form-control" id="fecha_cita" name="fecha_cita">
                <label for="hora">Hora:</label>
                <input type="text" class="form-control" id="hora_cita" name="hora_cita"-->
              </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
          </form>
          
        </div>
        <!-- /.box --> 
      </div>
  </div>
    </section>
</div>