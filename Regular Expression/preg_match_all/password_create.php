<?php

$pass = "akibR420";
$req = "/^[a-zA-Z0-9]{6,10}$/"; // Pattern er moddhe space dewa javey na, dile vule hobe//
echo preg_match_all($req, $pass);

?>