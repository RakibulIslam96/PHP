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

.login-box{
    background:white;
    padding:40px;
    width:300px;
    border-radius:10px;
    box-shadow:0 0 15px rgba(0,0,0,0.2);
    text-align:center;
}

.login-box h2{
    margin-bottom:20px;
}

input{
    width:100%;
    padding:10px;
    margin-top:5px;
    border:1px solid #ccc;
    border-radius:5px;
}

button{
    width:100%;
    padding:10px;
    background:#0984e3;
    color:white;
    border:none;
    border-radius:5px;
    font-size:16px;
    cursor:pointer;
}

button:hover{
    background:#0652DD;
}

a{
    text-decoration:none;
    color:#0984e3;
}

.error{
    color:red;
    margin-bottom:10px;
}

</style>

</head>
<body>

<div class="login-box">

<h2>Login</h2>

<?php
if(isset($error)){
    echo "<div class='error'>$error</div>";
}
?>

<form method="post">

Username <br>
<input type="text" name="username" required>
<br><br>

Password <br>
<input type="password" name="password" required>
<br><br>

<button name="login">Login</button>

</form>

<br>
<a href="registration.php">Register</a>

</div>

</body>
</html>