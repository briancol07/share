<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Funci&oacute;n strtolower () y strtoupper ()</title>
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
// strtolower() convierte una cadena de texto en min�scula; y strtoupper () en may�scula
$texto="Lorem impum Lorem impum Lorem impum Lorem impum Lorem impum Lorem impum Lorem impum Lorem impum Lorem impum Lorem impum Lorem impum Lorem impum Lorem impum Lorem impum Lorem impum Lorem impum Lorem impum Lorem impum Lorem impum Lorem impum Lorem impum Lorem impum Lorem impum Lorem impum Lorem impum Lorem impum Lorem impum Lorem impum Lorem impum Lorem impum Lorem impum Lorem impum Lorem impum Lorem impum Lorem impum Lorem impum Lorem impum Lorem impum Lorem impum Lorem impum ";

$minuscula = strtolower($texto);

$mayuscula = strtoupper($texto);

echo ($texto); 
echo ("<br/>").("<br/>").("<br/>");
echo ($minuscula); //convierte la cadena de texto a min�scula
echo ("<br/>").("<br/>").("<br/>");
echo ($mayuscula); //convierte la cadena de texto a may�scula
echo ("<br/>").("<br/>").("<br/>");

?> 

</body>
</html>
