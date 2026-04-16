<?php
session_start();

if(isset($_POST['login'])){

$user=$_POST['username'];
$pass=$_POST['password'];

$data=file("info.txt");

foreach($data as $line){

$row=explode(",",$line);

$fileUser=trim($row[6]);
$filePass=trim($row[3]);

if($user==$fileUser && $pass==$filePass){

$_SESSION['user']=$user;

header("location:admin.php");

}

}

$msg="Invalid Login";

}
?>

<!DOCTYPE html>
<html>

<head>

<style>

body{
font-family:Arial;
background:linear-gradient(135deg,#89f7fe,#66a6ff);
height:100vh;
display:flex;
justify-content:center;
align-items:center;
}

.box{
background:white;
padding:30px;
width:300px;
border-radius:10px;
box-shadow:0 0 10px gray;
}

input{
width:100%;
padding:10px;
margin:10px 0;
border:1px solid #ccc;
border-radius:5px;
}

button{
width:100%;
padding:10px;
background:#27ae60;
border:none;
color:white;
border-radius:5px;
}

</style>

</head>

<body>

<div class="box">

<h2>Login</h2>

<form method="post">

<input type="text" name="username" placeholder="Username">

<input type="password" name="password" placeholder="Password">

<button name="login">Login</button>

</form>

<?php
if(isset($msg)){
echo $msg;
}
?>

</div>

</body>

</html>