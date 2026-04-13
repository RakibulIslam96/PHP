<?php

$password = "admin";

$hashed_password = password_hash($password, PASSWORD_DEFAULT);

echo $hashed_password;

$verify ="$2y$10$5JkdTswQZmKhg.jCqIhaluChnq8F06EwZsl6iUlET9o3L9CCpLijW";
echo"<br>";

if (password_verify($password, $verify)){
    echo "Valid";
}else{
    echo"Invalid";
}

?>