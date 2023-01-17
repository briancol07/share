<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>switch</title>
</head>

<body>
<?php 
$idioma = "espanol";     
switch($idioma){  
case 'espanol':  
echo "Hola, como estas?";  
break;  
case 'ingles':  
echo "Hello, how are you?";  
break;  
case 'portugues':  
echo "Oi, como vai?";  
break;     
default:  
echo "Idioma no soportado";  
}
?>
</body>
</html>
