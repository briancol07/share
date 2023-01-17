<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Funci&oacute;n ereg() eregi()</title>
<style type="text/css">
<!--
body {
	background-color: #CCCCCC;
}
body,td,th {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 14px;
	font-weight: bold;
}
-->
</style></head>

<body>
<?php
$nombre = $_POST['nombre'];
$mail = $_POST['mail'];
// ereg() eregi() son funciones útiles para el uso de formularios, eregi() no diferencia entre mayúsculas y minúsculas.
if (eregi ("@",$mail))
{
echo ($nombre)."<br>"."Los datos insertados en el formulario son correctos";
}
// si se encontrase el carácter @ en la variable $mail se mostrará este mensaje
else {
echo ($nombre)."<br>"."La dirección de e-mail no es correcta, amiguese con su teclado" ."<br>". "Gracias totales";
// si no se encuentra el caracter @ en la variable $mail se mostrará este mensaje.
}


?>

</body>
</html>
