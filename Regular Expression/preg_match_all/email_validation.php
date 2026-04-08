<?php
$mail="rakibul_islam96@gmail.com";
$g ="/^[a-zA-Z0-9.-_+]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";
echo preg_match($g, $mail);
?>