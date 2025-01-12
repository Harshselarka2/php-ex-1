<!DOCTYPE html>
<html>
<head>
    <title>Multiplication Table</title>
</head>
<body>
    <h2>Generate a Multiplication Table</h2>
    <form method="POST">
        <label for="number">Enter a number:</label>
        <input type="number" id="number" name="number" required>
        <button type="submit">Generate</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $number = $_POST["number"];
        echo "<h3>Multiplication Table for $number</h3>";

        echo "<ul>"; 
        for ($i = 1; $i <= 10; $i++) {
            $result = $number * $i;
            echo "<li>$number x $i = $result</li>";
        }
        echo "</ul>";
    }
    ?>
</body>
</html>
