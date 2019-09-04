<style type='text/css'>
body {
	text-align: center;
	font-family: sans-serif;
	margin: 0;
}

.modal {
	width: 100%;
	height: 100vh;
	background: rgba(0,0,0,0.8);
	
	position: absolute;
	top: 0;
	left: 0;
	
	display: flex;
	
	animation: modal 1s 0.5s forwards;
	visibility: hidden;
	opacity: 0;
}

.contenido {
	margin: auto;
	width: 40%;
	height: 40%;
	background: white;
	border-radius: 10px;
}

#cerrar {
	display: none;
}

#cerrar + label {
	position: fixed;
	color: #fff;
	font-size: 25px;
	z-index: 50;
	background: darkred;
	height: 40px;
	width: 40px;
	line-height: 40px;
	border-radius: 50%;
	right: 300px;
	top: 150px;
	cursor: pointer;
	
	animation: modal 1s 0.5s forwards;
	visibility: hidden;
	opacity: 0;
}

#cerrar:checked + label, #cerrar:checked ~ .modal {
	display: none;
}

@keyframes modal {
	100% {
		visibility: visible;
		opacity: 1;
	}
}
</style>
<input type="checkbox" id="cerrar">
		<label for="cerrar" id="btn-cerrar">X</label>
		<div class="modal">
			<div class="contenido">
				<form role="form" action="guardar_cita.php" method="POST" name="Form">
				<h2>Citacion al padre de familia</h2>
				<label for="cedula">Cedula:</label>
                <input type="text" class="form-control" id="cedula" value="">
                <label for="apellidos">Apellidos:</label>
                <input type="text" class="form-control" id="apellidos" name="apellidos" value="">
                <label for="jornada">Jornada:</label>
                <input type="text" class="form-control" id="jornada" name="jornada" value="">
		    	<button type="submit" class="btn btn-primary">Guardar</button>
                </form>
			</div>
		</div>
		
