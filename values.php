<?php
  function hbm($hb) {
    if ($hb >= 140 && $hb <= 150) {
      echo "\r\nHaemoglobin is in normal range\n\r";
    } elseif ($hb > 150) {
      echo "\n\rHaemoglobin is higher than usual\n\r";
    } else {
      echo "\n\rHaemoglobin is lower than usual\n\r";
    }
  }

  function rbcm($rbc) {
    if ($rbc >= 4.2 && $rbc <= 4.9) {
        echo "\nRBC is optimal\n";
      } elseif ($rbc > 4.9) {
        echo "\nRBC is higher than optimal\n";
      } else {
        echo "\nRBC is lower than optimal\n";
    }
  }

  function hctpcvm($hctpcv) {
    if ($hctpcv >= 40 && $hctpcv <= 48) {
      echo "\nHCT/PCV is optimal\n";
    } elseif ($hctpcv > 48) {
      echo "\nHCT/PCV is higher than optimal\n";
    } else {
      echo "\nHCT/PCV is lower than optimal\n";
    }
  }
?>
