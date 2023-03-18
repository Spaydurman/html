<?php
    require '../connection.php';

    $user = $_POST["username"];
    $pw = $_POST["password"];

    $query =  "SELECT * FROM `users`  WHERE username = '$user' AND password = '$pw'";
    $query_run = mysqli_query($conn, $query);
    $check_search = mysqli_num_rows($query_run) > 0;
    if( $check_search){
        while($row = mysqli_fetch_array($query_run)){
            session_start();
            $_SESSION['id'] = $row['ID'];
            $_SESSION['username'] = $row['username'];
            header('Location: ../../dashboard.php');
            exit();
        }
        
    } else {
        echo 'false';             
    }

?>