<div style="
width:320px;
border-radius:10px;
box-shadow:0 0 10px gray;
padding:30px;
margin:50px auto;
font-family:cursive;
">

<form method="post">
User: <input type="text" name="user"><br><br>
Password: <input type="password" name="pass"><br><br>
<button type="submit" name="btn">Login</button>
</form>

</div>

<?php

if(isset($_POST['btn'])){

$user = $_POST['user'];
$pass = $_POST['pass'];

$files = file("data.txt");

foreach($files as $line){

list($u, $p) = explode(",", trim($line));

if($user == $u && $pass == $p){
echo "Login Successful";
header("location: main.php");
exit();
}

}

echo "Invalid Email or Password";

}

?>