<?php
$conexion = mysqli_connect("localhost","root","","gestion") or die(mysqli_error($conexion));
$query = mysqli_query("SELECT * FROM libros") or die(mysqli_error($conexion));

while($reg = mysqli_fetch_array($query)) {
	
}

?>