<?php
//preg_match_all diyea $datar moodey $p pattern ta kaj korteche kina//
$data = "at1th";
$p= "/^[a-z]{2,4}$/";  // jehetu pattern ta bolche je aikhane amr a theke z thakbe tarpor min 2 and max4 character thakle true, jodi aikhne number thake seta false 0 hobe//
echo preg_match_all($p, $data);
echo "<br>"
?>
<?php
$data1 = "at1fsfkth";
$x= "/^[a-z]{2,4}$/";
echo preg_match_all($x,$data1);

?>