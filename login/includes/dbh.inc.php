<?php

    $servername="localhost";
    $dBUsername="root";
    $dBPassword="";
    $dBName="loginsystemtut"; // como se llama dentro  de la base de datos 

    $conn = mysqli_connect( $servername,$dBUsername,$dBPassword,$dBName);

    if(!$conn){
        die("conexion fail" .mysqli_connect_error());


    }