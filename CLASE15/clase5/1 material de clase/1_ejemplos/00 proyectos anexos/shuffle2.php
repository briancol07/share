<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Documento sin t&iacute;tulo</title>
</head>

<body>
<?php
$premio = array(21,2,3,4,5,6,7,8,9,10);

shuffle($premio);

echo ($premio[0]); //imprimirá cada vez un valor diferente
?>


</body>
</html>
