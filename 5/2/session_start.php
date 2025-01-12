<?php
session_start();
$inactive = 30;
if (isset($_SESSION['last_activity'])) {
    $session_life = time() - $_SESSION['last_activity'];
    if ($session_life > $inactive) {
        session_unset();
        session_destroy();
        header("Location: session_expired.php");
        exit();
    }
}
$_SESSION['last_activity'] = time();
?>
