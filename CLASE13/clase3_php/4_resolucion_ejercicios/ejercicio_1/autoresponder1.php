<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Mini Social</title>
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/coda-slider.css" type="text/css" media="screen" charset="utf-8" />
<script src="js/jquery-1.2.6.js" type="text/javascript"></script>
<script src="js/jquery.scrollTo-1.3.3.js" type="text/javascript"></script>
<script src="js/jquery.localscroll-1.2.5.js" type="text/javascript" charset="utf-8"></script>
<script src="js/jquery.serialScroll-1.2.1.js" type="text/javascript" charset="utf-8"></script>
<script src="js/coda-slider.js" type="text/javascript" charset="utf-8"></script>
<script src="js/jquery.easing.1.3.js" type="text/javascript" charset="utf-8"></script>

</head>
<body>

<div id="slider">
	
    <div id="templatemo_sidebar">
    	<div id="templatemo_header"> <img src="images/templatemo_logo.png" alt="Mini Social" />
        </div> 
    	<!-- end of header -->
        
        <ul class="navigation">
            <li><a href="#home">Home<span class="ui_icon home"></span></a></li>
            <li><a href="#aboutus">About Us<span class="ui_icon aboutus"></span></a></li>
            <li><a href="#services">Services<span class="ui_icon services"></span></a></li>
            <li><a href="#gallery">Gallery<span class="ui_icon gallery"></span></a></li>
            <li><a href="#contactus">Contact Us<span class="ui_icon contactus"></span></a></li>
        </ul>
    </div> <!-- end of sidebar -->

	<div id="templatemo_main">
    	<ul id="social_box">
            <li><a href="http://www.facebook.com/templatemo"><img src="images/facebook.png" alt="facebook" /></a></li>
            <li><a href="http://www.facebook.com/templatemo"><img src="images/twitter.png" alt="twitter" /></a></li>
            <li><a href="http://www.facebook.com/templatemo"><img src="images/linkedin.png" alt="linkin" /></a></li>
            <li><a href="http://www.facebook.com/templatemo"><img src="images/technorati.png" alt="technorati" /></a></li>
            <li><a href="http://www.facebook.com/templatemo"><img src="images/myspace.png" alt="myspace" /></a></li>                
        </ul>
        
        <div id="content">
        
        <!-- scroll -->
        
        	
            <div class="scroll">
                <div class="scrollContainer">
                
<div class="panel" id="home">
                        <h1>Formulario de Contacto</h1>    
 <?php
$nombre=$_POST['nombre'];
$mail=$_POST['mail'];
$telefono=$_POST['telefono'];
$asunto=$_POST['asunto']; 
$consulta=$_POST['consulta']; 

$destino = "mi_mail@yahoo.com.ar";

$mensaje= " Este es un mensaje de " .$nombre. " su mail es " .$mail. "su telefono es " .$telefono. " y su mensaje es " .$consulta;

$mensaje2 = "Gracias por su consulta. Le responderemos a la brevedad";

$asunto2 = "Respuesta a su consulta: " .$asunto;

$remite = "From: $nombre <$mail>";
$remite2 = "From: Natalia Miglino <nmiglino@yahoo.com.ar>";


mail($destino, $asunto, $mensaje, $remite);
mail($mail, $asunto2, $mensaje2, $remite2);

print ("<h3>Muchas gracias por su mensaje</h3>");
?>                     

</div>    
       

</body>
</html>