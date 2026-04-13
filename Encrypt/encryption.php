<?php
$password ="1234";
echo md5($password);
echo "<br>";

echo sha1("admin");
echo "<br>";

echo hash("SHA224","admin");
echo "<br>";

echo hash("SHA256","admin");
echo "<br>";

echo hash("SHA384","admin");
echo "<br>";

echo hash("SHA512","$password");


?>