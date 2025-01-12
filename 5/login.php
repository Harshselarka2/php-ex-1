<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION["username"] = $_POST["username"];
    header("Location: welcome.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head><title>Login</title></head>
<body>
    <h2>Login</h2>
    <form method="POST">
        <label>Username:</label>
        <input type="text" name="username" required>
        <button type="submit">Login</button>
    </form>
</body>
</html>
