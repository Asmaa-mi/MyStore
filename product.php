<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "mystore");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$id = $_GET['id'] ?? 0;
$result = mysqli_query($conn, "SELECT * FROM products WHERE id = $id");
$product = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>

<head>
    <title>Product Details</title>
</head>

<body>
    <h1><?= htmlspecialchars($product['product_name']) ?></h1>
    <p>Price: $<?= $product['price'] ?></p>
    <p>Description: <?= htmlspecialchars($product['description']) ?></p>
    <a href="index.php">Back to Store</a>
</body>

</html>