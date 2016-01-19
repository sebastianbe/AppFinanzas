var login = {

	init: function(){

		$('#btnIniciar').click(function(){
			
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
	}
}