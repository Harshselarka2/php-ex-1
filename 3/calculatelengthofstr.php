<?php
function stringLength($string) {
    $length = 0;
    while (isset($string[$length])) {
        $length++;
    }
    return $length;
}

$string = "Hello, World!";
echo "The length of the string is: " . stringLength($string);
?>
