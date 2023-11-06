<?php
// example code
$bilangan = array(11,6, 31, 201, 99, 861, 1, 7, 14, 79);
$flag = 0;
for($i =0; $i < sizeof($bilangan); $i++) {
    if($bilangan[$i] > $flag) {
        $flag = $bilangan[$i];
    }
}
echo "Largest Number ", $flag;