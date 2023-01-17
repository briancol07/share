<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Paso de datos con variables establecidas por el usuario</title><style type="text/css">
<!--
body {
	background-color: #CCCCCC;
}
.Estilo1 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 10px;
}
.Estilo3 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12px; font-weight: bold; }
.Estilo6 {font-size: 12px; font-weight: bold; }
-->
</style></head>

<body>



<p>&nbsp;</p>
<table width="88%" height="237" border="0" align="center">
  <tr bordercolor="#003399" bgcolor="#999999" class="Estilo1">
    <td bgcolor="#999999"><span class="Estilo6">DATOS DEL USUARIO </span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr bgcolor="#999999">
    <td><span class="Estilo3">
<?php
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$edad = $_POST['edad'];
$mail = $_POST['mail'];
$domicilio = $_POST['domicilio'];
$telefono = $_POST['telefono'];
$ciudad = $_POST['ciudad'];
$pais = $_POST['pais'];

?>

<?php
print ("Su nombre es: ");
print ($nombre); 
print ("&nbsp;");
print ($apellido);?>
    </span></td>
  </tr>
  <tr bgcolor="#999999" class="Estilo1">
    <td><span class="Estilo6">
      <?php
print ("Su edad es: ");
print ($edad);?>
    </span></td>
  </tr>
  <tr bgcolor="#999999" class="Estilo1">
    <td><span class="Estilo6">
      <?php
print ("Su mail es: ");
print ($mail);?>
    </span></td>
  </tr>
  <tr bgcolor="#999999" class="Estilo1">
    <td><span class="Estilo6">
      <?php
print ("Su direccion es: ");
print ($domicilio);?>
    </span></td>
  </tr>
  <tr bgcolor="#999999" class="Estilo1">
    <td><span class="Estilo6">
      <?php 
print ("Su telefono es: ");
print ($telefono);?>
    </span></td>
  </tr>
  <tr bgcolor="#999999" class="Estilo1">
    <td><span class="Estilo6">
      <?php
print ("Su ciudad es: ");
print ($ciudad);?>
    </span></td>
  </tr>
  <tr bgcolor="#999999" class="Estilo1">
    <td><span class="Estilo6">
      <?php
print ("Su pais es: ");
print ($pais);
?>
     </span></td>
  </tr>
</table>
</body>
</html>
