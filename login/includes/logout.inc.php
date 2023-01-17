<?php
    session_start();
    session_unset(); //esto se usa para toma todas las sesiones y borra todos los valores
    session_destroy();
    header("Location: ../index.php");






?>