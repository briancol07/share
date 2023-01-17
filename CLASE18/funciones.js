var x = $(document);
x.ready(events);

// ready es un metodo que dispara la funcion events cuando esta cargada la pagina! 
function events() {
	// detecto todos los eventos sobre los elementos HTML
	// click, dblclick
	$("#idUsuario").focus();
	$("#idUsuario").blur(function(){

		var pwd1 = $("#password1").val();
		var pwd2 = $("#password2").val();

		var longitud1 = pwd1.length;
		alert(longitud1);
		if(pwd1 == pwd2 && longitud1 > 10) {
			$("#password1").css("border","1px solid olive");
		} else {
			$("#password1").css("border","1px solid tomato");
			$("#password1").val(""); //limpia el input
		}
	});
	//length
	$("#aaa").blur(function(){
		var usuario = $("#password1").val(); //valor escrito
		var longitud = usuario.length //longitud caracteres
		alert(leng)
	});

	$("#boton1").click(apretado);
	$("#titulo1").click(pintar);
	$("#titulo1").dblclick(despintar);
	$(".picasso").click(pintarPICASSO);
	$(".botonBonito").click(obtenerUsuario);
	$("#botonContenido").click(function(){
		var valorContenido = $("#contenido").val();
		$("#idUsuario").val(valorContenido);
	});
	$(".pianito").hover(entrada,salida); 
	$("#agregarElementos").click(function(){
		$(".agregar").append('<input type="text" class="form-control" placeholder="inputs prueba">');
	});
	// CTRL+F5, CTRL+ FLECHITA ARRIBA +R
}
// value

function entrada() {
	$(this).css('background','black');
}
function salida(){
	$(this).css('background','white');
}


function obtenerUsuario() {
	var idUsuario = $(this).attr('id');
	$("#idUsuario").val(idUsuario); 
	// val() -> obtener el texto escrito
	// val("algo") -> escribe algo dentro del elemento seleccionado
}
	
function pintarPICASSO(){
	$(".picasso").css("color","tomato");
}

function pintar() {

	$("#titulo1").css('background','peru');
	$("#titulo1").css('color','white');
}

function despintar() {
	$("#titulo1").css("background","white");
	$("#titulo1").css("color","black");
}

function apretado(){
	alert("Hola, fui apretado! :O");
}