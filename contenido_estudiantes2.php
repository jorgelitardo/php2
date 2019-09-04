<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Admisiones
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
            <!-- /.box-header -->
            <div class="box-body">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Estudiantes</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th>Id</th>
                          <th>Apellidos</th>
                          <th>Nombres</th>
                          <th>Curso</th>
                          <th>Jornada</th>
                          <th>Fecha Dece</th>
                          <th>Medio</th>
						              <th>Estado</th>
                          <th>Fecha Inscripcion</th>
                          <th>Año Lectivo</th>
						              <th>Opciones</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                  while($reg=  mysql_fetch_array($listado))
                    {
                      echo "<tr>";
                      echo "<td>".$reg['reg']."</td>";
                      echo "<td>".$reg['apellidos_estudiante']."</td>";
                      echo "<td>".$reg['nombres_estudiante']."</td>";
                      echo "<td>".$reg['curso_estudiante']."</td>";
					            echo "<td>".$reg['jornada_estudiante']."</td>";
					            echo "<td>".$reg['fecha_dece_estudiante']."</td>";
                      echo "<td>".$reg['medio_med']."</td>";
					            echo "<td>".$reg['estado']."</td>";
                      echo "<td>".$reg['fecha_actual']."</td>";
                      echo "<td>".$reg['anio_lectivo']."</td>";
                      echo "<td><a class='btn btn-info glyphicon glyphicon-file' href=historia_estudiante.php?codigo=$reg[reg]></a>";
                            }
                        ?>
                    </table>
              </div>
            <!-- /.box -->
          </div>
        <!-- /.col -->
        </div>      
    </section>
    <!-- /.content -->
    </div>