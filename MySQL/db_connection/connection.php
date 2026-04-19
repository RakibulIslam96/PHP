<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "customer";

$conn =  mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Connection Failed ");
}else
    echo "Connected Successfully"
?>