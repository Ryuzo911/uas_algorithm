<?php

$pyramid = 3;
  for($i = 0; $i < $pyramid; $i++) {
    for($j = 1; $j <= $i; $j++) {
      echo " ";
    }
    for($k = 1; $k <= $pyramid - $i; $k++) {
      echo "A";
    }
    echo "<br>";
  }
 
