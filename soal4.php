<?php

$bilangan = array(99, 2, 64, 8, 111, 33, 65, 11, 102, 50);
$temp = "";
for($i = sizeof($bilangan)-1; $i >= 0; $i--) {
  for($j = 0; $j < $i; $j++) {
    if($bilangan[$j] > $bilangan[$i]) {
      $temp = $bilangan[$i];
      $bilangan[$i] = $bilangan[$j];
      $bilangan[$j] = $temp;
    }
  }
}
print_r($bilangan);