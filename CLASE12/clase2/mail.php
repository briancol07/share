<?php
	require_once('funciones.php');

	// dentro de mail.php voy a tener la funcion enviarCorreo


	// los campos variables del formulario

	// los parametros dentro de una funcion se separan por ,
	// function sumarNumeritos($numero1,$numero2){
	// 	$suma = $numero1+$numero2;
	// 	return $suma;
	// 	// return no imprime nada!!!!
	// 	// $suma solo existe dentro de la funcion
	// }
	// // echo $suma; no esta definida!
	// function potenciaDeDos($numero) {
	// 	return $numero*$numero
	// }

	// $numero1 = sumarNumeritos(20,20); // $numero1 -> 40
	// potenciaDeDos($numero1); 	
	// rand(1,20);
	// count($contenidoArray)
	// una funcion ejecuta su bloque una vez que la llamamos!!!
	
	$nombreUsuario = $_POST['nombre']; 
	$asuntoUsuario = $_POST['asunto'];
	$mensajeUsuario = $_POST['mensaje'];
	$correoUsuario = $_POST['correo'];


	$resultado = enviarCorreo($nombreUsuario,$asuntoUsuario,$mensajeUsuario,$correoUsuario);
	echo $resultado;

?>