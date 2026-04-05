<?php
function add_data($x, $y){
    $a = $x + $y;
    echo $a;
}
add_data(9,5);
?>

<?php

echo"<br>";
function del_data($m, $n){
    $p=$m-$n;
    echo $p;
}
del_data(46,21)
?>

<?php

echo "<br>";
function student_name($name){
    echo"Student name $name";
}
student_name("Rakib");
?>



<?php
echo "<br>";
$students =["Rakib", "Asadul", "Fahim", "Moin", "Ifty", "Rafin", "Tanjil"];
print_r($students);
?>