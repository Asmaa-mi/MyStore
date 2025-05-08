<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "mystore");
$conn = mysqli_connect("localhost", "root", "", "mystore");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$products = mysqli_query($conn, "SELECT * FROM products");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Manage Products</title>
</head>
<body>
    <h1>Product Management</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
        </tr>
        <?php while ($p = mysqli_fetch_assoc($products)): ?>
            <tr>
                <td><?= $p['id'] ?></td>
                <td><?= htmlspecialchars($p['product_name']) ?></td>
                <td><?= $p['price'] ?></td>
            </tr>
        <?php endwhile; ?>
    </table>
</body>

</html>