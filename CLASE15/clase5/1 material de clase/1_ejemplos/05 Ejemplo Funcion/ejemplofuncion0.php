<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Funciones</title>
</head>

<body>
<?php

function sumaRecursiva($a, $b){
$suma = $a + $b;
return $suma;
} 

function dosmasdos(){
$sumatoria = sumaRecursiva(2,2);
echo $sumatoria;
}

echo sumaRecursiva(5,2)."<br>"; // devuelve el resultado de la funcion sumaRecursiva
dosmasdos(); // llamo a la funcion 

?> 

</body>
</html>
