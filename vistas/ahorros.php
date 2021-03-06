<?php
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8" />
		<meta name="author" content="Sebastian" >
		<title>Ahorros</title>
		
		<link rel="stylesheet" href="../recursos/stylesheets/ahorros.css">
		
		<link rel="stylesheet" href="../recursos/stylesheets/jquery.simple-dtpicker.css">
		<script src="../recursos/lib/jquery-1.11.1.min.js" type="text/javascript"></script>
    	<script src="../recursos/lib/jquery.simple-dtpicker.js" type="text/javascript"></script>
	</head>
	<body>
		<header>
			<p>Ahorro de Dinero</p>
		</header>
		<div id="contenedor">
		<div id="principal">
		<form>
			<div class="camposFormulario">
         	<input type="text" id="fechaYHora" name="fechaYHora" placeholder="Fecha">
         </div>
         <div class="camposFormulario">
            <input type="text" id="importe" name="importe" placeholder="Importe">
         	<select id="divisa">
  					<option value="pesos">Pesos</option>
  					<option value="dolares">D&oacute;lares</option>
  					<option value="euros">Euros</option>
				</select>
         </div>
         <div id="contenedorDescripcion" class="camposFormulario">
            <textarea placeholder="Descripcion"></textarea>
         </div>
			<div class="camposFormulario">
				<button id="aceptar">Aceptar</button>
				<button id="cancelar">Cancelar</button>
			</div>
		</form>
		</div>
		<footer>
		
		</footer>
		</div>
		<script type="text/javascript">
			jQuery(document).ready(function() {	
         	$('#fechaYHora').appendDtpicker();

        });
		</script>
	</body>
</html>