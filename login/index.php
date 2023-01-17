<?php
    require "header.php";

?>

<main>
    <div class="container">
       
    <?php
    if (isset($_SESSION['userId'])) {
        echo '<p>logged in </p> ';   
      }else {
       echo ' <p>logged out</p>';
    }
    ?> 
      
    </div>
</main>

<?php

require "footer.php";

?>