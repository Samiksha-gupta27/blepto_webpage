<?php
session_start();

if (!isset($_SESSION['cart']) || count($_SESSION['cart']) === 0) {
    echo "Your cart is empty!";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Cart</title>
</head>
<body>
    <header>
        <h1>Your Cart</h1>
        <a href="index.php">Continue Shopping</a>
    </header>
    <div class="cart-container">
        <?php foreach ($_SESSION['cart'] as $item) { ?>
            <div class="cart-item">
                <h3><?php echo $item['product_name']; ?></h3>
                <p><?php echo $item['description']; ?></p>
                <p>$<?php echo $item['price']; ?></p>
            </div>
        <?php } ?>
    </div>
    <form action="checkout.php" method="POST">
        <button type="submit">Checkout</button>
    </form>
</body>
</html>
