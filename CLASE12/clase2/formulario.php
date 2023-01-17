<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
	
	$error = $_GET['error'];
	if($error == "OK") {
		$mensaje = "Datos incorrectos";
	}	

?>
<form method="post" action="mail.php">
<input type="text" name="nombre" >
<input type="text" name="asunto" required>
<textarea name="mensaje" cols="50" rows="15" required></textarea>
<input type="email" name="correo" >
<button type="submit">Enviar</button>
<span style="background:tomato; color:white;">
	<?php echo $mensaje; ?>
	<!-- http://localhost:8080/clase2/localhost/clase2/formulario.php?error=OK -->
</span>
<!-- espaguetificacion -->
</form> 



</body>
</html>