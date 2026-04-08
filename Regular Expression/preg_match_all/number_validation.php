<?php
$phone="01918429431";
$x ="/^01[3-9][0-9]{8}/";
echo preg_match_all ($x, $phone);
echo "<br>"
?>
