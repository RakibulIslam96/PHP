<?php

$host = "localhost";
$db   = "customer";
$user = "root";
$pass = "";

try {
    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

    // error mode set
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Connected Successfully";

} catch(PDOException $e) {
    echo "Connection Failed: " . $e->getMessage();
}
?>