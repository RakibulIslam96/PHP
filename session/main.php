<?php
session_start();

if(!isset($_SESSION['user'])){
    header("location: login.php");
    exit();
}
?>

<h1>Login Successful 🎉</h1>

<h2>Welcome: <?php echo $_SESSION['user']; ?></h2>

<br><br>

<a href="logout.php">Logout</a>