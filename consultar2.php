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
$fecha_fin = $_POST['fecha_final'];
$palabra = $_POST['codigo_empleado'];
$inspector = $_POST['inspector'];
//echo $inspector;
//$edad = $_POST['edad'];
$curso=$_POST['curso'];
//$sexo = $_POST['sexo'];
//$diagnostico=$_POST['diagnostico'];
$jornada=$_POST['jornada'];
//echo $curso;
//echo $diagnostico;
/*echo $edad;

echo $diagnostico;
echo $jornada;*/
echo '<div style="text-align:center;" id ="modo1" ><img src="img/baner-medico.png"/></div>';
echo '<div style="text-align:center;" id = "modo4">Personal Solicita: '.$inspector.'</div>';
echo '<div style="text-align:center;" id = "modo1">Desde: '.$fecha_inicio.'</div>';
echo '<div style="text-align:center;" id = "modo1">Hasta: '.$fecha_fin.'</div>';
//echo $palabra;
//echo "--";
//$clavebuscadah=mysql_query("select * from tbl_empleados where estado_emp = 'A' order by apellidos_emp",$cn);
//$conexion=mysql_connect("localhost","root","") or die("Problemas en la conexion");
     //mysql_select_db("departamento_medico_ang",$conexion) or die("Problemas en la selección de la base de datos");
$query = "select p.reg,p.apellidos_estudiante,p.nombres_estudiante,p.curso_estudiante,p.jornada_estudiante, p.fecha_dece_estudiante,p.psicologo,p.estado from postulantes p where p.fecha_dece_estudiante BETWEEN '".$fecha_inicio."' AND '".$fecha_fin."' and anio_lectivo=2017";
//echo $query;
if ($palabra<>"Todos") {
	$query = $query." and p.estado = '".$palabra."'";
}
if ($inspector<>"Todos") {
	$query = $query." and p.psicologo = '".$inspector."'";
}
if ($curso<>"Todos") {
	$query = $query." and p.curso_estudiante = '".$curso."'";
}
if ($jornada<>"Todos") {
	$query = $query." and p.jornada_estudiante = '".$jornada."'";
}
$query = $query. " order by fecha_dece_estudiante";
//echo $query;
$clavebuscadah2=mysql_query($query,$cn)or die(mysql_error());

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
			    <td width="50" id = "modo2">Fecha DECE</td>
			    <td width="80" id = "modo2">Nombre/Apellido</td>
			    <td width="80" id = "modo2">Nombre/Apellido</td>
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
                  while($reg=  mysql_fetch_array($clavebuscadah2))
                    {
	                    echo "<tr>";
	                    echo '<td width="100">'.$i.'</td>';
	                    $i = $i + 1;
	                    echo '<td width="100">'.$reg['reg'].'</td>';
	                    echo '<td width="100">'.$reg['fecha_dece_estudiante'].'</td>';
	                    echo '<td width="100">'.$reg['apellidos_estudiante'].'</td>';
	                    echo '<td width="100">'.$reg['nombres_estudiante'].'</td>';
	                    echo '<td width="100">'.$reg['curso_estudiante'].'</td>';
	                    echo '<td width="100">'.$reg['jornada_estudiante'].'</td>';
	                    echo '<td width="100">'.$reg['fecha_dece_estudiante'].'</td>';
						echo '<td width="50">'.$reg['psicologo'].'</td>';
						echo '<td width="50">'.$reg['estado'].'</td>';
						
				    }
                        ?>
                    </table>
	  </body>
	  </html>	  
	  
