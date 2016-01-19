<?php
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8" />
		<meta name="author" content="Sebastian" >
		<title>Salida</title>
		
		<link rel="stylesheet" href="../recursos/stylesheets/salida.css">
		
		<link rel="stylesheet" href="../recursos/stylesheets/jquery.simple-dtpicker.css">
		<link rel="stylesheet" type="text/css" href="../recursos/stylesheets/bootstrap-switch.css">
		<script src="../recursos/lib/jquery-1.11.1.min.js" type="text/javascript"></script>
    	<script type="text/javascript" src="../recursos/lib/bootstrap-switch.js"></script>
    	<script src="../recursos/lib/jquery.simple-dtpicker.js" type="text/javascript"></script>
    	<script src="../recursos/lib/salida.js" type="text/javascript"></script>
	</head>
	<body>
		<header>
			<p>Salida de Dinero</p>
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
		   <div class="camposFormulario">
		   	<input type="checkbox" id="checkCuotas" name="checkCuotas">
            <input type="text" id="cuotas" name="cuotas" placeholder="Cuotas">
            <select id="comienzoDeCuotas">
            	<option value="" disabled selected hidden>Primera cuota</option>
  					<option value="enero">Enero</option>
  					<option value="febrero">Febrero</option>
  					<option value="marzo">Marzo</option>
  					<option value="abril">Abril</option>
  					<option value="mayo">Mayo</option>
  					<option value="junio">Junio</option>
  					<option value="julio">Julio</option>
  					<option value="agosto">Agosto</option>
  					<option value="septiembre">Septiembre</option>
  					<option value="octubre">Octubre</option>
  					<option value="noviembre">Noviembre</option>
  					<option value="diciembre">Diciembre</option>
				</select>
         </div>
         <div class="camposFormulario">
		   	<input type="checkbox" id="checkDescuento" name="checkDescuento">
            <input type="text" id="descuento" name="descuento" placeholder="Descuento">
            <select id="tipoDeDescuento">
            	<option value="porciento">Por ciento</option>
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
				$("#checkCuotas").bootstrapSwitch('onText', ' ');
            $("#checkCuotas").bootstrapSwitch('offText', ' ');
            
            $("#cuotas").attr('disabled','disabled');
				$("#comienzoDeCuotas").attr("disabled", "disabled");
            
            cuotas.init();
            
            $("#checkDescuento").bootstrapSwitch('onText', ' ');
            $("#checkDescuento").bootstrapSwitch('offText', ' ');
            
            $("#descuento").attr('disabled','disabled');
				$("#tipoDeDescuento").attr("disabled", "disabled");
				
				descuento.init();
        });
		</script>
	</body>
</html>