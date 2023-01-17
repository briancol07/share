<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ejemplo Foreach</title>
</head>
<body>
<?php
$moneda=array("España"=> "Euro","Peru" => "Soles","Brasil" => "Reales");
foreach ($moneda as $indice=>$valor)
{
   echo "Pais: ".$indice."<br/> Moneda: ".$valor."<br/>"."<br/>";
}
?>
</body>
</html>
