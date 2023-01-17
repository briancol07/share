<?php
    // lo que haria es todo lo de php al tocar el boton de sign up 
    // para ver si se ingresa apretando el boton 
    if(isset($_POST['signup-submit']) ){
      require 'dbh.inc.php';
        // para acceder ala conexion de la base de datos 

        $username=$_POST['uid'];
        $email=$_POST['mail'];
        $password=$_POST['pwd'];
        $passwordrepeat=$_POST['pwd-repeat'];

        // aca obtuve todos los datos 

        // chequear si se escribio todo y no dejo nada vacio 

        if (empty($username)||empty($email)||empty($password)||empty($passwordrepeat)) {
            header("Location: ../signup.php?error=emptyfields&uid=".$username ."&mail=".$email);
            exit(); // para salir de la funcion 
            // la ultima parte es para que el usuario no se le borre todo lo que escribio luego con un get lo podemos tomar ya que va por url 

        }else if (!filter_var($email,FILTER_VALIDATE_EMAIL )&& !preg_match("/^[a-zA-Z0-9]*/",$username)) {
            //para que verifique los dos si estan mal de una 
        }else if ( !filter_var($email,FILTER_VALIDATE_EMAIL )) {
            header("Location: ../signup.php?error=invalidemail&uid=".$username);
            exit();
        }else if (!preg_match("/^[a-zA-Z0-9]*/",$username)) {
            // para chequear sobre caracteres raros etc y ver si no tiene nada fuera de lo comun 
            // dentro de los corchetes son los valores permitidos 
            header("Location: ../signup.php?error=invaliduid&mail=".$email);
            exit();

        }else if ($password !== $passwordrepeat) {
            header("Location: ../signup.php?error=passwordcheck&uid=".$username."&mail=".$email);
        } else{
            $sql="SELECT uidUsers FROM users where uidUsers=?";
                //placeholder osea el signo de pregunta si existe el username 
            $stmt=mysqli_stmt_init($conn);
            //es para la coneexion con la base de datos 
            if(!mysqli_stmt_prepare($stmt,$sql)){
                header("Location: ../signup.php?error=sqlerror");
                exit();
            }else{
                  // ahora vamos a tomar el valor del usuario 
                  
                mysqli_stmt_bind_param($stmt,"s",$username);
                // primero el estado y luego la informacion que voy a pasar 
                // osea lo que es , es el estado de donde vamos a sacar la informacion y depende los que pusimos del sql los stament
                mysqli_stmt_execute($stmt); 
                // corre la informacion dentro  de la base de datos 
                mysqli_stmt_store_result($stmt); 
                // osea lo vuelve a guardar el resultado 
                $resultCheck= mysqli_stmt_num_rows($stmt);
                // cuantas rows nos devuelve la base de datos que son ocmo las devuelve en form a de row 
                if ($resultCheck > 0) {
                    header("Location: ../signup.php?error=usertaken&email=".$email);
                    exit();
                }else {

                    $sql="INSERT INTO users(uidUsers, emailUsers, pwdUsers) VALUES(?,?,?)";
                    $stmt=mysqli_stmt_init($conn); 
                    if(!mysqli_stmt_prepare($stmt,$sql)){
                        header("Location: ../signup.php?error=sqlerror");
                        exit();
                    }else{
                        // mismo orden que arriba 
                        $hashedPwd= password_hash($password,PASSWORD_DEFAULT);
                        // usar bcrypt por que md5 o shout 256 is outdated 
                        mysqli_stmt_bind_param($stmt,"sss",$username,$email,$hashedPwd);
                        mysqli_stmt_execute($stmt); 
                        header("Location: ../signup.php?signup=success");
                        exit();

                    }
                }

            }

        }
        // se cierra para que no consuma de mas 
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
    }else {
        header("Location: ../signup.php");
        exit();

    }



