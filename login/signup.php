<?php
    require "header.php";

?>

<main>
    <div class="container">
        <h1>sign up </h1>
        <?php
            if (isset($_GET['error'])) {
               if ($_GET['error']=="emptyfields") {
                   echo "<p>fill in all fields</p>";
               }else if($_GET['error']=="invalidmail"){
                echo "<p>fill in all fields</p>";
               }else if ($_GET['error']=="invaliduid") {
                echo "<p>invalid username</p>";
               }else if ($_GET['error']=="invalidmail") {
                echo "<p>invalid mail</p>";
               }else if ($_GET['error']=="passwordcheck") {
                echo "<p>your password do not match</p>";
               }else if ($_GET['error']=="usertaken") {
                echo "<p>username is alredy taken</p>";
               }
            }else if ($_GET["signup"]=="success") {

               echo "signup succesful";
            }
        
        
        ?>
        <form action="includes/signup.inc.php" method="post">
            <input type="text" name="uid" placeholder="username" >
            <input type="text" name="mail" placeholder="E-mail" >
            <input type="password" name="pwd" placeholder="password" >
            <input type="password" name="pwd-repeat" placeholder=" repeat password" >

            <button type="submit" name="signup-submit">signup</button>
        </form>

    </div>
    

</main>

<?php

require "footer.php";

?>