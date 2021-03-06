<?php
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8" />
		<meta name="author" content="Sebastian" >
		<title>Login</title>
		
		<link rel="stylesheet" href="../recursos/stylesheets/login.css">
		<link rel="stylesheet" href="../recursos/stylesheets/bootstrap.css">
		<script src="../recursos/lib/jquery-1.11.1.min.js" type="text/javascript"></script>
    	<script src="../recursos/lib/md5.js" type="text/javascript"></script>
    	<script src="../recursos/lib/bootstrapValidator.min.js" type="text/javascript"></script>
    	<script src="../recursos/lib/bootstrap.js" type="text/javascript"></script>
    	
    	<!--<script src="../recursos/lib/login.js" type="text/javascript"></script>-->
	</head>
	<body>
		<header>
			
		</header>
		<div id="principal">
		<form id="formLogin">
			<div id="contenedorLabelUsuario" class="label">
				<label>Usuario</label>
			</div>
			<div class="form-group camposFormulario">
         	<input type="text" id="usuario" name="usuario">
         </div>
         <div class="label">
            <label>Contraseña</label>
         </div>
         <div class="form-group camposFormulario">
            <input id="contrasenia" name="contrasenia" type="password">
         </div>
			<div id="contenedorBoton" class="camposFormulario">
				<button id="btnIniciar" type="submit">Iniciar</button>
			</div>
		</form>
		</div>
		<footer>
		
		</footer>
		<script type="text/javascript">
			jQuery(document).ready(function() {	
			
			var formulario = $("#formLogin");

            formulario.bootstrapValidator({
                message: 'El valor no es valido.',
                fields: {
                    usuario:{
                        validators:{
                            notEmpty:{
                                message: 'El campo es requerido.'
                            }
                        }
                    },
                    contrasenia:{
                        validators:{
                            notEmpty:{
                                message: 'El campo es requerido.'
                            }
                        }
                    }

                },
                submitHandler: function(validator, form, submitButton){			
			
			usuario = $("#usuario").val();
         contrasenia = $("#contrasenia").val();

			$.ajax({
            	type: 'POST',
               url: '../controladores/inicioSesion.php',
               data:{
               	'usuario': usuario,
                  'contrasenia': contrasenia
               },
               dataType: 'html',
               success: function(data){
               	if (data == "OK") {
               		window.location.replace("../index.php");
               	}
               	else {
               		alert("error"+data);
               		//notificacion("error","Error al intentar ingresar al sistema. "+data);
               	}
               },
            });
         }
      });

        });
		</script>
	</body>
</html>