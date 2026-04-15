<?php
session_start();

if(isset($_POST['login'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    $data = file("info.txt");

    foreach($data as $line){

        $user = explode(",", $line);

        $fileUser = $user[0];
        $filePass = trim($user[1]);

        // 🔐 verify password
        if($fileUser == $username && password_verify($password, $filePass)){

            $_SESSION['user'] = $username;

            header("Location: upload.php");
            exit();
        }
    }

    $error = "Invalid Username or Password";
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Login</title>

<style>
body{
    font-family: Arial;
    background: linear-gradient(135deg,#74b9ff,#a29bfe);
    height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
}

.box{
    background:white;
    padding:40px;
    width:300px;
    border-radius:10px;
    box-shadow:0 0 15px rgba(0,0,0,0.2);
    text-align:center;
}

input{
    width:100%;
    padding:10px;
    margin-top:5px;
}

button{
    width:100%;
    padding:10px;
    background:#0984e3;
    color:white;
    border:none;
    cursor:pointer;
}

.error{
    color:red;
}
</style>
</head>

<body>

<div class="box">

<h2>Login</h2>

<?php if(isset($error)) echo "<p class='error'>$error</p>"; ?>

<form method="post">

<input type="text" name="username" placeholder="Username" required><br><br>
<input type="password" name="password" placeholder="Password" required><br><br>

<button name="login">Login</button>

</form>

<br>
<a href="registration.php">Register</a>

</div>

</body>
</html>