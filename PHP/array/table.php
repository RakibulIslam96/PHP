<?php
$arr = [
    [2,4,5,6,7],
    ["a", "b", "c", "d", "r"],
    [78,59,49,20, 50],
];
for ($i=0; $i<3; $i++){
    echo "row Number" . $i;
    echo "<ul>";

    for($j=0; $j<4; $j++){
        echo "<li>".$arr[$i][$j]. "</li>";
    }
    echo "</ul>";
}

?>

<?php
echo "<br>";
echo "<br>";
for ($i=0; $i<3; $i++)   // Outer Loop
{
    for($j=0; $j<4; $j++)  // Inner Loop
    {
        echo $arr[$i][$j];
    }
}
?>