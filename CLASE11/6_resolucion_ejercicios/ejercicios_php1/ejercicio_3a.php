<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<hea<title>Ejercicio 3 base</title>

</head>

<body>
<?php
$numero1 = 25;
$numero2 = 2;
?>

<table width="50%" align="center" cellpadding="5" cellspacing="5">
  <tr>
    <td>Numero 1</td>
    <td>Numero 2</td>
    <td>Suma </td>
    <td>Resta</td>
    <td>Multiplicacion</td>
    <td>División</td>
  </tr>
  <tr>
    <td><?php echo $numero1 ?> </td>
    <td><?php echo $numero2 ?></td>
    <td><?php echo $numero1 + $numero2;
	?></td>
    <td><?php echo $numero1 - $numero2;
	?></td>
    <td><?php echo $numero1 * $numero2;
	?></td>
    <td><?php echo $numero1 / $numero2;
	?></td>
  </tr>
</table>
</body>
</html>