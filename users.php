<?php
session_start();

// تحقق: هل المستخدم مسجل دخول؟
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

// تحقق: هل المستخدم هو admin؟
if ($_SESSION['role'] != 'admin') {
    echo "Access denied. Only admin can view this page.";
    exit;
}

// الاتصال بقاعدة البيانات (باستخدام MySQLi)
$conn = mysqli_connect("localhost", "root", "", "mystore");

// تحقق من الاتصال
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// جلب كل المستخدمين
$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
</head>
<body>
    <h1>Users</h1>
</body>
</html>