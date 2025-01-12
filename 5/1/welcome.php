<?php
session_start(); // Start the session

if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
    echo "<h2>Welcome, $username!</h2>";
} else {
    echo "<h2>Please login first.</h2>";
}
?>
