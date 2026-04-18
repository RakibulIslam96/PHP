<?php

$host = "localhost";
$user = "root";
$pass = "";
$db   = "customer";

// connection create
$conn =  mysqli_connect($host, $user, $pass, $db);

// check connection
if (!$conn) {
    die("Connection Failed ");
}else
    echo "Connected Successfully"
// optional (বাংলা support এর জন্য)

?>