<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Ejemplo Switch</title>
</head>
<body>
<?php
switch ($tusexo){

case "masculino":
$texto = "Hola Hombre!";
break;

case "femenino":
$texto = "Hola Mujer!";
break;

default:
$texto = "Hola...";
break;
}

print ($texto);
?>
</body>
</html>

