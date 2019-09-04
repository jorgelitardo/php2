<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
</script>
<style type="text/css">
body p {
	font-family: Verdana, Geneva, sans-serif;
}
</style>
<style type="text/css">
input{outline:none;border:0px;}
#busqueda{background:#585858;color:#fff;}
#cdr{padding:5px;background:grey;width:220px;border-radius:10px 0px 0px 10px;}
#tab{background:#CCC;;border-radius:10px 10px 10px 10px;}

#modo1{
font-family: Verdana, Arial, Helvetica, sans-serif;
font-size: 13px;
font-weight:bold;
background-color: #fdfdf1;
background-repeat: repeat-x;
color: #990000;
font-family: “Trebuchet MS”, Arial;
text-align:left;
width: 1345px;
}

#modo2{
font-family: Verdana, Arial, Helvetica, sans-serif;
font-size: 12px;
font-weight:bold;
background-color: #03396c;
background-repeat: repeat-x;
color: white;
font-family: “Trebuchet MS”, Arial;
text-align:center;
width: 600px;
}

#modo3{
font-family: Verdana, Arial, Helvetica, sans-serif;
font-size: 12px;
font-weight:bold;
background-color: #c7d4f5;
background-repeat: repeat-x;
color: #03396c;
font-family: “Trebuchet MS”, Arial;
text-align:center;
width: 600px;
}	

#modo4{
font-family: Verdana, Arial, Helvetica, sans-serif;
font-size: 18px;
font-weight:bold;
background-color: #dcd08d;
background-repeat: repeat-x;
color: #000040;
font-family: “Trebuchet MS”, Arial;
text-align:center;
width: 1345px;
}

#modo5{
font-family: Verdana, Arial, Helvetica, sans-serif;
font-size: 25px;
font-weight:bold;
background-color: #000040;
background-repeat: repeat-x;
color: 	#FFFFFF;
font-family: “Trebuchet MS”, Arial;
text-align:center;
width: 600px;
}
#modo6{
font-family: Verdana, Arial, Helvetica, sans-serif;
font-size: 14px;
font-weight:bold;
background-color: #c7d4f5;
background-repeat: repeat-x;
color: #EB1212;
font-family: “Trebuchet MS”, Arial;
text-align:left;
width: 600px;
}
#tabla{
font-family: Verdana, Arial, Helvetica, sans-serif;
background-color: #F2F4F4 ;
font-size:12px;
text-align: center;
width: 1035px;
}
table tr:nth-child(odd) {
    background-color: #AED6F1;
}
table tr:nth-child(even) {
    background-color: #F4F6F7;
}

</style>
<?php
require_once('conexiones/conexion.php');
$cn=  Conectarse();
$fecha_inicio = $_POST['fecha_inicio'];
/*$dia_ini = date ('d',strtotime($fecha_inicio));
$mes_ini = date ('m',strtotime($fecha_inicio));
$anio_ini = date ('Y',strtotime($fecha_inicio));
$fecha_inicio = $dia_ini."-".$mes_ini."-".$anio_ini;*/
$fecha_fin = $_POST['fecha_final'];
/*$dia_fin = date ('d',strtotime($fecha_fin));
$mes_fin = date ('m',strtotime($fecha_fin));;
$anio_fin = date ('Y',strtotime($fecha_fin));
$fecha_fin = $dia_fin."-".$mes_fin."-".$anio_fin;*/
$palabra = $_POST['codigo_empleado'];
//$inspector = $_POST['inspector'];
//echo $inspector;
//$edad = $_POST['edad'];
//$curso=$_POST['curso'];
//$sexo = $_POST['sexo'];
//$diagnostico=$_POST['diagnostico'];
$jornada=$_POST['jornada'];
$anio_lectivo=$_POST['anio_lec'];
//echo $curso;
//echo $diagnostico;
/*echo $edad;
echo $diagnostico;
echo $jornada;*/

$querys = "SELECT * from cursos where estado = 'A' order by id";
$busqueda_curso = mysql_query($querys,$cn)or die(mysql_error());
echo '<div style="text-align:center;" id ="modo1" ><img src="img/baner-medico.png"/></div>';
//while ($reg5=  mysql_fetch_array($busqueda_curso)) {
//$cursillo = $reg5['cursos'];
//echo $cursillo;

//echo '<div style="text-align:center;" id = "modo4">Personal Solicita: '.$cursillo.'</div>';
echo '<div style="text-align:center;" id = "modo1">Desde: '.$fecha_inicio.'</div>';
echo '<div style="text-align:center;" id = "modo1">Hasta: '.$fecha_fin.'</div>';
//echo $palabra;
//echo "--";
//$clavebuscadah=mysql_query("select * from tbl_empleados where estado_emp = 'A' order by apellidos_emp",$cn);
//$conexion=mysql_connect("localhost","root","") or die("Problemas en la conexion");
     //mysql_select_db("departamento_medico_ang",$conexion) or die("Problemas en la selección de la base de datos");
$query = "select p.reg,p.apellidos_estudiante,p.nombres_estudiante,p.curso_estudiante,p.fecha_sep,p.jornada_estudiante, p.fecha_dece_estudiante,p.psicologo,p.medio_med,p.estado,p.nombres_madre,p.apellidos_madre,p.telef_madre,p.celul_madre,p.email_madre,p.nombres_padre,p.apellidos_padre, p.telefono_padre,p.celul_padre,p.email_padre,p.anio_lectivo,p.direcc_estudiante from postulantes p where p.fecha_sep BETWEEN '".$fecha_inicio."' AND '".$fecha_fin."'";
//echo $query;
if ($palabra<>"Todos") {
	$query = $query." and p.estado = '".$palabra."'";
}
if ($jornada<>"Todos") {
	$query = $query." and p.jornada_estudiante = '".$jornada."'";
}
if ($anio_lectivo<>"Todos") {
	$query = $query." and p.anio_lectivo = '".$anio_lectivo."'";
}
$query = $query. " order by p.fecha_dece_estudiante";
//echo $query;
$clavebuscadah2=mysql_query($query,$cn)or die(mysql_error());
$cuenta_registros = mysql_num_rows($clavebuscadah2)

?>
<!DOCTYPE html>
	  <html>
	  <head>
	  	<title></title>
	  </head>
	  <body>
	  	<div class="box-header" align="center">
                  <form role="form" action="consultar42.php" method="POST" name="Form" target="_blank">
					<input type="hidden" id = "querys" name="querys" value="<?php echo $query;?>">
					<input type="hidden" id = "fecha_in" name="fecha_in" value="<?php echo $fecha_inicio;?>">
					<input type="hidden" id = "fecha_fini" name="fecha_fini" value="<?php echo $fecha_fin;?>">
					<br>
					<br>
					<button type="submit" class="btn btn-success">Descargar Excel</button>
                  </form>
                  
                </div>
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
                  while($reg=  mysql_fetch_array($clavebuscadah2))
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
				    echo 'TOTAL REGISTROS:'.$cuenta_registros;
				    echo '<br>';
//}

                        ?>
                    </table>
	  </body>
	  </html>