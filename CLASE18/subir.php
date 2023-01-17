<?php 
session_start();
require_once('funciones/conexion.php');

$archivo = "imagenes/".uniqid()".jpg";
$temporal = $_FILES['foto']['tmp_name']; //directorio temporal

$comprobar = move_uploaded_file($temporal, $archivo);
if($comprobar) {
	$id_cate = $_POST['categoria'];
	// INSERTAMOS LA FOTO la ruta en la tabla
	mysqli_query("INSERT INTO galeria (id_categoria,imagen) values ('$id_cate','$archivo')") or die(mysqli_error($conexion));
}
?>