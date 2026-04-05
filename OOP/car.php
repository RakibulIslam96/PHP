<?php

class Car {
    public $name;
    public $speed;

    function __construct($name){
        $this->name = $name;
        $this->speed = 0; 
    }

    function start() {
        $this->speed = 10;
        echo $this->name . " has started. Speed: " . $this->speed . " km/h<br>";
    }

    function reverse() {
        if($this->speed == 0){
            echo $this->name . " is reversing.<br>";
        } else {
            echo "Cannot reverse while moving forward! Current speed: " . $this->speed . " km/h<br>";
        }
    }

    function brake() {
        $this->speed = 0;
        echo $this->name . " has slowed down / applied brake. Speed: " . $this->speed . " km/h<br>";
    }

    function stop() {
        $this->speed = 0;
        echo $this->name . " has stopped.<br>";
    }
}

    $myCar = new Car("BMW");

    $myCar->start();
    $myCar->reverse();
    $myCar->brake();
    $myCar->reverse();
    $myCar->stop();

?>