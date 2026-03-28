<?php

class car{
    public $name;
    public $color;
    public $speed;

    public function __construct($n,$c,$s)
    {
      
        echo "This " .$this->name=$n ." is " .$this->color=$c. " and speed is " .$this->speed=$s;
    }
}
    $result=new car("BMW", "RED", "20 km/h.");
?>