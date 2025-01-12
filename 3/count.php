<?php
function countPHP($str) {
    $count = substr_count($str, "PHP");
    return $count;
}

$s = "PHP is fun. I love PHP programming. PHP is powerful.";
echo "The word 'PHP' appears " . countPHP($s) . " times.";
?>
