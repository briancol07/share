<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Recomendar</title>
</head>

<body>
<?php
$tunombre=$_POST['tunombre'];
$tumail=$_POST['tumail'];
$nombreamigo=$_POST['nombreamigo'];
$mailamigo=$_POST['mailamigo']; 

$destino = "nmiglino@yahoo.com.ar";


$asunto = ($nombreamigo).": ".($tunombre)." te recomienda visitar www.lapecosafutbol.com.ar";

$asunto2 = "Respuesta automatica de lapecosafutbol.com.ar";

$asunto3 = "Han recomendado tu sitio";

$mensaje = ($tunombre)." ha visitado www.lapecosafutbol.com.ar y te recomienda que visites este sitio que ofrece un resumen futbolero on-line";

$mensaje2 = ($tunombre) . " gracias por recomendar nuestro sitio web.";

$mensaje3= ($tunombre) . " ha recomendado tu sitio, su email es: ".($tumail).", su amigo se llama ".($nombreamigo). " y su mail es: ". ($mailamigo);

$remite = "From: " . ($tumail);
$remite2 = "From: La Pecosa <nmiglino@yahoo.com.ar>"; 

mail ($mailamigo, $asunto, $mensaje, $remite);
mail ($tumail, $asunto2, $mensaje2, $remite2);
mail ($destino, $asunto3, $mensaje3, $remite2);

print ("Gracias por su recomendación");
?>
</body>
</html>
