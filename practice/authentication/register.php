<?php
$file = "users.txt";

if(isset($_POST['register'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $repass = $_POST['repassword'];

    // email validation (regex)
    $emailPattern = "/^[\w\.-]+@[\w\.-]+\.\w{2,}$/";

    if(!preg_match($emailPattern, $email)){
        echo "Invalid email!";
    }
    elseif(strlen($pass) < 6){
        echo "Password must be at least 6 characters!";
    }
    elseif($pass != $repass){
        echo "Passwords do not match!";
    }
    else{
        $data = "$name|$email|$pass\n";
        file_put_contents($file, $data, FILE_APPEND);

        header("Location: login.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html>
<body>

<h2>Registration</h2>

<form method="post">

Name: <input type="text" name="name" required><br><br>

Email: <input type="text" name="email" required><br><br>

Password: <input type="password" name="password" required><br><br>

Retype Password: <input type="password" name="repassword" required><br><br>

<button name="register">Register</button>

</form>

</body>
</html>