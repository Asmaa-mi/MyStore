<?php
session_start();
$errors = [];
$email = "";

$conn = mysqli_connect("localhost", "root", "", "mystore");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);
    if (empty($email)) {
        $errors['email'] = "Email is required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Invalid email";

    }

    if (empty($password)) {
        $errors['password'] = "Password is required";
    } elseif (strlen($password) < 6) {
        $errors['password'] = "Password must be at least 6 characters long!";
    }

    if (empty($errors)) {
        $result = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
        $user = mysqli_fetch_assoc($result);
        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['role'] = $user['role'];
            header("Location: index.php");
            exit;
        } else {
            $errors['general'] = "Invalid login";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login-styles.css">
</head>

<body>
 
    <form method="POST">
        <div>
            <label for="email">Email</label>
            <input type="text" name="email" id="email"  placeholder =" Enter your email  " value="<?= htmlspecialchars($email); ?>">
        </div>
        <div>
            <?php if (isset($errors['email'])): ?>
                <p style="color : red;"><?= $errors['email'] ?></p>
            <?php endif; ?>
        </div>
        <br>
        <div>
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder =" enter your pass  " required>
        </div>
        <div>
            <?php if (isset($errors['password'])): ?>
                <p style="color : red;"><?= $errors['password'] ?></p>
            <?php endif; ?>
        </div>
        <br>
        <div>
            <button type="submit"><a href="index.php">Submit</a></button>
        </div>
        <br>
        <h3><a href="products.php">Your Products</a></h3>
        <h3 style="color:blue;"><a href="register.php">Do not have Account?</a></h3>
        
    </form>
</body>
</html>