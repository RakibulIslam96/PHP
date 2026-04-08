<?php
$bangladesh = "+8801918429431";
$y="/^(\+88)?01[3-9]\d{8}$/";
echo preg_match_all($y, $bangladesh);
?>