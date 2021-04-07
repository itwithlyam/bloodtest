<?php
session_start();
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === false){
    header("location: welcome.php");
    exit;
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Welcome</title>
    </head>
    
    <body>
        
        <h1>Logged in as <?php echo $_SESSION["username"]; ?>!</h1>
        
    </body>
</html>
    
