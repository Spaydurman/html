<?php

$host = "localhost";
$dbUsername = "admin";
$dbPassword = "raspberry";
$dbName = "river_waste_collector";


$conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
if ($conn->connect_error) {
    die("Ayaw komonek". mysqli_connect_error());
}

?>