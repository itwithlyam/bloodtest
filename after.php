<?php
session_start();
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === false){
    header("location: welcome.php");
    exit;
}

?>
<!DOCTYPE html>
<html>
  <body>
  <h1>welcome to app</h1>
  <h2>Data</h2>
  <h3>Bot name: <?php 
    switch($_SESSION["username"]) {
      case "lamplamp81":
        echo "Raven";
        break;
      default:
        echo "N/A";
        break;
    }
  ?></h3>
  <h3>Bot status: <?php 
    switch($_SESSION["username"]) {
      case "lamplamp81":
        echo "Online";
        break;
      default:
        echo "N/A";
        break;
    }
  ?>
  </h3>
  <a href="reset-password.php">Reset Password</a>
  </body>
</html>