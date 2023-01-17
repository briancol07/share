<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Cambiar una imagen seg&uacute;n el dia de la semana</title>
<style type="text/css">
<!--
body {
	background-color: #000000;
}
-->
</style></head>

<body>
<p>
 <?php
$fecha = date("l"); // tener creada una imagen por cada dia de la semana en inglés, ya que la función date() maneja este idioma
$imagen = $fecha . ".jpg";
?>
</p>
<table width="960" border="0" align="center" bgcolor="#CCCCCC">
  <tr>
    <td>
        <img src="imagenes/<?php echo ($imagen);?>" />
	</td>
  </tr>
  <tr>
    <td><?php
$dias[1]="Lunes";
$dias[2]="Martes";
$dias[3]="Miercoles";
$dias[4]="Jueves";
$dias[5]="Viernes";
$dias[6]="Sabado";
$dias[7]="Domingo";

$indice=date("N");

echo "Hoy es ".$dias[$indice];


//echo "<h1>".($fecha)."</h1>";

?></td>
  </tr>
</table>
<p>&nbsp; </p>
<p>&nbsp;</p>
</body>
</html>
