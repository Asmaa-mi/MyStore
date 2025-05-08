<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "mystore");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$result = mysqli_query($conn, "SELECT * FROM products");
?>
<!DOCTYPE html>
<html>

<head>
    <title>Strawberry Store</title>
</head>

<body>
    <h1>Welcome to Strawberry Store</h1>
    <?php if (isset($_SESSION['username'])): ?>
        Hello <?= $_SESSION['username'] ?> | <a href="logout.php">Logout</a><br>
    <?php else: ?>
        <a href="login.php">Login</a> | <a href="register.php">Register</a><br>
    <?php endif; ?>
    <hr>
    <?php while ($product = mysqli_fetch_assoc($result)): ?>
        <div>
            <h3><?= htmlspecialchars($product['product_name']) ?></h3>
            <p>Price: $<?= $product['price'] ?></p>
            <a href="product.php?id=<?= $product['id'] ?>">View More Details</a>
        </div>
    <?php endwhile; ?>
    <h3><a href="products.php">Your Products</a></h3>
</body>

</html>