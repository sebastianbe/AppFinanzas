<?php
	session_start();

	$usuario;
	$contrasenia;

	$error = "ERROR";

	if((!empty($_POST['usuario'])) && (!empty($_POST['contrasenia']))){
		
		require_once("bd/conexionBD.php");

		$usuarioLogin = $_POST['usuario'];
		$contraseniaLogin = $_POST['contrasenia'];

		$query = "SELECT
						usuario,
						contrasenia
					FROM
						Usuarios
					WHERE
						usuario = '$usuarioLogin' AND
						contrasenia = '$contraseniaLogin'";
						
		$coneccion = establecerConexion();

		if ($coneccion) {

			$resultado = mysql_query($query);
			if (mysql_num_rows($resultado) == 1) {

				$array = mysql_fetch_row($resultado, MYSQL_ASSOC);
				$usuario = $array['usuario'];

				//Se cargan las variables de sesion
				$_SESSION['sesion_reg'] = true;
				$_SESSION['sesion_usuario'] = $usuario;
			}	
			mysql_close($coneccion);		
		}

	}
	
	if ($_SESSION['sesion_usuario'] != "") {
		exit("OK");
	}else{
		exit($error);
	}
?>