<?php
$theme = $_COOKIE['theme'] ?? 'light';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Theme Selector Example</title>
    <style>
        body { background-color: <?= $theme === 'dark' ? '#333' : '#fff' ?>; color: <?= $theme === 'dark' ? '#fff' : '#000' ?>; }
    </style>
</head>
<body>
    <h1>Welcome! Current theme: <?= ucfirst($theme) ?> mode.</h1>
    <a href="theme_selector.php">Change Theme</a>
</body>
</html>
