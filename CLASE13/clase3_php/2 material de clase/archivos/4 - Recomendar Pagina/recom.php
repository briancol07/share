<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>
<?php
$nombreamigo=$_POST['nombreamigo'];
$nombresuyo=$_POST['nombresuyo'];
$emailamigo=$_POST['emailamigo'];
$emailsuyo=$_POST['emailsuyo'];

$destino = "info@mipagina.com";
$asunto = $nombreamigo.": ".$nombresuyo." te recomienda visitar www.quelindoesPHP.com.ar";
$mensaje = $nombresuyo." ha visitado www.quelindoesPHP.com.ar y te recomienda que visites este sitio que ofrece cursos online de Diseño y Programación Web";
$remite = "FROM: Que lindo es PHP! <info@mipagina.com>,BCC: eljefe@mail.com";

$asunto2="Gracias por la recomendacion";
$mensaje2=$nombresuyo.", Gracias por utilizar el servicio";


mail ($emailamigo, $asunto, $mensaje, $remite);
mail ($emaisuyo, $asunto2, $mensaje2, $remite);

echo "Gracias ".$nombresuyo." (".$emailsuyo.") por su recomendación";
?>


</body>
</html>
