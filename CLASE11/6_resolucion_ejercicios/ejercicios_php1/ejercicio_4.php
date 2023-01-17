<!DOCTYPE html>
<html lang="en">
<head>
<title>Ejercicio 4</title>
</head>

<body>
<?php
$frutas = array(
"manzana" => array(
				"color" => "rojo",
				"sabor" => "dulce",
				"forma" => "redonda"),

"naranja" => array(
				"color" => "naranja",
				"sabor" => "acido",
				"forma" => "redonda"),

"palta" => array(
				"color" => "verde",
				"sabor" => "salado",
				"forma" => "ovalada")
);
?>
<table width="100%" border="1" bordercolor="#FF0000" bgcolor="#FFFFCC">
  <tr>
    <td width="14%"><strong>Frutas</strong></td>
    <td width="29%" bgcolor="#FFCC99">Color</td>
    <td width="29%" bgcolor="#FFCC99">Sabor</td>
    <td width="28%" bgcolor="#FFCC99"><p>Forma</p>    </td>
  </tr>
  <tr>
    <td bgcolor="#FFCC99">Manzana</td>
    <td><?php 
	echo $frutas["manzana"]["color"];
	?></td>
    <td><?php 
	echo $frutas["manzana"]["sabor"];
	?></td>
    <td><?php 
	echo $frutas["manzana"]["forma"];
	?></td>
  </tr>
  <tr>
    <td bgcolor="#FFCC99">Naranja</td>
    <td><?php 
	echo $frutas["naranja"]["color"];
	?></td>
    <td><?php 
	echo $frutas["naranja"]["sabor"];
	?></td>
    <td><?php 
	echo $frutas["naranja"]["forma"];
	?></td>
  </tr>
  <tr>
    <td bgcolor="#FFCC99">Palta</td>
    <td><?php 
	echo $frutas["palta"]["color"];
	?></td>
    <td><?php 
	echo $frutas["palta"]["sabor"];
	?></td>
    <td><?php 
	echo $frutas["palta"]["forma"];
	?></td>
  </tr>
</table>
</body>
</html>