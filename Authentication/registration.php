<?php

if(isset($_POST['register'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    $data = $username . "," . $password . "\n";

    file_put_contents("info.txt",$data,FILE_APPEND);

    $msg = "Registration Successful";
    header("Location: login.php");
    exit();
}

?>

<!DOCTYPE html>
<html>
<head>
<title>Registration</title>

<style>

body{
    font-family: Arial;
    background: linear-gradient(135deg,#74b9ff,#a29bfe);
    height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
}

.register-box{
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
    border:1px solid #ccc;
    border-radius:5px;
}

button{
    width:100%;
    padding:10px;
    background:#00b894;
    color:white;
    border:none;
    border-radius:5px;
    font-size:16px;
    cursor:pointer;
}

button:hover{
    background:#019875;
}

a{
    text-decoration:none;
    color:#0984e3;
}

.msg{
    color:green;
    margin-bottom:10px;
}

</style>

</head>
<body>

<div class="register-box">

<h2>Registration</h2>

<?php
if(isset($msg)){
    echo "<div class='msg'>$msg</div>";
}
?>

<form method="post">

Username <br>
<input type="text" name="username" required>
<br><br>

Password <br>
<input type="password" name="password" required>
<br><br>

<button name="register">Register</button>

</form>

<br>
<a href="login.php">Go to Login</a>

</div>

</body>
</html>