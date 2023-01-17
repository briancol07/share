<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Calculadora </title>
</head>

<body>
<?php 
$primero = $_POST['primero'];
$signo = $_POST['signo'];
$segundo = $_POST['segundo'];




function sumar($primero,$segundo){
	
	$total = $primero + $segundo;
	return $total;
	
} // fin de función sumar

function restar($primero,$segundo){
	
	$total = $primero - $segundo;
	return $total;
	
} // fin de función restar

function multiplicar($primero,$segundo){
	
	$total = $primero * $segundo;
	return $total;
	
} // fin de función multiplicar

function dividir($primero,$segundo){
	
	$total = $primero / $segundo;
	return $total;
	
} // fin de función dividir

print "El resultado es: ";
switch($signo){
case "+":
$resultado = sumar($primero,$segundo);
break;

case "-":
$resultado = restar($primero,$segundo);
break;

case "*":
$resultado = multiplicar($primero,$segundo);
break;

case "/":
$resultado = dividir($primero,$segundo);
break;

} // esto cierra el switch

echo $resultado;

?>
</body>
</html>
