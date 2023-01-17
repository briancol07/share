<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>funciones</title>
</head>

<body>
<?php 
function producto($num1, $num2){  
$producto = $num1 * $num2;  
return $producto;  
}  
$variable1 = producto(10,3); // $variable1 valdrá 30 (10*3)  
$variable2 = producto(17,3); // $variable2 valdrá 51  

echo $variable1."<br>"; 
echo $variable2;
?>
</body>
</html>
