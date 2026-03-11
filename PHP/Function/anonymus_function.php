<?php

$add= function ($a, $b) {
    echo "hello! World  ".$a+$b;
};
$add(5,10);

//arrow function//

$functionvarvalue = fn() => "Hello! World";

echo $functionvarvalue();

$a = function (){};
$b = fn ($a, $b)=> "";