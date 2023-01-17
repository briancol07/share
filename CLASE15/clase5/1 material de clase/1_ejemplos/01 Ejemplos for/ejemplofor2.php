<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Documento sin t&iacute;tulo</title>
</head>

<body>
<?php
$productos = array(1 => "manzanas","naranjas","peras","uvas");
$cuantos = count($productos);
for ($i=1; $i<=$cuantos; $i=$i+1){
    print("El producto ".$i." es: ". $productos[$i]."<br />");
}
?>

</body>
</html>
