<?php
session_start();
$cart = $_SESSION['cart'] ?? [];
$total = 0;
?>

<!DOCTYPE html>
<html>
<head>
  <title>Checkout</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h1>Order Summary</h1>
    <?php if (empty($cart)): ?>
      <p>Your cart is empty.</p>
    <?php else: ?>
      <?php foreach ($cart as $item): ?>
        <p><?php echo $item['name']; ?> - ₹<?php echo $item['price']; ?></p>
        <?php $total += $item['price']; ?>
      <?php endforeach; ?>
      <h3>Total: ₹<?php echo $total; ?></h3>
    <?php endif; ?>
  </div>
</body>
</html>
