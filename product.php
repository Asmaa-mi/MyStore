<?php
$servername = "localhost";
$username = "root";
$password = "";
$databaseName = "mystore";
$errors = [];
// Create connection
$conn = new mysqli($servername, $username, $password, $databaseName);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM products";
$res = $conn->query($sql);
$users = [];
if($res && $res->num_rows > 0) {
    $users = $res->fetch_all(MYSQLI_ASSOC);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
</head>
<body>
    <h1>Product</h1>
      <?php foreach($users as $user) : ?>
                <p>Product Name :<?php echo $user['product_name']; ?></p>
                <p>Price :<?php echo $user['price']; ?></p>
                <p>Description :<?php echo $user['description']; ?></p>
            <?php endforeach; ?>
</body>
</html>