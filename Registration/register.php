<?php

if(isset($_POST['register'])){

$id=$_POST['id'];
$name=$_POST['name'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$repass=$_POST['repass'];
$address=$_POST['address'];
$phone=$_POST['phone'];
$username=$_POST['username'];

if($pass!=$repass){
$msg="Password Not Match";
}
else{

$data="$id,$name,$email,$pass,$address,$phone,$username\n";

file_put_contents("info.txt",$data,FILE_APPEND);

header("location:login.php");

}

}

?>

<!DOCTYPE html>
<html>
<head>

<title>Registration</title>

<style>

body{
font-family:Arial;
background:linear-gradient(135deg,#74ebd5,#ACB6E5);
height:100vh;
display:flex;
justify-content:center;
align-items:center;
}

.box{
background:white;
padding:30px;
width:350px;
border-radius:10px;
box-shadow:0 0 10px gray;
}

input{
width:100%;
padding:10px;
margin:7px 0;
border:1px solid #ccc;
border-radius:5px;
}

button{
width:100%;
padding:10px;
background:#3498db;
border:none;
color:white;
border-radius:5px;
}

</style>

</head>

<body>

<div class="box">

<h2>Registration</h2>

<form method="post">

<input type="number" name="id" placeholder="ID" required>

<input type="text" name="name" placeholder="Full Name" required>

<input type="text" name="email" placeholder="Email">

<input type="password" name="pass" placeholder="Password">

<input type="password" name="repass" placeholder="Retype Password">

<input type="text" name="address" placeholder="Address">

<input type="text" name="phone" placeholder="Phone">

<input type="text" name="username" placeholder="Username">

<button name="register">Register</button>

</form>

<a href="login.php">Already have account? Login</a>

</div>

</body>
</html>