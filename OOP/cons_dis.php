<?php

class student
{
    public $name;
    public $age;
    public $roll;
    public $class;

    public function __construct($n, $a, $r, $c){
        echo $this->name=$n ." is " .$this->age=$a. " years old & Roll is " .$this->roll=$r. " and reads in " .$this->class=$c; 
    }
}

$result = new student("Rakibul Islam", 25, 1295395, "WEB DEV-10.");
?>