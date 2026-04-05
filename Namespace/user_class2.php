<?php
namespace user2;

class Car{

    public $name="Asad Chowdhury";
    public $deg="CEO";

    public function userInfo2(){
        echo "Name: ".$this->name ."<br>";
        echo "Degignation: ".$this->deg;
    }
}