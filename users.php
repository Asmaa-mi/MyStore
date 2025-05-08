<?php
session_start();
if (!isset($_SESSION['id']) || $_SESSION['role'] != 'admin') {
    die("Failed!!!");
}
$conn = mysqli_connect("localhost", "root", "", "mystore");
$users = mysqli_query($conn, "SELECT * FROM users");
?>
<!DOCTYPE html>
<html>

<head>
    <title>Manage Users</title>
</head>

<body>
    <h1>User Management</h1>
    <table border="1">
        <tr>
            <th>Id</th>
            <th>Username</th>
            <th>Email</th>
            <th>Age</th>
            <th>Role</th>
        </tr>
        <?php while ($usee = mysqli_fetch_assoc($users)): ?>
            <tr>
                <td><?= $usee['id'] ?></td>
                <td><?= htmlspecialchars($usee['username']) ?></td>
                <td><?= htmlspecialchars($usee['email']) ?></td>
                <td><?= htmlspecialchars($usee['age']) ?></td>
                <td><?= $usee['role'] ?></td>
            </tr>
        <?php endwhile; ?>
    </table>
</body>

</html>