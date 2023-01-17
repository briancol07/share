<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Frase Aleatoria</title>
<style type="text/css">
<!--
.Estilo1 {
	font-family: Georgia, "Times New Roman", Times, serif;
	font-weight: bold;
}
body {
	background-color: #000000;
}
.Estilo2 {font-family: Georgia, "Times New Roman", Times, serif}
-->
</style>
</head>

<body>
<p>
  <?php
/*$frases=array(
1 => "El hombre, en su orgullo, creó a Dios a su imagen y semejanza.",
2 => "La potencia intelectual de un hombre se mide por la dosis de humor que es capaz de utilizar.",
3 => "Solamente aquel que construye el futuro tiene derecho a juzgar el pasado.",
4 => "Lo que no me mata, me fortalece.",
5 => "La edad de casarse llega mucho antes que la de quererse.",
6 => "Cuando se tienen muchas cosas que meter en él, el día tiene cien bolsillos.",
7 => "Lo que me preocupa no es que me hayas mentido, sino que, de ahora en adelante, ya no podré creer en ti.",
);

$aleatorio=rand(1,7);
*/

$frases[0]="El hombre, en su orgullo, creó a Dios a su imagen y semejanza.";
$frases[1]="La potencia intelectual de un hombre se mide por la dosis de humor que es capaz de utilizar.";
$frases[2]="Solamente aquel que construye el futuro tiene derecho a juzgar el pasado.";
$frases[3]="Lo que no me mata, me fortalece.";
$frases[4]="La edad de casarse llega mucho antes que la de quererse.";
$frases[5]="Cuando se tienen muchas cosas que meter en él, el día tiene cien bolsillos.";
$frases[6]="Lo que me preocupa no es que me hayas mentido, sino que, de ahora en adelante, ya no podré creer en ti.";

$aleatorio=rand(0,6); //random
?>
</p>
<table width="220" align="center" bgcolor="#CCCCCC">
  <tr>
    <td><div align="center" class="Estilo1">Friedrich Nietzsche</div></td>
  </tr>
  <tr>
    <td><div align="center"><img src="378px-Nietzsche1882.jpg" width="189" height="300" /></div></td>
  </tr>
  <tr>
    <td><div align="center" class="Estilo2">
	<?php
	echo $frases[$aleatorio];
	echo "<br />";
	echo "indice: ".$aleatorio;
	//echo "$frases[4]";
	?></div></td>
  </tr>
</table>
<p>&nbsp;</p>
</body>
</html>
