<?php 
  session_start();
?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    
<header>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li>
         <a href="signup.php">signup</a>  
      </li>
     
    </ul>

    <?php
      if (isset($_SESSION['userId'])) {
        echo '<form action="includes/logout.inc.php" method="post" class="form-inline my-2 my-lg-0">
              <button type="submit"class="btn btn-primary" name="logout-submit">logout</button>
              </form>';
    }else {//para el boton de logearse y para poder salir 
        echo '<form action="includes/login.inc.php" method="post" class="form-inline my-2 my-lg-0">
                <!-- los includes son para que no os vea otro por eso se crea  -->
                <!-- inc es para los include  -->
                <input class="form-control" type="text" name="mailuid" placeholder="username/E-mail...">
                <input class="form-control" type="password" name="pwd" placeholder="password....">

                <button type="submit"class="btn btn-primary" name="login-submit">login</button>
                </form> ';

    }
    
    ?>
    
    
  </div>
</nav>
   


</header>

