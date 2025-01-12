<?php
function replaceVowels($string) {
    $vowels = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
    $string = str_ireplace($vowels, '#', $string);
    return $string;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $string = $_POST['string'];
    echo "Modified String: " . replaceVowels($string);
}
?>

<form method="POST">
    <label for="string">Enter a string:</label>
    <input type="text" name="string" required>
    <br>
    <button type="submit">Replace Vowels</button>
</form>
