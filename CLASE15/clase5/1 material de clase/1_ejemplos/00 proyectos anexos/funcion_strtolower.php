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
// strtolower() convierte una cadena de texto en minúscula; y strtoupper () en mayúscula
$texto="Lorem impum Lorem impum Lorem impum Lorem impum Lorem impum Lorem impum Lorem impum Lorem impum Lorem impum Lorem impum Lorem impum Lorem impum Lorem impum Lorem impum Lorem impum Lorem impum Lorem impum Lorem impum Lorem impum Lorem impum Lorem impum Lorem impum Lorem impum Lorem impum Lorem impum Lorem impum Lorem impum Lorem impum Lorem impum Lorem impum Lorem impum Lorem impum Lorem impum Lorem impum Lorem impum Lorem impum Lorem impum Lorem impum Lorem impum Lorem impum ";

echo ($texto); 
echo ("<br/>").("<br/>").("<br/>");
echo (strtolower ($texto)); //convierte la cadena de texto a minúscula
echo ("<br/>").("<br/>").("<br/>");
echo (strtoupper ($texto)); //convierte la cadena de texto a mayúscula
echo ("<br/>").("<br/>").("<br/>");

?> 

</body>
</html>
