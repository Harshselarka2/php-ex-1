<?php
class MathOperations {
    public function calculate() {
        $args = func_get_args();
        if (count($args) == 2) {
            return $args[0] + $args[1];
        } elseif (count($args) == 1) {
            return $args[0] * $args[0];
        } else {
            return "Invalid number of arguments";
        }
    }
}

$math = new MathOperations();
$operation = isset($_GET['operation']) ? $_GET['operation'] : '';
$num1 = isset($_GET['num1']) ? $_GET['num1'] : '';
$num2 = isset($_GET['num2']) ? $_GET['num2'] : '';

if ($operation == 'addition' && $num1 !== '' && $num2 !== '') {
    echo $math->calculate($num1, $num2);
} elseif ($operation == 'square' && $num1 !== '') {
    echo $math->calculate($num1);
} else {
    echo "Please provide valid input for operation and numbers.";
}
?>
<form method="get">
    <label for="operation">Choose operation:</label>
    <select name="operation" id="operation">
        <option value="addition">Addition</option>
        <option value="square">Square</option>
    </select>
    <br><br>
    <label for="num1">Number 1:</label>
    <input type="number" name="num1" id="num1" required>
    <br><br>
    <label for="num2">Number 2 (for addition):</label>
    <input type="number" name="num2" id="num2">
    <br><br>
    <button type="submit">Calculate</button>
</form>
