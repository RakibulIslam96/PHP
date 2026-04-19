<?php

$host = "localhost";
$user = "root";
$pass = "";
$db   = "customer";

// connection create
$conn = new mysqli($host, $user, $pass, $db);

// check connection
if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}
echo "connection Successfully";
?>