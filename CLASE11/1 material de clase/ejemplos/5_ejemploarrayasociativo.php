<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Ejemplo array asociativo</title>
</head>

<body>
<?php
$precios["TV"]=700;
$precios["Telefono"]=150;
$precios["Computadora"]=1900;
echo "El precio de la computadora es: ";
echo $precios["Computadora"]; //Muestra '1900'
?>
<br/><br/>
<?php
$precios=array("TV"=>1500, "Telefono"=>150, "Computadora"=> 1900);
echo "El precio de la computadora es: ";
echo $precios["Computadora"]; //Muestra '1900'
?>
<br/><br/>
<?php
$un_array=array(4,6,3,6,7,23,1);
echo "El array contiene: ";
echo count($un_array); //Muestra ‘7’
echo " números";
?>


</body>
</html>
