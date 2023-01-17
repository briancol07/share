<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Ejemplo 1 PHP</title>
</head>

<body>
<?php
$Var1=1;
$Var2=2;
$Var3=3;
$VarUno="1";

echo "2x3= ".($Var2*$Var3)."<br>"; //Muestra '2x3= 6'
//echo $Var2."*".$Var3."=".($Var2*$Var3)."<br>"; //Muestra '2x3= 6'
echo "2+1 es ".($Var2+$VarUno)."<br>"; //Muestra '2+1 es 3'
echo "¿3 es igual a 2? ".($Var3==$Var2)."<br>"; //No muestra nada como respuesta
echo "1 es igual a \"1\"? ".($Var1==$VarUno)."<br>"; //Muestra '1' como respuesta 

?>

</body>
</html>
