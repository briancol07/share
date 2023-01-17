<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Funci&oacute;n Printf ()</title>
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
// printf() construye una cadena de texto en funcion a las instrucciones declaradas en el primer parámetro el cual debera ir siempre acompañado del signo % ("%d",$variable)
$edad="25 años";
printf("%d",$edad); //devuelve entero decimal
echo ("<br/>");
printf("%c",$edad); //devuelve caracter ASCII correspondiente
echo ("<br/>");
printf("%f",$edad); //devuelve decimal
echo ("<br/>");
printf("%s",$edad); //devuelve cadena
echo ("<br/>");
//existe otra funcion muy parecida sprintf() actua de la misma manera pero nunca mostrara el resultado por pantalla sino que sirve para almacenarla en una variable para luego utilizarla.

?> 



</body>
</html>
