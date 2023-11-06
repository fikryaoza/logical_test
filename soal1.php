<?php
// example code
$bilangan= 13;
$n = 1;
$flag = 0;
while ($n <= $bilangan) {
    if ($bilangan % $n == 0) {
        $flag++;
    }
    $n++;
}

if($flag == 2) echo "Prima";
else echo "Bukan Prima";