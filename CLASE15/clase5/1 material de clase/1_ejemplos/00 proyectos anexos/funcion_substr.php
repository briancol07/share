<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Funci&oacute;n Susbstr</title>
<style type="text/css">
<!--
.Estilo2 {color: #A0A0A0}
body {
	background-color: #CCCCCC;
}
body,td,th {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 16px;
}
-->
</style>
</head>
<body>
<?php
echo("Webmaster Professional Universidad Tecnol�gica Nacional");
echo ("<br/>");
echo ("<br/>");
// Con la funci�n Substr() lo que conseguimos es mostrar la parte que nos interesa de una cadena de texto, para su uso utilizamos al menos dos argumentos: el primero ser� la cadena de texto que vayamos a ejecutar y el siguiente ser� el que nos indique la posici�n a partir de la cual nos devolver� la cadena de texto.
echo(substr ("Webmaster Professional Universidad Tecnol�gica Nacional",-32)); //comienza a descontar desde el lado derecho de la cadena de texto 32 posiciones
echo ("<br/>");
echo ("<br/>");
echo(substr ("Webmaster Professional Universidad Tecnol�gica Nacional",22)); //comienza partir del caracter n�mero 22

?> 
</body>
</html>
