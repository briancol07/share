<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ejercicio Traspaso de Variables</title>
<link href="css/estilo_ejercicio.css" rel="stylesheet" type="text/css" />
</head>

<body>
<?php
$producto = $_GET['producto'];
$precio = $_GET['precio'];
$caracteristicas = $_GET['caracteristicas'];
$imagen = $_GET['imagen'];
?>

<div id="contenedor">
  <div id="header"><img src="logo.gif" width="200" height="200" /></div>

<div id="contenido">
<?php
echo ("El producto elegido es: "."<br/>".$producto);
echo ("<br/><br/>");
echo ("Caracteristicas principales: "."<br/>".$caracteristicas);
echo ("<br/><br/>");
echo ("Su precio es: "."<br/>".$precio);
echo ("<br/><br/>");
?>
</div>
<div id="contenido2">

<img src="<?php echo $imagen; ?>.jpg" />


</div>
<div id="footer">
  <a href="ejercicio_clase.html">Volver</a> </div>
</div>
</body>
</html>
