<?php 

	session_start();

	if(empty($_SESSION['sesion_usuario']))	
            header("Location: ../index.php");

    define("acceso", "autorizado");

    $seccionesURL = array(
		'Inicio' => '../vistas/principal.php',
		'Entrada' => '../vistas/entrada.php',
		'Salida' => '../vistas/salida.php',
		'Ahorros' => '../vistas/ahorros.php',
		'Usuario' => '../vistas/usuario.php',
		'Configuracion' => '../vistas/configuracion.php',	
		'Ayuda' => '../vistas/ayuda.php',
		'Cotizacion' => '../vistas/cotizacion.php',
		'Estadisticas' => '../vistas/estadisticas.php',
		'CerrarSesion' => 'cerrarSesion.php');
	
	if(!empty ($_GET['seccion'])){
		
		$seccion = $_GET['seccion'];

		if(array_key_exists($seccion, $seccionesURL)){
			
			include_once $seccionesURL[$seccion];
			
		}else{			
			include_once("../vistas/seccionNoEncontrada.php");
			die();
		}
			
	}else{
		$seccion = 'Inicio';
		
		include_once $seccionesURL[$seccion];		
	}
?>

