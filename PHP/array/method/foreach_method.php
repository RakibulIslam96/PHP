<?php

$array = [
    "1, Rakib, Dhaka",
    "2, Asad, Badda",
    "3, Faim, Dhandmondi",
];
foreach ($array as $d){
    list ($id, $name, $city) = explode (",", "$d");
    echo "ID: " . $id. "<br>";
    echo "Name: " . $name. "<br>";
    echo "City: " . $city. "<br> <br>";
}
?>