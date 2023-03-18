<?php
    session_start();
    if (!isset($_SESSION['id'])) {
      header('Location: index.php');
      exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <link rel="stylesheet" href="public/css/dashboard.css">
</head>
<body>  
    Dashboard
    <form method="post" action="php/auth/logout.php">
        <button type="submit" name="logout">Logout</button>
    </form>
</body>
</html>