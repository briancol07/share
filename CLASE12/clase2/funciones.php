<?php

// en este archivo voy a escribir todas las funciones PHP de mi sitio!!
// no tiene que tener nada de frontend --> html ....

// if() una palabra reservada que denota un condicional 
// cada funcion es UNICA :D 

// la funcion recibe la cantidad de parametros que ustedes necesiten

// enviarCorreo("franco","contacto web ", "te contacto para..", "dileo.francoj");

// if($nombre != "franco"){ echo "Hola!"}
//  "select * from usuarios where usuario=$usuario and password=$password"
function enviarCorreo($nombre,$asunto,$mensaje,$correo){

	// isset y empty son funciones propias de PHP. Nunca fueron definidas en nuestro CODE 
	// isset -> comprueba ($variable) es o no null
	// isset comprueba si una variable no es null

	// empty -> la variable tiene contenido. 
	if(isset($nombre) && !empty($nombre) && isset($asunto) && !empty($asunto) && isset($mensaje) && !empty($mensaje) && isset($correo) && !empty($correo)) {
		$mensajeFinal = "Bienvenid : ".$nombre. " es un placer cntactarte por : ".$asunto. "te estaremos enviando un correo a : ". $correo. " tu mensae es: ".$mensaje;
	
	} else {
		// forma que tiene el protocolo HTTP de enviar informacion. 
		// Location -> hacer una redireccion.
		header("Location:formulario.php?error=OK");
		// http://localhost:8080/clase2/clase2/formulario.php?error=OK

		// https://www.google.com.ar/busqueda?resultado=noentiendohtml&info=true

		// http://localhost:8080/clase2/localhost/clase2/index.html?error=si
		// $_POST -> Agarraba informacion de los inputs que se envien por post al servidor
		// $_GET que agarra informacion de una URL
		// $_GET['error'];
		// http://localhost:8080/clase2/localhost/clase2/formulario.html?error=si
	}
		
	return $mensajeFinal;
} 

// la cantidad de parametros que recibe una funcion depende de lo que quiera hacer con ella. 




?>