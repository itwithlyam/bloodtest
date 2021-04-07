<?php
session_start();
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === false){
    header("location: welcome.php");
    exit;
}

require_once "values.php";

/*if ($_GET["hb"] >= 140 && $_GET["hb"] <= 150) {
  echo "\r\nHaemoglobin is in normal range\n\r";
} elseif ($_GET["hb"] > 150) {
  echo "\n\rHaemoglobin is higher than usual\n\r";
} else {
  echo "\n\rHaemoglobin is lower than usual\n\r";
}

if ($_GET["hctpcv"] >= 40 && $_GET["hctpcv"] <= 48) {
  echo "\nHCT/PCV is in normal range\n";
} elseif ($_GET["hctpcv"] > 48) {
  echo "\nHCT/PCV is higher than usual\n";
} else {
  echo "\nHCT/PCV is lower than usual\n";
}*/

?>

<h1><?php
  if ($_GET['gender'] == "male") {
    hbm($_GET['hb']);
  }
?></h1>
<h1><?php
  if ($_GET['gender'] == "male") {
    rbcm($_GET['rbc']);
  }
?>
<h1><?php
  if ($_GET['gender'] == "male") {
    hctpcvm($_GET['hctpcv']);
  }
?>
