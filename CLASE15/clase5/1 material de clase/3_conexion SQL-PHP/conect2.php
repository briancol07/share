<title> buscador </title>
<?php
@$conexion=mysql_connect("localhost", "root", "") 
or exit("No se pudo establecer una conexi�n");
@$dbseleccionada=mysql_select_db("Productos", $conexion)
or exit("No se pudo seleccionar la base de datos");
?>





