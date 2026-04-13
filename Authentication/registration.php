<?php

if(isset($_POST['register'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    $data = $username . "," . $password . "\n";

    file_put_contents("info.txt",$data,FILE_APPEND);

    echo "Registration Successful";

}

?>

<h2>Registration</h2>

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