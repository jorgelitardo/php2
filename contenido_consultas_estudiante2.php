<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Departamento Médico
      <small>Historia Clínica</small>
    </h1>
  </section>
  <!-- Main content -->
  <section class="content">
    <!--div class="col-md-12"-->
    <div class="box box-primary col-md-6">
      <!--div class="col-md-6"-->
      <div class="box-header with-border col-md-12">
        <h3 class="box-title">Datos Estudiantes</h3>
      </div>
      <!-- form start -->
      <form role="form" action="consultar2.php" method="POST" name="Form" target="_blank">
        <div class="box-body col-md-4">
          <div class="form-group">
            <label for="empleados">Estudiantes:</label>
            <select  class = "form-control" id="codigo_estudiante" name="codigo_estudiante">
              <option VALUE="Todos" selected>Todos</option>
              <?php
                while($row = mysql_fetch_array($clavebuscadah))
                {
                //echo $row['nombres_emp'];
                  $B=" ";
                echo'<OPTION VALUE="'.$row['codigo_est'].'">'.$row['apellidos_est'].$B.$row['nombres_est'].'</OPTION>';
                } ;                           
                echo '</select>';
              ?>
            <label for="doctora">Inspector:</label>
            <select  class = "form-control" id="codigo_empleado" name="codigo_empleado">
              <option VALUE="Todos" selected>Todos</option>
              <?php
                while($row2 = mysql_fetch_array($listado))
                {
                //echo $row['nombres_emp'];
                  $B=" ";
                echo'<OPTION VALUE="'.$row2['codigo_emp'].'">'.$row2['apellidos_emp'].$B.$row2['nombres_emp'].'</OPTION>';
                } ;                           
                echo '</select>';
              ?>
          </div>
        </div>
        <div class="box-body col-md-4">
          <div class="form-group">
                <label>Fecha Inicio:</label>
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="date" class="datapicker" id="fecha_inicio" name="fecha_inicio">
                </div>
                <!-- /.input group -->
          </div>
        </div>
            <div class="box-body col-md-4">
              <div class="form-group">
                <label>Fecha Final:</label>
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="date" class="form-control pull-right" id="fecha_final" name="fecha_final">
                </div>
                <!-- /.input group -->
                
              </div>
                <!--div class="form-group">
                <label for="codigo">Codigo Empleado</label>
                <input type="text" class="form-control" id="codigo" value=""-->
            </div>
             <!--div style="MIN-HEIGHT: 10px" id="fb-submit-button-div" class="fb-item-alignment-left fb-footer">
            <input style="BACKGROUND-IMAGE: url(theme/default/images/btn_submit.png)"
              id="fb-submit-button" class="fb-button-special" type="submit")"
              value="Buscar" />
  </div-->
          </form>        
        </div> 
      <!--/div-->
  </div>
    </section>
</div><!-- /.content-wrapper -->