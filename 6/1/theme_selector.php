<?php
if (isset($_POST['theme'])) {
    setcookie('theme', $_POST['theme'], time() + 86400 * 30, "/");
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head><title>Theme Selector</title></head>
<body>
    <form method="POST">
        <select name="theme">
            <option value="light">Light Mode</option>
            <option value="dark">Dark Mode</option>
        </select>
        <button type="submit">Set Theme</button>
    </form>
</body>
</html>
