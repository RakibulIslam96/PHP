<?php
echo strlen("This is my motherland");
$info = "Bangladesh is a develop Country";
echo "<br>";
echo strlen($info);
echo "<br>";

echo strtoupper($info);
echo "<br>";

echo strtolower($info);
echo "<br>";

echo str_replace("Bangladesh","India", $info);
echo "<br>";

echo ucwords($info);
echo "<br>";

echo strrev($info);
echo "<br>";

echo ucfirst($info);
echo "<br>";
?>