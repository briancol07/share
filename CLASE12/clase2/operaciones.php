<?php 
// error_reporting(0); NO muestra ningun error NUNCA
// unexpected ; or ''
// undefined nombre in line 7


// no le daba posicion numerica al contenido de un array o vector

// http://localhost/clase2/operaciones.html
$resultado = 0;
$numero1 = $_POST['numero1'];
$numero2 = $_POST['numero2'];
$operacion = $_POST['operacion'];
// suma es el value del primer input con name operacion
// resta es el value del segundo input con name operacion
if($operacion == "suma") {
	$resultado = $numero1+$numero2;
	echo $resultado; 
} else {
	$resultado = $numero1-$numero2; 
	echo $resultado;
}

// conjunto de datos del mismo tipo o no D:
// $ensalada[0] no esta definido


// ordenar un array

// BUCLES D:
// FOR,WHILE,DO WHILE, FOREACH
// FOR,WHILE recorrer estructuras
// Son estructuras de repeticion
// echo $ensalada[0];
// echo $ensalada[1];
// ........
// VAMOS A RECORRER EL ARRAY
// 3 argumentos
// inicializamos la variable
// 2do argumento : que cantidad de elementos quiero recorrer : el alcance de mi bucle
// $i++ mi variable se incrementa en uno cada vuelta
// $i = $i +1
// $i-- mi variable decrementa en uno cada vuelta
// $i = $i +2
$ensalada[1] = 'lechuga';
$ensalada[2] = 'tomate';
$ensalada[3] = 'cebolla'; // posicion 
$ensalada[4] = 'morron';
$ensalada[5] = 'rucula';
echo "La cantidad de posicione que tiene mi array es: ".count($ensalada);
// la funcion count devuelve un entero !
//  count es una funcion propia de PHP
// una funcion : es un bloque de codigo que tiene por objetivo resolver una tarea determinada
//  la funcion rand recibe dos parametros y devuelve un numero aleatorio comprendido entre esos dos valores
$aleatorio = rand(1,32767);

// la funcion count recibe solo 1 parametro y devuelve un entero
echo count($ensalada);
echo $aleatorio;
echo "<br>";
for($i = 1; $i <= count($ensalada); $i++) {
	echo $ensalada[$i];
	echo "<br>";
}
// las funciones las podemos definir nosotros en un archivo aparte y lo que hace es ejecutar una accion determinada en el momento que se llame

// permite reutilizar codigo 
?>