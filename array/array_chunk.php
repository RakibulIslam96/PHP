<?php

//chunk array create//
//array_chunk(array, size, preserve_key)
// 2+2+2+2=8-> 4 chunk

$x= array ("av", "bv", "cv", "dv", "ev", "fv", "gv", "hv", "iv");
$y= array_chunk($x, 2);

echo"<br>";
echo json_encode($y);
?>