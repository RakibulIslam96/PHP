<?php
require_once ('car_class.php');
require_once ('user_class.php');
require_once ('user_class2.php');

use user1\Car as a;
use user2\Car as b;
use user3\Car as c;

$result = new c();
$result-> carInfo();
echo"<br>";
echo"<br>";

$result = new a();
$result-> userInfo1();
echo"<br>";
echo"<br>";

$result = new b();
$result -> userinfo2();
echo "<br>";
?>