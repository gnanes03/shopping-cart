<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header('Location: admin_login.php');
    exit();
}

require 'db.php';

// 🛠 Run query and check for error
$query = "SELECT * FROM orders ORDER BY order_date DESC";
$result = $conn->query($query);

if (!$result) {
    die("<p style='color:red;'>Database error: " . $conn->error . "</p>");
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Admin Panel</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h1>Admin - All Orders</h1>
    <p><a href="logout.php" style="color:red;">Logout</a></p>

    <?php if ($result->num_rows === 0): ?>
      <p>No orders found.</p>
    <?php else: ?>
      <table>
        <tr>
          <th>ID</th>
          <th>Product</th>
          <th>Price (₹)</th>
          <th>Order Date</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
          <td><?= $row['id']; ?></td>
          <td><?= $row['product_name']; ?></td>
          <td><?= $row['price']; ?></td>
          <td><?= $row['order_date']; ?></td>
        </tr>
        <?php endwhile; ?>
      </table>
    <?php endif; ?>
  </div>
</body>
</html>
