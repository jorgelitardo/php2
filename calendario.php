<?php
//error_reporting(-1);
include("conexion2.php");
?>
<html xmlns="http://www.w3.org/1999/xhtml">

	<head>
		<meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
		<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7">
		<title>Calendario para separar fecha de cupo ANG</title>
		<meta http-equiv="PRAGMA" content="NO-CACHE" />
		<meta http-equiv="EXPIRES" content="-1" />
		<script src="http://code.jquery.com/jquery-1.9.0.min.js"></script>
		<link type="text/css" rel="stylesheet" media="all" href="estilos2.css" />
		<link type="text/css" rel="stylesheet" href="css/simpleform2.css" />
    
        <!--<script type="text/javascript" src="js/admisiones.js"></script>-->
	</head>
<body>
		
	<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.12.0/jquery.validate.min.js"></script>
	<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.12.0/localization/messages_es.js "></script>
	
		<script type="text/javascript">
		function generar_calendario(mes,anio)
		{
			var agenda=$("#agenda");
			agenda.html("<img src='images/loading.gif'>");
			$.ajax({
				type: "GET",
				url: "ajax_calendario.php",
				cache: false,
				data: {mes:mes,anio:anio,accion:"generar_calendario" }
			}).done(function( respuesta ) 
			{
				agenda.html(respuesta);
				$('a.modal').bind("click",function(e) 
				{
					e.preventDefault();
					var id = $(this).data('evento');
					var fecha = $(this).attr('rel');
					
					////////				
					if (fecha!="") 
					{
						$("#evento_fecha").val(fecha);
						$("#que_dia").html(fecha);
					}
					var maskHeight = $(document).height();
					var maskWidth = $(window).width();
				
					$('#mask').css({'width':maskWidth,'height':maskHeight});
					
					$('#mask').fadeIn(1000);
					$('#mask').fadeTo("slow",0.8);	
				
					var winH = $(window).height();
					var winW = $(window).width();
						  
					$(id).css('top',  winH/2-$(id).height()/2);
					$(id).css('left', winW/2-$(id).width()/2);
				
					$(id).fadeIn(200); 
				
				});
		
				$('.close').bind("click",function (e) 
				{
					var fecha=$(this).attr("rel");
					var nueva_fecha=fecha.split("-");
					e.preventDefault();
					$('#mask').hide();
					$('.window').hide();
					generar_calendario(nueva_fecha[1],nueva_fecha[0]);
				});
		
				//guardar evento
				$('.enviar').bind("click",function (e) 
				{
					e.preventDefault();
					$("#respuesta_form").html("<img src='images/loading.gif'>");
					var evento=$("#evento_titulo").val();
					var fecha=$("#evento_fecha").val();
					
					$.ajax({
						type: "GET",
						url: "ajax_calendario.php",
						cache: false,
						data: { evento:evento,fecha:fecha,accion:"guardar_evento" }
					}).done(function( respuesta2 ) 
					{
						$("#respuesta_form").html(respuesta2);
						var evento=$("#evento_titulo").val("");
					});
				});
				
				//eliminar evento
				$('.eliminar_evento').bind("click",function (e) 
				{
					e.preventDefault();
					var current_p=$(this);
					$(".respuesta").html("<img src='images/loading.gif'>");
					var id=$(this).attr("rel");
					$.ajax({
						type: "GET",
						url: "ajax_calendario.php",
						cache: false,
						data: { id:id,accion:"borrar_evento" }
					}).done(function( respuesta2 ) 
					{
						$(".respuesta").html(respuesta2);
						current_p.parent("p").fadeOut();
					});
				});
				
				$(".anterior,.siguiente").bind("click",function(e)
				{
					e.preventDefault();
					var datos=$(this).attr("rel");
					var nueva_fecha=datos.split("-");
					generar_calendario(nueva_fecha[1],nueva_fecha[0]);
				})

				$(window).resize(function () 
				{
				 	var box = $('#boxes .window');
			 		var maskHeight = $(document).height();
					var maskWidth = $(window).width();
					$('#mask').css({'width':maskWidth,'height':maskHeight});
					var winH = $(window).height();
					var winW = $(window).width();
					box.css('top',  winH/2 - box.height()/2);
					box.css('left', winW/2 - box.width()/2);
				});
			});
		}
		$(document).ready(function()
		{
			/* GENERAMOS CALENDARIO CON FECHA DE HOY */
			generar_calendario("<?php if (isset($_GET["mes"])) echo $_GET["mes"]; ?>","<?php if (isset($_GET["anio"])) echo $_GET["anio"]; ?>");
			setTimeout(function() {$('#mensaje').fadeOut('fast');}, 3000);
		});
		</script>
	</head>
<body>
	<?php
	//session_start();
	$cod_est= $_SESSION['cod_est'];
	$psicologo= $_SESSION['psicologo'];
	//echo $psicologo;
	//echo "daniel";
	?>	
	<div id="agenda"></div>
	<div id="mask"></div>
	

</body>
</html>