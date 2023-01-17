<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>
<?php
$examen="Bueno";
switch($examen) {
case "Excelente": echo "Su nota fue 10. ";
			   break;
case "Muy bien": echo "Su nota fue 8 o 9. ";
			   break;
case "Bueno": echo "Su nota fue 6 o 7";
		         break;
case "Regular": echo "Su nota fue 4 o 5";
			break;
default: echo "Su nota fue menor o igual a 3. ";
}
?>

</body>
</html>
