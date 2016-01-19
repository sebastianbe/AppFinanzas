<?php
//Funcion que establece la conexion con la base de datos devolviendo una variable
//que establece como conexion con MySQL
function establecerConexion(){

	$usuarioBD="root";
	$claveBD="MS_1lh4_83l4";
	$servidorBD="localhost";
	$nombreBD="ControlFinanzas";
	
	$mysql=mysql_connect($servidorBD, $usuarioBD, $claveBD);
	
	if (!$mysql) {
   	die('Error al conectarse a la base de datos: ' . mysql_error());
	}else{
		$bd = mysql_select_db($nombreBD, $mysql);
		if (!$bd) {
    		die ('Error al conectarse a la base de datos: ' . mysql_error());
		}else{
			mysql_query("SET NAMES 'utf8'");
			return $mysql;
		}
	}
}//Fin de Funcion
?>
