<?php
    $num = "123.124";
    var_dump(is_numeric($num));
    echo"<br>";
    //convert dec to int
    echo round ($num);
    echo "<br>";

    echo intval($num);
    echo "<br>";

    echo floatval($num);
    echo "<br>";
?>