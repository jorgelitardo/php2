<?php 
$fec_in = $_POST['fecha_in'];
$fec_fi = $_POST['fecha_fini'];
header("Pragma: public");
header("Expires: 0");
$filename = "reporte"."_".$fec_in."_".$fec_fi.date("His").".xls";
header("Content-type: application/x-msdownload");
header("Content-Disposition: attachment; filename=$filename");
header("Pragma: no-cache");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");

$busqueda = $_POST['querys'];
echo $busqueda;
$servidor="localhost";
$basededatos="admisiones";
$usuario="root";
//$clave="Daniel12341";
$clave="";
$cn=mysqli_connect($servidor,$usuario,$clave,$basededatos) or die ("Error conectando a la base de datos");
/*mysqli_select_db($cn,$basededatos) or die("Error seleccionando la Base de datos");*/
$cn->query ("SET NAMES 'utf8_spanish_ec'");
$clavebuscadah=mysqli_query($cn,$busqueda)or die(mysql_error());

?>
<!DOCTYPE html>
	  <html>
	  <head>
	  	<title></title>
	  </head>
	  <body>
	  	<table id="example1" class="table table-bordered table-striped">
         	<thead>
            	<tr>
                <td width="30" id = "modo2">No.</td>
                <td width="30" id = "modo2">Reg.</td>
			    <td width="60" id = "modo2">Fecha Inscripcion</td>
			    <td width="80" id = "modo2">Apellidos</td>
			    <td width="80" id = "modo2">Nombres</td>
				<td width="50" id = "modo2">Curso</td>
				<td width="50" id = "modo2">Jornada</td>
				<td width="50" id = "modo2">Fecha psicologo</td>
				<td width="80" id = "modo2">Psicologo</td>
				<td width="80" id = "modo2">Medio</td>
				<td width="80" id = "modo2">Año Lectivo</td>
				<td width="80" id = "modo2">Nombres Padre</td>
				<td width="80" id = "modo2">Telefonos Padre</td>
				<td width="80" id = "modo2">Correo Padre</td>
				<td width="80" id = "modo2">Nombres Madre</td>
				<td width="80" id = "modo2">Telefonos Madre</td>
				<td width="80" id = "modo2">Correo Madre</td>
				<td width="80" id = "modo2">Domicilio</td>
				<td width="50" id = "modo2">Estado</td>
				</tr>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $i = 1;
                  while($reg=  mysqli_fetch_array($clavebuscadah))
                    {
	                    echo "<tr>";
	                    echo '<td width="100">'.$i.'</td>';
	                    echo '<td width="100">'.$reg['reg'].'</td>';
	                    echo '<td width="100">'.$reg['fecha_sep'].'</td>';
	                    echo '<td width="100">'.$reg['apellidos_estudiante'].'</td>';
	                    echo '<td width="100">'.$reg['nombres_estudiante'].'</td>';
	                    echo '<td width="100">'.$reg['curso_estudiante'].'</td>';
	                    echo '<td width="100">'.$reg['jornada_estudiante'].'</td>';
	                    echo '<td width="100">'.$reg['fecha_dece_estudiante'].'</td>';
						echo '<td width="50">'.$reg['psicologo'].'</td>';
						echo '<td width="50">'.$reg['medio_med'].'</td>';
						echo '<td width="50">'.$reg['anio_lectivo'].'</td>';
						$nom_padre = $reg['apellidos_padre']." ".$reg['nombres_padre'];
						echo '<td width="50">'.$nom_padre.'</td>';
						$tel_padre = $reg['telefono_padre']." - ".$reg['celul_padre'];
						echo '<td width="50">'.$tel_padre.'</td>';
						echo '<td width="50">'.$reg['email_padre'].'</td>';
						$nom_madre = $reg['apellidos_madre']." ".$reg['nombres_madre'];
						echo '<td width="50">'.$nom_madre.'</td>';
						$tel_madre = $reg['telef_madre']." - ".$reg['celul_madre'];
						echo '<td width="50">'.$tel_madre.'</td>';
						echo '<td width="50">'.$reg['email_madre'].'</td>';
						echo '<td width="50">'.$reg['direcc_estudiante'].'</td>';
						echo '<td width="50">'.$reg['estado'].'</td>';
						$i = $i + 1;
				    }
				    
				    echo '<br>';
				    //echo 'TOTAL REGISTROS:'.$cuenta_registros;
				    echo '<br>';
//}

                        ?>
                    </table>
	  </body>
	  </html>