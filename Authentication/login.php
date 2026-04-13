<?php
session_start();

if(isset($_POST['login'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    $data = file("info.txt");

    foreach($data as $line){

        $user = explode(",", $line);

        if($user[0] == $username && trim($user[1]) == $password){

            $_SESSION['user'] = $username;

            header("Location: upload.php");
            exit();

        }

    }

    echo "Invalid Username or Password";

}
?>

<h2>Login</h2>

<form method="post">

Username <br>
<input type="text" name="username">
<br><br>

Password <br>
<input type="password" name="password">
<br><br>

<button name="login">Login</button>

</form>

<br>
<a href="registration.php">Register</a>