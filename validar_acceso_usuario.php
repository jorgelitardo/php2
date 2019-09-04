<?php 
session_start();
require_once('conexiones/conexion.php');
$cn=  Conectarse();
/*if (!$_SESSION)
{
	echo '<script language = javascript>
	alert("usuario no autenticado")
	self.location = "AccesoSistema.php"
	</script>';
}*/
//Proceso de conexión con la base de datos
/*$conex=mysql_connect("localhost", "root", "123456")
		or die("No se pudo realizar la conexion");
		mysql_select_db("departamento_medico_ang",$conex)
		or die("ERROR con la base de datos");*/
//Inicio de variables de sesión
//date_default_timezone_set('America/Guayaquil');
function detect()
	{
		$browser = array("IE","OPERA","MOZILLA","NETSCAPE","FIREFOX","SAFARI","CHROME");
		$os = array("WINDOWS","MAC","LINUX");
		$info['browser'] = "OTHER";
		$info['os'] = "OTHER";
		foreach($browser as $parent)
		{
			$s = strpos(strtoupper($_SERVER['HTTP_USER_AGENT']), $parent);
			$f = $s + strlen($parent);
			$version = substr($_SERVER['HTTP_USER_AGENT'], $f, 15);
			$version = preg_replace('/[^0-9,.]/','',$version);
			if ($s)
			{
				$info['browser'] = $parent;
				$info['version'] = $version;
			}
		}
		foreach($os as $val)
		{
			if (strpos(strtoupper($_SERVER['HTTP_USER_AGENT']),$val)!==false)
				$info['os'] = $val;
		}
		return $info;
	}

if (!isset($_SESSION))
{
	session_start();
}
//Recibir los datos ingresados en el formulario
$usuario= $_POST['usuario'];
$contrasena= $_POST['clave'];
$status='A';
/*echo $usuario;
echo "----------";
echo $contrasena;*/
//Consultar si los datos son están guardados en la base de datos
$consulta= "SELECT * FROM tbl_usuarios WHERE usuario_usu='".$usuario."' AND contrasenia_usu='".$contrasena."' AND activo_usu='".$status."'"; 
$resultado= mysql_query($consulta,$cn) or die (mysql_error());
$fila=mysql_fetch_array($resultado);
if (!$fila[0]) //opcion1: Si el usuario NO existe o los datos son INCORRRECTOS
{
	
	echo '<script language = javascript>
	alert("No ha iniciado ninguna sesion, por favor registrese")
	self.location = "index.php"
	</script>';
}
else //opcion2: Usuario logueado correctamente
{
	//Definimos las variables de sesión y redirigimos a la página de usuario
	$_SESSION['usuario'] = $fila['usuario_usu'];
	$_SESSION['clave'] = $fila['contrasenia_usu'];
	$_SESSION['tipo_usuario'] = $fila['tipo_usu'];
	$_SESSION['correo'] = $fila['correo_usu'];
	/*$_SESSION['zona'] = $fila['zona_usu'];*/
	$_SESSION['nombres_usu'] = $fila['nombres_usu'];
	$_SESSION['jornada'] = $fila['jornada'];
	//$_SESSION['apellidos_usu'] = $fila['apellidos'];
	//
	//
	if (!empty($_SERVER['HTTP_CLIENT_IP']))
		$ip = $_SERVER['HTTP_CLIENT_IP'];
	if (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
		$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
		$ip = $_SERVER['REMOTE_ADDR'];
		$info = detect();
	$fecha_actual = date("Y-m-d");
	$dispositivo = $info["os"]." ".$info["browser"];
	$hora_actual = date('H:i:s');
	$nom_software = "Admisiones_mkt";
	$query4 = 'INSERT INTO tbl_registro_accesos (fecha_reg_acc, hora_reg_acc, cod_usu_reg_acc, nom_usu_reg_acc, nom_prog_reg_acc, ip_reg_acc, disp_reg_acc,estado_reg_acc) VALUES (\''.$fecha_actual.'\',\''.$hora_actual.'\',\''.$_SESSION['usuario'].'\',\''.$_SESSION['nombres_usu'].'\',\''.$nom_software.'\',\''.$ip.'\',\''.$dispositivo.'\',\''."A".'\')';
	mysql_query($query4) or die(mysql_error());

	if ($_SESSION['tipo_usuario']=="Administrador")
	{	
		header("Location: principal0.php");
	}
	else
	{
		header("Location: principal0.php");
	}
}
?>
