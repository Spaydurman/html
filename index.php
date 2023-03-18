<?php
    session_start();
    if (isset($_SESSION['id'])) {
      header('Location: dashboard.php');
      exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>

    <link rel="stylesheet" href="public/css/index.css">
</head>
<body>
    <div class="background-box">
        <div class="login-box">
            <p>River Waste Collector</p>
            <form action="php/auth/login.php" method="POST" id="loginForm">
                <div class="user-box">
                    <input required="username" name="username" type="text">
                    <label>Username</label>
                </div>
                <div class="user-box">
                    <input required="password" name="password" type="password">
                    <label>Password</label>
                </div>
                <a href="#"  onclick="document.getElementById('loginForm').submit();">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Log in
                </a>
            </form>
        </div>
    </div>
</body>
</html>