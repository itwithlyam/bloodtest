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
        
        <h1>Blood test analyser - just give the number</h1>

        <form request="post" action="second.php">

          Male <input type="radio" name="gender" value="male">
          Female <input type="radio" name="gender" value="female">

          <h2>Complete Blood Count</h2>

          Haemoglobin (g/L) <input type="text" name="hb"><br>
          RBC count (10^12/L) <input type="text" name="rbc"><br>
          Haematocrit/Pached Cell Volume (HCT/PCV) % <input type="text" name="hctpcv"><br>
          Mean Corpuscular Volume (MCV) fL <input type="text" name="mcv"><br>
          Mean Corpuscular Haemoglobin (MCH) <input type="text" name="mch"><br>
          Red Blood Cell Distribution Width (RDW) <input type="text" name="rdw"><br>
          Mean Corpuscular Haemoglobin Concentration (MCHC) <input type="text" name="mchc"><br>
          White Blood Cell Count (WBC) <input type="text" name="wbc"><br>
          Neutrophils <input type="text" name="neutrophils"><br>
          Lymphocytes <input type="text" name="lymphocytes"><br>
          Monocytes <input type="text" name="monocytes"><br>
          Eosinophils <input type="text" name="eosinophils"><br>
          Basophils <input type="text" name="basophils"><br>
          Platelet count <input type="text" name="platelet"><br>

          <h2>Full Iron Panel</h2>

          Serum Ferritin <input type="text" name="ferritin"><br>
          Total/Serum Iron <input type="text" name="iron"><br>
          Total/Transferrin Iron Binding Capacity <input type="text" name="tfcap"><br>
          Transferrin Saturation <input type="text" name="tfsat"><br><br>



          <input type="submit">

        </form>
        
    </body>
</html>
    
