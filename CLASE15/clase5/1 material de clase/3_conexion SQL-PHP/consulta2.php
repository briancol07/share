<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Conexión PHP y BBDD </title>
</head>

<body>
<?php
include ("conect2.php");
?>
<?php
$result = mysql_query("SELECT * FROM libros", $conexion);
// $result = mysql_query("SELECT * FROM libros WHERE titulos LIKE 'L%'", $conexion);
//$result = mysql_query("SELECT * FROM libros WHERE nro_orden=15", $conexion);
//$result = mysql_query("SELECT * FROM libros WHERE editorial='Alfaguara'", $conexion);
//$result = mysql_query("SELECT * FROM libros ORDER BY precio ", $conexion);
?>
<table width="758" border = '1'>

<tr>

<td width="93"><b>Nro de orden</b></td>
<td width="192"><b>Titulo</b></td>
<td width="142"><b>Autor</b></td>
<td width="137"><b>Editorial</b></td>
<td width="50"><b>Edicion</b></td>
<td width="104"><b>Precio</b></td>
</tr>

<?php
while ($row = mysql_fetch_row($result)){
?>
<tr>

<td><?php echo $row[0]; ?></td>
<td><?php echo $row[1]; ?></td>
<td><?php echo $row[2]; ?></td>
<td><?php echo $row[3]; ?></td>
<td><?php echo $row[4]; ?></td>
<td><?php echo $row[5]; }?></td>
</tr>

</table>
  <?php
mysql_free_result($result);
mysql_close();
?>
</body>
</html>
