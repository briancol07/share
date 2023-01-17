// main.js

function mostrarMensajito() {
	document.write("Este mensaje viene del archivo main.js");
	document.write("<br>");
	document.write("Esta dentro de una funcion y lo puedo llamar las veces que quiera");

}

function numerosComprendidos(a,b){
	// for(inicio,fin,incremento/decremento)
	var inicio;
	if(a > b) {
		for(inicio=a; inicio>=b;inicio--){
			document.write(inicio);
			document.write('<br>');
		}
	} else {
		
		for(inicio=a;inicio<b; inicio++){

			document.write(inicio);
			document.write("<br>");
		}
	}
}

function obtenerNombre(){
	var nombre = document.getElementById('nombre');
	// var nombre = docuemnt.getElementByClass('')
	// var nombre = document.getElementByTagName('a')
	document.write(nombre.value);
	document.write("<br>");
	document.getElementById('resultado').value;
	
}
// NaN : not a number ::::::: 

var contador = 0;
function molestar(){
	contador++;
	alert(contador);
}

// UNA CALCULADORA
document.getElementById('resultado').value = 12;

// Dentro de javascript2.html los numeros que recibe la funcion nunerosComprendidos deben ser ingresados por el usuario mediante un prompt (le pasamos numeros variables) --> parseInt
// si a > b hacer un for decreciente mostrando los comprendidos al vesre