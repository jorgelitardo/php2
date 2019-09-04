<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Departamento Marketing
      <small> ADMISIONES</small>
    </h1>
  </section>
  <!-- Main content -->
  <section class="content">
    <!--div class="col-md-12"-->
    <div class="box box-primary col-md-6">
      <!--div class="col-md-6"-->
      <div class="box-header with-border col-md-12">
        <h3 class="box-title">Datos Aspirantes</h3>
      </div>
      <!-- form start -->
      <form role="form" action="consultar2.php" method="POST" name="Form" target="_blank">
        <div class="box-body col-md-4">
          <div class="form-group">
            <label for="empleados">Aspirantes:</label>
            <select  class = "form-control" id="codigo_empleado" name="codigo_empleado">
              <option VALUE="Todos" selected>Todos</option>
              <?php
                while($row = mysql_fetch_array($clavebuscadah))
                {
                //echo $row['nombres_emp'];
                  $B=" ";
                echo'<OPTION VALUE="'.$row['reg'].'">'.$row['apellidos_estudiante'].$B.$row['nombres_estudiante'].'</OPTION>';
                } ;                           
                echo '</select>';
              ?>
            <label for="doctora">Psicologo:</label>
            <select  class = "form-control" id="inspector" name="inspector">
              <option VALUE="Todos" selected>Todos</option>
              <?php
                while($row2 = mysql_fetch_array($listado))
                {
                //echo $row['nombres_emp'];
                  $B=" ";
                echo'<OPTION VALUE="'.$row2['psicologo'].'">'.$row2['psicologo'].'</OPTION>';
                } ;                           
                echo '</select>';
              ?>
            </select>
          </div>
        </div>
        <div class="box-body col-md-4">
          <div class="form-group">
                <label>Fecha Inicio:</label>
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="date" class="form-control pull-right" id="fecha_inicio" name="fecha_inicio">
                </div>
                <label for="curso">Curso:</label>
                <select  class = "form-control" id="curso" name="curso" required>
                <option value="Todos">Todos</option>
                <?php
                $clavebuscadah=  mysql_query("select cursos from tbl_cursos where estado ='A' group by cursos order by cursos",$cn);
                while($row = mysql_fetch_array($clavebuscadah))
                {
                //echo $row['nombres_emp'];
                  $B=" ";
                echo'<OPTION VALUE="'.$row['cursos'].'">'.$row['cursos'].'</OPTION>';
                echo $row['cursos'];
                } ;                           
                echo '</select>';
                ?>
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
                  <input type="date" class="form-control pull-right" id="fecha_final" name="fecha_final" required>
                </div>
                <label for="jornada">Jornada:</label>
                <select  class = "form-control" id="jornada" name="jornada">
                  <option VALUE="Todos" selected>Todos</option>
                  <option VALUE="Matutina">Matutina</option>
                  <option VALUE="Vespertina">Vespertina</option>
                </select>              
              </div>
            </div>
             <div style="MIN-HEIGHT: 10px" id="fb-submit-button-div" class="fb-item-alignment-left fb-footer">
            <input style="BACKGROUND-IMAGE: url(theme/default/images/btn_submit.png)"
              id="fb-submit-button" class="fb-button-special" type="submit")"
              value="Buscar" />
  </div>
          </form>        
        </div> 
      <!--/div-->
  </div>
    </section>
</div><!-- /.content-wrapper -->