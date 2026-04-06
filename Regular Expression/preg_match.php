<?php
//syntex:- prothome "/pattern/modifier (i)"//
//echo preg_replace (pattern, jei word ta replace korvo seta, variable);//

$data = "We have a plan";
$p = "/plan/i";
echo preg_replace($p, "idea", $data);
echo "<br>";
?>

<?php
$str = "This is a regular expression";
$pattern =  "/i/i";
echo preg_match($pattern, $str);
echo "<br>";
echo preg_match_all($pattern, $str);
echo "<br>";
?>

<?php
$str = "This is a regular expression";
$pattern =  "/e/i";
echo preg_match($pattern, $str);
echo "<br>";
echo preg_match_all($pattern, $str);
?>