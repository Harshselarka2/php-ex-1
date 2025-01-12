<?php
$start = 51; 
$end = 100;
$sum = 0;


while ($start <= $end) {
    $sum += $start;
    $start += 2;
}

echo "The sum of all odd numbers between 50 and 100 is: $sum";
?>
