<?php
session_start();
include('mysql.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="login"><br><br>
        <h1>Login</h1>
        <form method="post">
            <label>username</label>
            <input type="text" name="username" required>
            <label>password</label>
            <input type="password" name="password" required><br><br>
            <input type="submit" name="btn1" value="Login">
        </form>
        <p>
            Aruy have abaut?<a href="sigup.php">SigUp</a>
        </p>
</body>
</html>