<?php
function isPrime($num) {
    if ($num < 2) return false;
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) return false;
    }
    return true;
}

// Taking input from the user
if (isset($_POST['number'])) {
    $number = $_POST['number'];
    echo isPrime($number) ? "$number is a prime number." : "$number is not a prime number.";
}
?>

<form method="POST">
    <label for="number">Enter a number:</label>
    <input type="number" name="number" required>
    <button type="submit">Check Prime</button>
</form>
