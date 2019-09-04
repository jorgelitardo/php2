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
        <h3 class="box-title">REPORTE CONSOLIDADO</h3>
      </div>
      <!-- form start -->
      <form role="form" action="consultar4.php" method="POST" name="Form" target="_blank">
        <div class="box-body col-md-4">
          <div class="form-group">
            <label for="empleados">Estados:</label>
            <select  class = "form-control" id="codigo_empleado" name="codigo_empleado">
              <option VALUE="Todos" selected>Todos</option>
              <?php
                while($row = mysql_fetch_array($clavebuscadah))
                {
                //echo $row['nombres_emp'];
                  $B=" ";
                echo'<OPTION VALUE="'.$row['estado'].'">'.$row['estado'].'</OPTION>';
                } ;                           
                echo '</select>';
              ?>
            <label for="jornada">Jornada:</label>
                <select  class = "form-control" id="jornada" name="jornada">
                  <option VALUE="Todos" selected>Todos</option>
                  <option VALUE="Matutina">Matutina</option>
                  <option VALUE="Vespertina">Vespertina</option>
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

                <label for="anio">Año Lectivo:</label>
                <select  class = "form-control" id="anio_lec" name="anio_lec">
                  <option VALUE="Todos" selected>Todos</option>
                  <option VALUE="2017">2017</option>
                  <option VALUE="2018">2018</option>
                  <option VALUE="2019">2019</option>
                  <option VALUE="2020">2020</option>
                </select>
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