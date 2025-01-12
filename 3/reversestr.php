<?php
function reverseWords($str) {
    $w = explode(" ", $str);  
    $rw = array_reverse($w);  
    return implode(" ", $rw);  
}

$s = "PHP is fun";
echo "Reversed sentence: " . reverseWords($s);
?>
