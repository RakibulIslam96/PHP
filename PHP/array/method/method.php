<?php

$array = [
      [1, "Asad", 40, "a@gmail.com", "+01918429431"],
      [2, "Rakib", 30, "a@gmail.com", "+01918429431"],
      [3, "Lyes", 50, "a@gmail.com", "+01918429431"],
      [4, "Faim", 25, "a@gmail.com", "+01918429431"],
      [5, "Rony", 20, "a@gmail.com", "+01918429431"],
    ];

    //for variable value assign and array destructing
    foreach ($array as list($id, $name, $age, $gmail, $number)){
        echo  "$id | $name | $age | $gmail | $number <br>";
    }

?>