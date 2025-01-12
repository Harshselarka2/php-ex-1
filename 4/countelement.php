<?php
function countElements($arr) {
    $count = array_count_values($arr); 
    return $count;
}

$arr = ["Toyota", "Honda", "Toyota", "Ford", "Honda", "Toyota"];
$counted = countElements($arr);

foreach ($counted as $value => $num) {
    echo "$value appears $num times.<br>";
}
?>
