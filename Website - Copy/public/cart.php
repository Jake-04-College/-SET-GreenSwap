<?php
// Sample cart items data (will be replaced with dynamic data later)
$cartItems = [
    [
        'title' => 'Placeholder Product 1',
        'desc' => 'Description for item 1',
        'qty' => 1,
        'price' => 19.99
    ],
    [
        'title' => 'Placeholder Product 2',
        'desc' => 'Description for item 2',
        'qty' => 2,
        'price' => 24.99
    ]
];

// Calculate cart totals
$subtotal = 0;
foreach ($cartItems as $item) {
    $subtotal += $item['price'] * $item['qty'];
}
$shipping = 5.00; // Flat shipping rate
$total = $subtotal + $shipping;
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Basket - GreenSwap</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="icon" type="image" href="./images/favicon.ico">
    <link rel='stylesheet' type='text/css' media='screen' href='css/cart.css'>
    <script src='main.js'></script>
    <script src="https://kit.fontawesome.com/85df64fd4d.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>
<body>
    <?php require __DIR__ . '/templates/navbar.php'; ?>
    
    <div class="cart-container">
        <div class="cart-left">
            <h2>Shopping Cart</h2>
            <p><?php echo count($cartItems); ?> items in your cart</p>

            <?php foreach ($cartItems as $item): ?>
            <div class="item">
                <div class="item-details">
                    <h3 class="item-title"><?php echo htmlspecialchars($item['title']); ?></h3>
                    <p class="item-desc"><?php echo htmlspecialchars($item['desc']); ?></p>
                </div>
                <div class="item-stats">
                    <div class="item-qty"><?php echo $item['qty']; ?></div>
                    <div class="item-price">$<?php echo number_format($item['price'], 2); ?></div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <div class="cart-right">
            <h3>Card Details</h3>
            <div class="card-icons">
                <!-- Card icons will go here -->
            </div>

            <form class="card-form">
                <input type="text" placeholder="Cardholder's Name" />
                <input type="text" placeholder="Card Number" />
                <div class="form-group">
                    <input type="text" placeholder="Expiration" />
                    <input type="text" placeholder="CVV" />
                </div>
            </form>

            <div class="totals">
                <p>Subtotal <span>$<?php echo number_format($subtotal, 2); ?></span></p>
                <p>Shipping <span>$<?php echo number_format($shipping, 2); ?></span></p>
                <p class="total">Total <span>$<?php echo number_format($total, 2); ?></span></p>
            </div>

            <button class="checkout-btn">Checkout</button>
        </div>
    </div>

    <?php require __DIR__ . '/templates/footer.php'; ?>
</body>
</html>