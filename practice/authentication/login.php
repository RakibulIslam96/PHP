<?php
session_start();

$file = "users.txt";

if(isset($_POST['login'])){

    $name = $_POST['name'];
    $pass = $_POST['password'];

    $users = file($file);
    $ok = false;

    foreach($users as $u){
        list($u_name,$u_email,$u_pass) = explode("|", trim($u));

        if($name == $u_name && $pass == $u_pass){
            $_SESSION['user'] = $name;
            $ok = true;
            break;
        }
    }

    if($ok){
        header("Location: upload.php");
        exit();
    } else {
        echo "Login failed!";
    }
}
?>

<!DOCTYPE html>
<html>
<body>

<h2>Login</h2>

<form method="post">

Name: <input type="text" name="name"><br><br>

Password: <input type="password" name="password"><br><br>

<button name="login">Login</button>

</form>

</body>
</html>