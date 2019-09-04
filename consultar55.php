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
//echo $curso;
//echo $diagnostico;
/*echo $edad;
echo $diagnostico;
echo $jornada;*/

$query = "select * from postulantes where reg > 50";
$listado=  mysql_query("select * from postulantes where reg >= 1500 and reg <= 2000",$cn) or die(mysql_error());
//echo $query;
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
			    <td width="60" id = "modo2">Fecha DECE</td>
			    <td width="80" id = "modo2">Apellidos</td>
			    <td width="80" id = "modo2">Nombres</td>
				<td width="50" id = "modo2">Curso</td>
				<td width="50" id = "modo2">Jornada</td>
				<td width="50" id = "modo2">Fecha psicologo</td>
				<td width="80" id = "modo2">Psicologo</td>
				<td width="50" id = "modo2">Estado</td>
				</tr>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $i = 1;
                  while($reg=  mysql_fetch_array($listado))
                    {
	                    echo "<tr>";
	                    echo '<td width="100">'.$i.'</td>';
	                    echo '<td width="100">'.$reg['reg'].'</td>';
	                    $registro = $reg['reg'];
	                    echo '<td width="100">'.$reg['fecha_actual'].'</td>';
	                    echo '<td width="100">'.$reg['apellidos_estudiante'].'</td>';
	                    echo '<td width="100">'.$reg['nombres_estudiante'].'</td>';
	                    echo '<td width="100">'.$reg['curso_estudiante'].'</td>';
	                    echo '<td width="100">'.$reg['jornada_estudiante'].'</td>';
	                    $fecha_inicio = $reg['fecha_actual'];
						$dia_ini = date ('d',strtotime($fecha_inicio));
						$mes_ini = date ('m',strtotime($fecha_inicio));
						$anio_ini = date ('Y',strtotime($fecha_inicio));
						$fecha_inicio = $anio_ini."-".$mes_ini."-".$dia_ini;
						$fecha_inicio = date ('Y-m-d',strtotime($fecha_inicio));
						echo $fecha_inicio;
						$actualiza="Update postulantes Set fecha_sep='".$fecha_inicio."' where reg=$registro";
						echo $actualiza;
						mysql_query($actualiza);
	                    echo '<td width="100">'.$fecha_inicio.'</td>';
						echo '<td width="50">'.$reg['psicologo'].'</td>';
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