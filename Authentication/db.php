<?php
$conn = new mysqli("localhost", "root", "", "auth_db", 3307);

if($conn->connect_error){
    die("Connection Failed");
}
?>