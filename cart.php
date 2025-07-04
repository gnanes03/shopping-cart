<?php
session_start();
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['orderData'])) {
    $cartData = json_decode($_POST['orderData'], true);
    $_SESSION['cart'] = $cartData;

    foreach ($cartData as $item) {
        $name = $conn->real_escape_string($item['name']);
        $price = intval($item['price']);
        $conn->query("INSERT INTO orders (product_name, price) VALUES ('$name', $price)");
    }

    header('Location: checkout.php');
    exit();
}
?>
