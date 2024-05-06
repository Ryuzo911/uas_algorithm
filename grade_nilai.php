<?php

$nilai = 100;

if ($nilai >= 90 && $nilai <= 100) {
    $grade = "A";
} elseif ($nilai >= 80 && $nilai <= 90) {
    $grade = "B";
} elseif ($nilai >= 70 && $nilai <= 80)  {
    $grade = "C";
} elseif ($nilai >= 60 && $nilai <= 70) {
    $grade = "D";
} elseif ($nilai <= 60) {
    $grade = "F";
}

else {
    function doSomething() {
        $result = someOperation();
        if (!$result) {
          trigger_error('An error occurred while performing someOperation()', E_USER_ERROR);
        } else {
        }
      }
      
      doSomething();
}

echo "nilai anda adalah $nilai, dan grade anda adalah $grade";