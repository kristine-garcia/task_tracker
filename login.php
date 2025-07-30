<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username_email = $_POST['username_email'];
    $password = $_POST['password'];

    
    $valid_username = "$username_email";
    $valid_email = "$username_email";
    $valid_password = "$password";

    if (($username_email == $valid_username || $username_email == $valid_email) && $password == $valid_password) {
        $_SESSION['username'] = $valid_username;
        header(header: "Location:dashboard.php");
        exit();
    } else {
        echo "Invalid credentials!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Task Tracker - Login</title>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form method="POST" action="login.php">
            <input type="text" name="username_email" placeholder="Username or Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
        <a href="register.php" class="register-link">Don't have an account? Register</a>
    </div>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: white;
        }
        .login-container {
            text-align: center;
        }
        form {
            display: flex;
            flex-direction: column;
            gap: 10px;
            width: 250px;
        }
        input {
            padding: 5px;
        }
        button {
            padding: 5px;
            cursor: pointer;
        }
        .register-link {
            margin-top: 15px;
            display: block;
            color: blue;
            text-decoration: underline;
        }
    </style>
</body>
</html>
