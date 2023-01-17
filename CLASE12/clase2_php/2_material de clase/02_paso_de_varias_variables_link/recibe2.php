<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Pasar variables de un archivo a otro</title>
</head>

<body>
<?php
$nombre=$_GET['nombre'];
$apellido=$_GET['apellido'];
$edad=$_GET['edad'];
$imagen=$_GET['imagen'];

echo ("Los valores fueron: "."<br/>".$nombre);
echo ("<br/>");
echo ($apellido);
echo ("<br/>");
echo ($edad);
?> 
<br/>
<br/>
<br/>
<br/>
<img src="<?php echo $imagen; ?>.jpg" />

</body>
</html>
