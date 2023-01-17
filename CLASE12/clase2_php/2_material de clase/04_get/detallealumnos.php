<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>
<p>
  <?php
 //Preguntamos si se obtuvieron datos por el método “get”

	if($_GET['nombre']=="juan") {  //Evaluamos si la variable “nombre” enviada tiene el valor “juan”.
?>
  Nombre: Juan
  <br />
  Apellido: Pérez
  <br />
  Edad: 24
  <br />
  <br />
  <br />
  
  
  <?php
	} elseif ($_GET['nombre']=="pepe") { //Evaluamos si la variable “nombre” enviada  tiene el valor “pepe”.

?>
  Nombre: Pepe
  <br />
  Apellido: González
  <br />
  Edad: 30
<?php
}
?>
</p>
</body>
</html>
