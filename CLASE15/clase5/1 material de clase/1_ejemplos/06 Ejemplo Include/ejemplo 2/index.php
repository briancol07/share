<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Ejemplo de Include </title>
<style type="text/css">
<!--
.estilo {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 14pt;
	font-weight: bold;
	color: #FF0000;
}
-->
</style>
</head>

<body>

<?php include("encabezado.htm"); ?>
<p class='estilo'>
<?php 
print "Hoy es:"; 
include("fecha.php"); 
?>
</p>

</body>
</html>
