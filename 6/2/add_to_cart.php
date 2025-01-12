<?php
if (isset($_POST['item'])) {
    $item = $_POST['item'];
    $cart = isset($_COOKIE['cart']) ? json_decode($_COOKIE['cart'], true) : [];
    $cart[] = $item;
    setcookie('cart', json_encode($cart), time() + 86400 * 30, "/");
    header("Location: cart.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head><title>Add to Cart</title></head>
<body>
    <form method="POST">
        <select name="item">
            <option value="Item 1">Item 1</option>
            <option value="Item 2">Item 2</option>
            <option value="Item 3">Item 3</option>
        </select>
        <button type="submit">Add to Cart</button>
    </form>
</body>
</html>
