<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

$dias[1] = "Lunes";
$dias[2] = "Martes";
$dias[3] = "Miercoles";
$dias[4] = "Jueves";
$dias[5] = "Viernes";
$dias[6] = "sabado";
$dias[7] = "domingo";

/* creamos la variable dias y le asignamos la matriz o array con los dias de la semana*/
echo $dias[date('N')];
// imprimimos la matriz dias, dejando el apuntador al numero que nos devuelva date(); con el parametro N que nos devuelve el dia del mes en formato numerico del 1 al 0

?>
</body>
</html>