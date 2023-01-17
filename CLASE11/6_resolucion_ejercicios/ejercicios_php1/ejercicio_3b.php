<html lang="en">
<head>
<meta charset="UTF-8">
	<title> Ejercicio 3 con condicionales</title>
	<link rel="stylesheet" href="">
</head>
<body>

<?php
	$num1=8;
	$num2=2;

?>	
	<table border="1">
		<tr>	
			<td>Número 1</td>
			<td>Número 2</td>
			<td>Suma</td>
			<td>Resta</td>
			<td>Multiplicación</td>
			<td>División</td>
			
		</tr>
		<tr>	
			<td><?php echo $num1; ?></td>
			<td><?php echo $num2; ?></td>
			<td><?php 
				if($num1>$num2){
					echo $num1 + $num2;
				}else{
					echo "num1 no es mayor a num2";
				}
			?></td>
			<td><?php 
				if($num2>$num1){
					echo $num2 - $num1;
				}else{
					echo "num2 no es mayor a num1";
				}
			?></td>
			<td><?php 
				if($num1==$num2){
					echo $num1 * $num2;
				}else{
					echo "num1 no es igual num2";
				}
			?></td>
			<td><?php 
				if($num2>$num1){
					echo $num2 / $num1;
				}else{
					echo "num2 no es mayor a num1";
				}
			?></td>
		</tr>
		

	</table>
	
</body>
</html>