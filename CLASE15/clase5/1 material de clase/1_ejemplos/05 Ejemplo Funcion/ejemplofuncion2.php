<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Documento sin t&iacute;tulo</title>
</head>

<body>
<html>
<head>
    <title>funcion 1</title>
</head>

<body>


<?php
function iva($base,$porcentaje=21){
   return $base * $porcentaje /100;
}

echo "El iva 21% de 1.000 es:  " .iva(1000) . "<br>";
echo "El iva 10.5% de 1.000 es:  " .iva(1000,10.5) . "<br>";
echo "El iva excento de 1.000 es:  " .iva(10,0) . "<br>";
?>




</body>
</html>
