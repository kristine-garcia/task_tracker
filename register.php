<?php
session_start();
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username_email = htmlspecialchars(string: $_POST['username_email']);
    $password = htmlspecialchars(string:$_POST['password']);

if (empty($username_email) || empty($password)) {   
    $error = "All fields are required.";

     } 

     
    $_SESSION['username'] = $username_email;
    header(header: "Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Task Tracker - Register</title>
</head>
<body>
    <div class="register-container">
        <h2>Register</h2>
        <form method="POST" action="register.php">
            <input type="text" name="username_email" placeholder="Username or Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Register</button>
        </form>
        <a href="login.php" class="register-link">Already have an account? Login</a>
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
        .register-container {
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
