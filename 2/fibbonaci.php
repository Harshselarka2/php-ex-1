<?php
function generateFibonacci($n) {
    $fib = [0, 1];
    for ($i = 2; $i < $n; $i++) {
        $fib[] = $fib[$i - 1] + $fib[$i - 2];
    }
    return $fib;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $n = $_POST['number'];
    echo "The first $n Fibonacci numbers are: ";
    echo implode(", ", generateFibonacci($n));
}
?>

<form method="POST">
    <label for="number">Enter the number of Fibonacci numbers to generate:</label>
    <input type="number" name="number" min="1" required>
    <button type="submit">Generate</button>
</form>
