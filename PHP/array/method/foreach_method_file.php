<?php
$files = file ("data1.txt");
foreach ($files as $file){
    list ($id, $name, $city) = explode (",", $file);
    echo "ID: " . $id. "<br>";
    echo "Name: " . $name. "<br>";
    echo "City: " . $city. "<br> <br>";
}

?>