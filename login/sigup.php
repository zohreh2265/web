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
    <div class="sigup"><br><br>
        <h1>Sig Up</h1>
        <form method="POST">
            <label>username</label>
            <input type="text" name="username" required>
            <label>password</label>
            <input type="password" name="password" required>
            <label>email</label>
            <input type="email" name="email" required><br><br>
            <input type="submit" name="btn" value="Sig Up">
        </form>
        <p>
            Aruy have abaut?<a href="login.php">Login</a>
        </p>
    </div>
</body>

</html>