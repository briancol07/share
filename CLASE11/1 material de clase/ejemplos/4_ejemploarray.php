<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Ejemplo Arrays</title>
</head>

<body>
<?php
$familia[0]="Padre";
$familia[1]="Madre";
$familia[2]="Hijo";

echo $familia[0];?> <br/><?php //Muestra 'Padre'
echo $familia[1];?> <br/><br/><?php  //Muestra 'Madre'
?>

<?php
$familia = array("Padre","Madre","Hijo");

echo $familia[0]; ?> <br/><?php //Muestra 'Padre'
echo $familia[1]; //Muestra ‘Madre’
?>


</body>
</html>
