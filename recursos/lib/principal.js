var cuadro = {

	init: function(){

		$('#entrada').click(function(){
			window.location = "panelSitio.php?seccion=Entrada";
		});
		
		$('#salida').click(function(){
			window.location = "panelSitio.php?seccion=Salida";
		});
		
		$('#ahorros').click(function(){
			window.location = "panelSitio.php?seccion=Ahorros";
		});
		
		$('#usuario').click(function(){
			window.location = "panelSitio.php?seccion=Usuario";
		});
		
		$('#cerrarSesion').click(function(){
			//cerrar sesion
		});
		
		$('#configuracion').click(function(){
			window.location = "panelSitio.php?seccion=Configuracion";
		});
		
		$('#ayuda').click(function(){
			window.location = "panelSitio.php?seccion=Ayuda";
		});
		
		$('#estadisticas').click(function(){
			window.location = "panelSitio.php?seccion=Estadisticas";
		});
		
		$('#cotizacion').click(function(){
			window.location = "panelSitio.php?seccion=Cotizacion";
		});
		
		$('#cerrarSesion').click(function(){
			window.location = "panelSitio.php?seccion=CerrarSesion";
		});
	}
}
