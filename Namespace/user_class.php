<?php
namespace user1;

class Car{

    public $name="Rakib Chowdhury";
    public $deg="Student";

    public function userInfo1(){
        echo "Name: ".$this->name ."<br>";
        echo "Degignation: ".$this->deg;
    }
}
?>