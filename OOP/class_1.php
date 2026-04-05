<?php

class Car
{
    public $model="sd12";
    public $color="red";
    public $name="BMW";

    function info(){
        echo $this->model."<br>";
        echo $this->color."<br>";
        echo $this->name."<br>";
    }
}

$result= new Car();


$result->info();
?>