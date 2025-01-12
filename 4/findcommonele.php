<?php
function findCommon($array1, $array2) {
    return array_intersect($array1, $array2);
}

$array1 = ["Toyota", "Honda", "Ford", "BMW"];
$array2 = ["Honda", "BMW", "Tesla", "Audi"];

$common = findCommon($array1, $array2);

echo "Common car brands: " . implode(", ", $common);
?>
