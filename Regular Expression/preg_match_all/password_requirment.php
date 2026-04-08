<?php
$data = "at1thA";
$p = "/^[a-zA-Z0-9]{3,8}$/"; //aikhne condition er sathe mil thakte hobey, aikhne a-z, A-Z, 0-9 thakte hobe onno kicu hole hobe nh//
echo preg_match_all($p, $data);
?>