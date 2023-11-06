<?php
$max = 8;

for($i=1; $i <= $max; $i++) {
    for($j = 1; $j <= $i; $j++) {
        echo $j . " ";
    }
    
    echo "<br>";
}