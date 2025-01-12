<?php
$cart = isset($_COOKIE['cart']) ? json_decode($_COOKIE['cart'], true) : [];
?>

<!DOCTYPE html>
<html>
<head><title>Your Cart</title></head>
<body>
    <h1>Shopping Cart</h1>
    <?php if (empty($cart)): ?>
        <p>Your cart is empty.</p>
    <?php else: ?>
        <ul>
            <?php foreach ($cart as $item): ?>
                <li><?= htmlspecialchars($item) ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
    <a href="add_to_cart.php">Add More Items</a>
</body>
</html>
